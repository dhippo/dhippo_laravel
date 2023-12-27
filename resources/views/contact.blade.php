<!-- dhippo_laravel/resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - dhippo Portfolio</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geologica&family=Poppins:wght@400;600&family=Single+Day&display=swap" rel="stylesheet">
    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-myblack" style="font-family: 'Poppins', sans-serif;">
<div class="flex flex-col h-screen text-white bg-myblack">
    <header class="flex justify-between w-full pl-6 pr-6 pb-1 mb-8">
        <div class="flex items-center">
            <img src="{{ asset('logos/gggithub.png') }}" alt="DevRos logo" class="w-12 h-12">
            <span class="text-xl font-bold ml-4">dhippo</span>
        </div>
        <nav class=" flex items-center">
            <a href="/" class="text-white p-2 hover:underline">Accueil</a>
            <a href="#" class="text-white p-2 hover:underline">Projets</a>
            <a href="#" class="text-white p-2 hover:underline">Parcours</a>
            <a href="#" class="text-white p-2 hover:underline">Idées</a>
            <a href="/contact" class="text-white p-2 underline">Contact</a>
        </nav>
    </header>

    <main class="flex flex-col justify-center items-center h-screen text-center -mt-12">
        <h1 class="text-4xl mb-2">Envoyer moi un <u class="">mail</u> à l'adresse</h1>
        <h2 class="text-4xl font-bold mb-4">durandhippolyte@gmail.com</h2>
        <p class="mb-4">ou écrivez moi un message dans le formulaire ci-dessous</p>
        <form action="/send-email" method="POST" class="space-y-6">
            @csrf
            <div>
                <input type="email" name="email" placeholder="Votre adresse email" required class="w-full p-4 rounded-lg bg-myblack border-2 border-myblue3 placeholder-myrose text-white">
            </div>
            <div>
                <textarea name="message" rows="4" placeholder="Votre message" required class="w-full p-4 rounded-lg bg-myblack border-2 border-myblue3 placeholder-myrose text-white"></textarea>
            </div>
            <button type="submit" class="bg-myrose w-3/5 hover:bg-myblue2 text-white font-bold py-2 px-4 rounded-full w-full">Envoyer</button>
        </form>
    </main>
</div>
<footer class="absolute bottom-0 w-full text-center text-white p-4">
    <span>© 2022 Tous droits réservés.</span>
</footer>
</body>
</html>
