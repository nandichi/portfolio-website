<?php
$pageTitle = "Vaardigheden";
$currentPage = "skills";
include 'includes/header.php';
?>

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50/50 to-purple-50/50 dark:from-gray-900 dark:via-blue-900/20 dark:to-purple-900/20">
    <!-- Verbeterde decoratieve elementen -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[1000px] h-[1000px] bg-gradient-to-br from-blue-500/5 via-indigo-500/5 to-purple-500/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-[1000px] h-[1000px] bg-gradient-to-tr from-blue-500/5 via-indigo-500/5 to-purple-500/5 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-cyan-500/5 via-blue-500/5 to-purple-500/5 rounded-full blur-2xl animate-pulse delay-500"></div>
    </div>

    <div class="relative pt-32 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Verbeterde Header Sectie -->
            <div class="text-center mb-20 relative" data-aos="fade-down">
                <div class="absolute inset-0 flex items-center justify-center opacity-10 pointer-events-none">
                    <div class="w-64 h-64 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-full blur-3xl"></div>
                </div>
                <h1 class="text-6xl font-extrabold mb-6 relative">
                    <span class="inline-block transform hover:scale-105 transition-transform duration-300">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 dark:from-blue-400 dark:via-purple-400 dark:to-indigo-400">
                            Mijn Vaardigheden
                        </span>
                    </span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed relative">
                    <span class="inline-block transform hover:translate-y-[-2px] transition-transform duration-300">
                        Een showcase van mijn technische expertise en professionele competenties, 
                        <br class="hidden md:block" />
                        opgebouwd door jarenlange ervaring en continue ontwikkeling.
                    </span>
                </p>
                
                <!-- Toegevoegde interactieve scroll indicator -->
                <div class="absolute bottom-[-60px] left-1/2 transform -translate-x-1/2">
                    <div class="animate-bounce">
                        <svg class="w-6 h-6 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Verbeterde Hoofdvaardigheden Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-20">
                <!-- Frontend Skills Card -->
                <div class="group relative transform hover:scale-[1.02] transition-all duration-300" data-aos="fade-right">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl opacity-5 group-hover:opacity-30 transition-all duration-500 group-hover:blur-md"></div>
                    <div class="relative bg-white/80 dark:bg-gray-800/90 backdrop-blur-xl rounded-xl p-8 border border-gray-100/20 dark:border-gray-700/20 shadow-lg shadow-blue-500/5 dark:shadow-blue-500/10 transition-all duration-300">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="relative group-hover:animate-spin-slow">
                                <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-blue-500 to-indigo-500 blur-md opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                                <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500/90 to-indigo-600/90 shadow-lg shadow-blue-500/20 dark:shadow-blue-800/30 flex items-center justify-center">
                                    <i class="fas fa-code text-xl text-white/90"></i>
                                </div>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-indigo-600 group-hover:from-indigo-500 group-hover:to-blue-600 transition-all duration-300">Frontend Development</h2>
                                <p class="text-gray-600 dark:text-gray-400">Moderne web interfaces</p>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <!-- JavaScript -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-yellow-500/20 to-amber-500/20 dark:from-yellow-500/10 dark:to-amber-500/10 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover/skill:scale-110 group-hover/skill:rotate-3 flex items-center justify-center">
                                            <i class="fab fa-js text-sm text-yellow-600/90 dark:text-yellow-400/90 group-hover/skill:animate-bounce"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white group-hover/skill:text-yellow-500 transition-colors duration-300">JavaScript</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">ES6+ & TypeScript</p>
                                        </div>
                                    </div>
                                    <span class="text-blue-600 dark:text-blue-400 font-bold opacity-0 group-hover/skill:opacity-100 transition-opacity duration-300">95%</span>
                                </div>
                                <div class="h-3 bg-gradient-to-r from-gray-100/50 to-gray-200/50 dark:from-gray-700/50 dark:to-gray-800/50 backdrop-blur-sm rounded-full overflow-hidden shadow-inner">
                                    <div class="h-full bg-gradient-to-r from-yellow-500/90 to-amber-600/90 rounded-full transition-all duration-700 ease-out transform origin-left w-[95%] hover:w-[97%]"></div>
                                </div>
                            </div>

                            <!-- Tailwind CSS -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-cyan-500/20 to-blue-500/20 dark:from-cyan-500/10 dark:to-blue-500/10 shadow-sm border border-cyan-200/30 dark:border-cyan-700/30 transform-gpu transition-all duration-300 group-hover/skill:scale-110 group-hover/skill:rotate-3 flex items-center justify-center">
                                            <i class="fab fa-css3 text-sm text-cyan-600/90 dark:text-cyan-400/90 group-hover/skill:animate-bounce"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white group-hover/skill:text-cyan-500 transition-colors duration-300">Tailwind CSS</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Modern Utility-First CSS</p>
                                        </div>
                                    </div>
                                    <span class="text-blue-600 dark:text-blue-400 font-bold opacity-0 group-hover/skill:opacity-100 transition-opacity duration-300">90%</span>
                                </div>
                                <div class="h-3 bg-gradient-to-r from-gray-100/50 to-gray-200/50 dark:from-gray-700/50 dark:to-gray-800/50 backdrop-blur-sm rounded-full overflow-hidden shadow-inner">
                                    <div class="h-full bg-gradient-to-r from-cyan-500/90 to-blue-600/90 rounded-full transition-all duration-700 ease-out transform origin-left w-[90%] hover:w-[92%]"></div>
                                </div>
                            </div>

                            <!-- React -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500/20 to-cyan-500/20 dark:from-blue-500/10 dark:to-cyan-500/10 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover/skill:scale-110 group-hover/skill:rotate-3 flex items-center justify-center">
                                            <i class="fab fa-react text-sm text-blue-600/90 dark:text-blue-400/90 group-hover/skill:animate-spin-slow"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white group-hover/skill:text-blue-500 transition-colors duration-300">React</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Modern UI Development</p>
                                        </div>
                                    </div>
                                    <span class="text-blue-600 dark:text-blue-400 font-bold opacity-0 group-hover/skill:opacity-100 transition-opacity duration-300">80%</span>
                                </div>
                                <div class="h-3 bg-gradient-to-r from-gray-100/50 to-gray-200/50 dark:from-gray-700/50 dark:to-gray-800/50 backdrop-blur-sm rounded-full overflow-hidden shadow-inner">
                                    <div class="h-full bg-gradient-to-r from-blue-500/90 to-cyan-600/90 rounded-full transition-all duration-700 ease-out transform origin-left w-[80%] hover:w-[82%]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills Card -->
                <div class="group relative transform hover:scale-[1.02] transition-all duration-300" data-aos="fade-left">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl opacity-5 group-hover:opacity-30 transition-all duration-500 group-hover:blur-md"></div>
                    <div class="relative bg-white/80 dark:bg-gray-800/90 backdrop-blur-xl rounded-xl p-8 border border-gray-100/20 dark:border-gray-700/20 shadow-lg shadow-green-500/5 dark:shadow-green-500/10 transition-all duration-300">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="relative group-hover:animate-spin-slow">
                                <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-green-500 to-emerald-500 blur-md opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                                <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-green-500/90 to-emerald-600/90 shadow-lg shadow-green-500/20 dark:shadow-green-800/30 flex items-center justify-center">
                                    <i class="fas fa-server text-xl text-white/90"></i>
                                </div>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-emerald-600 group-hover:from-emerald-500 group-hover:to-green-600 transition-all duration-300">Backend Development</h2>
                                <p class="text-gray-600 dark:text-gray-400">Server-side oplossingen</p>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <!-- PHP -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-500/20 to-indigo-500/20 dark:from-purple-500/10 dark:to-indigo-500/10 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover/skill:scale-110 group-hover/skill:rotate-3 flex items-center justify-center">
                                            <i class="fab fa-php text-sm text-purple-600/90 dark:text-purple-400/90 group-hover/skill:animate-bounce"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white group-hover/skill:text-purple-500 transition-colors duration-300">PHP</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">OOP & MVC</p>
                                        </div>
                                    </div>
                                    <span class="text-green-600 dark:text-green-400 font-bold opacity-0 group-hover/skill:opacity-100 transition-opacity duration-300">85%</span>
                                </div>
                                <div class="h-3 bg-gradient-to-r from-gray-100/50 to-gray-200/50 dark:from-gray-700/50 dark:to-gray-800/50 backdrop-blur-sm rounded-full overflow-hidden shadow-inner">
                                    <div class="h-full bg-gradient-to-r from-purple-500/90 to-indigo-600/90 rounded-full transition-all duration-700 ease-out transform origin-left w-[85%] hover:w-[87%]"></div>
                                </div>
                            </div>

                            <!-- Laravel -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-red-500/20 to-pink-500/20 dark:from-red-500/10 dark:to-pink-500/10 shadow-sm border border-red-200/30 dark:border-red-700/30 transform-gpu transition-all duration-300 group-hover/skill:scale-110 group-hover/skill:rotate-3 flex items-center justify-center">
                                            <i class="fab fa-laravel text-sm text-red-600/90 dark:text-red-400/90 group-hover/skill:animate-bounce"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white group-hover/skill:text-red-500 transition-colors duration-300">Laravel</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Full-stack Framework</p>
                                        </div>
                                    </div>
                                    <span class="text-green-600 dark:text-green-400 font-bold opacity-0 group-hover/skill:opacity-100 transition-opacity duration-300">80%</span>
                                </div>
                                <div class="h-3 bg-gradient-to-r from-gray-100/50 to-gray-200/50 dark:from-gray-700/50 dark:to-gray-800/50 backdrop-blur-sm rounded-full overflow-hidden shadow-inner">
                                    <div class="h-full bg-gradient-to-r from-red-500/90 to-pink-600/90 rounded-full transition-all duration-700 ease-out transform origin-left w-[80%] hover:w-[82%]"></div>
                                </div>
                            </div>

                            <!-- MySQL -->
                            <div class="group/skill transform transition-all duration-300 hover:translate-x-2">
                                <div class="flex justify-between items-center mb-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500/20 to-cyan-500/20 dark:from-blue-500/10 dark:to-cyan-500/10 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover/skill:scale-110 group-hover/skill:rotate-3 flex items-center justify-center">
                                            <i class="fas fa-database text-sm text-blue-600/90 dark:text-blue-400/90 group-hover/skill:animate-pulse"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900 dark:text-white group-hover/skill:text-blue-500 transition-colors duration-300">MySQL</h3>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">Database Management</p>
                                        </div>
                                    </div>
                                    <span class="text-green-600 dark:text-green-400 font-bold opacity-0 group-hover/skill:opacity-100 transition-opacity duration-300">75%</span>
                                </div>
                                <div class="h-3 bg-gradient-to-r from-gray-100/50 to-gray-200/50 dark:from-gray-700/50 dark:to-gray-800/50 backdrop-blur-sm rounded-full overflow-hidden shadow-inner">
                                    <div class="h-full bg-gradient-to-r from-blue-500/90 to-cyan-600/90 rounded-full transition-all duration-700 ease-out transform origin-left w-[75%] hover:w-[77%]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Verbeterde Extra Vaardigheden Sectie -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                <!-- Development Tools Card -->
                <div class="group relative transform hover:scale-[1.02] transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl opacity-5 group-hover:opacity-30 transition-all duration-500 group-hover:blur-md"></div>
                    <div class="relative bg-white/80 dark:bg-gray-800/90 backdrop-blur-xl rounded-xl p-6 border border-gray-100/20 dark:border-gray-700/20 shadow-lg shadow-purple-500/5 dark:shadow-purple-500/10 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="relative group-hover:animate-spin-slow">
                                <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 blur-md opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                                <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500/90 to-pink-600/90 shadow-lg shadow-purple-500/20 dark:shadow-purple-800/30 flex items-center justify-center">
                                    <i class="fas fa-tools text-xl text-white/90"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-pink-500 group-hover:from-pink-500 group-hover:to-purple-500 transition-all duration-300">
                                Development Tools
                            </h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-500/20 to-pink-500/20 dark:from-purple-500/10 dark:to-pink-500/10 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                    <i class="fab fa-git-alt text-sm text-purple-600/90 dark:text-purple-400/90 group-hover/item:animate-bounce"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-purple-500 dark:group-hover/item:text-purple-400 transition-colors duration-300">Git & Version Control</span>
                            </li>
                            <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500/20 to-cyan-500/20 dark:from-blue-500/10 dark:to-cyan-500/10 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                    <i class="fab fa-docker text-sm text-blue-600/90 dark:text-blue-400/90 group-hover/item:animate-pulse"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-blue-500 dark:group-hover/item:text-blue-400 transition-colors duration-300">Docker Containerization</span>
                            </li>
                            <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-500/20 to-pink-500/20 dark:from-purple-500/10 dark:to-pink-500/10 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                    <i class="fas fa-terminal text-sm text-purple-600/90 dark:text-purple-400/90 group-hover/item:animate-pulse"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-purple-500 dark:group-hover/item:text-purple-400 transition-colors duration-300">Command Line Tools</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Soft Skills Card -->
                <div class="group relative transform hover:scale-[1.02] transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-5 group-hover:opacity-30 transition-all duration-500 group-hover:blur-md"></div>
                    <div class="relative bg-white/80 dark:bg-gray-800/90 backdrop-blur-xl rounded-xl p-6 border border-gray-100/20 dark:border-gray-700/20 shadow-lg shadow-yellow-500/5 dark:shadow-yellow-500/10 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="relative group-hover:animate-spin-slow">
                                <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-yellow-500 to-orange-500 blur-md opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                                <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-yellow-500/90 to-orange-600/90 shadow-lg shadow-yellow-500/20 dark:shadow-yellow-800/30 flex items-center justify-center">
                                    <i class="fas fa-users text-xl text-white/90"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-yellow-500 to-orange-500 group-hover:from-orange-500 group-hover:to-yellow-500 transition-all duration-300">
                                Soft Skills
                            </h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-yellow-500/20 to-orange-500/20 dark:from-yellow-500/10 dark:to-orange-500/10 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                    <i class="fas fa-comments text-sm text-yellow-600/90 dark:text-yellow-400/90 group-hover/item:animate-bounce"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-400 transition-colors duration-300">Communicatie</span>
                            </li>
                            <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-yellow-500/20 to-orange-500/20 dark:from-yellow-500/10 dark:to-orange-500/10 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                    <i class="fas fa-lightbulb text-sm text-yellow-600/90 dark:text-yellow-400/90 group-hover/item:animate-pulse"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-400 transition-colors duration-300">Probleemoplossend</span>
                            </li>
                            <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-yellow-500/20 to-orange-500/20 dark:from-yellow-500/10 dark:to-orange-500/10 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                    <i class="fas fa-users text-sm text-yellow-600/90 dark:text-yellow-400/90 group-hover/item:animate-pulse"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-400 transition-colors duration-300">Teamwork</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Learning & Growth Card -->
                <div class="group relative transform hover:scale-[1.02] transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-2xl opacity-5 group-hover:opacity-30 transition-all duration-500 group-hover:blur-md"></div>
                    <div class="relative bg-white/80 dark:bg-gray-800/90 backdrop-blur-xl rounded-xl p-6 border border-gray-100/20 dark:border-gray-700/20 shadow-lg shadow-emerald-500/5 dark:shadow-emerald-500/10 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="relative group-hover:animate-spin-slow">
                                <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-emerald-500 to-teal-500 blur-md opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                                <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500/90 to-teal-600/90 shadow-lg shadow-emerald-500/20 dark:shadow-emerald-800/30 flex items-center justify-center">
                                    <i class="fas fa-graduation-cap text-xl text-white/90"></i>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-emerald-500 to-teal-500 group-hover:from-teal-500 group-hover:to-emerald-500 transition-all duration-300">
                                Groei & Ontwikkeling
                            </h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-500/20 to-teal-500/20 dark:from-emerald-500/10 dark:to-teal-500/10 shadow-sm border border-emerald-200/30 dark:border-emerald-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                    <i class="fas fa-book text-sm text-emerald-600/90 dark:text-emerald-400/90 group-hover/item:animate-bounce"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-emerald-500 dark:group-hover/item:text-emerald-400 transition-colors duration-300">Actief Continu Leren</span>
                            </li>
                            <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-500/20 to-teal-500/20 dark:from-emerald-500/10 dark:to-teal-500/10 shadow-sm border border-emerald-200/30 dark:border-emerald-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                    <i class="fas fa-rocket text-sm text-emerald-600/90 dark:text-emerald-400/90 group-hover/item:animate-pulse"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-emerald-500 dark:group-hover/item:text-emerald-400 transition-colors duration-300">Technische Innovatie</span>
                            </li>
                            <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-500/20 to-teal-500/20 dark:from-emerald-500/10 dark:to-teal-500/10 shadow-sm border border-emerald-200/30 dark:border-emerald-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                    <i class="fas fa-chart-line text-sm text-emerald-600/90 dark:text-emerald-400/90 group-hover/item:animate-pulse"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-emerald-500 dark:group-hover/item:text-emerald-400 transition-colors duration-300">Persoonlijke Groei</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Verbeterde Gedetailleerde Ervaringen Sectie -->
            <div class="max-w-7xl mx-auto mt-24">
                <div class="text-center mb-16 relative" data-aos="fade-down">
                    <div class="absolute inset-0 flex items-center justify-center opacity-10 pointer-events-none">
                        <div class="w-64 h-64 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-full blur-3xl"></div>
                    </div>
                    <h2 class="text-4xl font-extrabold mb-6 relative">
                        <span class="inline-block transform hover:scale-105 transition-transform duration-300">
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 dark:from-blue-400 dark:via-purple-400 dark:to-indigo-400">
                                Mijn Ervaringen
                            </span>
                        </span>
                    </h2>
                    <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed relative">
                        <span class="inline-block transform hover:translate-y-[-2px] transition-transform duration-300">
                            Een diepgaande blik op mijn projecten en de technologieën die ik heb gebruikt
                        </span>
                    </p>
                </div>

                <div class="space-y-12">
                    <!-- PHP & Laravel Experience -->
                    <div class="group relative transform hover:scale-[1.01] transition-all duration-300" data-aos="fade-up">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-2xl opacity-5 group-hover:opacity-30 transition-all duration-500 group-hover:blur-md"></div>
                        <div class="relative bg-white/80 dark:bg-gray-800/90 backdrop-blur-xl rounded-xl p-8 border border-gray-100/20 dark:border-gray-700/20 shadow-lg shadow-purple-500/5 dark:shadow-purple-500/10 transition-all duration-300">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="relative group-hover:animate-spin-slow">
                                    <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-purple-500 to-indigo-500 blur-md opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                                    <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500/90 to-indigo-600/90 shadow-lg shadow-purple-500/20 dark:shadow-purple-800/30 flex items-center justify-center">
                                        <i class="fab fa-php text-xl text-white/90"></i>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-purple-900 dark:text-purple-100 mb-2 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-300">Waarom PHP & Laravel?</h3>
                                    <p class="text-purple-800/80 dark:text-purple-200/80">Snelle ontwikkeling met Eloquent ORM</p>
                                </div>
                            </div>

                            <div class="prose max-w-none text-gray-600 dark:text-gray-300">
                                <p class="mb-8 text-lg leading-relaxed">
                                    Voor PAS (Pakket Afhaal Service) en DIVO (online stemmen) heb ik PHP en Laravel gebruikt. 
                                    Ik koos hiervoor omdat het fijn werkt en er veel handige functies in zitten die ik kon gebruiken.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="group/card relative transform hover:scale-[1.02] transition-all duration-300">
                                        <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500/50 to-indigo-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                        <div class="relative bg-purple-50/70 dark:bg-purple-900/10 backdrop-blur-sm rounded-lg p-6 border border-purple-200/20 dark:border-purple-700/20 transition-all duration-500 group-hover:border-purple-500/30">
                                            <h4 class="font-bold text-xl text-purple-900 dark:text-purple-100 mb-4 group-hover/card:text-purple-600 transition-colors duration-300">Waarom PHP & Laravel?</h4>
                                            <ul class="space-y-3">
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-500/20 to-indigo-500/20 dark:from-purple-500/10 dark:to-indigo-500/10 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-purple-600/90 dark:text-purple-400/90 group-hover/item:animate-bounce"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200 group-hover/item:text-purple-600 dark:group-hover/item:text-purple-400 transition-colors duration-300">Snelle ontwikkeling met Eloquent ORM</span>
                                                </li>
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-500/20 to-indigo-500/20 dark:from-purple-500/10 dark:to-indigo-500/10 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-purple-600/90 dark:text-purple-400/90 group-hover/item:animate-bounce"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200 group-hover/item:text-purple-600 dark:group-hover/item:text-purple-400 transition-colors duration-300">Uitgebreide beveiligingsfuncties</span>
                                                </li>
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-500/20 to-indigo-500/20 dark:from-purple-500/10 dark:to-indigo-500/10 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-purple-600/90 dark:text-purple-400/90 group-hover/item:animate-bounce"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200 group-hover/item:text-purple-600 dark:group-hover/item:text-purple-400 transition-colors duration-300">Blade templating engine</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="group/card relative transform hover:scale-[1.02] transition-all duration-300">
                                        <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500/50 to-indigo-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                        <div class="relative bg-purple-50/70 dark:bg-purple-900/10 backdrop-blur-sm rounded-lg p-6 border border-purple-200/20 dark:border-purple-700/20 transition-all duration-500 group-hover:border-purple-500/30">
                                            <h4 class="font-bold text-xl text-purple-900 dark:text-purple-100 mb-4 group-hover/card:text-purple-600 transition-colors duration-300">Uitdagingen & Oplossingen</h4>
                                            <ul class="space-y-3">
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-500/20 to-indigo-500/20 dark:from-purple-500/10 dark:to-indigo-500/10 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-purple-600/90 dark:text-purple-400/90 group-hover/item:animate-pulse"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200 group-hover/item:text-purple-600 dark:group-hover/item:text-purple-400 transition-colors duration-300">Complex Database Ontwerp met Migrations</span>
                                                </li>
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-500/20 to-indigo-500/20 dark:from-purple-500/10 dark:to-indigo-500/10 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-purple-600/90 dark:text-purple-400/90 group-hover/item:animate-pulse"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200 group-hover/item:text-purple-600 dark:group-hover/item:text-purple-400 transition-colors duration-300">Geavanceerde API Authenticatie met Sanctum</span>
                                                </li>
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-purple-500/20 to-indigo-500/20 dark:from-purple-500/10 dark:to-indigo-500/10 shadow-sm border border-purple-200/30 dark:border-purple-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-purple-600/90 dark:text-purple-400/90 group-hover/item:animate-pulse"></i>
                                                    </div>
                                                    <span class="text-purple-800 dark:text-purple-200 group-hover/item:text-purple-600 dark:group-hover/item:text-purple-400 transition-colors duration-300">Performance Optimalisatie met Caching</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- JavaScript & React Experience -->
                    <div class="group relative transform hover:scale-[1.01] transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-2xl opacity-5 group-hover:opacity-30 transition-all duration-500 group-hover:blur-md"></div>
                        <div class="relative bg-white/80 dark:bg-gray-800/90 backdrop-blur-xl rounded-xl p-8 border border-gray-100/20 dark:border-gray-700/20 shadow-lg shadow-yellow-500/5 dark:shadow-yellow-500/10 transition-all duration-300">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="relative group-hover:animate-spin-slow">
                                    <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-yellow-500 to-orange-500 blur-md opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                                    <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-yellow-500/90 to-orange-600/90 shadow-lg shadow-yellow-500/20 dark:shadow-yellow-800/30 flex items-center justify-center">
                                        <i class="fab fa-react text-xl text-white/90"></i>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-yellow-900 dark:text-yellow-100 mb-2 group-hover:text-yellow-600 dark:group-hover:text-yellow-400 transition-colors duration-300">Voordelen React</h3>
                                    <p class="text-yellow-800/80 dark:text-yellow-200/80">Component-gebaseerde architectuur</p>
                                </div>
                            </div>

                            <div class="prose max-w-none text-gray-600 dark:text-gray-300">
                                <p class="mb-8 text-lg leading-relaxed">
                                    Bij DIVO heb ik React gebruikt om de website mooi en snel te maken. 
                                    Hierdoor kon ik zorgen dat de stemresultaten meteen te zien waren zonder dat je de pagina hoeft te verversen.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="group/card relative transform hover:scale-[1.02] transition-all duration-300">
                                        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500/50 to-orange-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                        <div class="relative bg-yellow-50/70 dark:bg-yellow-900/10 backdrop-blur-sm rounded-lg p-6 border border-yellow-200/20 dark:border-yellow-700/20 transition-all duration-500 group-hover:border-yellow-500/30">
                                            <h4 class="font-bold text-xl text-yellow-900 dark:text-yellow-100 mb-4 group-hover/card:text-yellow-600 transition-colors duration-300">Voordelen React</h4>
                                            <ul class="space-y-3">
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-yellow-500/20 to-orange-500/20 dark:from-yellow-500/10 dark:to-orange-500/10 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-yellow-600/90 dark:text-yellow-400/90 group-hover/item:animate-bounce"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200 group-hover/item:text-yellow-600 dark:group-hover/item:text-yellow-400 transition-colors duration-300">Component-gebaseerde architectuur</span>
                                                </li>
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-yellow-500/20 to-orange-500/20 dark:from-yellow-500/10 dark:to-orange-500/10 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-yellow-600/90 dark:text-yellow-400/90 group-hover/item:animate-bounce"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200 group-hover/item:text-yellow-600 dark:group-hover/item:text-yellow-400 transition-colors duration-300">Efficiënte DOM updates</span>
                                                </li>
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-yellow-500/20 to-orange-500/20 dark:from-yellow-500/10 dark:to-orange-500/10 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-yellow-600/90 dark:text-yellow-400/90 group-hover/item:animate-bounce"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200 group-hover/item:text-yellow-600 dark:group-hover/item:text-yellow-400 transition-colors duration-300">Grote community support</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="group/card relative transform hover:scale-[1.02] transition-all duration-300">
                                        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500/50 to-orange-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                        <div class="relative bg-yellow-50/70 dark:bg-yellow-900/10 backdrop-blur-sm rounded-lg p-6 border border-yellow-200/20 dark:border-yellow-700/20 transition-all duration-500 group-hover:border-yellow-500/30">
                                            <h4 class="font-bold text-xl text-yellow-900 dark:text-yellow-100 mb-4 group-hover/card:text-yellow-600 transition-colors duration-300">Leermomenten</h4>
                                            <ul class="space-y-3">
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-yellow-500/20 to-orange-500/20 dark:from-yellow-500/10 dark:to-orange-500/10 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-yellow-600/90 dark:text-yellow-400/90 group-hover/item:animate-pulse"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200 group-hover/item:text-yellow-600 dark:group-hover/item:text-yellow-400 transition-colors duration-300">Geavanceerde State Management met Redux</span>
                                                </li>
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-yellow-500/20 to-orange-500/20 dark:from-yellow-500/10 dark:to-orange-500/10 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-yellow-600/90 dark:text-yellow-400/90 group-hover/item:animate-pulse"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200 group-hover/item:text-yellow-600 dark:group-hover/item:text-yellow-400 transition-colors duration-300">Dynamische Real-time Updates met WebSockets</span>
                                                </li>
                                                <li class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-yellow-500/20 to-orange-500/20 dark:from-yellow-500/10 dark:to-orange-500/10 shadow-sm border border-yellow-200/30 dark:border-yellow-700/30 transform-gpu transition-all duration-300 group-hover/item:scale-110 group-hover/item:rotate-3 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-sm text-yellow-600/90 dark:text-yellow-400/90 group-hover/item:animate-pulse"></i>
                                                    </div>
                                                    <span class="text-yellow-800 dark:text-yellow-200 group-hover/item:text-yellow-600 dark:group-hover/item:text-yellow-400 transition-colors duration-300">Code Optimalisatie & Best Practices</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Continu Leren & Ontwikkelen -->
                    <div class="group relative transform hover:scale-[1.01] transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl opacity-5 group-hover:opacity-30 transition-all duration-500 group-hover:blur-md"></div>
                        <div class="relative bg-white/80 dark:bg-gray-800/90 backdrop-blur-xl rounded-xl p-8 border border-gray-100/20 dark:border-gray-700/20 shadow-lg shadow-blue-500/5 dark:shadow-blue-500/10 transition-all duration-300">
                            <div class="flex items-center gap-4 mb-8">
                                <div class="relative group-hover:animate-spin-slow">
                                    <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-blue-500 to-indigo-500 blur-md opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                                    <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500/90 to-indigo-600/90 shadow-lg shadow-blue-500/20 dark:shadow-blue-800/30 flex items-center justify-center">
                                        <i class="fas fa-graduation-cap text-xl text-white/90"></i>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-blue-900 dark:text-blue-100 mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300">Probleemoplossend</h3>
                                    <p class="text-blue-800/80 dark:text-blue-200/80">
                                        Als ik tegen problemen aanloop, probeer ik er altijd van te leren en een goede oplossing te vinden.
                                    </p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <!-- Probleemoplossend Card -->
                                <div class="group/card relative transform hover:scale-[1.02] transition-all duration-300">
                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/50 to-indigo-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                    <div class="relative bg-blue-50/70 dark:bg-blue-900/10 backdrop-blur-sm rounded-lg p-6 border border-blue-200/20 dark:border-blue-700/20 transition-all duration-500 group-hover:border-blue-500/30">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500/20 to-indigo-500/20 dark:from-blue-500/10 dark:to-indigo-500/10 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover/card:scale-110 group-hover/card:rotate-3 flex items-center justify-center">
                                                <i class="fas fa-brain text-sm text-blue-600/90 dark:text-blue-400/90 group-hover/card:animate-pulse"></i>
                                            </div>
                                            <h4 class="font-bold text-xl text-blue-900 dark:text-blue-100 group-hover/card:text-blue-600 transition-colors duration-300">Probleemoplossend</h4>
                                        </div>
                                        <p class="text-blue-800 dark:text-blue-200 group-hover/card:text-blue-600 dark:group-hover/card:text-blue-400 transition-colors duration-300">
                                            Als ik tegen problemen aanloop, probeer ik er altijd van te leren en een goede oplossing te vinden.
                                        </p>
                                    </div>
                                </div>

                                <!-- Samenwerking Card -->
                                <div class="group/card relative transform hover:scale-[1.02] transition-all duration-300">
                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/50 to-indigo-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                    <div class="relative bg-blue-50/70 dark:bg-blue-900/10 backdrop-blur-sm rounded-lg p-6 border border-blue-200/20 dark:border-blue-700/20 transition-all duration-500 group-hover:border-blue-500/30">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500/20 to-indigo-500/20 dark:from-blue-500/10 dark:to-indigo-500/10 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover/card:scale-110 group-hover/card:rotate-3 flex items-center justify-center">
                                                <i class="fas fa-users text-sm text-blue-600/90 dark:text-blue-400/90 group-hover/card:animate-pulse"></i>
                                            </div>
                                            <h4 class="font-bold text-xl text-blue-900 dark:text-blue-100 group-hover/card:text-blue-600 transition-colors duration-300">Samenwerking</h4>
                                        </div>
                                        <p class="text-blue-800 dark:text-blue-200 group-hover/card:text-blue-600 dark:group-hover/card:text-blue-400 transition-colors duration-300">
                                            Door samen te werken leer ik van anderen en deel ik mijn eigen kennis.
                                        </p>
                                    </div>
                                </div>

                                <!-- Innovatie Card -->
                                <div class="group/card relative transform hover:scale-[1.02] transition-all duration-300">
                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500/50 to-indigo-500/50 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                                    <div class="relative bg-blue-50/70 dark:bg-blue-900/10 backdrop-blur-sm rounded-lg p-6 border border-blue-200/20 dark:border-blue-700/20 transition-all duration-500 group-hover:border-blue-500/30">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500/20 to-indigo-500/20 dark:from-blue-500/10 dark:to-indigo-500/10 shadow-sm border border-blue-200/30 dark:border-blue-700/30 transform-gpu transition-all duration-300 group-hover/card:scale-110 group-hover/card:rotate-3 flex items-center justify-center">
                                                <i class="fas fa-rocket text-sm text-blue-600/90 dark:text-blue-400/90 group-hover/card:animate-pulse"></i>
                                            </div>
                                            <h4 class="font-bold text-xl text-blue-900 dark:text-blue-100 group-hover/card:text-blue-600 transition-colors duration-300">Innovatie</h4>
                                        </div>
                                        <p class="text-blue-800 dark:text-blue-200 group-hover/card:text-blue-600 dark:group-hover/card:text-blue-400 transition-colors duration-300">
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