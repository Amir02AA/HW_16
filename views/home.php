<?php
?>
<div class="flex h-screen">
    <div class="flex-1 p-8">
        <h1 class="text-3xl font-semibold mb-4">Welcome to Our Website <?= @$_SESSION['user'] ?></h1>
        <p class="text-gray-600">This is a homepage with a side menu on the right.</p>
    </div>
    <nav class="bg-blue-500 text-white w-64 p-4">
        <h2 class="text-2xl font-semibold mb-4">Menu</h2>
        <ul class="space-y-2">
            <li><a href="#" class="hover:text-gray-200">Home</a></li>
            <li><a href="#" class="hover:text-gray-200">About</a></li>
            <li><a href="#" class="hover:text-gray-200">Services</a></li>
            <li><a href="#" class="hover:text-gray-200">Contact</a></li>
        </ul>
    </nav>
</div>

