<?php
?>
<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
    <h1 class="text-2xl font-semibold mb-4">Register</h1>
    <form action="" method="post">
        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
            <input type="text" id="username" name="username" required class="mt-1 px-4 py-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" id="email" name="email" required class="mt-1 px-4 py-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
            <input type="password" id="password" name="password" required class="mt-1 px-4 py-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="role" class="block text-sm font-medium text-gray-700">Role:</label>
            <select id="role" name="role" required class="mt-1 px-4 py-2 w-full border rounded-md">
                <option value="patient">Patient</option>
                <option value="manager">Manager</option>
                <option value="doctor">Doctor</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Register
        </button>
    </form>
</div>



