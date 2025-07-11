    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tableau de bord & Planning - Hippolyte Durand</title>
        <!-- Tailwind CSS via CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Alegreya+SC:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,700;1,800;1,900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body class="bg-slate-800 min-h-screen" style="font-family: 'Alegreya SC', serif;">
    <!-- Header avec profil -->
    <div class="relative overflow-hidden">
        <!-- Effet de fond animé -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 via-purple-600/20 to-pink-600/20 animate-pulse"></div>

        <div class="relative z-10 w-full max-w-[77rem] mx-auto px-6 py-8">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center space-x-6">
                    <div class="relative">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 p-1 shadow-xl">
                            <img src="{{ asset('/photo/profil.png') }}" alt="Photo de profil" class="w-full h-full rounded-full object-cover bg-white">
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-6 h-6 bg-green-500 rounded-full border-4 border-white shadow-lg animate-pulse"></div>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold text-white mb-2" style="font-family: 'Lexend', serif;">Hippolyte Durand</h1>
                        <p class="text-blue-200 text-lg">Tableau de bord sportif</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="text-white/80 text-sm">Dernière connexion</div>
                    <div class="text-white font-semibold">Hier, 14:32</div>
                </div>
            </div>

            <!-- Badge de motivation Week-end -->
            <div class="bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 rounded-3xl p-6 mb-8 text-center shadow-2xl">
                <div class="flex items-center justify-center space-x-5 mb-4">

                    <svg class="text-white w-12 h-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                    </svg>


                    <h3 class="text-white text-2xl font-bold">Prêt pour l'Assaut du Week-end !</h3>

                    <svg class="text-white w-12 h-12"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                    </svg>


                </div>
                <p class="text-white/90 text-lg mb-2">
                   Encore le week-end pour repousser tes limites et briller !
                </p>
                <p class="text-white/80 italic">
                    « Chaque effort ajouté aujourd’hui est une victoire de demain. »
                </p>
            </div>


            <!-- Dashboard avec effets glassmorphism -->
            <h2 class="text-4xl font-bold text-white mb-8 text-center bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text">
                Suivi des performances
            </h2>

            <!-- dashboard performances -->
            <x-dashboard />

            <!-- Planning hebdomadaire -->
            <x-planning />


            <!-- Section motivationnelle -->
            <div class="mt-12 bg-gradient-to-r from-purple-500/20 to-pink-500/20 backdrop-blur-lg rounded-3xl p-8 border border-purple-500/30 text-center">
                <h3 class="text-3xl font-bold text-white mb-4">💡 Conseil du jour</h3>
                <p class="text-purple-100 text-lg leading-relaxed">
                    "La régularité est la clé du succès. Chaque séance compte, même les plus courtes.
                    Continuer à se dépasser 🚀"
                </p>
                <p class="mt-6 italic lowercase text-purple-100 text-base leading-relaxed">
                    bientôt dans le tableau de bord
                </p>
                <div class="mt-2  flex justify-center space-x-4">
                    <div class="px-6 py-3 bg-purple-600/50 text-white rounded-xl font-semibold hover:bg-purple-600/70 transition-all duration-300 cursor-pointer">
                        ⚡ Défis hebdomadaires
                    </div>
                    <div class="px-6 py-3 bg-pink-600/50 text-white rounded-xl font-semibold hover:bg-pink-600/70 transition-all duration-300 cursor-pointer">
                        📊 Statistiques détaillées
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
