<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gradient-to-r from-purple-300 to-pink-400">
<a href="/home" class="fixed top-0 left-0 z-10 flex items-center text-blue-700 hover:text-gray-800 p-4">
    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
    </svg>
    Back to Home
</a>
<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
    <h1 class="text-3xl font-semibold text-pink-600 mb-6">Edit Profile</h1>

    <div class="mb-6">
        <label for="id" class="block text-sm font-medium text-gray-700 mb-1">ID:</label>
        <input type="text" id="id" name="id" class="mt-1 px-4 py-2 w-full border rounded-md bg-purple-100" value="12345">
    </div>

    <div class="mb-6">
        <label for="education" class="block text-sm font-medium text-gray-700 mb-1">Education:</label>
        <input type="text" id="education" name="education" class="mt-1 px-4 py-2 w-full border rounded-md bg-purple-100" value="Computer Science">
    </div>

    <div class="mb-6">
        <label for="profilePicture" class="block text-sm font-medium text-gray-700 mb-1 cursor-pointer bg-purple-200 px-4 py-2 rounded-md hover:bg-purple-300">
            Profile Picture
            <input type="file" id="profilePicture" name="profilePicture" accept="image/*" class="hidden">
        </label>
    </div>

    <div class="mb-6">
        <label for="section" class="block text-sm font-medium text-gray-700 mb-1">Section:</label>
        <select id="section" name="section" class="mt-1 px-4 py-2 w-full border rounded-md bg-purple-100">
            <option value="A">Section A</option>
            <option value="B">Section B</option>
            <option value="C">Section C</option>
        </select>
    </div>

    <div class="mb-6">
        <label for="history" class="block text-sm font-medium text-gray-700 mb-1">History:</label>
        <textarea id="history" name="history" rows="4" class="mt-1 px-4 py-2 w-full border rounded-md bg-purple-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>
    </div>

    <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600 focus:outline-none">
        Save Changes
    </button>
</div>
</body>
</html>
