<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error <?= http_response_code() ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md text-center">
        <h1 class="text-2xl font-semibold mb-4 ">Oops! Something went wrong.</h1>
        <p class="text-red-500 mb-4 ">{{c}}</p>
        <a href="/home"  class="btn bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Go to Home
        </a>
    </div>
</div>
</body>
</html>

