@extends('layout2.index',['title'=>'Career'])
@section('main')
@include('layout2.page-name',[$pagename='Career'])
<style>
      #notification {
      position: fixed;
      top: 200px;
      right: 20px;
      background-color: #4caf50; /* Green background */
      color: white;
      padding: 15px;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      font-size: 16px;
      opacity: 1;
      transition: opacity 0.5s ease, transform 0.5s ease;
      z-index: 99 !important;
    }

    /* Hide the notification */
    #notification.hidden {
      opacity: 0;
      transform: translateY(-20px);
    }
</style>
<main class="p-4">
    
<div id="notification">
    Apply was successful!
  </div>

  <script>
    // Function to hide the notification after 4 seconds
    const notification = document.getElementById('notification');
    if (notification) {
      setTimeout(() => {
        // Add hidden class to fade out the notification
        notification.classList.add('hidden');
        // Remove notification from DOM after fade-out
        setTimeout(() => {
          notification.remove();
        }, 500); // Wait for transition to complete
      }, 4000); // Display for 4 seconds
    }
  </script>

 
<div class="bg-light"><form action="{{url('career-post')}}" method="post" enctype="multipart/form-data">
    @csrf

    <section class="p-6">
        <div class="container mx-auto">
            <div class="flex justify-center items-center min-h-screen">
                <div class="w-full max-w-4xl">

                    <h1 class="text-2xl font-bold text-gray-800 mb-6">Apply for a Job</h1>

                    <div class="bg-white shadow-md rounded-lg p-6">

                        <!-- Full Name -->
                        <div class="mb-6">
                            <label for="fullname" class="block text-gray-700 font-medium mb-2">Full Name</label>
                            <input 
                                required 
                                name="fullname" 
                                type="text" 
                                id="fullname" 
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>

                        <!-- Email Address -->
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <input 
                                required 
                                name="email" 
                                type="email" 
                                id="email" 
                                placeholder="example@example.com"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                        </div>

                        <!-- Message -->
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea 
                                required 
                                name="message" 
                                id="message" 
                                rows="4" 
                                placeholder="Message sent to the employer"
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                        </div>

                        <!-- Upload CV -->
                        <div class="mb-6">
                            <label for="cvfile" class="block text-gray-700 font-medium mb-2">Upload CV</label>
                            <input 
                                required 
                                name="cvfile" 
                                id="cvfile" 
                                type="file" 
                                class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <p class="text-sm text-gray-500 mt-2">Upload your CV/Resume or any other relevant file. Max file size 50 MB.</p>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-4 text-center">
                            <button 
                                type="submit" 
                                class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                                Send Application
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</form>

  </div>
</main>
@endSection
