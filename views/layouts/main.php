<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<nav class="bg-blue-500 p-4 fixed w-full top-0 z-50">
    <div class="container mx-auto flex items-center justify-between">
        <div class="text-white font-semibold text-xl">Hospital Site</div>
        <div class="hidden lg:flex space-x-4">
            <a href="/home" class="text-white hover:text-gray-200">Home</a>
            <a href="/contact" class="text-white hover:text-gray-200">Contact</a>
        </div>
        <div class="hidden lg:flex space-x-4">
            <a href="/login" class="text-white hover:text-gray-200">Login</a>
            <a href="/register" class="text-white hover:text-gray-200">Register</a>
        </div>
    </div>
</nav>
<div class="container mx-auto py-16
">
{{c}}
</div>
</body>
</html>

