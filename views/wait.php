<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please Wait</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
body {
    background: linear-gradient(to right, #475569, #1F2937);
        }

        .wait-message {
    color: #E5E7EB;
}

        .back-link {
    color: #E5E7EB;
}

        .back-link:hover {
    color: #60A5FA;
}
    </style>
</head>
<body class="text-gray-200">
<div class="flex h-screen justify-center items-center">
    <div class="text-center">
        <svg class="w-16 h-16 mx-auto animate-spin text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291a7.962 7.962 0 01-2-1.837m16 0a7.962 7.962 0 01-2 1.837m-2.045-2.045a7.962 7.962 0 01-1.837 2m-2.046 0a7.962 7.962 0 01-1.837-2m-2.045-2.045a7.962 7.962 0 012-1.837m0-2.046a7.962 7.962 0 012-1.837M5.291 6a7.962 7.962 0 011.837-2M7.336 8.045a7.962 7.962 0 012-1.837M5.291 10.09a7.962 7.962 0 011.837 2M12 20a8 8 0 100-16 8 8 0 000 16z"></path>
        </svg>
        <p class="text-xl mt-4 wait-message">Please wait for The Confirmation</p>
        <a href="/home" class="mt-4 block back-link">
Back to Home
</a>
    </div>
</div>
</body>
</html>
