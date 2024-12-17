
<div class="bg-gray-50 text-gray-800">

    <!-- Doctor Profile Section -->
    <section class=" mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
        <div class="flex items-center space-x-6 gap-10">
            <img src="{{ asset($web_logo) }}" alt="Doctor Image"
                 class=" object-cover rounded-full shadow-md" />
            <div class="flex-1">
                <h1 class="text-3xl font-bold">Dr. John Doe</h1>
                <p class="text-lg text-gray-600">Cardiologist</p>
                <p class="text-sm text-gray-500 mt-1">Located in Downtown, Cityname</p>

                <div class="flex items-center mt-2">
                    <span class="text-yellow-400 text-lg">⭐⭐⭐⭐⭐</span>
                    <span class="ml-2 text-gray-500">(4.9/5)</span>
                </div>

                <p class="mt-3 text-gray-700">
                    Dr. John Doe has over 15 years of experience in cardiology, specializing in heart surgeries and patient care. He has been awarded multiple recognitions for excellence in healthcare.
                </p>

                <div class="mt-4">
                    <p class="text-sm">📞 +1 234 567 8901 | ✉️ johndoe@clinic.com</p>
                    <p class="text-sm">📍 123 Heartway Street, Cityname</p>
                    <p class="mt-1 font-medium text-gray-700">Availability: Mon-Fri, 9 AM - 5 PM</p>
                </div>

                <a href="tel:+12345678901" class="mt-4 inline-block px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition duration-300">
                    Book Appointment
                </a>
            </div>
        </div>
    </section>

    <!-- Services Offered Section -->
    <section class=" mx-auto p-6 bg-white shadow-lg rounded-lg mt-6">
        <h2 class="text-xl font-semibold mb-4">Services Offered</h2>
        <ul class="list-disc list-inside space-y-2 text-gray-700">
            <li>General Cardiology Consultations</li>
            <li>Heart Surgery and Interventions</li>
            <li>Preventive Health Screenings</li>
            <li>Cardiac Rehabilitation Programs</li>
        </ul>
    </section>

    <!-- Patient Reviews Section -->
    <section class=" mx-auto p-6 bg-white shadow-lg rounded-lg mt-6">
        <h2 class="text-xl font-semibold mb-4">Patient Reviews</h2>
        <div class="space-y-4">
            <div class="border p-4 rounded-lg">
                <div class="flex items-center">
                    <span class="text-yellow-400 text-lg">⭐⭐⭐⭐⭐</span>
                    <p class="ml-2 text-gray-600">"Excellent care and attention!"</p>
                </div>
                <p class="text-sm text-gray-500 mt-1">– Jane Doe</p>
            </div>
            <div class="border p-4 rounded-lg">
                <div class="flex items-center">
                    <span class="text-yellow-400 text-lg">⭐⭐⭐⭐</span>
                    <p class="ml-2 text-gray-600">"Very professional and kind."</p>
                </div>
                <p class="text-sm text-gray-500 mt-1">– John Smith</p>
            </div>
        </div>
    </section>

    <!-- Related Doctors Section -->
    <section class=" mx-auto p-6 bg-white shadow-lg rounded-lg mt-6">
        <h2 class="text-xl font-semibold mb-4">Related Doctors</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <div class="border p-4 rounded-lg flex items-center space-x-4">
                <img src="{{ asset($web_logo) }}" alt="Doctor Image" class="w-16 h-16 rounded-full" />
                <div class="flex-1">
                    <p class="font-medium">Dr. Sarah Green</p>
                    <p class="text-sm text-gray-500">Pediatrician</p>
                    <p class="text-sm text-gray-500">Gorakhpur nausad</p>
                    <a href="#" class="mt-2 inline-block px-4 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-300">
                        View Profile
                    </a>
                </div>
            </div>
            <div class="border p-4 rounded-lg flex items-center space-x-4">
                <img src="{{ asset($web_logo) }}" alt="Doctor Image" class="w-16 h-16 rounded-full" />
                <div class="flex-1">
                    <p class="font-medium">Dr. Sarah Green</p>
                    <p class="text-sm text-gray-500">Pediatrician</p>
                    <p class="text-sm text-gray-500">Gorakhpur nausad</p>
                   
                    <a href="#" class="mt-2 inline-block px-4 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-300">
                        View Profile
                    </a>
                </div>
            </div>
            <div class="border p-4 rounded-lg flex items-center space-x-4">
                <img src="{{ asset($web_logo) }}" alt="Doctor Image" class="w-16 h-16 rounded-full" />
                <div class="flex-1">
                    <p class="font-medium">Dr. Mark Wilson</p>
                    <p class="text-sm text-gray-500">Dermatologist</p>
                    <a href="#" class="mt-2 inline-block px-4 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-300">
                        View Profile
                    </a>
                </div>
            </div>
            <div class="border p-4 rounded-lg flex items-center space-x-4">
                <img src="{{ asset($web_logo) }}" alt="Doctor Image" class="w-16 h-16 rounded-full" />
                <div class="flex-1">
                    <p class="font-medium">Dr. Emily Carter</p>
                    <p class="text-sm text-gray-500">Orthopedic Surgeon</p>
                    <a href="#" class="mt-2 inline-block px-4 py-1 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-300">
                        View Profile
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Add any additional JavaScript functionality if needed
    </script>

</div>
