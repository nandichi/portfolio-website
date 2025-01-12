<?php
$pageTitle = "Vaardigheden";
$currentPage = "skills";
include 'includes/header.php';
?>

<div class="min-h-screen bg-gradient-to-br from-gray-50 via-gray-100 to-gray-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
    <!-- Decoratieve elementen met verbeterde performance -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-30">
        <div class="absolute -top-1/2 -right-1/2 w-[800px] h-[800px] bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full blur-2xl transform-gpu"></div>
        <div class="absolute -bottom-1/2 -left-1/2 w-[800px] h-[800px] bg-gradient-to-tr from-green-500/10 to-yellow-500/10 rounded-full blur-2xl transform-gpu"></div>
    </div>

    <div class="relative pt-24 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header Sectie -->
            <div class="text-center mb-20" data-aos="fade-down">
                <h1 class="text-5xl font-extrabold mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 dark:from-blue-400 dark:via-purple-400 dark:to-indigo-400">
                        Mijn Vaardigheden
                    </span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Een showcase van mijn technische expertise en professionele competenties
                </p>
            </div>

            <!-- Hoofdvaardigheden Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-20">
                <!-- Frontend Skills Card -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-300"></div>
                    <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-8 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-300">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500/90 to-indigo-600/90 shadow-lg shadow-blue-500/20 dark:shadow-blue-800/30 transform-gpu transition-transform duration-300 group-hover:scale-105 flex items-center justify-center">
                                <i class="fas fa-code text-xl text-white/90"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-indigo-600">Frontend Development</h2>
                                <p class="text-gray-600 dark:text-gray-400">Moderne web interfaces</p>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <!-- HTML/CSS -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-orange-200/30 dark:border-orange-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                            <i class="fab fa-html5 text-sm text-orange-600/90 dark:text-orange-400/90"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white">HTML & CSS</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Responsive Design</p>
                                        </div>
                                    </div>
                                    <span class="text-blue-600 dark:text-blue-400 font-bold">90%</span>
                                </div>
                                <div class="h-3 bg-gray-100/50 dark:bg-gray-700/50 backdrop-blur-sm rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-orange-500/90 to-red-600/90 rounded-full transition-all duration-700 ease-out transform origin-left group-hover:scale-x-105" style="width: 90%"></div>
                                </div>
                            </div>

                            <!-- JavaScript -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                            <i class="fab fa-js text-sm text-yellow-600/90 dark:text-yellow-400/90"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white">JavaScript</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">ES6+ & TypeScript</p>
                                        </div>
                                    </div>
                                    <span class="text-blue-600 dark:text-blue-400 font-bold">85%</span>
                                </div>
                                <div class="h-3 bg-gray-100/50 dark:bg-gray-700/50 backdrop-blur-sm rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-yellow-500/90 to-yellow-600/90 rounded-full transition-all duration-700 ease-out transform origin-left group-hover:scale-x-105" style="width: 85%"></div>
                                </div>
                            </div>

                            <!-- React -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                            <i class="fab fa-react text-sm text-blue-600/90 dark:text-blue-400/90"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white">React</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Modern UI Development</p>
                                        </div>
                                    </div>
                                    <span class="text-blue-600 dark:text-blue-400 font-bold">80%</span>
                                </div>
                                <div class="h-3 bg-gray-100/50 dark:bg-gray-700/50 backdrop-blur-sm rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-blue-500/90 to-blue-600/90 rounded-full transition-all duration-700 ease-out transform origin-left group-hover:scale-x-105" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills Card -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                    <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-8 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-green-500/20 dark:group-hover:border-green-400/20">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-500/90 to-emerald-600/90 shadow-lg shadow-green-500/20 dark:shadow-green-800/30 transform-gpu transition-transform duration-300 group-hover:scale-105 flex items-center justify-center">
                                <i class="fas fa-server text-xl text-white/90"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-emerald-600">Backend Development</h2>
                                <p class="text-gray-600 dark:text-gray-400">Server-side oplossingen</p>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <!-- PHP -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                            <i class="fab fa-php text-sm text-purple-600/90 dark:text-purple-400/90"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white">PHP</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">OOP & MVC</p>
                                        </div>
                                    </div>
                                    <span class="text-green-600 dark:text-green-400 font-bold">85%</span>
                                </div>
                                <div class="h-3 bg-gray-100/50 dark:bg-gray-700/50 backdrop-blur-sm rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-purple-500/90 to-indigo-600/90 rounded-full transition-all duration-700 ease-out transform origin-left group-hover:scale-x-105" style="width: 85%"></div>
                                </div>
                            </div>

                            <!-- Laravel -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-red-200/30 dark:border-red-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                            <i class="fab fa-laravel text-sm text-red-600/90 dark:text-red-400/90"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white">Laravel</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Full-stack Framework</p>
                                        </div>
                                    </div>
                                    <span class="text-green-600 dark:text-green-400 font-bold">80%</span>
                                </div>
                                <div class="h-3 bg-gray-100/50 dark:bg-gray-700/50 backdrop-blur-sm rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-red-500/90 to-pink-600/90 rounded-full transition-all duration-700 ease-out transform origin-left group-hover:scale-x-105" style="width: 80%"></div>
                                </div>
                            </div>

                            <!-- MySQL -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                            <i class="fas fa-database text-sm text-blue-600/90 dark:text-blue-400/90"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white">MySQL</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Database Management</p>
                                        </div>
                                    </div>
                                    <span class="text-green-600 dark:text-green-400 font-bold">75%</span>
                                </div>
                                <div class="h-3 bg-gray-100/50 dark:bg-gray-700/50 backdrop-blur-sm rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-blue-500/90 to-cyan-600/90 rounded-full transition-all duration-700 ease-out transform origin-left group-hover:scale-x-105" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Extra Vaardigheden Sectie -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Development Tools -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                    <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-6 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-purple-500/20 dark:group-hover:border-purple-400/20">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500/90 to-pink-600/90 shadow-lg shadow-purple-500/20 dark:shadow-purple-800/30 transform-gpu transition-transform duration-300 group-hover:scale-105 flex items-center justify-center">
                                <i class="fas fa-tools text-xl text-white/90"></i>
                            </div>
                            <h3 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500">
                                Development Tools
                            </h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fab fa-git-alt text-sm text-purple-600/90 dark:text-purple-400/90"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300">Git & Professioneel Version Control</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fab fa-docker text-sm text-blue-600/90 dark:text-blue-400/90"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300">Docker Containerization</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fas fa-terminal text-sm text-purple-600/90 dark:text-purple-400/90"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300">Command Line Tools</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Soft Skills -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                    <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-6 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-yellow-500/20 dark:group-hover:border-yellow-400/20">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-yellow-500/90 to-orange-600/90 shadow-lg shadow-yellow-500/20 dark:shadow-yellow-800/30 transform-gpu transition-transform duration-300 group-hover:scale-105 flex items-center justify-center">
                                <i class="fas fa-users text-xl text-white/90"></i>
                            </div>
                            <h3 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-yellow-500 to-orange-500">
                                Soft Skills
                            </h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fas fa-comments text-sm text-yellow-600/90 dark:text-yellow-400/90"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300">Communicatie</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fas fa-lightbulb text-sm text-yellow-600/90 dark:text-yellow-400/90"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300">Probleemoplossend</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fas fa-users text-sm text-yellow-600/90 dark:text-yellow-400/90"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300">Teamwork</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Learning & Growth -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                    <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-6 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-emerald-500/20 dark:group-hover:border-emerald-400/20">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500/90 to-teal-600/90 shadow-lg shadow-emerald-500/20 dark:shadow-emerald-800/30 transform-gpu transition-transform duration-300 group-hover:scale-105 flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-xl text-white/90"></i>
                            </div>
                            <h3 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-emerald-500 to-teal-500">
                                Groei & Ontwikkeling
                            </h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-emerald-200/30 dark:border-emerald-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fas fa-book text-sm text-emerald-600/90 dark:text-emerald-400/90"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300">Actief Continu Leren</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-emerald-200/30 dark:border-emerald-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fas fa-rocket text-sm text-emerald-600/90 dark:text-emerald-400/90"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300">Technische Innovatie</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-emerald-200/30 dark:border-emerald-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fas fa-chart-line text-sm text-emerald-600/90 dark:text-emerald-400/90"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300">Persoonlijke Groei</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Gedetailleerde Ervaringen Sectie -->
            <div class="max-w-7xl mx-auto mt-24">
                <div class="text-center mb-16" data-aos="fade-down">
                    <h2 class="text-4xl font-extrabold mb-6">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 dark:from-blue-400 dark:via-purple-400 dark:to-indigo-400">
                            Mijn Ervaringen
                        </span>
                    </h2>
                    <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                        Een diepgaande blik op mijn projecten en de technologieën die ik heb gebruikt
                    </p>
                </div>

                <div class="space-y-12">
                    <!-- PHP & Laravel Experience -->
                    <div class="group relative" data-aos="fade-up">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-6 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-purple-500/20 dark:group-hover:border-purple-400/20">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500/90 to-indigo-600/90 shadow-lg shadow-purple-500/20 dark:shadow-purple-800/30 transform-gpu transition-transform duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fab fa-php text-xl text-white/90"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-purple-900 dark:text-purple-100 mb-4">Waarom PHP & Laravel?</h3>
                                    <p class="text-purple-800 dark:text-purple-200">Snelle ontwikkeling met Eloquent ORM</p>
                                </div>
                            </div>

                            <div class="prose max-w-none text-gray-600 dark:text-gray-300">
                                <p class="mb-8 text-lg">
                                    Voor PAS (Pakket Afhaal Service) en DIVO (online stemmen) heb ik PHP en Laravel gebruikt. 
                                    Ik koos hiervoor omdat het fijn werkt en er veel handige functies in zitten die ik kon gebruiken.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="group/card relative">
                                        <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500/50 to-indigo-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                        <div class="relative bg-purple-50/70 dark:bg-purple-900/10 backdrop-blur-sm rounded-lg p-6 border border-purple-200/20 dark:border-purple-700/20 transition-all duration-500 group-hover:border-purple-500/30">
                                            <h4 class="font-bold text-xl text-purple-900 dark:text-purple-100 mb-4">Waarom PHP & Laravel?</h4>
                                            <ul class="space-y-3">
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-purple-600/90 dark:text-purple-400/90"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200">Snelle ontwikkeling met Eloquent ORM</span>
                                                </li>
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-purple-600/90 dark:text-purple-400/90"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200">Uitgebreide beveiligingsfuncties</span>
                                                </li>
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-purple-600/90 dark:text-purple-400/90"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200">Blade templating engine</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="group/card relative">
                                        <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500/50 to-indigo-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                        <div class="relative bg-purple-50/70 dark:bg-purple-900/10 backdrop-blur-sm rounded-lg p-6 border border-purple-200/20 dark:border-purple-700/20 transition-all duration-500 group-hover:border-purple-500/30">
                                            <h4 class="font-bold text-xl text-purple-900 dark:text-purple-100 mb-4">Uitdagingen & Oplossingen</h4>
                                            <ul class="space-y-3">
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-purple-600/90 dark:text-purple-400/90"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200">Complex Database Ontwerp met Migrations</span>
                                                </li>
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-purple-600/90 dark:text-purple-400/90"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200">Geavanceerde API Authenticatie met Sanctum</span>
                                                </li>
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-purple-600/90 dark:text-purple-400/90"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200">Performance Optimalisatie met Caching</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- JavaScript & React Experience -->
                    <div class="group relative" data-aos="fade-up">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-6 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-yellow-500/20 dark:group-hover:border-yellow-400/20">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-yellow-500/90 to-orange-600/90 shadow-lg shadow-yellow-500/20 dark:shadow-yellow-800/30 transform-gpu transition-transform duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fab fa-react text-xl text-white/90"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-yellow-900 dark:text-yellow-100 mb-4">Voordelen React</h3>
                                    <p class="text-yellow-800 dark:text-yellow-200">Component-gebaseerde architectuur</p>
                                </div>
                            </div>

                            <div class="prose max-w-none text-gray-600 dark:text-gray-300">
                                <p class="mb-8 text-lg">
                                    Bij DIVO heb ik React gebruikt om de website mooi en snel te maken. 
                                    Hierdoor kon ik zorgen dat de stemresultaten meteen te zien waren zonder dat je de pagina hoeft te verversen.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="group/card relative">
                                        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500/50 to-orange-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                        <div class="relative bg-yellow-50/70 dark:bg-yellow-900/10 backdrop-blur-sm rounded-lg p-6 border border-yellow-200/20 dark:border-yellow-700/20 transition-all duration-500 group-hover:border-yellow-500/30">
                                            <h4 class="font-bold text-xl text-yellow-900 dark:text-yellow-100 mb-4">Voordelen React</h4>
                                            <ul class="space-y-3">
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-yellow-600/90 dark:text-yellow-400/90"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200">Component-gebaseerde architectuur</span>
                                                </li>
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-yellow-600/90 dark:text-yellow-400/90"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200">Efficiënte DOM updates</span>
                                                </li>
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-yellow-600/90 dark:text-yellow-400/90"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200">Grote community support</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="group/card relative">
                                        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500/50 to-orange-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                        <div class="relative bg-yellow-50/70 dark:bg-yellow-900/10 backdrop-blur-sm rounded-lg p-6 border border-yellow-200/20 dark:border-yellow-700/20 transition-all duration-500 group-hover:border-yellow-500/30">
                                            <h4 class="font-bold text-xl text-yellow-900 dark:text-yellow-100 mb-4">Leermomenten</h4>
                                            <ul class="space-y-3">
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-yellow-600/90 dark:text-yellow-400/90"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200">Geavanceerde State Management met Redux</span>
                                                </li>
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-yellow-600/90 dark:text-yellow-400/90"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200">Dynamische Real-time Updates met WebSockets</span>
                                                </li>
                                                <li class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-yellow-600/90 dark:text-yellow-400/90"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200">Code Optimalisatie & Best Practices</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Continu Leren & Ontwikkelen -->
                    <div class="group relative" data-aos="fade-up">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-6 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-blue-500/20 dark:group-hover:border-blue-400/20">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500/90 to-indigo-600/90 shadow-md shadow-blue-500/10 dark:shadow-blue-800/20 transform-gpu transition-transform duration-300 group-hover:scale-105 flex items-center justify-center">
                                    <i class="fas fa-graduation-cap text-2xl text-white"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-blue-900 dark:text-blue-100 mb-4">Probleemoplossend</h3>
                                    <p class="text-blue-800 dark:text-blue-200">
                                        Als ik tegen problemen aanloop, probeer ik er altijd van te leren en een goede oplossing te vinden.
                                    </p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <!-- Probleemoplossend Card -->
                                <div class="group/card relative">
                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/50 to-indigo-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                    <div class="relative bg-blue-50/70 dark:bg-blue-900/10 backdrop-blur-sm rounded-lg p-6 border border-blue-200/20 dark:border-blue-700/20 transition-all duration-500 group-hover:border-blue-500/30">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                <i class="fas fa-brain text-sm text-blue-600/90 dark:text-blue-400/90"></i>
                                            </div>
                                            <h4 class="font-bold text-xl text-blue-900 dark:text-blue-100">Probleemoplossend</h4>
                                        </div>
                                        <p class="text-blue-800 dark:text-blue-200">
                                            Als ik tegen problemen aanloop, probeer ik er altijd van te leren en een goede oplossing te vinden.
                                        </p>
                                    </div>
                                </div>

                                <!-- Samenwerking Card -->
                                <div class="group/card relative">
                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/50 to-indigo-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                    <div class="relative bg-blue-50/70 dark:bg-blue-900/10 backdrop-blur-sm rounded-lg p-6 border border-blue-200/20 dark:border-blue-700/20 transition-all duration-500 group-hover:border-blue-500/30">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                <i class="fas fa-users text-sm text-blue-600/90 dark:text-blue-400/90"></i>
                                            </div>
                                            <h4 class="font-bold text-xl text-blue-900 dark:text-blue-100">Samenwerking</h4>
                                        </div>
                                        <p class="text-blue-800 dark:text-blue-200">
                                            Door samen te werken leer ik van anderen en deel ik mijn eigen kennis.
                                        </p>
                                    </div>
                                </div>

                                <!-- Innovatie Card -->
                                <div class="group/card relative">
                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/50 to-indigo-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                    <div class="relative bg-blue-50/70 dark:bg-blue-900/10 backdrop-blur-sm rounded-lg p-6 border border-blue-200/20 dark:border-blue-700/20 transition-all duration-500 group-hover:border-blue-500/30">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="w-8 h-8 rounded-lg bg-white/80 dark:bg-gray-700/80 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover:scale-105 flex items-center justify-center">
                                                <i class="fas fa-rocket text-sm text-blue-600/90 dark:text-blue-400/90"></i>
                                            </div>
                                            <h4 class="font-bold text-xl text-blue-900 dark:text-blue-100">Innovatie</h4>
                                        </div>
                                        <p class="text-blue-800 dark:text-blue-200">
                                            Altijd op zoek naar nieuwe technologieën en beste practices.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gebruik requestAnimationFrame voor soepelere animaties
    requestAnimationFrame(() => {
        const progressBars = document.querySelectorAll('[class*="group/skill"] div[style*="width"]');
        
        // Batch DOM updates voor betere performance
        progressBars.forEach((bar, index) => {
            const finalWidth = bar.style.width;
            bar.style.width = '0';
            
            // Gebruik staggered timing voor vloeiendere animaties
            setTimeout(() => {
                requestAnimationFrame(() => {
                    bar.style.width = finalWidth;
                    bar.style.transition = 'width 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                });
            }, index * 100);
        });
    });

    // Geoptimaliseerde AOS initialisatie
    AOS.init({
        duration: 800,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic',
        disable: 'mobile', // Schakel uit op mobiel voor betere prestaties
        throttleDelay: 99,
        mirror: false
    });

    // Voeg passive event listeners toe voor betere scroll performance
    document.addEventListener('scroll', function() {}, { passive: true });
    document.addEventListener('touchstart', function() {}, { passive: true });
});

// Voeg IntersectionObserver toe voor lazy loading van animaties
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.1,
    rootMargin: '50px'
});

document.querySelectorAll('[data-aos]').forEach(element => {
    observer.observe(element);
});
</script> 