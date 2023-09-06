<?php
$login_logout = (isset($_SESSION['user'])) ? 'logout' : 'login';
$register_prof = (isset($_SESSION['user'])) ? $_SESSION['user'] : 'Register';

$login_href = "/$login_logout";
$register_href = (isset($_SESSION['user'])) ? "/profile" : "/register";
$color = (isset($_SESSION['user'])) ? 'text-gray-800' . " font-bold" : 'text-white';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .navbar-hover-bg {
            transition: background-color 0.3s ease-in-out;
        }

        .navbar-hover-bg:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .btn-primary {
            background-color: #F87171;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .side-menu-bg {
            background: linear-gradient(to bottom, #1a202c, #1f2937);
        }

        .side-menu-link {
            color: #cbd5e0;
        }

        .side-menu-link:hover {
            color: #f56565;
        }
    </style>
</head>
<body class="bg-gray-800 text-white">
<nav class="bg-gradient-to-r from-blue-600 to-blue-800 p-4 fixed w-full top-0 z-50 shadow-lg">
    <div class="container mx-auto flex items-center justify-between">
        <div class="text-white font-semibold text-xl">Hospital Site</div>
        <div class="hidden lg:flex space-x-4">
            <a href="/home" class="text-white navbar-hover-bg p-2 rounded-lg">Home</a>
            <a href="/contact" class="text-white navbar-hover-bg p-2 rounded-lg">Contact</a>
        </div>

        <div class="hidden lg:flex space-x-4">
            <a href="<?= $login_href ?>" class="text-white navbar-hover-bg p-2 rounded-lg"><?= $login_logout ?></a>
            <a href="<?= $register_href ?>"
               class="<?= $color ?> navbar-hover-bg p-2 rounded-lg"><?= $register_prof ?></a>
        </div>
    </div>
</nav>
<div class="container mx-auto py-16
">
    {{c}}
</div>
</body>
</html>
