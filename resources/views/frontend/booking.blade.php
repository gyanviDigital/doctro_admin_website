@extends('layout.index')
@section('main')
@include('layout.page-name',[$pagename='Booking Appointment'])
<main class="p-2">

<section class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-lg bg-white shadow-lg rounded-lg p-8">
    <h2 class="text-2xl font-bold text-center text-blue-700 mb-6">Book an Appointment</h2>

    <form id="appointmentForm" class="space-y-4">
      <!-- Doctor Selection -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1" for="doctor">Select Doctor</label>
        <select id="doctor" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="Dr. Smith">Dr. Smith</option>
          <option value="Dr. Jane">Dr. Jane</option>
          <option value="Dr. Lee">Dr. Lee</option>
        </select>
      </div>

      <!-- Date Selection -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1" for="date">Select Date</label>
        <input type="date" id="date" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Time Selection -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1" for="time">Select Time</label>
        <select id="time" class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="9:00 AM">9:00 AM</option>
          <option value="11:00 AM">11:00 AM</option>
          <option value="3:00 PM">3:00 PM</option>
          <option value="5:00 PM">5:00 PM</option>
        </select>
      </div>

      <!-- Patient Name -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1" for="patientName">Patient Name</label>
        <input type="text" id="patientName" placeholder="Enter your name"
          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Contact Number -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1" for="contact">Contact Number</label>
        <input type="text" id="contact" placeholder="Enter your contact number"
          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
        Confirm Appointment
      </button>
    </form>

    <div id="confirmationMessage" class="mt-4 text-center text-green-600 hidden">
      Appointment confirmed successfully!
    </div>
  </div>

  <script>
    const form = document.getElementById('appointmentForm');
    const confirmationMessage = document.getElementById('confirmationMessage');

    form.addEventListener('submit', (e) => {
      e.preventDefault(); // Prevent page reload on form submission
      confirmationMessage.classList.remove('hidden'); // Show confirmation message
      form.reset(); // Reset form fields after submission
    });
  </script>

</section>


</main>
@endSection