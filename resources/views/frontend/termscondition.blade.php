@extends('layout2.index',['title'=>'terms-condition'])
@section('main')
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Conditions</h1>
        </div>

        <!-- Content Wrapper -->
        <div class="max-w-4xl mx-auto space-y-6">
          

            <!-- Conditions Section -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold text-blue-600 mb-4">Conditions</h2>
                <ul class="list-disc pl-6 text-gray-700">
                    <li class="mb-2">Unable to meet the doctor on the date of the booked slot.</li>
                    <li>Claim must be made within 3 days of booking.</li>
                </ul>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8">
            <a href="/" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 transition">
                Back to Home
            </a>
            <a href="{{('contact-us')}}" class="ml-4 border border-blue-600 text-blue-600 px-4 py-2 rounded shadow hover:bg-blue-600 hover:text-white transition">
                Contact Support
            </a>
        </div>
    </div>
</body>
</html>

@endsection