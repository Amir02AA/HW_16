<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BConfirmation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gradient-to-r from-indigo-800 to-purple-900 text-gray-800">
<a href="/profile" class="fixed top-0 left-0 z-10 flex items-center text-gray-300 hover:text-gray-400 p-4">
    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
    </svg>
</a>

<div class="max-w-md mx-auto p-6 bg-gray-800 bg-opacity-70 rounded-lg shadow-lg mt-16 text-gray-200">
    <h1 class="text-3xl font-semibold text-indigo-300 mb-6">Verify Users</h1>

    <div class="flex space-x-4">
        <div class="w-1/2">
            <h2 class="text-lg font-semibold mb-2">Doctors</h2>
            <button type="button" class="bg-purple-600 text-gray-200 px-4 py-2 rounded hover:bg-indigo-700 focus:outline-none w-full mb-2">
                Button 1
            </button>
            <button type="button" class="bg-purple-600 text-gray-200 px-4 py-2 rounded hover:bg-purple-700 focus:outline-none w-full mb-2">
                Button 2
            </button>
        </div>
        <div class="w-1/2">
            <h2 class="text-lg font-semibold mb-2">Managers</h2>
            <button type="button" class="bg-green-600 text-gray-200 px-4 py-2 rounded hover:bg-blue-700 focus:outline-none w-full mb-2">
                Button 3
            </button>
            <button type="button" class="bg-green-600 text-gray-200 px-4 py-2 rounded hover:bg-green-700 focus:outline-none w-full mb-2">
                Button 4
            </button>
        </div>
    </div>

    <a href="/sections" class="bg-gray-600 text-gray-200 px-4 py-2 rounded hover:bg-gray-700 focus:outline-none mt-4">
        Sections
    </a>
</div>
</body>
</html>

