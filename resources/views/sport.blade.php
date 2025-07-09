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

        <!-- Badge de motivation -->
        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 rounded-2xl p-4 mb-8 text-center shadow-2xl">
            <div class="text-black text-xl font-bold mb-2">🔥 Série de 3 séances en 3 jours ! 🔥</div>
            <div class="text-gray-900">Continuer comme ça, sur la bonne voie !</div>
        </div>

        <!-- Dashboard avec effets glassmorphism -->
        <h2 class="text-4xl font-bold text-white mb-8 text-center bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
            Suivi des performances
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <!-- Séances réalisées -->
            <div class="cursor-pointer group relative bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:shadow-blue-500/25">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-3xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-sm font-semibold uppercase text-blue-200">Séances réalisées</span>
                        <div class="w-10 h-10 bg-blue-500/20 rounded-full flex items-center justify-center">
                            <span class="text-blue-300 text-xl">💪</span>
                        </div>
                    </div>
                    <span class="text-3xl font-extrabold text-white mb-4 block" style="font-family: 'Lexend', serif;">3/7</span>
                    <div class="w-full bg-white/20 rounded-full h-3 mb-2">
                        <div class="h-3 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full shadow-lg transition-all duration-500 group-hover:shadow-blue-500/50" style="width:42.86%"></div>
                    </div>
                    <div class="text-blue-200 text-sm">42.86% complété</div>
                </div>
            </div>

            <!-- Calories dépensées -->
            <div class="cursor-pointer group relative bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:shadow-red-500/25">
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/10 to-orange-500/10 rounded-3xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-sm font-semibold uppercase text-red-200">Calories dépensées</span>
                        <div class="w-10 h-10 bg-red-500/20 rounded-full flex items-center justify-center">
                            <span class="text-red-300 text-xl">🔥</span>
                        </div>
                    </div>
                    <span class="text-2xl font-extrabold text-white mb-4 block" style="font-family: 'Lexend', serif;">1500 / 2000 kcal</span>
                    <div class="w-full bg-white/20 rounded-full h-3 mb-2">
                        <div class="h-3 bg-gradient-to-r from-red-400 to-red-600 rounded-full shadow-lg transition-all duration-500 group-hover:shadow-red-500/50" style="width:75%"></div>
                    </div>
                    <div class="text-red-200 text-sm">75% de l'objectif</div>
                </div>
            </div>

            <!-- Pompes réalisées -->
            <div class="cursor-pointer group relative bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:shadow-yellow-500/25">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/10 to-orange-500/10 rounded-3xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-sm font-semibold uppercase text-yellow-200">Pompes réalisées</span>
                        <div class="w-10 h-10 bg-yellow-500/20 rounded-full flex items-center justify-center">
                            <span class="text-yellow-300 text-xl">💥</span>
                        </div>
                    </div>
                    <span class="text-3xl font-extrabold text-white mb-4 block" style="font-family: 'Lexend', serif;">50/200</span>
                    <div class="w-full bg-white/20 rounded-full h-3 mb-2">
                        <div class="h-3 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-full shadow-lg transition-all duration-500 group-hover:shadow-yellow-500/50" style="width:25%"></div>
                    </div>
                    <div class="text-yellow-200 text-sm">25% complété</div>
                </div>
            </div>

            <!-- Qualité de l'alimentation -->
            <div class="cursor-pointer group relative bg-white/10 backdrop-blur-lg rounded-3xl shadow-2xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:shadow-green-500/25">
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 to-emerald-500/10 rounded-3xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-sm font-semibold uppercase text-green-200">Qualité alimentation</span>
                        <div class="w-10 h-10 bg-green-500/20 rounded-full flex items-center justify-center">
                            <span class="text-green-300 text-xl">🥗</span>
                        </div>
                    </div>
                    <span class="text-3xl font-extrabold text-white mb-4 block" style="font-family: 'Lexend', serif;">78%</span>
                    <div class="w-full bg-white/20 rounded-full h-3 mb-2">
                        <div class="h-3 bg-gradient-to-r from-green-400 to-green-600 rounded-full shadow-lg transition-all duration-500 group-hover:shadow-green-500/50" style="width:78%"></div>
                    </div>
                    <div class="text-green-200 text-sm">Très bon score !</div>
                </div>
            </div>
        </div>

        <!-- Planning hebdomadaire -->
        <div class="bg-white/5 backdrop-blur-lg rounded-3xl p-10 md:p-14 border border-white/10 shadow-2xl w-full mx-auto">
            <h2 class="text-5xl font-extrabold text-white text-center mb-12">
                Mon planning du 7 au 13 juillet
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Lundi 7 juillet -->
                <div class="group relative bg-white/10 backdrop-blur-lg rounded-2xl shadow-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col items-center">
                        <span class="text-2xl font-bold text-white mb-1">Lundi</span>
                        <span class="text-blue-200 mb-6">7 juillet</span>
                        <div class="mt-auto w-full">
                            <div class="px-4 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl font-semibold text-center shadow-lg hover:shadow-blue-500/50 transition-all duration-300">
                                🏊‍♂️
                                <span class="block text-sm opacity-90">(2km)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mardi 8 juillet -->
                <div class="group relative bg-white/10 backdrop-blur-lg rounded-2xl shadow-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-500/10 to-slate-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col items-center">
                        <span class="text-2xl font-bold text-white mb-1">Mardi</span>
                        <span class="text-gray-300 mb-6">8 juillet</span>
                        <div class="mt-auto w-full">
                            <div class="px-4 py-3 bg-white/10 text-gray-300 rounded-xl font-medium text-center border border-white/20 hover:bg-white/20 transition-all duration-300">
                                💤 Repos
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mercredi 9 juillet -->
                <div class="group relative bg-white/10 backdrop-blur-lg rounded-2xl shadow-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 to-purple-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col items-center">
                        <span class="text-2xl font-bold text-white mb-1">Mercredi</span>
                        <span class="text-green-200 mb-6">9 juillet</span>
                        <div class="mt-auto w-full space-y-2">
                            <div class="text-lg px-4 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl font-semibold text-center shadow-lg hover:shadow-green-500/50 transition-all duration-300">
                                🏋️‍♂️
                                <span class="block text-sm opacity-90">(dos)</span>
                            </div>
                            <div class="text-lg px-4 py-3 bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-xl font-semibold text-center shadow-lg hover:shadow-purple-500/50 transition-all duration-300">
                                🚴‍♂️
                                <span class="block text-sm opacity-90">(1h)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jeudi 10 juillet (aujourd'hui) -->
                <div class="group relative bg-gradient-to-br from-yellow-400/20 to-orange-400/20 backdrop-blur-lg rounded-2xl shadow-xl p-6 border-2 border-yellow-400/50 hover:bg-yellow-400/30 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/10 to-orange-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col items-center">
                        <div class="absolute -top-3 -right-3 w-6 h-6 bg-yellow-400 rounded-full animate-pulse"></div>
                        <span class="text-2xl font-bold text-yellow-300 mb-1">Jeudi</span>
                        <span class="text-yellow-200 mb-4">10 juillet</span>
                        <div class="px-3 py-1 bg-yellow-400/30 text-yellow-200 rounded-full text-sm font-medium mb-4">
                            AUJOURD'HUI
                        </div>
                        <div class="mt-auto w-full">
                            <div class="px-4 py-3 bg-white/10 text-gray-300 rounded-xl font-medium text-center border border-white/20 hover:bg-white/20 transition-all duration-300">
                                OBJECTIF : COURRIR
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vendredi 11 juillet -->
                <div class="group relative bg-white/10 backdrop-blur-lg rounded-2xl shadow-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-500/10 to-slate-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col items-center">
                        <span class="text-2xl font-bold text-white mb-1">Vendredi</span>
                        <span class="text-gray-300 mb-6">11 juillet</span>
                        <div class="mt-auto w-full">
                            <div class="px-4 py-3 bg-white/10 text-gray-300 rounded-xl font-medium text-center border border-white/20 hover:bg-white/20 transition-all duration-300">
                                💤 Repos
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Samedi 12 juillet -->
                <div class="group relative bg-white/10 backdrop-blur-lg rounded-2xl shadow-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-500/10 to-slate-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col items-center">
                        <span class="text-2xl font-bold text-white mb-1">Samedi</span>
                        <span class="text-gray-300 mb-6">12 juillet</span>
                        <div class="mt-auto w-full">
                            <div class="px-4 py-3 bg-white/10 text-gray-300 rounded-xl font-medium text-center border border-white/20 hover:bg-white/20 transition-all duration-300">
                                💤 Repos
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dimanche 13 juillet -->
                <div class="group relative bg-white/10 backdrop-blur-lg rounded-2xl shadow-xl p-6 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-br from-gray-500/10 to-slate-500/10 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative z-10 flex flex-col items-center">
                        <span class="text-2xl font-bold text-white mb-1">Dimanche</span>
                        <span class="text-gray-300 mb-6">13 juillet</span>
                        <div class="mt-auto w-full">
                            <div class="px-4 py-3 bg-white/10 text-gray-300 rounded-xl font-medium text-center border border-white/20 hover:bg-white/20 transition-all duration-300">
                                💤 Repos
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
