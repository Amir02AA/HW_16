<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        .form-bg {
            background: linear-gradient(to bottom, #1a202c, #2d3748);
        }

        .form-input {
            border-color: #4a5568;
            background-color: #2d3748;
            color: #cbd5e0;
        }

        .form-input::placeholder {
            color: #4a5568;
        }

        .form-button {
            background-color: #f56565;
        }

        .form-button:hover {
            background-color: #ed8936;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
<a href="/home" class="fixed top-0 left-0 z-10 flex items-center text-gray-400 hover:text-gray-600 p-4">
    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
    </svg>
    Back to Home
</a>

<div class="max-w-md mx-auto p-6 bg-orange-400 bg-opacity-90 rounded-lg shadow-lg mt-16 form-bg">
    <h1 class="text-3xl font-semibold text-yellow-600 mb-6">Edit Profile</h1>

    <div class="mb-6">
        <label for="id" class="block text-sm font-medium text-gray-300 mb-1">ID:</label>
        <input type="text" id="id" name="id" class="mt-1 px-4 py-2 w-full border rounded-md bg-orange-200 text-gray-800 form-input" value="12345">
    </div>

    <div class="mb-6">
        <label for="education" class="block text-sm font-medium text-gray-300 mb-1">Education:</label>
        <input type="text" id="education" name="education" class="mt-1 px-4 py-2 w-full border rounded-md bg-orange-200 text-gray-800 form-input" value="Computer Science">
    </div>

    <div class="mb-6">
        <label for="profilePicture" class="block text-sm font-medium text-gray-300 mb-1 cursor-pointer bg-orange-300 px-4 py-2 rounded-md hover:bg-orange-400">
            Profile Picture
            <input type="file" id="profilePicture" name="profilePicture" accept="image/*" class="hidden">
        </label>
    </div>

    <div class="mb-6">
        <label for="section" class="block text-sm font-medium text-gray-300 mb-1">Section:</label>
        <select id="section" name="section" class="mt-1 px-4 py-2 w-full border rounded-md bg-orange-200 text-gray-800 form-input">
            <option value="A">Section A</option>
            <option value="B">Section B</option>
            <option value="C">Section C</option>
        </select>
    </div>

    <div class="mb-6">
        <label for="history" class="block text-sm font-medium text-gray-300 mb-1">History:</label>
        <textarea id="history" name="history" rows="4" class="mt-1 px-4 py-2 w-full border rounded-md bg-orange-200 text-gray-800 form-input">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</textarea>
    </div>

    <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 focus:outline-none form-button">
        Save Changes
    </button>
</div>
</body>
</html>
