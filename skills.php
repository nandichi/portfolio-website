<?php
$pageTitle = "Vaardigheden";
$currentPage = "skills";
$pageDescription = "Ontdek de technische vaardigheden en expertise van Naoufal Andichi op het gebied van webontwikkeling en programmeren.";
$pageKeywords = "Naoufal Andichi, vaardigheden, programmeren, webontwikkeling, technische expertise, frontend, backend, frameworks";
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
            <!-- Header sectie met moderne typografie -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center justify-center mb-4" data-aos="fade-down">
                    <span class="h-px w-8 bg-blue-500 mr-3"></span>
                    <span class="text-blue-600 dark:text-blue-400 font-medium tracking-wider uppercase text-sm">Expertise & Vaardigheden</span>
                    <span class="h-px w-8 bg-blue-500 ml-3"></span>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white" data-aos="fade-up">
                    Mijn <span class="text-blue-600 dark:text-blue-400">Vaardigheden</span>
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Een showcase van mijn technische expertise en professionele competenties, opgebouwd door jarenlange ervaring en continue ontwikkeling.
                </p>
            </div>

            <!-- Hoofdvaardigheden Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-20">
                <!-- Frontend Skills Card -->
                <div class="group h-full" data-aos="fade-right">
                    <div class="bg-white/90 dark:bg-gray-800/90 rounded-[2rem] shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100/50 dark:border-gray-700/30 backdrop-blur-sm h-full flex flex-col group-hover:-translate-y-2 overflow-hidden relative">
                        <!-- Decoratieve achtergrond met animatie -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-indigo-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Header met icoon en titel -->
                        <div class="bg-gradient-to-br from-blue-500 via-blue-600 to-blue-700 p-6 flex items-center gap-4 relative overflow-hidden">
                            <!-- Decoratieve cirkels -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                            <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full translate-y-16 -translate-x-16"></div>
                            
                            <div class="w-14 h-14 rounded-xl bg-white/90 dark:bg-gray-800/90 flex items-center justify-center shadow-lg border border-white/20 transform group-hover:rotate-6 transition-transform duration-500 relative z-10">
                                <i class="fas fa-code text-xl text-blue-600 dark:text-blue-400"></i>
                            </div>
                            <div class="relative z-10">
                                <h3 class="text-xl font-bold text-white">Frontend Development</h3>
                                <p class="text-blue-100 font-medium text-sm">Moderne web interfaces</p>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6 flex-1 flex flex-col relative">
                            <div class="space-y-8 mb-6 flex-1">
                                <!-- JavaScript -->
                                <div class="group/skill transform hover:scale-[1.02] transition-all duration-300">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-12 h-12 rounded-xl bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center shadow-md border border-yellow-200 dark:border-yellow-700/30 group-hover/skill:rotate-6 transition-transform duration-300">
                                            <i class="fab fa-js text-xl text-yellow-600 dark:text-yellow-400"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center">
                                                <h3 class="font-semibold text-gray-900 dark:text-white text-lg">JavaScript</h3>
                                                <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">Expert</span>
                                            </div>
                                            <div class="flex flex-wrap gap-2 mt-2">
                                                <span class="px-2 py-1 bg-yellow-50 dark:bg-yellow-900/20 text-yellow-700 dark:text-yellow-300 rounded-lg text-xs">ES6+</span>
                                                <span class="px-2 py-1 bg-yellow-50 dark:bg-yellow-900/20 text-yellow-700 dark:text-yellow-300 rounded-lg text-xs">TypeScript</span>
                                                <span class="px-2 py-1 bg-yellow-50 dark:bg-yellow-900/20 text-yellow-700 dark:text-yellow-300 rounded-lg text-xs">React</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tailwind CSS -->
                                <div class="group/skill transform hover:scale-[1.02] transition-all duration-300">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-12 h-12 rounded-xl bg-cyan-100 dark:bg-cyan-900/30 flex items-center justify-center shadow-md border border-cyan-200 dark:border-cyan-700/30 group-hover/skill:rotate-6 transition-transform duration-300">
                                            <i class="fab fa-css3 text-xl text-cyan-600 dark:text-cyan-400"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center">
                                                <h3 class="font-semibold text-gray-900 dark:text-white text-lg">Tailwind CSS</h3>
                                                <span class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-full text-sm font-medium">Gevorderd</span>
                                            </div>
                                            <div class="flex flex-wrap gap-2 mt-2">
                                                <span class="px-2 py-1 bg-cyan-50 dark:bg-cyan-900/20 text-cyan-700 dark:text-cyan-300 rounded-lg text-xs">Responsive Design</span>
                                                <span class="px-2 py-1 bg-cyan-50 dark:bg-cyan-900/20 text-cyan-700 dark:text-cyan-300 rounded-lg text-xs">Custom Components</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- React -->
                                <div class="group/skill transform hover:scale-[1.02] transition-all duration-300">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center shadow-md border border-blue-200 dark:border-blue-700/30 group-hover/skill:rotate-6 transition-transform duration-300">
                                            <i class="fab fa-react text-xl text-blue-600 dark:text-blue-400"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center">
                                                <h3 class="font-semibold text-gray-900 dark:text-white text-lg">React</h3>
                                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">Gevorderd</span>
                                            </div>
                                            <div class="flex flex-wrap gap-2 mt-2">
                                                <span class="px-2 py-1 bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded-lg text-xs">Hooks</span>
                                                <span class="px-2 py-1 bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded-lg text-xs">Context</span>
                                                <span class="px-2 py-1 bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded-lg text-xs">Redux</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills Card -->
                <div class="group h-full" data-aos="fade-left">
                    <div class="bg-white/90 dark:bg-gray-800/90 rounded-[2rem] shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100/50 dark:border-gray-700/30 backdrop-blur-sm h-full flex flex-col group-hover:-translate-y-2 overflow-hidden relative">
                        <!-- Decoratieve achtergrond met animatie -->
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 via-emerald-500/5 to-teal-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Header met icoon en titel -->
                        <div class="bg-gradient-to-br from-green-500 via-green-600 to-green-700 p-6 flex items-center gap-4 relative overflow-hidden">
                            <!-- Decoratieve cirkels -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                            <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full translate-y-16 -translate-x-16"></div>
                            
                            <div class="w-14 h-14 rounded-xl bg-white/90 dark:bg-gray-800/90 flex items-center justify-center shadow-lg border border-white/20 transform group-hover:rotate-6 transition-transform duration-500 relative z-10">
                                <i class="fas fa-server text-xl text-green-600 dark:text-green-400"></i>
                            </div>
                            <div class="relative z-10">
                                <h3 class="text-xl font-bold text-white">Backend Development</h3>
                                <p class="text-green-100 font-medium text-sm">Server-side oplossingen</p>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6 flex-1 flex flex-col relative">
                            <div class="space-y-8 mb-6 flex-1">
                                <!-- PHP -->
                                <div class="group/skill transform hover:scale-[1.02] transition-all duration-300">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center shadow-md border border-purple-200 dark:border-purple-700/30 group-hover/skill:rotate-6 transition-transform duration-300">
                                            <i class="fab fa-php text-xl text-purple-600 dark:text-purple-400"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center">
                                                <h3 class="font-semibold text-gray-900 dark:text-white text-lg">PHP</h3>
                                                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">Gevorderd</span>
                                            </div>
                                            <div class="flex flex-wrap gap-2 mt-2">
                                                <span class="px-2 py-1 bg-purple-50 dark:bg-purple-900/20 text-purple-700 dark:text-purple-300 rounded-lg text-xs">OOP</span>
                                                <span class="px-2 py-1 bg-purple-50 dark:bg-purple-900/20 text-purple-700 dark:text-purple-300 rounded-lg text-xs">MVC</span>
                                                <span class="px-2 py-1 bg-purple-50 dark:bg-purple-900/20 text-purple-700 dark:text-purple-300 rounded-lg text-xs">API</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Laravel -->
                                <div class="group/skill transform hover:scale-[1.02] transition-all duration-300">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-12 h-12 rounded-xl bg-red-100 dark:bg-red-900/30 flex items-center justify-center shadow-md border border-red-200 dark:border-red-700/30 group-hover/skill:rotate-6 transition-transform duration-300">
                                            <i class="fab fa-laravel text-xl text-red-600 dark:text-red-400"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center">
                                                <h3 class="font-semibold text-gray-900 dark:text-white text-lg">Laravel</h3>
                                                <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-full text-sm font-medium">Gevorderd</span>
                                            </div>
                                            <div class="flex flex-wrap gap-2 mt-2">
                                                <span class="px-2 py-1 bg-red-50 dark:bg-red-900/20 text-red-700 dark:text-red-300 rounded-lg text-xs">Eloquent</span>
                                                <span class="px-2 py-1 bg-red-50 dark:bg-red-900/20 text-red-700 dark:text-red-300 rounded-lg text-xs">Blade</span>
                                                <span class="px-2 py-1 bg-red-50 dark:bg-red-900/20 text-red-700 dark:text-red-300 rounded-lg text-xs">Auth</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- MySQL -->
                                <div class="group/skill transform hover:scale-[1.02] transition-all duration-300">
                                    <div class="flex items-center gap-4 mb-4">
                                        <div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center shadow-md border border-blue-200 dark:border-blue-700/30 group-hover/skill:rotate-6 transition-transform duration-300">
                                            <i class="fas fa-database text-xl text-blue-600 dark:text-blue-400"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center">
                                                <h3 class="font-semibold text-gray-900 dark:text-white text-lg">MySQL</h3>
                                                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">Gevorderd</span>
                                            </div>
                                            <div class="flex flex-wrap gap-2 mt-2">
                                                <span class="px-2 py-1 bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded-lg text-xs">Queries</span>
                                                <span class="px-2 py-1 bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded-lg text-xs">Optimization</span>
                                                <span class="px-2 py-1 bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded-lg text-xs">Indexing</span>
                                            </div>
                                        </div>
                                    </div>
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
                <div class="text-center mb-16">
                    <div class="inline-flex items-center justify-center mb-4" data-aos="fade-down">
                        <span class="h-px w-8 bg-blue-500 mr-3"></span>
                        <span class="text-blue-600 dark:text-blue-400 font-medium tracking-wider uppercase text-sm">Professionele Ervaring</span>
                        <span class="h-px w-8 bg-blue-500 ml-3"></span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white" data-aos="fade-up">
                        Mijn <span class="text-blue-600 dark:text-blue-400">Ervaringen</span>
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                        Een diepgaande blik op mijn projecten en de technologieën die ik heb gebruikt
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