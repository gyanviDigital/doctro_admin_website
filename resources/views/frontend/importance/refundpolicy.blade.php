@extends('layout2.index',['title'=>'Refund Policy'])
@section('main')
<main class="mt-8">

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-6">Refund Policy</h1>
    
    <div class="bg-white shadow-md rounded-lg p-6">
        <p class="text-lg mb-4">
            We are committed to providing the best services. Here is our refund policy:
        </p>
        <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
            <li>
                Platform Fee of <span class="font-semibold">₹35</span> will be refunded within 
                <span class="font-semibold">7 business days</span> from the date of claiming.
            </li>
            <li>
                If Doctor's fee is paid via the platform, it will be refunded within 
                <span class="font-semibold">7 days</span> of claiming.
            </li>
            <li>
                If Doctor's fee is paid at the counter, contact the <span class="font-semibold">Doctor's reception</span>.
            </li>
        </ul>
        <h2 class="text-xl font-semibold mb-2">Conditions</h2>
        <ul class="list-disc list-inside space-y-2 text-gray-700">
            <li>Unable to meet the doctor on the date of the booked slot.</li>
            <li>Claim must be made within <span class="font-semibold">3 days</span> of booking.</li>
        </ul>
    </div>
</div>
</main>
@endsection