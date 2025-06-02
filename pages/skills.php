<?php
$pageTitle = "Vaardigheden";
$currentPage = "skills";
$pageDescription = "Ontdek de technische vaardigheden en competenties van Naoufal Andichi op het gebied van webontwikkeling en programmeren.";
$pageKeywords = "Naoufal Andichi, vaardigheden, competenties, programmeren, webontwikkeling, technologieën, frameworks";

// Bepaal de correcte pad voor includes gebaseerd op uitvoeringscontext
$includesPath = file_exists('includes/header.php') ? 'includes/header.php' : '../includes/header.php';
include $includesPath;
?>

<!-- Hoofd container met geavanceerde achtergrond -->
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 relative overflow-hidden">
    
    <!-- Geavanceerde achtergrond met meerdere lagen -->
    <div class="absolute inset-0">
        <!-- Basis gradient mesh -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,rgba(59,130,246,0.15)_1px,transparent_0)] [background-size:24px_24px]"></div>
        
        <!-- Zwevende geometrische vormen -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-gradient-to-r from-purple-400/20 to-pink-500/20 rounded-full mix-blend-multiply filter blur-xl animate-slow-float"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 rounded-full mix-blend-multiply filter blur-xl animate-slow-float-reverse"></div>
        <div class="absolute bottom-20 left-1/3 w-80 h-80 bg-gradient-to-r from-green-400/20 to-blue-500/20 rounded-full mix-blend-multiply filter blur-xl animate-slow-float-delayed"></div>
        
        <!-- Subtiele lichteffecten -->
        <div class="absolute top-0 left-1/4 w-px h-32 bg-gradient-to-b from-purple-500/50 to-transparent"></div>
        <div class="absolute top-0 right-1/3 w-px h-40 bg-gradient-to-b from-blue-500/50 to-transparent"></div>
        <div class="absolute top-0 left-3/4 w-px h-24 bg-gradient-to-b from-green-500/50 to-transparent"></div>
    </div>

    <!-- Content Container -->
    <div class="relative z-10 pt-24 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            <!-- Elegante Header Sectie -->
            <div class="text-center mb-20" data-aos="fade-down">
                <!-- Subtiele badge -->
                <div class="inline-flex items-center justify-center mb-6">
                    <div class="flex items-center space-x-3 px-6 py-3 bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg rounded-full border border-white/20 dark:border-gray-700/20 shadow-lg">
                        <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse"></div>
                        <span class="text-purple-600 dark:text-purple-400 font-medium tracking-wide text-sm uppercase">Expertise & Competenties</span>
                        <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse animation-delay-1000"></div>
                </div>
                </div>

                <!-- Hoofd titel met gradient effect -->
                <h1 class="text-5xl sm:text-6xl md:text-7xl font-black mb-8 tracking-tight">
                    <span class="block bg-gradient-to-r from-gray-900 via-purple-800 to-blue-800 dark:from-white dark:via-purple-200 dark:to-blue-200 bg-clip-text text-transparent leading-tight">
                        Mijn Vaardigheden
                    </span>
                    <span class="block text-3xl sm:text-4xl md:text-5xl font-light text-gray-600 dark:text-gray-300 mt-2">
                        & Expertise
                    </span>
                </h1>

                <!-- Beschrijving met betere typografie -->
                <div class="max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-xl text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
                        Een showcase van mijn technische expertise en professionele competenties, opgebouwd door 
                        jarenlange ervaring, continue ontwikkeling en een passie voor innovatie.
                    </p>
                    
                    <!-- Stats sectie -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
                        <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                            <div class="text-3xl font-bold text-purple-600 dark:text-purple-400">8+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Technologieën</div>
                        </div>
                        <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                            <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">3+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Jaar Ervaring</div>
                        </div>
                        <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                            <div class="text-3xl font-bold text-green-600 dark:text-green-400">50+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Competenties</div>
                        </div>
                        <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                            <div class="text-3xl font-bold text-pink-600 dark:text-pink-400">100+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Uren Studie</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hoofdvaardigheden Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
                
                <!-- Frontend Skills Card -->
                <div class="group" data-aos="fade-right">
                    <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                        
                        <!-- Gradient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-transparent to-purple-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Decoratieve elementen -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-blue-400/20 to-transparent rounded-full -translate-y-32 translate-x-32 group-hover:scale-150 transition-transform duration-700"></div>
                        <div class="absolute bottom-0 left-0 w-48 h-48 bg-gradient-to-tr from-purple-500/15 to-transparent rounded-full translate-y-24 -translate-x-24 group-hover:scale-125 transition-transform duration-700"></div>
                        
                        <!-- Header -->
                        <div class="relative z-10 bg-gradient-to-br from-blue-500 via-blue-600 to-purple-700 p-8">
                            <div class="flex items-center gap-6">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30 group-hover:rotate-6 transition-transform duration-500">
                                    <i class="fas fa-code text-2xl text-white"></i>
                            </div>
                                <div>
                                    <h3 class="text-2xl font-black text-white mb-2">Frontend Development</h3>
                                    <p class="text-blue-100 font-medium">Moderne web interfaces & user experience</p>
                            </div>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10 p-8 space-y-8">
                            
                                <!-- JavaScript -->
                            <div class="group/skill">
                                    <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center shadow-lg border border-yellow-300/20 group-hover/skill:rotate-6 transition-transform duration-300">
                                        <i class="fab fa-js text-2xl text-white"></i>
                                        </div>
                                        <div class="flex-1">
                                        <div class="flex justify-between items-center mb-2">
                                            <h4 class="font-bold text-xl text-gray-900 dark:text-white">JavaScript</h4>
                                            <span class="px-3 py-1.5 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-sm font-medium">Expert</span>
                                            </div>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-yellow-50 dark:bg-yellow-900/20 text-yellow-700 dark:text-yellow-300 rounded-lg text-xs font-medium">ES6+</span>
                                            <span class="px-3 py-1 bg-yellow-50 dark:bg-yellow-900/20 text-yellow-700 dark:text-yellow-300 rounded-lg text-xs font-medium">TypeScript</span>
                                            <span class="px-3 py-1 bg-yellow-50 dark:bg-yellow-900/20 text-yellow-700 dark:text-yellow-300 rounded-lg text-xs font-medium">DOM Manipulation</span>
                                            </div>
                                        </div>
                                </div>
                                <!-- Progress bar -->
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-2">
                                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 95%"></div>
                                    </div>
                                </div>

                            <!-- React -->
                            <div class="group/skill">
                                    <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-400 to-blue-500 flex items-center justify-center shadow-lg border border-cyan-300/20 group-hover/skill:rotate-6 transition-transform duration-300">
                                        <i class="fab fa-react text-2xl text-white"></i>
                                        </div>
                                        <div class="flex-1">
                                        <div class="flex justify-between items-center mb-2">
                                            <h4 class="font-bold text-xl text-gray-900 dark:text-white">React</h4>
                                            <span class="px-3 py-1.5 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-full text-sm font-medium">Gevorderd</span>
                                            </div>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-cyan-50 dark:bg-cyan-900/20 text-cyan-700 dark:text-cyan-300 rounded-lg text-xs font-medium">Hooks</span>
                                            <span class="px-3 py-1 bg-cyan-50 dark:bg-cyan-900/20 text-cyan-700 dark:text-cyan-300 rounded-lg text-xs font-medium">Context API</span>
                                            <span class="px-3 py-1 bg-cyan-50 dark:bg-cyan-900/20 text-cyan-700 dark:text-cyan-300 rounded-lg text-xs font-medium">Redux</span>
                                            </div>
                                        </div>
                                </div>
                                <!-- Progress bar -->
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-2">
                                    <div class="bg-gradient-to-r from-cyan-400 to-blue-500 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 80%"></div>
                                    </div>
                                </div>

                            <!-- Tailwind CSS -->
                            <div class="group/skill">
                                    <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-teal-400 to-cyan-500 flex items-center justify-center shadow-lg border border-teal-300/20 group-hover/skill:rotate-6 transition-transform duration-300">
                                        <i class="fab fa-css3 text-2xl text-white"></i>
                                        </div>
                                        <div class="flex-1">
                                        <div class="flex justify-between items-center mb-2">
                                            <h4 class="font-bold text-xl text-gray-900 dark:text-white">Tailwind CSS</h4>
                                            <span class="px-3 py-1.5 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-full text-sm font-medium">Expert</span>
                                            </div>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-teal-50 dark:bg-teal-900/20 text-teal-700 dark:text-teal-300 rounded-lg text-xs font-medium">Responsive Design</span>
                                            <span class="px-3 py-1 bg-teal-50 dark:bg-teal-900/20 text-teal-700 dark:text-teal-300 rounded-lg text-xs font-medium">Custom Components</span>
                                            <span class="px-3 py-1 bg-teal-50 dark:bg-teal-900/20 text-teal-700 dark:text-teal-300 rounded-lg text-xs font-medium">Dark Mode</span>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Progress bar -->
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-gradient-to-r from-teal-400 to-cyan-500 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills Card -->
                <div class="group" data-aos="fade-left">
                    <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                        
                        <!-- Gradient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 via-transparent to-emerald-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Decoratieve elementen -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-green-400/20 to-transparent rounded-full -translate-y-32 translate-x-32 group-hover:scale-150 transition-transform duration-700"></div>
                        <div class="absolute bottom-0 left-0 w-48 h-48 bg-gradient-to-tr from-emerald-500/15 to-transparent rounded-full translate-y-24 -translate-x-24 group-hover:scale-125 transition-transform duration-700"></div>
                        
                        <!-- Header -->
                        <div class="relative z-10 bg-gradient-to-br from-green-500 via-green-600 to-emerald-700 p-8">
                            <div class="flex items-center gap-6">
                                <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30 group-hover:rotate-6 transition-transform duration-500">
                                    <i class="fas fa-server text-2xl text-white"></i>
                            </div>
                                <div>
                                    <h3 class="text-2xl font-black text-white mb-2">Backend Development</h3>
                                    <p class="text-green-100 font-medium">Server-side architectuur & databases</p>
                            </div>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10 p-8 space-y-8">
                            
                                <!-- PHP -->
                            <div class="group/skill">
                                    <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center shadow-lg border border-purple-300/20 group-hover/skill:rotate-6 transition-transform duration-300">
                                        <i class="fab fa-php text-2xl text-white"></i>
                                        </div>
                                        <div class="flex-1">
                                        <div class="flex justify-between items-center mb-2">
                                            <h4 class="font-bold text-xl text-gray-900 dark:text-white">PHP</h4>
                                            <span class="px-3 py-1.5 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">Expert</span>
                                            </div>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-purple-50 dark:bg-purple-900/20 text-purple-700 dark:text-purple-300 rounded-lg text-xs font-medium">OOP</span>
                                            <span class="px-3 py-1 bg-purple-50 dark:bg-purple-900/20 text-purple-700 dark:text-purple-300 rounded-lg text-xs font-medium">MVC Pattern</span>
                                            <span class="px-3 py-1 bg-purple-50 dark:bg-purple-900/20 text-purple-700 dark:text-purple-300 rounded-lg text-xs font-medium">REST API</span>
                                            </div>
                                        </div>
                                </div>
                                <!-- Progress bar -->
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-2">
                                    <div class="bg-gradient-to-r from-purple-500 to-indigo-600 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 90%"></div>
                                    </div>
                                </div>

                                <!-- Laravel -->
                            <div class="group/skill">
                                    <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-red-500 to-orange-500 flex items-center justify-center shadow-lg border border-red-300/20 group-hover/skill:rotate-6 transition-transform duration-300">
                                        <i class="fab fa-laravel text-2xl text-white"></i>
                                        </div>
                                        <div class="flex-1">
                                        <div class="flex justify-between items-center mb-2">
                                            <h4 class="font-bold text-xl text-gray-900 dark:text-white">Laravel</h4>
                                            <span class="px-3 py-1.5 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-full text-sm font-medium">Gevorderd</span>
                                            </div>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-red-50 dark:bg-red-900/20 text-red-700 dark:text-red-300 rounded-lg text-xs font-medium">Eloquent ORM</span>
                                            <span class="px-3 py-1 bg-red-50 dark:bg-red-900/20 text-red-700 dark:text-red-300 rounded-lg text-xs font-medium">Blade Templates</span>
                                            <span class="px-3 py-1 bg-red-50 dark:bg-red-900/20 text-red-700 dark:text-red-300 rounded-lg text-xs font-medium">Authentication</span>
                                            </div>
                                        </div>
                                </div>
                                <!-- Progress bar -->
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-2">
                                    <div class="bg-gradient-to-r from-red-500 to-orange-500 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 85%"></div>
                                    </div>
                                </div>

                                <!-- MySQL -->
                            <div class="group/skill">
                                    <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg border border-blue-300/20 group-hover/skill:rotate-6 transition-transform duration-300">
                                        <i class="fas fa-database text-2xl text-white"></i>
                                        </div>
                                        <div class="flex-1">
                                        <div class="flex justify-between items-center mb-2">
                                            <h4 class="font-bold text-xl text-gray-900 dark:text-white">MySQL</h4>
                                            <span class="px-3 py-1.5 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium">Gevorderd</span>
                                            </div>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded-lg text-xs font-medium">Complex Queries</span>
                                            <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded-lg text-xs font-medium">Optimization</span>
                                            <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded-lg text-xs font-medium">Indexing</span>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Progress bar -->
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full transition-all duration-1000 ease-out" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Extra Vaardigheden Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                
                <!-- Development Tools Card -->
                <div class="group" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                        
                        <!-- Gradient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 via-transparent to-red-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Header -->
                        <div class="relative z-10 p-6 border-b border-gray-200/20 dark:border-gray-700/20">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-6 transition-transform duration-500">
                                    <i class="fas fa-tools text-xl text-white"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Development Tools</h3>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10 p-6 space-y-4">
                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-orange-50 dark:hover:bg-orange-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fab fa-git-alt text-orange-600 dark:text-orange-400"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Git & Version Control</span>
                                </div>
                            
                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-orange-50 dark:hover:bg-orange-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-blue-500/20 to-cyan-500/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fab fa-docker text-blue-600 dark:text-blue-400"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Docker Containerization</span>
                            </div>
                            
                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-orange-50 dark:hover:bg-orange-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-gray-500/20 to-gray-600/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fas fa-terminal text-gray-600 dark:text-gray-400"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Command Line Interface</span>
                </div>

                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-orange-50 dark:hover:bg-orange-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fas fa-code-branch text-green-600 dark:text-green-400"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">CI/CD Pipelines</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Soft Skills Card -->
                <div class="group" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                        
                        <!-- Gradient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-br from-pink-500/10 via-transparent to-purple-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Header -->
                        <div class="relative z-10 p-6 border-b border-gray-200/20 dark:border-gray-700/20">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-6 transition-transform duration-500">
                                    <i class="fas fa-users text-xl text-white"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Soft Skills</h3>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10 p-6 space-y-4">
                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-pink-50 dark:hover:bg-pink-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-pink-500/20 to-purple-500/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fas fa-comments text-pink-600 dark:text-pink-400"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Communicatie</span>
                                </div>
                            
                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-pink-50 dark:hover:bg-pink-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-pink-500/20 to-purple-500/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fas fa-lightbulb text-pink-600 dark:text-pink-400"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Probleemoplossend Denken</span>
            </div>

                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-pink-50 dark:hover:bg-pink-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-pink-500/20 to-purple-500/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fas fa-handshake text-pink-600 dark:text-pink-400"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Teamwork & Samenwerking</span>
                            </div>

                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-pink-50 dark:hover:bg-pink-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-pink-500/20 to-purple-500/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fas fa-clock text-pink-600 dark:text-pink-400"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Tijdmanagement</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Learning & Growth Card -->
                <div class="group" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                        
                        <!-- Gradient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 via-transparent to-teal-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Header -->
                        <div class="relative z-10 p-6 border-b border-gray-200/20 dark:border-gray-700/20">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-6 transition-transform duration-500">
                                    <i class="fas fa-graduation-cap text-xl text-white"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Groei & Leren</h3>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="relative z-10 p-6 space-y-4">
                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fas fa-book text-emerald-600 dark:text-emerald-400"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Continu Leren</span>
                                </div>
                            
                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fas fa-rocket text-emerald-600 dark:text-emerald-400"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Technische Innovatie</span>
                    </div>

                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fas fa-chart-line text-emerald-600 dark:text-emerald-400"></i>
                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Persoonlijke Ontwikkeling</span>
            </div>

                            <div class="group/item flex items-center gap-3 p-3 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-900/20 transition-colors duration-300">
                                <div class="w-8 h-8 bg-gradient-to-br from-emerald-500/20 to-teal-500/20 rounded-lg flex items-center justify-center group-hover/item:scale-110 transition-transform duration-300">
                                    <i class="fas fa-share-alt text-emerald-600 dark:text-emerald-400"></i>
                                </div>
                                <span class="text-gray-700 dark:text-gray-300 font-medium">Kennis Delen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Praktijkervaring & Projecten Sectie -->
            <div class="mb-20">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center justify-center mb-4" data-aos="fade-down">
                        <span class="h-px w-8 bg-purple-500 mr-3"></span>
                        <span class="text-purple-600 dark:text-purple-400 font-medium tracking-wider uppercase text-sm">Praktische Toepassing</span>
                        <span class="h-px w-8 bg-purple-500 ml-3"></span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white" data-aos="fade-up">
                        Waar ik mijn <span class="text-purple-600 dark:text-purple-400">Skills</span> heb toegepast
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                        Concrete voorbeelden van hoe ik mijn technische vaardigheden heb ingezet in echte projecten
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- PolitiekPraat Experience -->
                    <a href="https://politiekpraat.nl" target="_blank" rel="noopener noreferrer" class="group" data-aos="fade-right">
                        <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                            
                            <!-- Gradient overlay -->
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-transparent to-purple-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Header -->
                            <div class="relative z-10 bg-gradient-to-br from-blue-500 via-purple-600 to-indigo-700 p-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30">
                                        <i class="fas fa-vote-yea text-xl text-white"></i>
                                </div>
                                <div>
                                        <h3 class="text-xl font-bold text-white">PolitiekPraat Platform</h3>
                                        <p class="text-blue-100 text-sm">Laravel + React + MySQL</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="relative z-10 p-6 space-y-6">
                                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                    Bij PolitiekPraat heb ik een volledig politiek discussieplatform gebouwd waar 15.000+ gebruikers 
                                    actief participeren in democratische gesprekken.
                                </p>
                                
                                <div class="space-y-4">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Toegepaste Vaardigheden:</h4>
                                    
                                    <div class="space-y-3">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                                <i class="fab fa-laravel text-red-600 dark:text-red-400 text-sm"></i>
                                                    </div>
                                            <span class="text-gray-700 dark:text-gray-300 text-sm">Laravel backend met Eloquent ORM voor gebruikersbeheer</span>
                                                    </div>
                                        
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                                                <i class="fab fa-react text-blue-600 dark:text-blue-400 text-sm"></i>
                                                    </div>
                                            <span class="text-gray-700 dark:text-gray-300 text-sm">React components voor real-time peilingen en stemwijzer</span>
                                        </div>
                                        
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-database text-green-600 dark:text-green-400 text-sm"></i>
                                            </div>
                                            <span class="text-gray-700 dark:text-gray-300 text-sm">Complexe MySQL queries voor forum en moderatiesysteem</span>
                                    </div>

                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-shield-alt text-purple-600 dark:text-purple-400 text-sm"></i>
                                                    </div>
                                            <span class="text-gray-700 dark:text-gray-300 text-sm">Geavanceerde beveiliging en authenticatie implementatie</span>
                                                    </div>
                                                    </div>
                                        </div>
                                
                                <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                                    <div class="grid grid-cols-2 gap-4 text-center">
                                        <div>
                                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">15K+</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Actieve Gebruikers</div>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">100+</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Blogs</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Elysee Iedema Website Project -->
                    <a href="https://elyseiedema.nl" target="_blank" rel="noopener noreferrer" class="group" data-aos="fade-left">
                        <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                            
                            <!-- Gradient overlay -->
                            <div class="absolute inset-0 bg-gradient-to-br from-pink-500/10 via-transparent to-purple-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Header -->
                            <div class="relative z-10 bg-gradient-to-br from-pink-500 via-purple-600 to-violet-700 p-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30">
                                        <i class="fas fa-paint-brush text-xl text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold text-white">Elyse Iedema Portfolio</h3>
                                        <p class="text-pink-100 text-sm">WordPress + Custom Design + SEO</p>
                                </div>
                                </div>
                            </div>
                            
                            <!-- Content -->
                            <div class="relative z-10 p-6 space-y-6">
                                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                    Een professionele portfolio website voor kunstenaar Elyse Iedema met focus op 
                                    visuele presentatie, gebruikerservaring en SEO-optimalisatie.
                                </p>
                                
                                <div class="space-y-4">
                                    <h4 class="font-semibold text-gray-900 dark:text-white">Technische Highlights:</h4>
                                    
                                    <div class="space-y-3">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center">
                                                <i class="fab fa-wordpress text-red-600 dark:text-red-400 text-sm"></i>
                                            </div>
                                            <span class="text-gray-700 dark:text-gray-300 text-sm">Custom WordPress thema ontwikkeling</span>
                                        </div>
                                        
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-image text-blue-600 dark:text-blue-400 text-sm"></i>
                                            </div>
                                            <span class="text-gray-700 dark:text-gray-300 text-sm">Geavanceerde galerij met lazy loading</span>
                                        </div>
                                        
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-search text-green-600 dark:text-green-400 text-sm"></i>
                                            </div>
                                            <span class="text-gray-700 dark:text-gray-300 text-sm">SEO-geoptimaliseerde content structuur</span>
                                        </div>
                                        
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-mobile-alt text-purple-600 dark:text-purple-400 text-sm"></i>
                                            </div>
                                            <span class="text-gray-700 dark:text-gray-300 text-sm">Responsief design voor alle schermformaten</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                                    <div class="grid grid-cols-2 gap-4 text-center">
                                <div>
                                            <div class="text-2xl font-bold text-pink-600 dark:text-pink-400">50+</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Kunstwerken</div>
                                        </div>
                                        <div>
                                            <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">100%</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">SEO Score</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                                </div>
                            </div>

            <!-- Certificaten & Opleiding Sectie -->
            <div class="mb-20">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center justify-center mb-4" data-aos="fade-down">
                        <span class="h-px w-8 bg-yellow-500 mr-3"></span>
                        <span class="text-yellow-600 dark:text-yellow-400 font-medium tracking-wider uppercase text-sm">Certificaties & Opleiding</span>
                        <span class="h-px w-8 bg-yellow-500 ml-3"></span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white" data-aos="fade-up">
                        Mijn <span class="text-yellow-600 dark:text-yellow-400">Certificaten</span> & Opleiding
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                        Formele bevestiging van mijn vaardigheden en continue professionele ontwikkeling
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                    <!-- ICT Software Development -->
                    <div class="group" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                            
                            <!-- Header -->
                            <div class="relative z-10 bg-gradient-to-br from-blue-500 via-indigo-600 to-purple-700 p-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30">
                                        <i class="fas fa-graduation-cap text-xl text-white"></i>
                                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-white">MBO ICT Software Development</h3>
                                        <p class="text-blue-100 text-sm">ROC Midden Nederland</p>
                                                    </div>
                                                    </div>
                                        </div>
                            
                            <!-- Content -->
                            <div class="relative z-10 p-6">
                                <div class="space-y-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-gray-600 dark:text-gray-300 text-sm">Niveau 4</span>
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-xs font-medium">Afgerond</span>
                                    </div>

                                    <div class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                                        <div class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-green-600 dark:text-green-400"></i>
                                            <span>Object Georiënteerd Programmeren</span>
                                                    </div>
                                        <div class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-green-600 dark:text-green-400"></i>
                                            <span>Database Design & Management</span>
                                                    </div>
                                        <div class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-green-600 dark:text-green-400"></i>
                                            <span>Web Development Fundamentals</span>
                                                    </div>
                                    </div>
                                    
                                    <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-blue-600 dark:text-blue-400">2021-2024</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Studieperiode</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- JavaScript Frameworks -->
                    <div class="group" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                            
                            <!-- Header -->
                            <div class="relative z-10 bg-gradient-to-br from-yellow-500 via-orange-600 to-red-700 p-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30">
                                        <i class="fab fa-js text-xl text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-white">JavaScript & React Certificaat</h3>
                                        <p class="text-yellow-100 text-sm">FreeCodeCamp / Udemy</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Content -->
                            <div class="relative z-10 p-6">
                                <div class="space-y-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-gray-600 dark:text-gray-300 text-sm">Online Certificering</span>
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-xs font-medium">Behaald</span>
                                    </div>
                                    
                                    <div class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                                        <div class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-green-600 dark:text-green-400"></i>
                                            <span>ES6+ Modern JavaScript</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-green-600 dark:text-green-400"></i>
                                            <span>React Hooks & Context API</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-green-600 dark:text-green-400"></i>
                                            <span>State Management & Redux</span>
                                        </div>
                                    </div>
                                    
                                    <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-yellow-600 dark:text-yellow-400">2024</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Behaald</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Laravel & PHP -->
                    <div class="group" data-aos="fade-up" data-aos-delay="300">
                        <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                            
                            <!-- Header -->
                            <div class="relative z-10 bg-gradient-to-br from-red-500 via-pink-600 to-purple-700 p-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30">
                                        <i class="fab fa-laravel text-xl text-white"></i>
                                </div>
                                <div>
                                        <h3 class="text-lg font-bold text-white">Laravel Professional</h3>
                                        <p class="text-red-100 text-sm">Laravel Bootcamp</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="relative z-10 p-6">
                                <div class="space-y-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-gray-600 dark:text-gray-300 text-sm">Framework Specialist</span>
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-xs font-medium">Behaald</span>
                                            </div>
                                    
                                    <div class="space-y-2 text-sm text-gray-600 dark:text-gray-300">
                                        <div class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-green-600 dark:text-green-400"></i>
                                            <span>Eloquent ORM Mastery</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-green-600 dark:text-green-400"></i>
                                            <span>Advanced Authentication</span>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-green-600 dark:text-green-400"></i>
                                            <span>API Development & Testing</span>
                                    </div>
                                </div>

                                    <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                                        <div class="text-center">
                                            <div class="text-lg font-bold text-red-600 dark:text-red-400">2024</div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Behaald</div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ontwikkelingstijdlijn -->
            <div class="mb-20">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center justify-center mb-4" data-aos="fade-down">
                        <span class="h-px w-8 bg-indigo-500 mr-3"></span>
                        <span class="text-indigo-600 dark:text-indigo-400 font-medium tracking-wider uppercase text-sm">Ontwikkelingsreis</span>
                        <span class="h-px w-8 bg-indigo-500 ml-3"></span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white" data-aos="fade-up">
                        Mijn <span class="text-indigo-600 dark:text-indigo-400">Leertraject</span> Timeline
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                        Een chronologisch overzicht van mijn groei en mijlpalen in de technologie wereld
                                        </p>
                                    </div>

                <div class="relative">
                    <!-- Timeline lijn -->
                    <div class="absolute left-1/2 transform -translate-x-0.5 w-1 h-full bg-gradient-to-b from-indigo-500 via-purple-500 to-pink-500 rounded-full"></div>
                    
                    <div class="space-y-12">
                        <!-- 2021 - Start -->
                        <div class="relative flex items-center" data-aos="fade-right">
                            <div class="flex-1 text-right pr-8">
                                <div class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-2xl p-6 border border-white/20 dark:border-gray-700/20 shadow-lg">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Begin van de Reis</h3>
                                    <p class="text-gray-600 dark:text-gray-300 mb-4">Gestart met de MBO ICT Software Development opleiding. Eerste kennismaking met programmeren en webontwikkeling.</p>
                                    <div class="flex justify-end gap-2">
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-xs">HTML/CSS</span>
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-xs">JavaScript</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative z-10 flex items-center justify-center w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full border-4 border-white dark:border-gray-900 shadow-lg">
                                <span class="text-white font-bold text-sm">2021</span>
                            </div>
                            <div class="flex-1 pl-8"></div>
                                </div>

                        <!-- 2022 - Laravel -->
                        <div class="relative flex items-center" data-aos="fade-left">
                            <div class="flex-1 pr-8"></div>
                            <div class="relative z-10 flex items-center justify-center w-12 h-12 bg-gradient-to-r from-red-500 to-pink-600 rounded-full border-4 border-white dark:border-gray-900 shadow-lg">
                                <span class="text-white font-bold text-sm">2022</span>
                                            </div>
                            <div class="flex-1 text-left pl-8">
                                <div class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-2xl p-6 border border-white/20 dark:border-gray-700/20 shadow-lg">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Backend Specialisatie</h3>
                                    <p class="text-gray-600 dark:text-gray-300 mb-4">Diepgaande studie van PHP en Laravel framework. Eerste grote projecten met database integratie en MVC architectuur.</p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-full text-xs">Laravel</span>
                                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-xs">MySQL</span>
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-xs">PHP</span>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2023 - React & JavaScript -->
                        <div class="relative flex items-center" data-aos="fade-right">
                            <div class="flex-1 text-right pr-8">
                                <div class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-2xl p-6 border border-white/20 dark:border-gray-700/20 shadow-lg">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Frontend Verdieping</h3>
                                    <p class="text-gray-600 dark:text-gray-300 mb-4">Focus op moderne JavaScript frameworks. React mastery en start met complexe single-page applications.</p>
                                    <div class="flex justify-end gap-2">
                                        <span class="px-3 py-1 bg-cyan-100 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-full text-xs">React</span>
                                        <span class="px-3 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-full text-xs">ES6+</span>
                                        <span class="px-3 py-1 bg-teal-100 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-full text-xs">Tailwind</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative z-10 flex items-center justify-center w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-full border-4 border-white dark:border-gray-900 shadow-lg">
                                <span class="text-white font-bold text-sm">2023</span>
                            </div>
                            <div class="flex-1 pl-8"></div>
                        </div>

                        <!-- 2024 - Huidige Focus -->
                        <div class="relative flex items-center" data-aos="fade-left">
                            <div class="flex-1 pr-8"></div>
                            <div class="relative z-10 flex items-center justify-center w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full border-4 border-white dark:border-gray-900 shadow-lg">
                                <span class="text-white font-bold text-sm">2024</span>
                            </div>
                            <div class="flex-1 text-left pl-8">
                                <div class="bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-2xl p-6 border border-white/20 dark:border-gray-700/20 shadow-lg">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Full-Stack Expertise</h3>
                                    <p class="text-gray-600 dark:text-gray-300 mb-4">Complete beheersing van de tech stack. Focus op performance, security en schaalbare architectuur. Grote projecten zoals PolitiekPraat.</p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-xs">Full-Stack</span>
                                        <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-full text-xs">DevOps</span>
                                        <span class="px-3 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-full text-xs">Security</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Leerdoelen & Toekomst Sectie -->
            <div class="mb-20">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center justify-center mb-4" data-aos="fade-down">
                        <span class="h-px w-8 bg-green-500 mr-3"></span>
                        <span class="text-green-600 dark:text-green-400 font-medium tracking-wider uppercase text-sm">Continue Ontwikkeling</span>
                        <span class="h-px w-8 bg-green-500 ml-3"></span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white" data-aos="fade-up">
                        Mijn <span class="text-green-600 dark:text-green-400">Leerdoelen</span> & Toekomstvisie
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                        Technologie evolueert constant en ik blijf mijn vaardigheden uitbreiden om voorop te lopen
                                        </p>
                                    </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Nieuwe Technologieën -->
                    <div class="group" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                            
                            <!-- Header -->
                            <div class="relative z-10 p-6 border-b border-gray-200/20 dark:border-gray-700/20">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-6 transition-transform duration-500">
                                        <i class="fas fa-code text-xl text-white"></i>
                                </div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Nieuwe Technologieën</h3>
                            </div>
                        </div>
                            
                            <!-- Content -->
                            <div class="relative z-10 p-6 space-y-4">
                                <div class="space-y-3">
                                    <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                                        <div class="w-8 h-8 bg-gradient-to-br from-blue-500/20 to-cyan-500/20 rounded-lg flex items-center justify-center">
                                            <i class="fab fa-node-js text-blue-600 dark:text-blue-400"></i>
                    </div>
                                        <div>
                                            <span class="font-medium text-gray-900 dark:text-white text-sm">Node.js & Express</span>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Voor backend API development</div>
                </div>
            </div>
                                    
                                    <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                                        <div class="w-8 h-8 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-lg flex items-center justify-center">
                                            <i class="fab fa-vuejs text-green-600 dark:text-green-400"></i>
        </div>
                                        <div>
                                            <span class="font-medium text-gray-900 dark:text-white text-sm">Vue.js 3</span>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Modern frontend framework</div>
    </div>
</div>

                                    <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors">
                                        <div class="w-8 h-8 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-cubes text-purple-600 dark:text-purple-400"></i>
                                        </div>
                                        <div>
                                            <span class="font-medium text-gray-900 dark:text-white text-sm">GraphQL</span>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Efficiënte API queries</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-blue-600 dark:text-blue-400">60%</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">Vooruitgang</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specialisaties -->
                    <div class="group" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                            
                            <!-- Header -->
                            <div class="relative z-10 p-6 border-b border-gray-200/20 dark:border-gray-700/20">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-6 transition-transform duration-500">
                                        <i class="fas fa-bullseye text-xl text-white"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Specialisatie Focus</h3>
                                </div>
                            </div>
                            
                            <!-- Content -->
                            <div class="relative z-10 p-6 space-y-4">
                                <div class="space-y-3">
                                    <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-orange-50 dark:hover:bg-orange-900/20 transition-colors">
                                        <div class="w-8 h-8 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-mobile-alt text-orange-600 dark:text-orange-400"></i>
                                        </div>
                                        <div>
                                            <span class="font-medium text-gray-900 dark:text-white text-sm">Progressive Web Apps</span>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">PWA ontwikkeling & optimalisatie</div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-orange-50 dark:hover:bg-orange-900/20 transition-colors">
                                        <div class="w-8 h-8 bg-gradient-to-br from-purple-500/20 to-indigo-500/20 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-shield-alt text-purple-600 dark:text-purple-400"></i>
                                        </div>
                                        <div>
                                            <span class="font-medium text-gray-900 dark:text-white text-sm">Cybersecurity</span>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Web applicatie beveiliging</div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-orange-50 dark:hover:bg-orange-900/20 transition-colors">
                                        <div class="w-8 h-8 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-tachometer-alt text-green-600 dark:text-green-400"></i>
                                        </div>
                                        <div>
                                            <span class="font-medium text-gray-900 dark:text-white text-sm">Performance Optimalisatie</span>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Snelheid & gebruikerservaring</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-orange-600 dark:text-orange-400">2024</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">Doeljaar</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carrière Doelen -->
                    <div class="group" data-aos="fade-up" data-aos-delay="300">
                        <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                            
                            <!-- Header -->
                            <div class="relative z-10 p-6 border-b border-gray-200/20 dark:border-gray-700/20">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-6 transition-transform duration-500">
                                        <i class="fas fa-rocket text-xl text-white"></i>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Carrière Ambities</h3>
                                </div>
                            </div>
                            
                            <!-- Content -->
                            <div class="relative z-10 p-6 space-y-4">
                                <div class="space-y-3">
                                    <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-purple-50 dark:hover:bg-purple-900/20 transition-colors">
                                        <div class="w-8 h-8 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-users-cog text-purple-600 dark:text-purple-400"></i>
                                        </div>
                                        <div>
                                            <span class="font-medium text-gray-900 dark:text-white text-sm">Tech Lead Rol</span>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Team leiderschap & mentoring</div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-purple-50 dark:hover:bg-purple-900/20 transition-colors">
                                        <div class="w-8 h-8 bg-gradient-to-br from-blue-500/20 to-cyan-500/20 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-building text-blue-600 dark:text-blue-400"></i>
                                        </div>
                                        <div>
                                            <span class="font-medium text-gray-900 dark:text-white text-sm">Eigen Tech Startup</span>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Innovatieve SaaS oplossingen</div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-purple-50 dark:hover:bg-purple-900/20 transition-colors">
                                        <div class="w-8 h-8 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-chalkboard-teacher text-green-600 dark:text-green-400"></i>
                                        </div>
                                        <div>
                                            <span class="font-medium text-gray-900 dark:text-white text-sm">Knowledge Sharing</span>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Blogs, workshops & conferenties</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-purple-600 dark:text-purple-400">5 jaar</div>
                                        <div class="text-xs text-gray-500 dark:text-gray-400">Timeline</div>
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

<!-- Aangepaste CSS voor skills pagina -->
<style>
/* Basis animaties */
@keyframes slow-float {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(30px, -30px) rotate(120deg); }
    66% { transform: translate(-20px, 20px) rotate(240deg); }
}

@keyframes slow-float-reverse {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(-30px, -30px) rotate(-120deg); }
    66% { transform: translate(20px, 20px) rotate(-240deg); }
}

@keyframes slow-float-delayed {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(20px, -40px) rotate(90deg); }
    66% { transform: translate(-30px, 10px) rotate(180deg); }
}

.animate-slow-float { animation: slow-float 20s ease-in-out infinite; }
.animate-slow-float-reverse { animation: slow-float-reverse 25s ease-in-out infinite; }
.animate-slow-float-delayed { animation: slow-float-delayed 30s ease-in-out infinite; }
.animation-delay-1000 { animation-delay: 1s; }

/* Progress bar animaties */
@keyframes progressFill {
    from { width: 0%; }
    to { width: var(--progress-width); }
}

.progress-bar {
    animation: progressFill 2s ease-out forwards;
}

/* Skill card hover effecten */
.group/skill:hover .w-14 {
    transform: rotate(6deg) scale(1.05);
}

/* Glasmorphism effecten */
.backdrop-blur-xl {
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
}

/* Performance optimalisaties */
.group {
    will-change: auto;
}

.group:hover {
    will-change: transform;
}

/* Responsive verbeteringen */
@media (max-width: 768px) {
    .group { transform: none !important; }
    .group:hover { transform: none !important; }
    .animate-slow-float, .animate-slow-float-reverse, .animate-slow-float-delayed { animation: none; }
}

/* Toegankelijkheid */
@media (prefers-reduced-motion: reduce) {
    * { animation-duration: 0.01ms !important; transition-duration: 0.01ms !important; }
    .group:hover { transform: none; }
    .progress-bar { animation: none; }
}

/* Focus states voor toegankelijkheid */
.group:focus-visible {
    outline: 2px solid #3b82f6;
    outline-offset: 2px;
}

/* Dark mode verbeteringen */
@media (prefers-color-scheme: dark) {
    .group {
        box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.05);
    }
}

/* Hover glow effecten */
.group:hover .shadow-xl {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
}

.dark .group:hover .shadow-xl {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
}

/* Custom scrollbar voor webkit browsers */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: rgba(229, 231, 235, 0.3);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb {
    background: rgba(59, 130, 246, 0.6);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: rgba(59, 130, 246, 0.8);
}

.dark ::-webkit-scrollbar-track {
    background: rgba(55, 65, 81, 0.3);
}

.dark ::-webkit-scrollbar-thumb {
    background: rgba(147, 197, 253, 0.6);
}

.dark ::-webkit-scrollbar-thumb:hover {
    background: rgba(147, 197, 253, 0.8);
}
</style>

<!-- Geavanceerde JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Performance geoptimaliseerde progress bar animaties
    function animateProgressBars() {
        const progressBars = document.querySelectorAll('.progress-bar, [style*="width:"]');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                    const bar = entry.target;
                    const finalWidth = bar.style.width || bar.getAttribute('data-width') || '0%';
                    
                    // Reset voor animatie
                    bar.style.width = '0%';
                    bar.classList.add('animated');
                    
                    // Animeer met staggered timing
                requestAnimationFrame(() => {
                        setTimeout(() => {
                    bar.style.width = finalWidth;
                            bar.style.transition = 'width 1.5s cubic-bezier(0.4, 0, 0.2, 1)';
                        }, Math.random() * 200);
                    });
                    
                    observer.unobserve(bar);
                }
            });
        }, {
            threshold: 0.3,
            rootMargin: '50px'
        });
        
        progressBars.forEach(bar => observer.observe(bar));
    }
    
    // Skill card hover effecten met performance optimalisatie
    function initializeSkillCards() {
        const skillCards = document.querySelectorAll('.group');
        
        skillCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.willChange = 'transform';
                
                // Voeg subtiele parallax effecten toe
                const decorativeElements = card.querySelectorAll('.absolute');
                decorativeElements.forEach((elem, index) => {
                    elem.style.transform = `translate(${index * 2}px, ${index * -1}px)`;
                    elem.style.transition = 'transform 0.3s ease-out';
                });
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.willChange = 'auto';
                
                // Reset decoratieve elementen
                const decorativeElements = card.querySelectorAll('.absolute');
                decorativeElements.forEach(elem => {
                    elem.style.transform = '';
                });
            });
        });
    }
    
    // Smooth scroll naar secties
    function initializeSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const targetId = link.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    }
    
    // Keyboard navigatie voor toegankelijkheid
    function initializeKeyboardNavigation() {
        const focusableElements = document.querySelectorAll('.group, button, a, input, select, textarea, [tabindex]:not([tabindex="-1"])');
        
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Tab') {
                // Voeg focus styling toe voor keyboard gebruikers
                const activeElement = document.activeElement;
                if (activeElement && activeElement.classList.contains('group')) {
                    activeElement.style.outline = '2px solid #3b82f6';
                    activeElement.style.outlineOffset = '2px';
                }
            }
        });
        
        // Verwijder focus styling na mouse interactie
        document.addEventListener('mousedown', () => {
            focusableElements.forEach(el => {
                el.style.outline = '';
                el.style.outlineOffset = '';
            });
        });
    }
    
    // Dark mode detection en aanpassingen
    function initializeDarkModeSupport() {
        const darkModeMediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
        
        function handleDarkModeChange(e) {
            if (e.matches) {
                document.body.classList.add('dark-mode');
            } else {
                document.body.classList.remove('dark-mode');
            }
        }
        
        darkModeMediaQuery.addListener(handleDarkModeChange);
        handleDarkModeChange(darkModeMediaQuery);
    }
    
    // Performance monitoring
    function initializePerformanceMonitoring() {
        if ('performance' in window && 'PerformanceObserver' in window) {
            const observer = new PerformanceObserver((list) => {
                const entries = list.getEntries();
                entries.forEach(entry => {
                    if (entry.entryType === 'paint' && entry.name === 'first-contentful-paint') {
                        console.log('First Contentful Paint:', entry.startTime);
                    }
                });
            });
            
            try {
                observer.observe({ entryTypes: ['paint'] });
            } catch (e) {
                // Fail gracefully voor browsers die dit niet ondersteunen
            }
        }
    }
    
    // Lazy loading voor afbeeldingen (indien aanwezig)
    function initializeLazyLoading() {
        if ('IntersectionObserver' in window && 'loading' in HTMLImageElement.prototype) {
            const lazyImages = document.querySelectorAll('img[data-src]');
            
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        imageObserver.unobserve(img);
                    }
        });
    });

            lazyImages.forEach(img => imageObserver.observe(img));
        }
    }
    
    // Initialiseer alle functionaliteiten
    try {
        animateProgressBars();
        initializeSkillCards();
        initializeSmoothScroll();
        initializeKeyboardNavigation();
        initializeDarkModeSupport();
        initializePerformanceMonitoring();
        initializeLazyLoading();
        
        // AOS initialisatie met aangepaste instellingen
        if (typeof AOS !== 'undefined') {
    AOS.init({
        duration: 800,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic',
                disable: function() {
                    return window.innerWidth < 768;
                },
        throttleDelay: 99,
        mirror: false
    });
        }
        
    } catch (error) {
        console.warn('Er is een fout opgetreden bij het initialiseren van de skills pagina:', error);
    }
    
    // Error handling voor uncaught errors
    window.addEventListener('error', (e) => {
        console.warn('JavaScript fout:', e.error);
    });
    
    // Performance optimalisatie: preload kritieke resources
    if ('requestIdleCallback' in window) {
        requestIdleCallback(() => {
            // Preload kritieke CSS en JavaScript
            const linkPreload = document.createElement('link');
            linkPreload.rel = 'preload';
            linkPreload.as = 'style';
            linkPreload.href = '/assets/css/critical.css';
            document.head.appendChild(linkPreload);
        });
    }
});

// Service Worker registratie voor offline support (optioneel)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(() => console.log('Service Worker geregistreerd'))
            .catch(() => {
                // Fail gracefully
            });
    });
}

// Progressive Web App installatie prompt
let deferredPrompt;
window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();
    deferredPrompt = e;
    
    // Toon installatie button indien gewenst
    const installButton = document.querySelector('#install-button');
    if (installButton) {
        installButton.style.display = 'block';
        installButton.addEventListener('click', () => {
            deferredPrompt.prompt();
        });
    }
});
</script> 

<?php 
$includesFooterPath = file_exists('includes/footer.php') ? 'includes/footer.php' : '../includes/footer.php';
include $includesFooterPath; 
?> 