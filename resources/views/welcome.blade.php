<!-- dhippo_laravel/resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dhippo Portfolio</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica&family=Poppins:wght@400;600&family=Single+Day&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-myblack" style="font-family: 'Poppins', sans-serif;">
<div class="flex flex-col items-center justify-between h-screen text-white">
    <header class="flex justify-between w-full pt-2 pl-6 pr-6 pb-6">
        <div class="flex items-center">
            <img src="{{ asset('logos/gggithub.png') }}" alt="DevRos logo" class="w-12 h-12">
            <span class="text-xl font-bold ml-4">dhippo</span>
        </div>
        <nav class=" flex items-center">
            <a href="#" class="text-white p-2 underline">Build the future</a>
        </nav>
    </header>
    <main class="text-center h-full flex flex-col justify-center -mt-36">
        <h1 class="text-6xl font-bold mb-4 text-white">Data & Software Engineer</h1>

        <p class="mb-8">Looking for a way to contact me?</p>
        <div class="space-x-4">
            <a href="#" class="bg-myblue hover:bg-myblue3 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Career path</a>
            <a href="#" class="bg-transparent hover:bg-myblue2 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-full">Email</a>
        </div>
    </main>
</div>
<footer class="absolute bottom-0 w-full text-center text-white p-4">
    <span>© 2024 All rights reserved.</span>
</footer>
</body>
</html>
