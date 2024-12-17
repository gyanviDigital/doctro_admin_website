@extends('layout2.index',['title'=>'FAQs'])
@section('main')
@include('layout2.page-name',[$pagename='FAQs'])
<main class="p-2">
    
<div class="bg-gray-100 flex items-center justify-center">
    <div class="  w-full  p-5">
        <h1 class="text-4xl font-bold text-center text_clr2 mb-10">Frequently Asked Questions</h1>
        <div id="faq-container">
            <!-- FAQ Accordion Template -->
            <div class="faq-item border-b-2  border-gray-300 pb-4 mb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center">
                    <h3 class="text-xl font-semibold text_clr1">How do I book an appointment?</h3>
                    <span class="faq-toggle text-2xl">+</span>
                </button>
                <div class="faq-answer hidden mt-2 text-gray-600">
                    You can book an appointment by searching for a doctor or healthcare facility, selecting a preferred date and time, and confirming your booking with just a few clicks.
                </div>
            </div>

            <div class="faq-item border-b-2 border-gray-300 pb-4 mb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center">
                    <h3 class="text-xl font-semibold text_clr1">Can I cancel or reschedule my appointment?</h3>
                    <span class="faq-toggle text-2xl">+</span>
                </button>
                <div class="faq-answer hidden mt-2 text-gray-600">
                    Yes, you can cancel or reschedule an appointment through your dashboard. Navigate to "My Appointments," select the appointment, and choose "Reschedule" or "Cancel."
                </div>
            </div>

            <div class="faq-item border-b-2 border-gray-300 pb-4 mb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center">
                    <h3 class="text-xl font-semibold text_clr1">Do I need to register before booking an appointment?</h3>
                    <span class="faq-toggle text-2xl">+</span>
                </button>
                <div class="faq-answer hidden mt-2 text-gray-600">
                    Yes, you need to create an account to book an appointment. This allows us to provide personalized service and track your appointment history.
                </div>
            </div>

            <div class="faq-item border-b-2 border-gray-300 pb-4 mb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center">
                    <h3 class="text-xl font-semibold text_clr1">How do I find the right doctor for my needs?</h3>
                    <span class="faq-toggle text-2xl">+</span>
                </button>
                <div class="faq-answer hidden mt-2 text-gray-600">
                    You can search by specialty, location, or doctor name. Our system also shows ratings and reviews from other patients to help you choose the best healthcare provider.
                </div>
            </div>

            <div class="faq-item border-b-2 border-gray-300 pb-4 mb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center">
                    <h3 class="text-xl font-semibold text_clr1">Will I receive a reminder for my appointment?</h3>
                    <span class="faq-toggle text-2xl">+</span>
                </button>
                <div class="faq-answer hidden mt-2 text-gray-600">
                    Yes, you will receive automated reminders via email and SMS to ensure you don’t miss your appointment.
                </div>
            </div>

            <div class="faq-item border-b-2 border-gray-300 pb-4 mb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center">
                    <h3 class="text-xl font-semibold text_clr1">Are virtual consultations available?</h3>
                    <span class="faq-toggle text-2xl">+</span>
                </button>
                <div class="faq-answer hidden mt-2 text-gray-600">
                    Yes, many of our partnered doctors offer virtual consultations. Look for the "Video Consultation" option when booking an appointment.
                </div>
            </div>

            <div class="faq-item border-b-2 border-gray-300 pb-4 mb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center">
                    <h3 class="text-xl font-semibold text_clr1">How do I pay for my appointment?</h3>
                    <span class="faq-toggle text-2xl">+</span>
                </button>
                <div class="faq-answer hidden mt-2 text-gray-600">
                    Depending on the doctor or facility, you can pay online via credit/debit card, UPI, or digital wallets. Some facilities also allow payment at the time of the visit.
                </div>
            </div>

            <div class="faq-item border-b-2 border-gray-300 pb-4 mb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center">
                    <h3 class="text-xl font-semibold text_clr1">Is my personal data secure on this platform?</h3>
                    <span class="faq-toggle text-2xl">+</span>
                </button>
                <div class="faq-answer hidden mt-2 text-gray-600">
                    Absolutely. We use state-of-the-art encryption and follow strict privacy policies to ensure your data is protected.
                </div>
            </div>

            <div class="faq-item border-b-2 border-gray-300 pb-4 mb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center">
                    <h3 class="text-xl font-semibold text_clr1">What happens if the doctor cancels the appointment?</h3>
                    <span class="faq-toggle text-2xl">+</span>
                </button>
                <div class="faq-answer hidden mt-2 text-gray-600">
                    In the rare event of a cancellation, you will be notified immediately, and you can either reschedule or choose another doctor.
                </div>
            </div>

            <div class="faq-item border-b-2 border-gray-300 pb-4 mb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-gray-800 flex justify-between items-center">
                    <h3 class="text-xl font-semibold text_clr1">Can I provide feedback after the appointment?</h3>
                    <span class="faq-toggle text-2xl">+</span>
                </button>
                <div class="faq-answer hidden mt-2 text-gray-600">
                    Yes, after your appointment, you will be invited to provide feedback and rate the doctor to help other patients make informed choices.
                </div>
            </div>
        </div>
    </div>

    <script>
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach((item) => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const toggle = item.querySelector('.faq-toggle');

            question.addEventListener('click', () => {
                answer.classList.toggle('hidden');
                toggle.textContent = answer.classList.contains('hidden') ? '+' : '-';
            });
        });
    </script>
</div>


</main>
@endSection


