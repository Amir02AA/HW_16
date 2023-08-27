<?php
?>
<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
    <h1 class="text-2xl font-semibold mb-4">Contact Us</h1>
    <p class="text-gray-600 mb-4">Feel free to reach out to us for any inquiries or feedback.</p>

    <form action="" method="post">
        <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
        <input type="text" id="name" name="name" required class="mt-1 px-4 py-2 w-full border rounded-md mb-4">

        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
        <input type="email" id="email" name="email" required class="mt-1 px-4 py-2 w-full border rounded-md mb-4">

        <label for="message" class="block text-sm font-medium text-gray-700">Message:</label>
        <textarea id="message" name="message" rows="4" required class="mt-1 px-4 py-2 w-full border rounded-md mb-4"></textarea>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Send Message
        </button>
    </form>

    <a href="/home" class="mt-4 flex items-center text-gray-600 hover:text-gray-800">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Back to Home
    </a>
</div>

