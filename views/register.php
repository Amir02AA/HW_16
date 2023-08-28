<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
<div class="flex items-center justify-center h-screen">
    <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg mt-10 form-bg">
        <h1 class="text-2xl font-semibold mb-4 text-white">Register</h1>
        <form action="" method="post">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-300">Username:</label>
                <input type="text" id="username" name="username" required class="mt-1 px-4 py-2 w-full border rounded-md form-input">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-300">Email:</label>
                <input type="email" id="email" name="email" required class="mt-1 px-4 py-2 w-full border rounded-md form-input">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-300">Password:</label>
                <input type="password" id="password" name="password" required class="mt-1 px-4 py-2 w-full border rounded-md form-input">
            </div>
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-300">Role:</label>
                <select id="role" name="role" required class="mt-1 px-4 py-2 w-full border rounded-md form-input">
                    <option value="patient">Patient</option>
                    <option value="manager">Manager</option>
                    <option value="doctor">Doctor</option>
                </select>
            </div>
            <button type="submit" class="w-full form-button text-white p-2 rounded hover:bg-yellow-500" name="submit">Register</button>
            <a href="/home" class="mt-4 flex items-center text-gray-400 hover:text-gray-600">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Home
            </a>
        </form>
    </div>
</div>
</body>
</html>
