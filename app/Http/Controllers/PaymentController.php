<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        $razorpayKey = env('RAZORPAY_KEY');
        
        return view('frontend.payment.index', compact('razorpayKey'));
    }



   
    public function processPayment(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $software_charge=DB::table('software_charge')->first();
        $software_charge->price;
        $orderData = [
            'receipt' => 'order_' . time(),
            'amount' =>  $software_charge->price * 100, // Amount in paise
            'currency' => 'INR',
            'payment_capture' => 1, // Automatic capture
        ];

        $order = $api->order->create($orderData);

        return response()->json([
            'orderId' => $order->id,
        ]);
    }

    public function paymentSuccess(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $attributes = [
            'razorpay_order_id' => $request->razorpay_order_id,
            'razorpay_payment_id' => $request->razorpay_payment_id,
            'razorpay_signature' => $request->razorpay_signature,
        ];

        try {
            $api->utility->verifyPaymentSignature($attributes); // Throws exception if invalid
            return response()->json(['message' => 'Payment successful']);
        } catch (\Exception $e) {
            \Log::error('Payment verification failed', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Payment verification failed'], 400);
        }
    }
}
