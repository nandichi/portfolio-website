<?php
$pageTitle = "Home";
$currentPage = "home";
$pageDescription = "Welkom op de portfolio website van Naoufal Andichi. Ontdek mijn projecten, vaardigheden en ervaring als ontwikkelaar.";
$pageKeywords = "Naoufal Andichi, portfolio, ontwikkelaar, webdevelopment, programmeren, frontend, backend, fullstack";

// Bepaal de correcte pad voor includes gebaseerd op uitvoeringscontext
$includesPath = file_exists('includes/header.php') ? 'includes/header.php' : '../includes/header.php';

// Bepaal ook het correcte pad voor assets
$assetsPath = file_exists('assets/images/profile.jpg') ? 'assets' : '../assets';

include $includesPath;
?>

<style>
/* Custom Animations - Same as about.php */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

@keyframes slideInLeft {
    from { transform: translateX(-100%); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

@keyframes slideInRight {
    from { transform: translateX(100%); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

@keyframes slideInUp {
    from { transform: translateY(100%); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@keyframes fadeInScale {
    from { transform: scale(0.8); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes pulse {
    0%, 100% { opacity: 0.4; }
    50% { opacity: 1; }
}

@keyframes morphing {
    0%, 100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
    50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
}

.float-animation { animation: float 6s ease-in-out infinite; }
.slide-in-left { animation: slideInLeft 0.8s ease-out forwards; }
.slide-in-right { animation: slideInRight 0.8s ease-out forwards; }
.slide-in-up { animation: slideInUp 0.8s ease-out forwards; }
.fade-in-scale { animation: fadeInScale 0.8s ease-out forwards; }
.gradient-shift { 
    background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c);
    background-size: 400% 400%;
    animation: gradientShift 15s ease infinite;
}
.pulse-custom { animation: pulse 3s infinite; }
.morphing-shape { animation: morphing 8s ease-in-out infinite; }

/* Animation delays */
.animation-delay-500 { animation-delay: 0.5s; }
.animation-delay-1000 { animation-delay: 1s; }
.animation-delay-1500 { animation-delay: 1.5s; }

/* Glassmorphism Effect */
.glass {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.dark .glass {
    background: rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Smooth scroll behavior */
html { scroll-behavior: smooth; }
</style>

<!-- Stap 1: Basis Hero Structuur met Moderne Layout -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20 sm:pt-16 lg:pt-0">
    <!-- Stap 2: Geavanceerde Achtergrond Lagen -->
    <!-- Primaire gradient achtergrond -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-blue-50/80 to-indigo-50 dark:from-gray-950 dark:via-blue-950/50 dark:to-indigo-950"></div>
    
    <!-- Stap 3: Subtiele Geometrische Patronen -->
    <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05]">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, rgb(59 130 246 / 0.3) 1px, transparent 0); background-size: 50px 50px;"></div>
    </div>
    
    <!-- Stap 4: Bewegende Gradient Orbs voor Diepte -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Primaire orb -->
        <div class="absolute -top-1/4 -right-1/4 w-96 h-96 bg-gradient-to-br from-blue-400/20 to-indigo-500/20 dark:from-blue-500/10 dark:to-indigo-600/10 rounded-full blur-3xl morphing-shape"></div>
        
        <!-- Secundaire orb -->
        <div class="absolute -bottom-1/4 -left-1/4 w-96 h-96 bg-gradient-to-tr from-indigo-400/20 to-purple-500/20 dark:from-indigo-500/10 dark:to-purple-600/10 rounded-full blur-3xl morphing-shape" style="animation-delay: -2s;"></div>
        
        <!-- Tertiaire orb voor balans -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-blue-300/15 to-indigo-400/15 dark:from-blue-600/8 dark:to-indigo-700/8 rounded-full blur-2xl morphing-shape" style="animation-delay: -4s;"></div>
    </div>

    <!-- Stap 5: Professionele Content Container -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-8 sm:py-12 lg:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center">
            
            <!-- Stap 6: Linker Kolom - Professionele Tekstinhoud -->
            <div class="order-2 lg:order-1 text-center lg:text-left space-y-6 sm:space-y-8 slide-in-left">

                <!-- Hoofdtitel met moderne typografie -->
                <div class="space-y-3 sm:space-y-4">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-bold tracking-tight leading-tight">
                        <span class="block text-gray-900 dark:text-white">
                            Hallo, ik ben
                        </span>
                        <span class="block mt-1 sm:mt-2">
                            <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">
                                Naoufal Andichi
                            </span>
                        </span>
                    </h1>
                    
                    <!-- Professionele subtitle -->
                    <div class="relative">
                        <h2 class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl text-gray-600 dark:text-gray-300 font-light leading-relaxed">
                            <span class="relative">
                                Full Stack Developer
                                <svg class="absolute -bottom-1 sm:-bottom-2 left-0 w-full h-0.5 sm:h-1 text-blue-500/30" viewBox="0 0 100 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2C25 0.5 75 0.5 100 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </span>
                        </h2>
                    </div>
                </div>

                <!-- Elegante beschrijving -->
                <div class="max-w-2xl mx-auto lg:mx-0">
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-600 dark:text-gray-300 leading-relaxed">
                        Ik ontwikkel maatwerk webapplicaties in <span class="font-semibold text-blue-600 dark:text-blue-400">PHP, MySQL en TailwindCSS.</span>
                        <span class="font-medium text-gray-700 dark:text-gray-200">
                            Met drie jaar ervaring in fullstack development
                        </span>
                        bouw ik robuuste backend-systemen, moderne frontends en intuïtieve gebruikerservaringen die echte problemen oplossen.
                    </p>
                </div>
                <!-- Professionele statistieken -->
                <div class="grid grid-cols-3 gap-3 sm:gap-4 lg:gap-6 max-w-xs sm:max-w-sm lg:max-w-lg mx-auto lg:mx-0">
                    <div class="text-center lg:text-left">
                        <div class="text-lg sm:text-xl lg:text-2xl xl:text-3xl font-bold text-blue-600 dark:text-blue-400">5+</div>
                        <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 font-medium">Jaar Ervaring</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-lg sm:text-xl lg:text-2xl xl:text-3xl font-bold text-indigo-600 dark:text-indigo-400">15+</div>
                        <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 font-medium">Projecten</div>
                    </div>
                    <div class="text-center lg:text-left">
                        <div class="text-lg sm:text-xl lg:text-2xl xl:text-3xl font-bold text-purple-600 dark:text-purple-400">100%</div>
                        <div class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 font-medium">Passie</div>
                    </div>
                </div>

                <!-- Premium Call-to-Action Knoppen -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center lg:justify-start">
                    <!-- Primaire CTA -->
                    <a href="<?php echo $assetsPath === 'assets' ? 'contact' : 'contact'; ?>" 
                       class="group relative inline-flex items-center justify-center px-4 py-3 sm:px-6 sm:py-3 lg:px-8 lg:py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <span class="relative z-10 flex items-center gap-2 sm:gap-3">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 lg:w-5 lg:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            <span class="text-xs sm:text-sm lg:text-base">Laten we praten</span>
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                    </a>
                    
                    <!-- Secundaire CTA -->
                    <a href="<?php echo $assetsPath === 'assets' ? 'projects' : 'projects'; ?>" 
                       class="group relative inline-flex items-center justify-center px-4 py-3 sm:px-6 sm:py-3 lg:px-8 lg:py-4 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm text-gray-700 dark:text-gray-200 font-semibold rounded-xl border border-gray-200/50 dark:border-gray-700/50 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:bg-white dark:hover:bg-gray-800">
                        <span class="flex items-center gap-2 sm:gap-3">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 lg:w-5 lg:h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                            <span class="text-xs sm:text-sm lg:text-base">Bekijk Portfolio</span>
                        </span>
                    </a>
                </div>

                <!-- Social Links met elegante styling -->
                <div class="flex flex-col sm:flex-row items-center gap-3 sm:gap-4 lg:gap-6 justify-center lg:justify-start">
                    <span class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 font-medium">Volg mij op:</span>
                    <div class="flex items-center gap-2 sm:gap-3 lg:gap-4">
                        <a href="https://www.linkedin.com/in/naoufalandichi/" target="_blank" rel="noopener noreferrer" 
                           class="group p-2 sm:p-2.5 lg:p-3 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:bg-blue-50 dark:hover:bg-blue-900/20">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 lg:w-5 lg:h-5 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="https://github.com/nandichi" target="_blank" rel="noopener noreferrer" 
                           class="group p-2 sm:p-2.5 lg:p-3 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 hover:bg-gray-50 dark:hover:bg-gray-700/50">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 lg:w-5 lg:h-5 text-gray-700 dark:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Stap 7: Rechter Kolom - Elegante Profiel Sectie -->
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end mb-6 lg:mb-0 slide-in-right">
                <div class="relative group">
                    <!-- Decoratieve achtergrond ringen -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400/20 to-indigo-500/20 dark:from-blue-500/10 dark:to-indigo-600/10 rounded-full blur-3xl transform group-hover:scale-110 transition-transform duration-700 float-animation"></div>
                    
                    <!-- Profiel foto container -->
                    <div class="relative w-48 h-48 sm:w-56 sm:h-56 md:w-64 md:h-64 lg:w-72 lg:h-72 xl:w-80 xl:h-80 2xl:w-96 2xl:h-96">
                        <!-- Outer decorative ring -->
                        <div class="absolute inset-0 rounded-full bg-gradient-to-br from-blue-500 via-indigo-500 to-purple-500 p-1 shadow-2xl group-hover:shadow-blue-500/25 transition-all duration-300">
                            <!-- Inner ring -->
                            <div class="absolute inset-1 rounded-full bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 p-2 sm:p-3">
                                <!-- Image container -->
                                <div class="relative w-full h-full rounded-full overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800">
                                    <img src="<?php echo $assetsPath; ?>/images/foto-3.jpeg" 
                                         alt="Naoufal Andichi - Full Stack Developer" 
                                         class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-700"
                                         loading="eager"
                                         decoding="async">
                                    
                                    <!-- Subtle overlay -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating elements -->
                        <div class="absolute -top-1 sm:-top-2 md:-top-4 -right-1 sm:-right-2 md:-right-4 w-4 h-4 sm:w-6 sm:h-6 md:w-8 md:h-8 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full shadow-lg float-animation"></div>
                        <div class="absolute -bottom-1 sm:-bottom-2 md:-bottom-4 -left-1 sm:-left-2 md:-left-4 w-3 h-3 sm:w-4 sm:h-4 md:w-6 md:h-6 bg-gradient-to-br from-indigo-400 to-indigo-600 rounded-full shadow-lg float-animation animation-delay-500"></div>
                        <div class="absolute top-4 sm:top-6 md:top-8 -left-2 sm:-left-4 md:-left-8 w-2 h-2 sm:w-3 sm:h-3 md:w-4 md:h-4 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full shadow-lg float-animation animation-delay-1000"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Projects & Skills Overview -->
<section class="py-16 bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm border-t border-gray-100 dark:border-gray-800 slide-in-up">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Recent Projects -->
            <div class="space-y-4 sm:space-y-6 slide-in-left">
                <div class="flex items-center gap-2 sm:gap-3">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">Recente Projecten</h3>
                </div>
                
                <div class="space-y-3 sm:space-y-4">
                    <div class="p-3 sm:p-4 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 rounded-xl border border-blue-100 dark:border-blue-700/30 hover:shadow-lg transition-all duration-300">
                        <h4 class="font-semibold text-gray-900 dark:text-white mb-2 text-sm sm:text-base">E-commerce Platform</h4>
                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-300 mb-3">Volledig responsieve webshop met PHP/MySQL backend en moderne checkout-flow</p>
                        <div class="flex gap-1.5 sm:gap-2">
                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-800/30 text-blue-700 dark:text-blue-300 text-xs rounded-md">PHP</span>
                            <span class="px-2 py-1 bg-green-100 dark:bg-green-800/30 text-green-700 dark:text-green-300 text-xs rounded-md">MySQL</span>
                            <span class="px-2 py-1 bg-purple-100 dark:bg-purple-800/30 text-purple-700 dark:text-purple-300 text-xs rounded-md">TailwindCSS</span>
                        </div>
                    </div>
                    
                    <div class="p-3 sm:p-4 bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-indigo-900/20 dark:to-purple-900/20 rounded-xl border border-indigo-100 dark:border-indigo-700/30 hover:shadow-lg transition-all duration-300">
                        <h4 class="font-semibold text-gray-900 dark:text-white mb-2 text-sm sm:text-base">CRM Dashboard</h4>
                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-300 mb-3">Intuïtief beheersysteem voor klantenbeheer met real-time analytics</p>
                        <div class="flex gap-1.5 sm:gap-2">
                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-800/30 text-blue-700 dark:text-blue-300 text-xs rounded-md">PHP</span>
                            <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-800/30 text-yellow-700 dark:text-yellow-300 text-xs rounded-md">JavaScript</span>
                            <span class="px-2 py-1 bg-red-100 dark:bg-red-800/30 text-red-700 dark:text-red-300 text-xs rounded-md">Chart.js</span>
                        </div>
                    </div>
                    
                    <div class="p-3 sm:p-4 bg-gradient-to-r from-emerald-50 to-cyan-50 dark:from-emerald-900/20 dark:to-cyan-900/20 rounded-xl border border-emerald-100 dark:border-emerald-700/30 hover:shadow-lg transition-all duration-300">
                        <h4 class="font-semibold text-gray-900 dark:text-white mb-2 text-sm sm:text-base">PolitiekPraat</h4>
                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-300 mb-3">Interactief discussieplatform voor politieke onderwerpen met real-time chat en moderatie</p>
                        <div class="flex gap-1.5 sm:gap-2">
                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-800/30 text-blue-700 dark:text-blue-300 text-xs rounded-md">PHP</span>
                            <span class="px-2 py-1 bg-green-100 dark:bg-green-800/30 text-green-700 dark:text-green-300 text-xs rounded-md">MySQL</span>
                            <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-800/30 text-yellow-700 dark:text-yellow-300 text-xs rounded-md">WebSocket</span>
                        </div>
                    </div>
                    
                    <div class="p-3 sm:p-4 bg-gradient-to-r from-green-50 to-teal-50 dark:from-green-900/20 dark:to-teal-900/20 rounded-xl border border-green-100 dark:border-green-700/30 hover:shadow-lg transition-all duration-300">
                        <h4 class="font-semibold text-gray-900 dark:text-white mb-2 text-sm sm:text-base">Portfolio Website</h4>
                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-300 mb-3">Moderne, responsive portfolio met dark mode en optimale performance</p>
                        <div class="flex gap-1.5 sm:gap-2">
                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-800/30 text-blue-700 dark:text-blue-300 text-xs rounded-md">PHP</span>
                            <span class="px-2 py-1 bg-purple-100 dark:bg-purple-800/30 text-purple-700 dark:text-purple-300 text-xs rounded-md">TailwindCSS</span>
                            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700/30 text-gray-700 dark:text-gray-300 text-xs rounded-md">Responsive</span>
                        </div>
                    </div>
                </div>
                
                <a href="<?php echo $assetsPath === 'assets' ? 'projects' : 'projects'; ?>" 
                   class="inline-flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 font-medium transition-colors duration-300">
                    Bekijk alle projecten
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
            
            <!-- Core Skills -->
            <div class="space-y-4 sm:space-y-6 slide-in-right">
                <div class="flex items-center gap-2 sm:gap-3">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 lg:w-6 lg:h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">Kernvaardigheden</h3>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                    <div class="flex items-center gap-2 sm:gap-3 p-2.5 sm:p-3 bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 rounded-xl">
                        <div class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xs sm:text-sm">PHP</span>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 dark:text-white text-xs sm:text-sm">PHP</div>
                            <div class="text-xs text-gray-600 dark:text-gray-400">Expert Level</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 sm:gap-3 p-2.5 sm:p-3 bg-gradient-to-r from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/20 rounded-xl">
                        <div class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 bg-green-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xs">SQL</span>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 dark:text-white text-xs sm:text-sm">MySQL</div>
                            <div class="text-xs text-gray-600 dark:text-gray-400">Advanced</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 sm:gap-3 p-2.5 sm:p-3 bg-gradient-to-r from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 rounded-xl">
                        <div class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 bg-purple-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xs">CSS</span>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 dark:text-white text-xs sm:text-sm">TailwindCSS</div>
                            <div class="text-xs text-gray-600 dark:text-gray-400">Expert Level</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 sm:gap-3 p-2.5 sm:p-3 bg-gradient-to-r from-yellow-50 to-yellow-100 dark:from-yellow-900/20 dark:to-yellow-800/20 rounded-xl">
                        <div class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 bg-yellow-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xs">JS</span>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 dark:text-white text-xs sm:text-sm">JavaScript</div>
                            <div class="text-xs text-gray-600 dark:text-gray-400">Advanced</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 sm:gap-3 p-2.5 sm:p-3 bg-gradient-to-r from-red-50 to-red-100 dark:from-red-900/20 dark:to-red-800/20 rounded-xl">
                        <div class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 bg-red-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xs">GIT</span>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 dark:text-white text-xs sm:text-sm">Git & GitHub</div>
                            <div class="text-xs text-gray-600 dark:text-gray-400">Professional</div>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-2 sm:gap-3 p-2.5 sm:p-3 bg-gradient-to-r from-indigo-50 to-indigo-100 dark:from-indigo-900/20 dark:to-indigo-800/20 rounded-xl">
                        <div class="w-6 h-6 sm:w-7 sm:h-7 lg:w-8 lg:h-8 bg-indigo-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-xs">UX</span>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 dark:text-white text-xs sm:text-sm">UI/UX Design</div>
                            <div class="text-xs text-gray-600 dark:text-gray-400">Advanced</div>
                        </div>
                    </div>
                </div>
                
                <a href="<?php echo $assetsPath === 'assets' ? 'skills' : 'skills'; ?>" 
                   class="inline-flex items-center gap-2 text-indigo-600 dark:text-indigo-400 hover:text-indigo-700 dark:hover:text-indigo-300 font-medium transition-colors duration-300">
                    Alle vaardigheden bekijken
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stap 9: Aangepaste CSS voor Geavanceerde Animaties -->
<style>
/* Aangepaste keyframe animaties */
@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes glow {
    0%, 100% {
        box-shadow: 0 0 20px rgba(59, 130, 246, 0.1);
    }
    50% {
        box-shadow: 0 0 40px rgba(59, 130, 246, 0.2);
    }
}

@keyframes gradient-shift {
    0%, 100% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
}

/* Hover effecten voor interactieve elementen */
.group:hover .animate-float {
    animation: float 3s ease-in-out infinite;
}

/* Responsieve aanpassingen */
@media (max-width: 640px) {
    .text-4xl {
        font-size: 2.5rem;
    }
    .text-5xl {
        font-size: 3rem;
    }
}

/* Performance optimalisaties */
.backdrop-blur-sm {
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
}

/* Dark mode verbeteringen */
@media (prefers-color-scheme: dark) {
    .bg-gradient-to-br {
        background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
    }
}
</style>

<!-- Professionele Kwaliteiten Sectie -->
<section class="relative py-16 lg:py-24 overflow-hidden bg-gradient-to-br from-slate-50 via-white to-blue-50/30 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900/95">
    <!-- Subtiele achtergrond elementen -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-100/20 via-transparent to-transparent dark:from-blue-900/10"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_var(--tw-gradient-stops))] from-indigo-100/20 via-transparent to-transparent dark:from-indigo-900/10"></div>
        
        <!-- Subtiele decoratie -->
        <div class="absolute top-20 right-20 w-2 h-2 bg-blue-500/20 rounded-full animate-pulse"></div>
        <div class="absolute bottom-20 left-20 w-1.5 h-1.5 bg-purple-500/20 rounded-full animate-pulse delay-700"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Compacte Header -->
        <div class="text-center mb-12 lg:mb-16">
            <!-- Badge -->
            <div class="inline-flex items-center justify-center mb-6">
                <div class="px-6 py-2 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 rounded-full shadow-lg">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">Professionele Kwaliteiten</span>
                    </div>
                </div>
            </div>
            
            <!-- Titel -->
            <h2 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                <span class="text-gray-900 dark:text-white">Professionele</span>
                <br>
                <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">Kwaliteiten</span>
            </h2>
            
            <!-- Ondertitel -->
            <p class="max-w-3xl mx-auto text-lg md:text-xl text-gray-600 dark:text-gray-300 leading-relaxed">
                Een gepassioneerde developer die technische expertise combineert met creatieve oplossingen
            </p>
        </div>

        <!-- Compacte Kwaliteiten Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            
            <!-- Card 1: Technische Expertise -->
            <div class="group">
                <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/30 transform hover:-translate-y-2">
                    
                    <!-- Top accent -->
                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 rounded-t-2xl"></div>
                    
                    <!-- Content -->
                    <div class="p-6">
                        <!-- Header -->
                        <div class="flex items-start gap-4 mb-6">
                            <!-- Icoon -->
                            <div class="flex-shrink-0 relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-blue-500/25 transition-all duration-500 transform group-hover:scale-110">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Titel -->
                            <div class="flex-grow">
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                                    Technische Expertise
                                </h3>
                                <div class="w-12 h-0.5 bg-gradient-to-r from-blue-500 to-transparent group-hover:w-16 transition-all duration-300"></div>
                            </div>
                        </div>
                        
                        <!-- Beschrijving -->
                        <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm leading-relaxed">
                            Onderscheidend door moderne ontwikkelmethoden
                        </p>
                        
                        <!-- Features -->
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-3 text-sm">
                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                                <span class="text-gray-700 dark:text-gray-300">Modern Development Stack</span>
                            </li>
                            <li class="flex items-center gap-3 text-sm">
                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                                <span class="text-gray-700 dark:text-gray-300">Clean Code Practices</span>
                            </li>
                            <li class="flex items-center gap-3 text-sm">
                                <div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div>
                                <span class="text-gray-700 dark:text-gray-300">Performance Optimalisatie</span>
                            </li>
                        </ul>
                        
                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-lg text-xs font-medium">Modern</span>
                            <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-lg text-xs font-medium">Clean Code</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Soft Skills -->
            <div class="group">
                <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/30 transform hover:-translate-y-2">
                    
                    <!-- Top accent -->
                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-purple-400 via-purple-500 to-purple-600 rounded-t-2xl"></div>
                    
                    <!-- Content -->
                    <div class="p-6">
                        <!-- Header -->
                        <div class="flex items-start gap-4 mb-6">
                            <!-- Icoon -->
                            <div class="flex-shrink-0 relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-purple-500/25 transition-all duration-500 transform group-hover:scale-110">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Titel -->
                            <div class="flex-grow">
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                                    Soft Skills
                                </h3>
                                <div class="w-12 h-0.5 bg-gradient-to-r from-purple-500 to-transparent group-hover:w-16 transition-all duration-300"></div>
                            </div>
                        </div>
                        
                        <!-- Beschrijving -->
                        <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm leading-relaxed">
                            Onderscheidend door mensgerichte vaardigheden
                        </p>
                        
                        <!-- Features -->
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-3 text-sm">
                                <div class="w-1.5 h-1.5 bg-purple-500 rounded-full"></div>
                                <span class="text-gray-700 dark:text-gray-300">Effectieve Communicatie</span>
                            </li>
                            <li class="flex items-center gap-3 text-sm">
                                <div class="w-1.5 h-1.5 bg-purple-500 rounded-full"></div>
                                <span class="text-gray-700 dark:text-gray-300">Proactieve Houding</span>
                            </li>
                            <li class="flex items-center gap-3 text-sm">
                                <div class="w-1.5 h-1.5 bg-purple-500 rounded-full"></div>
                                <span class="text-gray-700 dark:text-gray-300">Teamwork & Samenwerking</span>
                            </li>
                        </ul>
                        
                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-lg text-xs font-medium">Communicatie</span>
                            <span class="px-3 py-1 bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-lg text-xs font-medium">Teamwork</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: Innovatieve Aanpak -->
            <div class="group">
                <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-200/50 dark:border-gray-700/30 transform hover:-translate-y-2">
                    
                    <!-- Top accent -->
                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-emerald-400 via-emerald-500 to-emerald-600 rounded-t-2xl"></div>
                    
                    <!-- Content -->
                    <div class="p-6">
                        <!-- Header -->
                        <div class="flex items-start gap-4 mb-6">
                            <!-- Icoon -->
                            <div class="flex-shrink-0 relative">
                                <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg group-hover:shadow-emerald-500/25 transition-all duration-500 transform group-hover:scale-110">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Titel -->
                            <div class="flex-grow">
                                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                                    Innovatieve Aanpak
                                </h3>
                                <div class="w-12 h-0.5 bg-gradient-to-r from-emerald-500 to-transparent group-hover:w-16 transition-all duration-300"></div>
                            </div>
                        </div>
                        
                        <!-- Beschrijving -->
                        <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm leading-relaxed">
                            Onderscheidend door vooruitstrevende oplossingen
                        </p>
                        
                        <!-- Features -->
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-3 text-sm">
                                <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div>
                                <span class="text-gray-700 dark:text-gray-300">Proactief meedenken in oplossingen</span>
                            </li>
                            <li class="flex items-center gap-3 text-sm">
                                <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div>
                                <span class="text-gray-700 dark:text-gray-300">Snelle adaptatie nieuwe technologieën</span>
                            </li>
                            <li class="flex items-center gap-3 text-sm">
                                <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div>
                                <span class="text-gray-700 dark:text-gray-300">Focus op schaalbaarheid & onderhoud</span>
                            </li>
                        </ul>
                        
                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 rounded-lg text-xs font-medium">Probleemoplossend</span>
                            <span class="px-3 py-1 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 rounded-lg text-xs font-medium">Toekomstgericht</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Premium Afsluiting met Inspiratie -->
        <div class="mt-32 text-center">
            <!-- Premium separator met gradient dots -->
            <div class="flex items-center justify-center gap-6 mb-16">
                <div class="flex gap-3">
                    <div class="w-3 h-3 rounded-full bg-gradient-to-r from-blue-500 to-indigo-500 animate-pulse shadow-lg"></div>
                    <div class="w-3 h-3 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 animate-pulse delay-300 shadow-lg"></div>
                    <div class="w-3 h-3 rounded-full bg-gradient-to-r from-emerald-500 to-teal-500 animate-pulse delay-500 shadow-lg"></div>
                </div>
            </div>
            
            <!-- Premium quote container -->
            <div class="relative max-w-4xl mx-auto">
                <!-- Background elements -->
                <div class="absolute inset-0 bg-gradient-to-r from-blue-50/30 via-purple-50/30 to-emerald-50/30 dark:from-blue-900/10 dark:via-purple-900/10 dark:to-emerald-900/10 rounded-3xl blur-xl"></div>
                
                <!-- Quote card -->
                <div class="relative bg-white/60 dark:bg-gray-800/60 backdrop-blur-xl rounded-3xl p-12 border border-gray-200/50 dark:border-gray-700/50 shadow-2xl">
                    <!-- Quote icon -->
                    <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 via-purple-500 to-emerald-500 rounded-full flex items-center justify-center shadow-xl">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Quote text -->
                    <blockquote class="text-2xl md:text-3xl font-light text-gray-700 dark:text-gray-200 italic leading-relaxed mb-8">
                        "Excellentie is geen vaardigheid, het is een houding."
                    </blockquote>
                    
                    <!-- Author -->
                    <div class="flex items-center justify-center gap-4">
                        <div class="h-px bg-gradient-to-r from-transparent via-gray-400 to-transparent flex-1 max-w-20"></div>
                        <cite class="text-gray-500 dark:text-gray-400 font-semibold text-lg not-italic">
                            Ralph Marston
                        </cite>
                        <div class="h-px bg-gradient-to-l from-transparent via-gray-400 to-transparent flex-1 max-w-20"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LinkedIn Activiteiten Sectie -->
<section class="relative py-20 lg:py-32 overflow-hidden bg-gradient-to-br from-slate-50 via-white to-blue-50/30 dark:from-gray-900 dark:via-slate-900 dark:to-gray-900">
    <!-- Moderne achtergrond elementen -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Subtiele gradient overlays -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-[#0A66C2]/5 via-transparent to-transparent"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-blue-500/5 via-transparent to-transparent"></div>
        
        <!-- Floating decoratieve elementen -->
        <div class="absolute top-20 left-10 w-2 h-2 bg-[#0A66C2]/20 rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-20 w-1 h-1 bg-blue-500/30 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-40 left-20 w-1.5 h-1.5 bg-[#0A66C2]/25 rounded-full animate-pulse" style="animation-delay: 4s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header sectie -->
        <div class="text-center mb-12 lg:mb-16">
            <!-- Badge -->
            <div class="inline-flex items-center justify-center mb-6">
                <div class="px-6 py-2 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 rounded-full shadow-lg">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">LinkedIn Activiteiten</span>
                    </div>
                </div>
            </div>
            
            <!-- Hoofdtitel -->
            <h2 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                Mijn <span class="bg-gradient-to-r from-[#0A66C2] to-blue-600 bg-clip-text text-transparent">LinkedIn</span>
            </h2>
            
            <!-- Subtitle -->
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Volg mijn professionele reis en laatste projecten op LinkedIn
            </p>
        </div>

        <!-- Responsive LinkedIn posts grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-16">
            
            <!-- Post 1 - PolitiekPraat Stemwijzer -->
            <article class="group">
                <div class="relative h-full bg-white/90 dark:bg-slate-800/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-200/50 dark:border-slate-700/50 transform hover:-translate-y-2 overflow-hidden">
                    
                    <!-- LinkedIn accent -->
                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-[#0A66C2] to-blue-600"></div>
                    
                    <!-- Content -->
                    <div class="p-6 h-full flex flex-col">
                        
                        <!-- Header -->
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-[#0A66C2]/20 shadow-sm">
                                <img src="https://media.licdn.com/dms/image/v2/D4E03AQEdSLhdnJNFrw/profile-displayphoto-shrink_800_800/B4EZdts0VTHcAc-/0/1749892155295?e=1761782400&v=beta&t=tIPsAiX2UWU7j0c9bE6wWsneCw6ofqjJRUy7N3txKJw" 
                                     alt="Naoufal Andichi" 
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 dark:text-white">Naoufal Andichi</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Software Developer • 2 weken geleden</p>
                            </div>
                        </div>

                        <!-- Post content -->
                        <div class="flex-1 space-y-4">
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-[#0A66C2] transition-colors duration-300">
                                🚀 Nieuwe Stemwijzer gelanceerd op PolitiekPraat!
                            </h4>
                            
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                                Politiek toegankelijk maken met slimme technologie – dat was mijn doel als software developer. Het resultaat? Een moderne, snelle en transparante stemwijzer...
                            </p>
                        </div>
                        
                        <!-- Footer -->
                        <div class="mt-6 pt-4 border-t border-gray-100 dark:border-slate-700/50 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center gap-1 text-sm text-gray-500 dark:text-gray-400">
                                    <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                    </svg>
                                    42
                                </span>
                                <span class="flex items-center gap-1 text-sm text-gray-500 dark:text-gray-400">
                                    <svg class="w-4 h-4 text-[#0A66C2]" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18z"/>
                                    </svg>
                                    12
                                </span>
                            </div>
                            
                            <a href="https://www.linkedin.com/posts/naoufalandichi_politiekplatform-politiek-voor-iedereen-activity-7299106011196411904-3q9t?utm_source=share&utm_medium=member_desktop&rcm=ACoAADugN0IBSlrEfqwmiuI8q8mCluqNgb16Wa0" 
                               target="_blank" rel="noopener noreferrer" 
                               class="inline-flex items-center gap-1 text-sm font-medium text-[#0A66C2] hover:text-blue-700 transition-colors">
                                Bekijk post
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Post 2 - PolitiekPraat Introductie -->
            <article class="group">
                <div class="relative h-full bg-white/90 dark:bg-slate-800/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-200/50 dark:border-slate-700/50 transform hover:-translate-y-2 overflow-hidden">
                    
                    <!-- LinkedIn accent -->
                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-[#0A66C2] to-blue-600"></div>
                    
                    <!-- Content -->
                    <div class="p-6 h-full flex flex-col">
                        
                        <!-- Header -->
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-[#0A66C2]/20 shadow-sm">
                                <img src="https://media.licdn.com/dms/image/v2/D4E03AQEdSLhdnJNFrw/profile-displayphoto-shrink_800_800/B4EZdts0VTHcAc-/0/1749892155295?e=1761782400&v=beta&t=tIPsAiX2UWU7j0c9bE6wWsneCw6ofqjJRUy7N3txKJw" 
                                     alt="Naoufal Andichi" 
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 dark:text-white">Naoufal Andichi</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Software Developer • 1 maand geleden</p>
                            </div>
                        </div>

                        <!-- Post content -->
                        <div class="flex-1 space-y-4">
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-[#0A66C2] transition-colors duration-300">
                                Hoi allemaal! 👋
                            </h4>
                            
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                                Met trots deel ik mijn nieuwste project: PolitiekPraat! Een website die ik in mijn vrije tijd heb ontwikkeld omdat ik politiek toegankelijker wil maken voor iedereen...
                            </p>
                        </div>
                        
                        <!-- Footer -->
                        <div class="mt-6 pt-4 border-t border-gray-100 dark:border-slate-700/50 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center gap-1 text-sm text-gray-500 dark:text-gray-400">
                                    <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                    </svg>
                                    78
                                </span>
                                <span class="flex items-center gap-1 text-sm text-gray-500 dark:text-gray-400">
                                    <svg class="w-4 h-4 text-[#0A66C2]" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18z"/>
                                    </svg>
                                    24
                                </span>
                            </div>
                            
                            <a href="https://www.linkedin.com/posts/naoufalandichi_politiekpraat-activity-7289537641782407168-SlG2?utm_source=share&utm_medium=member_desktop&rcm=ACoAADugN0IBSlrEfqwmiuI8q8mCluqNgb16Wa0" 
                               target="_blank" rel="noopener noreferrer" 
                               class="inline-flex items-center gap-1 text-sm font-medium text-[#0A66C2] hover:text-blue-700 transition-colors">
                                Bekijk post
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Post 3 - D66 Kandidatuur -->
            <article class="group">
                <div class="relative h-full bg-white/90 dark:bg-slate-800/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-200/50 dark:border-slate-700/50 transform hover:-translate-y-2 overflow-hidden">
                    
                    <!-- LinkedIn accent -->
                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-[#0A66C2] to-blue-600"></div>
                    
                    <!-- Content -->
                    <div class="p-6 h-full flex flex-col">
                        
                        <!-- Header -->
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-[#0A66C2]/20 shadow-sm">
                                <img src="https://media.licdn.com/dms/image/v2/D4E03AQEdSLhdnJNFrw/profile-displayphoto-shrink_800_800/B4EZdts0VTHcAc-/0/1749892155295?e=1761782400&v=beta&t=tIPsAiX2UWU7j0c9bE6wWsneCw6ofqjJRUy7N3txKJw" 
                                     alt="Naoufal Andichi" 
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 dark:text-white">Naoufal Andichi</h3>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Software Developer • 5 dagen geleden</p>
                            </div>
                        </div>

                        <!-- Post content -->
                        <div class="flex-1 space-y-4">
                            <h4 class="text-lg font-bold text-gray-900 dark:text-white group-hover:text-[#0A66C2] transition-colors duration-300">
                                Officieel nieuws: ik ben kandidaat voor de gemeenteraadsverkiezingen in Ede namens D66!
                            </h4>
                            
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                                Met veel enthousiasme deel ik dat mijn kandidaatstelling voor de lijst van D66 Ede officieel is goedgekeurd. Dat betekent dat ik mij mag inzetten voor een toekomstbestendig, duurzaam en inclusief Ede tijdens de gemeenteraadsverkiezingen op 18 maart 2026...
                            </p>
                        </div>
                        
                        <!-- Footer -->
                        <div class="mt-6 pt-4 border-t border-gray-100 dark:border-slate-700/50 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center gap-1 text-sm text-gray-500 dark:text-gray-400">
                                    <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                    </svg>
                                    9
                                </span>
                                <span class="flex items-center gap-1 text-sm text-gray-500 dark:text-gray-400">
                                    <svg class="w-4 h-4 text-[#0A66C2]" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18z"/>
                                    </svg>
                                    4
                                </span>
                            </div>
                            
                            <a href="https://www.linkedin.com/posts/naoufalandichi_d66-ede-gemeenteraadsverkiezingen-activity-7375138117890048000-d5Xs?utm_source=share&utm_medium=member_desktop&rcm=ACoAADugN0IBSlrEfqwmiuI8q8mCluqNgb16Wa0" 
                               target="_blank" rel="noopener noreferrer" 
                               class="inline-flex items-center gap-1 text-sm font-medium text-[#0A66C2] hover:text-blue-700 transition-colors">
                                Bekijk post
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- LinkedIn Profiel Link -->
        <div class="text-center">
            <div class="inline-block group">
                <a href="https://www.linkedin.com/in/naoufalandichi/" target="_blank" rel="noopener noreferrer" 
                   class="inline-flex items-center gap-3 px-6 py-3 bg-[#0A66C2] hover:bg-blue-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    
                    <!-- LinkedIn icon -->
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                    
                    <!-- Tekst -->
                    <span>Verbind met mij op LinkedIn</span>
                    
                    <!-- Pijl -->
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Politieke Ambities Section -->
<section class="relative py-20 lg:py-32 overflow-hidden bg-gradient-to-br from-emerald-50 via-white to-green-50/30 dark:from-gray-900 dark:via-slate-900 dark:to-emerald-900/20">
    <!-- Moderne achtergrond elementen -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Subtiele gradient overlays -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-emerald-500/5 via-transparent to-transparent"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-green-500/5 via-transparent to-transparent"></div>
        
        <!-- Floating decoratieve elementen -->
        <div class="absolute top-20 left-10 w-2 h-2 bg-emerald-500/20 rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-20 w-1 h-1 bg-green-500/30 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-40 left-20 w-1.5 h-1.5 bg-emerald-500/25 rounded-full animate-pulse" style="animation-delay: 4s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Moderne header sectie -->
        <div class="text-center mb-12 lg:mb-16">
            <!-- Badge -->
            <div class="inline-flex items-center justify-center mb-6">
                <div class="px-6 py-2 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 rounded-full shadow-lg">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0h3m-3 0h-3m15 0v-5.586a1 1 0 00-.293-.707l-1.414-1.414M13 21h2.586a1 1 0 00.707-.293l1.414-1.414"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">Politieke Ambities</span>
                    </div>
                </div>
            </div>
            
            <!-- Hoofdtitel -->
            <h2 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                Politieke <span class="bg-gradient-to-r from-emerald-600 to-green-600 bg-clip-text text-transparent">Ambities</span>
            </h2>
            
            <!-- Subtitle -->
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Van tech tot democratie - mijn missie om politiek toegankelijker te maken
            </p>
        </div>

        <!-- Content grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 mb-16">
            
            <!-- D66 Kandidatuur -->
            <article class="group">
                <div class="relative h-full bg-white/90 dark:bg-slate-800/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-200/50 dark:border-slate-700/50 transform hover:-translate-y-2 overflow-hidden">
                    
                    <!-- D66 accent -->
                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-emerald-600 to-green-600"></div>
                    
                    <!-- Content -->
                    <div class="p-8 h-full flex flex-col">
                        
                        <!-- Header met D66 logo stijl -->
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg transform transition-transform duration-300 group-hover:scale-110">
                                <span class="text-white font-bold text-xl">D66</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Gemeenteraadskandidaat</h3>
                                <p class="text-emerald-600 dark:text-emerald-400 font-medium">D66 Ede • Verkiezingen 18 maart 2026</p>
                            </div>
                        </div>

                        <!-- Quote -->
                        <div class="relative mb-8">
                            <svg class="absolute -top-2 -left-2 w-8 h-8 text-emerald-500/20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                            <blockquote class="text-gray-700 dark:text-gray-300 text-lg italic pl-6 leading-relaxed">
                                "Ik kijk ernaar uit om samen met andere betrokken leden en inwoners van Ede te werken aan een sterke en progressieve visie voor onze gemeente."
                            </blockquote>
                        </div>

                        <!-- Kernpunten -->
                        <div class="space-y-4 mb-8">
                            <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Wat mij drijft:</h4>
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-600 dark:text-gray-300">Een toekomstbestendig, duurzaam en inclusief Ede</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-600 dark:text-gray-300">Vrijheid, eigen verantwoordelijkheid en onderwijs voorop</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                                    <span class="text-gray-600 dark:text-gray-300">Politiek toegankelijk maken voor iedereen</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Badge -->
                        <div class="mt-auto">
                            <span class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-xl text-sm font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Kandidatuur goedgekeurd
                            </span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- PolitiekPraat Project -->
            <article class="group">
                <div class="relative h-full bg-white/90 dark:bg-slate-800/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-200/50 dark:border-slate-700/50 transform hover:-translate-y-2 overflow-hidden">
                    
                    <!-- Project accent -->
                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-blue-600 to-indigo-600"></div>
                    
                    <!-- Content -->
                    <div class="p-8 h-full flex flex-col">
                        
                        <!-- Header -->
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center shadow-lg transform transition-transform duration-300 group-hover:scale-110">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">PolitiekPraat</h3>
                                <p class="text-blue-600 dark:text-blue-400 font-medium">Politiek Platform • politiekpraat.nl</p>
                            </div>
                        </div>

                        <!-- Mission -->
                        <div class="space-y-6 mb-8">
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                Een platform dat ik in mijn vrije tijd heb ontwikkeld omdat ik politiek toegankelijker wil maken voor iedereen. Geen ingewikkelde taal, gewoon helder en eerlijk.
                            </p>
                            
                            <div class="space-y-4">
                                <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Platform features:</h4>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                        </svg>
                                        <span class="text-sm text-gray-600 dark:text-gray-300">PartijMeter</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                        </svg>
                                        <span class="text-sm text-gray-600 dark:text-gray-300">Stemwijzer</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                        </svg>
                                        <span class="text-sm text-gray-600 dark:text-gray-300">Politieke Blogs</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                        <span class="text-sm text-gray-600 dark:text-gray-300">Partij Analyses</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Statistics -->
                        <div class="mt-auto grid grid-cols-2 gap-4 pt-6 border-t border-gray-200/50 dark:border-slate-700/50">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">150+</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Artikelen</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">50k+</div>
                                <div class="text-xs text-gray-500 dark:text-gray-400">Lezers</div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <!-- Visie Statement -->
        <div class="text-center bg-white/60 dark:bg-slate-800/60 backdrop-blur-sm rounded-2xl p-8 lg:p-12 border border-gray-200/50 dark:border-slate-700/50 shadow-lg">
            <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 dark:text-white mb-6">
                Mijn Politieke Visie
            </h3>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed mb-8">
                <strong class="text-gray-800 dark:text-gray-200">Ik ben liberaal omdat vrijheid pas betekenis heeft als iedereen gelijke kansen krijgt om te groeien.</strong> Daarom kies ik voor D66: we investeren massaal in onderwijs en innovatie, versnellen de woningbouw voor jonge gezinnen, beschermen ons klimaat voor toekomstige generaties en bouwen aan een overheid die écht dienstbaar is. 
                <br><br>
                <em>Ik geloof in de kracht van verandering door verbinding.</em> Politiek is voor mij niet alleen besturen, maar bruggen bouwen tussen generaties, tussen ideeën, tussen dromen en realiteit. D66 spreekt mij aan omdat we durven te innoveren, omdat we geloven in de moed om vooruit te kijken en omdat we weten dat echte vooruitgang ontstaat wanneer iedereen mee kan doen.
                <br><br>
                <strong class="text-emerald-600 dark:text-emerald-400">Mijn missie is helder:</strong> een toekomstbestendig, duurzaam en inclusief Ede waar innovatie en vrijheid hand in hand gaan. Stap voor stap, resultaatgericht en altijd met de inwoner centraal.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="https://www.linkedin.com/posts/naoufalandichi_d66-ede-gemeenteraadsverkiezingen-activity-7375138117890048000-d5Xs" 
                   target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                    Lees mijn aankondiging
                </a>
                <a href="https://politiekpraat.nl" 
                   target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"/>
                    </svg>
                    Bezoek PolitiekPraat
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Werkervaring Sectie -->
<section class="relative py-20 lg:py-32 overflow-hidden bg-gradient-to-br from-white via-slate-50/30 to-white dark:from-gray-900 dark:via-slate-900 dark:to-gray-900">
    <!-- Moderne achtergrond elementen -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Subtiele gradient overlays -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-blue-500/5 via-transparent to-transparent"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-indigo-500/5 via-transparent to-transparent"></div>
        
        <!-- Floating decoratieve elementen -->
        <div class="absolute top-20 left-10 w-2 h-2 bg-blue-500/20 rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-20 w-1 h-1 bg-indigo-500/30 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-40 left-20 w-1.5 h-1.5 bg-purple-500/25 rounded-full animate-pulse" style="animation-delay: 4s;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header sectie -->
        <div class="text-center mb-12 lg:mb-16">
            <!-- Badge -->
            <div class="inline-flex items-center justify-center mb-6">
                <div class="px-6 py-2 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 rounded-full shadow-lg">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">Werkervaring</span>
                    </div>
                </div>
            </div>
            
            <!-- Hoofdtitel -->
            <h2 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                Mijn <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Werkervaring</span>
            </h2>
            
            <!-- Subtitle -->
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto leading-relaxed">
                Van stagiar tot professional - ontdek mijn professionele reis
            </p>
        </div>

        <!-- Responsive werkervaring grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 mb-16">
            
            <!-- Current Role - Developing B.V. -->
            <article class="group">
                <div class="relative h-full bg-white/90 dark:bg-slate-800/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-200/50 dark:border-slate-700/50 transform hover:-translate-y-2 overflow-hidden">
                    
                    <!-- Company accent -->
                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-blue-600 to-indigo-600"></div>
                    
                    <!-- Content -->
                    <div class="p-6 h-full flex flex-col">
                        
                        <!-- Header -->
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-xl flex items-center justify-center shadow-sm">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 dark:text-white">Software Developer</h3>
                                <p class="text-sm text-blue-600 dark:text-blue-400 font-medium">Developing B.V.</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">sep. 2024 - heden</p>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="flex-1 space-y-4">
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                                Ontwikkeling van moderne webapplicaties met WordPress, PHP/Laravel en Tailwind CSS. Verantwoordelijk voor het interviewen van stagiairs en het opzetten van kennisbanken.
                            </p>
                            
                            <div class="space-y-2">
                                <h4 class="text-sm font-semibold text-gray-700 dark:text-gray-300">Belangrijkste taken:</h4>
                                <ul class="space-y-1 text-xs text-gray-600 dark:text-gray-400">
                                    <li class="flex items-center gap-2">
                                        <div class="w-1 h-1 bg-blue-500 rounded-full"></div>
                                        WordPress Development & PHP/Laravel Projecten
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <div class="w-1 h-1 bg-blue-500 rounded-full"></div>
                                        Frontend ontwikkeling met Tailwind CSS
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <div class="w-1 h-1 bg-blue-500 rounded-full"></div>
                                        Stagiairs interviewen & kennisbank opzetten
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Skills tags -->
                        <div class="mt-4 flex flex-wrap gap-1">
                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded text-xs font-medium">WordPress</span>
                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded text-xs font-medium">Laravel</span>
                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded text-xs font-medium">Tailwind CSS</span>
                            <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded text-xs font-medium">PHP</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Pathé Role -->
            <article class="group">
                <div class="relative h-full bg-white/90 dark:bg-slate-800/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-200/50 dark:border-slate-700/50 transform hover:-translate-y-2 overflow-hidden">
                    
                    <!-- Company accent -->
                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-indigo-600 to-purple-600"></div>
                    
                    <!-- Content -->
                    <div class="p-6 h-full flex flex-col">
                        
                        <!-- Header -->
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900/30 rounded-xl flex items-center justify-center shadow-sm">
                                <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-gray-900 dark:text-white">Service Employee</h3>
                                <p class="text-sm text-indigo-600 dark:text-indigo-400 font-medium">Pathé</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">mei 2023 - nov 2024</p>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="flex-1 space-y-4">
                            <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                                Verantwoordelijk voor uitstekende klantenservice en het waarborgen van een vlotte ticketverkoop. Assistentie bij evenementen en zorgen voor een onvergetelijke ervaring voor bezoekers.
                            </p>
                            
                            <div class="space-y-2">
                                <h4 class="text-sm font-semibold text-gray-700 dark:text-gray-300">Belangrijkste taken:</h4>
                                <ul class="space-y-1 text-xs text-gray-600 dark:text-gray-400">
                                    <li class="flex items-center gap-2">
                                        <div class="w-1 h-1 bg-indigo-500 rounded-full"></div>
                                        Klantenservice excellence & ticketverkoop
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <div class="w-1 h-1 bg-indigo-500 rounded-full"></div>
                                        Evenementen coördinatie & team samenwerking
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <div class="w-1 h-1 bg-indigo-500 rounded-full"></div>
                                        Probleemoplossing & adviesverlening
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Skills tags -->
                        <div class="mt-4 flex flex-wrap gap-1">
                            <span class="px-2 py-1 bg-indigo-100 dark:bg-indigo-900/50 text-indigo-600 dark:text-indigo-400 rounded text-xs font-medium">Klantenservice</span>
                            <span class="px-2 py-1 bg-indigo-100 dark:bg-indigo-900/50 text-indigo-600 dark:text-indigo-400 rounded text-xs font-medium">Communicatie</span>
                            <span class="px-2 py-1 bg-indigo-100 dark:bg-indigo-900/50 text-indigo-600 dark:text-indigo-400 rounded text-xs font-medium">Teamwork</span>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Skills Overview Section -->
<section class="py-20 px-4 bg-gradient-to-b from-blue-50/80 via-indigo-50/90 to-purple-50/90 dark:from-gray-800 dark:via-gray-800 dark:to-gray-900 relative overflow-hidden slide-in-left">
    <!-- Animated background patterns -->
    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-indigo-500/10 animate-pulse"></div>
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
    </div>

    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-12 lg:mb-16">
            <!-- Badge -->
            <div class="inline-flex items-center justify-center mb-6">
                <div class="px-6 py-2 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 rounded-full shadow-lg">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">Technische Vaardigheden</span>
                    </div>
                </div>
            </div>
            <h2 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                Technische <span class="text-blue-600 dark:text-blue-400">Expertise</span>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Ontdek mijn technische vaardigheden door een interactieve visualisatie
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Development Stack -->
            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 group">
                <div class="grid grid-cols-2 gap-6">
                    <!-- Frontend -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-blue-600 dark:text-blue-400">Frontend</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-blue-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">JavaScript</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">Tailwind CSS</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-blue-400">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">React</span>
                            </div>
                        </div>
                    </div>

                    <!-- Backend -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400">Backend</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-indigo-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">PHP</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-red-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">Laravel</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-blue-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">MySQL</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tools -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-purple-600 dark:text-purple-400">Tools</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-purple-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">Git</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-blue-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">Docker</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-green-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">WordPress</span>
                            </div>
                        </div>
                    </div>

                    <!-- Extra Skills -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-pink-600 dark:text-pink-400">Extra</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-blue-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">TypeScript</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-purple-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">C#</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-indigo-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">ASP.NET</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Code Editor Preview -->
            <div class="bg-gray-900 rounded-2xl p-6 shadow-xl group">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <span class="text-gray-400 text-sm">portfolio</span>
                </div>
                <div class="font-mono text-sm text-gray-300">
                    <div class="typing-animation">
                        <span class="text-pink-400">&lt;?php</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 0.5s">
                        <span class="text-gray-400">namespace</span> 
                        <span class="text-blue-400">App\Developer;</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 1s">
                        <span class="text-pink-400">class</span> 
                        <span class="text-green-400">FullStackDeveloper</span> 
                        <span class="text-gray-400">{</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 1.5s">
                        <span class="pl-4 text-blue-400">public string</span> 
                        <span class="text-gray-400">$name =</span> 
                        <span class="text-yellow-300">'Naoufal Andichi'</span>;
                    </div>
                    <div class="typing-animation" style="animation-delay: 2s">
                        <span class="pl-4 text-blue-400">public array</span> 
                        <span class="text-gray-400">$primarySkills =</span> 
                        <span class="text-gray-400">[</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 2.5s">
                        <span class="pl-8 text-yellow-300">'PHP'</span>,
                        <span class="text-yellow-300">'Laravel'</span>,
                        <span class="text-yellow-300">'JavaScript'</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 3s">
                        <span class="pl-4 text-gray-400">];</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 3.5s">
                        <span class="pl-4 text-blue-400">public function</span> 
                        <span class="text-yellow-400">getPassion</span>
                        <span class="text-gray-400">(): string {</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 4s">
                        <span class="pl-8 text-pink-400">return</span>
                        <span class="text-yellow-300">'Building Amazing Web Applications'</span>;
                    </div>
                    <div class="typing-animation" style="animation-delay: 4.5s">
                        <span class="pl-4 text-gray-400">}</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 5s">
                        <span class="text-gray-400">}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        @keyframes typing {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .typing-animation {
            opacity: 0;
            animation: typing 0.5s ease-out forwards;
        }
        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0);
            }
            25% {
                transform: translateY(-10px) translateX(5px);
            }
            50% {
                transform: translateY(0) translateX(10px);
            }
            75% {
                transform: translateY(10px) translateX(5px);
            }
        }

        @keyframes moveGrid {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 50px 50px;
            }
        }
    </style>
</section>


<!-- Professionele Ontwikkeling Sectie - Premium Redesign -->
<section class="relative py-32 overflow-hidden bg-gradient-to-br from-slate-50 via-white to-indigo-50/20 dark:from-gray-900 dark:via-gray-800 dark:to-indigo-900/20">
    <!-- Geavanceerde achtergrond elementen -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Meerdere gradient orbs voor diepte -->
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-gradient-to-br from-blue-400/15 to-indigo-600/15 rounded-full blur-3xl animate-pulse dark:from-blue-500/8 dark:to-indigo-700/8"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-gradient-to-tr from-purple-400/15 to-pink-600/15 rounded-full blur-3xl animate-pulse delay-700 dark:from-purple-500/8 dark:to-pink-700/8"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-gradient-to-r from-cyan-400/10 to-blue-600/10 rounded-full blur-3xl animate-pulse delay-1000 dark:from-cyan-500/5 dark:to-blue-700/5"></div>
        
        <!-- Geavanceerd grid patroon -->
        <div class="absolute inset-0 opacity-[0.015] dark:opacity-[0.03]">
            <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="professionalGrid" width="25" height="25" patternUnits="userSpaceOnUse">
                        <path d="M 25 0 L 0 0 0 25" fill="none" stroke="currentColor" stroke-width="1" class="text-gray-600"/>
                        <circle cx="12.5" cy="12.5" r="0.5" fill="currentColor" class="text-gray-400"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#professionalGrid)"/>
            </svg>
        </div>
        
        <!-- Subtiele decoratieve elementen -->
        <div class="absolute top-20 right-20 w-4 h-4 bg-blue-500/20 rounded-full blur-sm animate-bounce"></div>
        <div class="absolute bottom-20 left-20 w-3 h-3 bg-purple-500/20 rounded-full blur-sm animate-bounce delay-500"></div>
    </div>

    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Premium Header -->
        <div class="text-center mb-12 lg:mb-16">
            <!-- Badge -->
            <div class="inline-flex items-center justify-center mb-6">
                <div class="px-6 py-2 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 rounded-full shadow-lg">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">Professionele Ontwikkeling</span>
                    </div>
                </div>
            </div>
            
            <!-- Premium hoofdtitel -->
            <h2 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                <span class="text-gray-900 dark:text-white">Professionele</span>
                <br>
                <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">Ontwikkeling</span>
            </h2>
            
            <!-- Verbeterde ondertitel -->
            <p class="max-w-4xl mx-auto text-xl md:text-2xl text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
                Een overzicht van mijn professionele reis, van afgestudeerd software developer, 
                met alle ervaringen die hebben bijgedragen aan mijn groei en expertise.
            </p>
            
            <!-- Extra accent lijn -->
            <div class="flex items-center justify-center gap-4 mt-8">
                <div class="h-px bg-gradient-to-r from-transparent via-blue-500 to-transparent flex-1 max-w-32"></div>
                <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                <div class="h-px bg-gradient-to-r from-transparent via-indigo-500 to-transparent flex-1 max-w-32"></div>
            </div>
        </div>

        <!-- Premium Professionele Ervaringen Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 mb-20">
            
            <!-- Developing B.V. - Huidige Positie -->
            <div class="group">
                <div class="relative h-full">
                    <!-- Premium glow effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-indigo-600/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    
                    <!-- Premium Card -->
                    <div class="relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-3xl p-8 lg:p-10 shadow-2xl hover:shadow-3xl transition-all duration-700 border border-blue-200/60 dark:border-blue-700/60 h-full flex flex-col group-hover:-translate-y-3 group-hover:scale-105">
                        
                        <!-- Premium Status Badge -->
                        <div class="flex items-center justify-between mb-8">
                            <div class="relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-emerald-500 to-green-500 rounded-full blur-lg opacity-40"></div>
                                <div class="relative px-5 py-3 bg-gradient-to-r from-emerald-50 to-green-50 dark:from-emerald-900/40 dark:to-green-900/40 border border-emerald-200 dark:border-emerald-700 rounded-full shadow-lg">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                                        <span class="text-emerald-700 dark:text-emerald-300 font-bold text-sm uppercase tracking-wide">Huidig</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-18 h-18 bg-gradient-to-br from-blue-500 via-indigo-600 to-purple-600 rounded-3xl flex items-center justify-center shadow-2xl transform group-hover:rotate-12 group-hover:scale-110 transition-all duration-700">
                                <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Premium Bedrijfsinformatie -->
                        <div class="mb-8">
                            <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                                Developing B.V.
                            </h3>
                            <div class="flex items-center gap-3 text-blue-600 dark:text-blue-400 font-bold text-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>September 2024 - Heden</span>
                            </div>
                        </div>
                        
                        <!-- Premium Beschrijving -->
                        <div class="flex-grow">
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg mb-8">
                                In mijn huidige rol werk ik aan diverse innovatieve projecten waarbij ik moderne technieken zoals geavanceerde JavaScript frameworks en CSS libraries toepas. Ik ben verantwoordelijk voor het ontwikkelen van schaalbare webapplicaties en het implementeren van best practices voor frontend development.
                            </p>
                            
                            <!-- Premium Highlight punten -->
                            <div class="space-y-4">
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Ontwikkeling van schaalbare webapplicaties</span>
                                </div>
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Implementatie van moderne frameworks</span>
                                </div>
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Samenwerking in multidisciplinair team</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pathé -->
            <div class="group">
                <div class="relative h-full">
                    <!-- Premium glow effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600/20 to-purple-600/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    
                    <!-- Premium Card -->
                    <div class="relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-3xl p-8 lg:p-10 shadow-2xl hover:shadow-3xl transition-all duration-700 border border-indigo-200/60 dark:border-indigo-700/60 h-full flex flex-col group-hover:-translate-y-3 group-hover:scale-105">
                        
                        <!-- Premium Status Badge -->
                        <div class="flex items-center justify-between mb-8">
                            <div class="relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500 rounded-full blur-lg opacity-40"></div>
                                <div class="relative px-5 py-3 bg-gradient-to-r from-orange-50 to-red-50 dark:from-orange-900/40 dark:to-red-900/40 border border-orange-200 dark:border-orange-700 rounded-full shadow-lg">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-orange-500 rounded-full animate-pulse"></div>
                                        <span class="text-orange-700 dark:text-orange-300 font-bold text-sm uppercase tracking-wide">Vorig</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-18 h-18 bg-gradient-to-br from-indigo-500 via-purple-600 to-pink-600 rounded-3xl flex items-center justify-center shadow-2xl transform group-hover:rotate-12 group-hover:scale-110 transition-all duration-700">
                                <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Premium Bedrijfsinformatie -->
                        <div class="mb-8">
                            <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                                Pathé
                            </h3>
                            <div class="flex items-center gap-3 text-indigo-600 dark:text-indigo-400 font-bold text-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>Mei 2023 - November 2024</span>
                            </div>
                        </div>
                        
                        <!-- Premium Beschrijving -->
                        <div class="flex-grow">
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg mb-8">
                                Verantwoordelijk voor uitstekende klantenservice en het waarborgen van een vlotte ticketverkoop. Daarnaast assisteer ik bij evenementen en zorg ik ervoor dat bezoekers een onvergetelijke ervaring hebben.
                            </p>
                            
                            <!-- Premium Highlight punten -->
                            <div class="space-y-4">
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Professionele klantenservice</span>
                                </div>
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Evenement assistentie</span>
                                </div>
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-pink-500 to-red-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Probleemoplossende vaardigheden</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- I@control Stage -->
            <div class="group">
                <div class="relative h-full">
                    <!-- Premium glow effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-cyan-600/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    
                    <!-- Premium Card -->
                    <div class="relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-3xl p-8 lg:p-10 shadow-2xl hover:shadow-3xl transition-all duration-700 border border-blue-200/60 dark:border-blue-700/60 h-full flex flex-col group-hover:-translate-y-3 group-hover:scale-105">
                        
                        <!-- Premium Status Badge -->
                        <div class="flex items-center justify-between mb-8">
                            <div class="relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full blur-lg opacity-40"></div>
                                <div class="relative px-5 py-3 bg-gradient-to-r from-blue-50 to-cyan-50 dark:from-blue-900/40 dark:to-cyan-900/40 border border-blue-200 dark:border-blue-700 rounded-full shadow-lg">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                                        <span class="text-blue-700 dark:text-blue-300 font-bold text-sm uppercase tracking-wide">Stage</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-18 h-18 bg-gradient-to-br from-blue-500 via-cyan-600 to-teal-600 rounded-3xl flex items-center justify-center shadow-2xl transform group-hover:rotate-12 group-hover:scale-110 transition-all duration-700">
                                <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Premium Bedrijfsinformatie -->
                        <div class="mb-8">
                            <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                                I@control
                            </h3>
                            <div class="flex items-center gap-3 text-blue-600 dark:text-blue-400 font-bold text-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>Februari - April 2023</span>
                            </div>
                        </div>
                        
                        <!-- Premium Beschrijving -->
                        <div class="flex-grow">
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg mb-8">
                                Betrokken bij softwareontwikkeling met TypeScript, C#, ASP.NET en AngularJS. Focus op het schrijven van efficiënte code, het testen van applicaties en teamwork voor innovatieve oplossingen.
                            </p>
                            
                            <!-- Premium Highlight punten -->
                            <div class="space-y-4">
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">TypeScript & C# ontwikkeling</span>
                                </div>
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-cyan-500 to-teal-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">ASP.NET & AngularJS</span>
                                </div>
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-teal-500 to-green-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Agile ontwikkeling</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action -->
            <div class="group">
                <div class="relative h-full">
                    <!-- Premium glow effect -->
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600/20 to-pink-600/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                    
                    <!-- Premium Card -->
                    <div class="relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-3xl p-8 lg:p-10 shadow-2xl hover:shadow-3xl transition-all duration-700 border border-purple-200/60 dark:border-purple-700/60 h-full flex flex-col group-hover:-translate-y-3 group-hover:scale-105">
                        
                        <!-- Premium Status Badge -->
                        <div class="flex items-center justify-between mb-8">
                            <div class="relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full blur-lg opacity-40"></div>
                                <div class="relative px-5 py-3 bg-gradient-to-r from-purple-50 to-pink-50 dark:from-purple-900/40 dark:to-pink-900/40 border border-purple-200 dark:border-purple-700 rounded-full shadow-lg">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse"></div>
                                        <span class="text-purple-700 dark:text-purple-300 font-bold text-sm uppercase tracking-wide">Ervaring</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-18 h-18 bg-gradient-to-br from-purple-500 via-pink-600 to-rose-600 rounded-3xl flex items-center justify-center shadow-2xl transform group-hover:rotate-12 group-hover:scale-110 transition-all duration-700">
                                <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Premium Bedrijfsinformatie -->
                        <div class="mb-8">
                            <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                                Action
                            </h3>
                            <div class="flex items-center gap-3 text-purple-600 dark:text-purple-400 font-bold text-lg">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>Oktober 2020 - Mei 2023</span>
                            </div>
                        </div>
                        
                        <!-- Premium Beschrijving -->
                        <div class="flex-grow">
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg mb-8">
                                Verantwoordelijk voor klantenservice, voorraadbeheer en het onderhouden van een nette winkelomgeving. Ontwikkelde sterke communicatievaardigheden en teamwork ervaring.
                            </p>
                            
                            <!-- Premium Highlight punten -->
                            <div class="space-y-4">
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Uitstekende klantenservice</span>
                                </div>
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Voorraadbeheer</span>
                                </div>
                                <div class="flex items-center gap-4 group/item">
                                    <div class="w-3 h-3 bg-gradient-to-r from-rose-500 to-red-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                    <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Teamwork & organisatie</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Premium Educatie Sectie -->
        <div class="mt-32">
            <div class="text-center mb-12 lg:mb-16">
                <!-- Badge -->
                <div class="inline-flex items-center justify-center mb-6">
                    <div class="px-6 py-2 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 rounded-full shadow-lg">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                            </svg>
                            <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">Educatie</span>
                        </div>
                    </div>
                </div>

                <!-- Premium titel -->
                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                    Mijn <span class="bg-gradient-to-r from-emerald-600 via-green-600 to-teal-600 bg-clip-text text-transparent">Educatie</span>
                </h3>
                
                <!-- Premium ondertitel -->
                <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    De educatieve basis die mij heeft gevormd tot de professional die ik vandaag ben.
                </p>
                
                <!-- Decoratieve lijn -->
                <div class="flex items-center justify-center gap-4 mt-8">
                    <div class="h-px bg-gradient-to-r from-transparent via-emerald-500 to-transparent flex-1 max-w-32"></div>
                    <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                    <div class="h-px bg-gradient-to-r from-transparent via-teal-500 to-transparent flex-1 max-w-32"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <!-- Rijn IJssel -->
                <div class="group">
                    <div class="relative h-full">
                        <!-- Premium glow effect -->
                        <div class="absolute inset-0 bg-gradient-to-r from-emerald-600/20 to-teal-600/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        
                        <!-- Premium Card -->
                        <div class="relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-3xl p-8 lg:p-10 shadow-2xl hover:shadow-3xl transition-all duration-700 border border-emerald-200/60 dark:border-emerald-700/60 h-full flex flex-col group-hover:-translate-y-3 group-hover:scale-105">
                            
                            <!-- Premium Status Badge -->
                            <div class="flex items-center justify-between mb-8">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full blur-lg opacity-40"></div>
                                    <div class="relative px-5 py-3 bg-gradient-to-r from-emerald-50 to-teal-50 dark:from-emerald-900/40 dark:to-teal-900/40 border border-emerald-200 dark:border-emerald-700 rounded-full shadow-lg">
                                        <div class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                                            <span class="text-emerald-700 dark:text-emerald-300 font-bold text-sm uppercase tracking-wide">MBO 4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-18 h-18 bg-gradient-to-br from-emerald-500 via-teal-600 to-green-600 rounded-3xl flex items-center justify-center shadow-2xl transform group-hover:rotate-12 group-hover:scale-110 transition-all duration-700">
                                    <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Premium School Info -->
                            <div class="mb-8">
                                <h4 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                                    Rijn IJssel
                                </h4>
                                <div class="flex items-center gap-3 text-emerald-600 dark:text-emerald-400 font-bold text-lg mb-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span>2021 - 2024</span>
                                </div>
                                <p class="text-xl font-bold text-gray-700 dark:text-gray-300">Software Developer</p>
                            </div>
                            
                            <!-- Premium Beschrijving -->
                            <div class="flex-grow">
                                <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg mb-8">
                                    Uitgebreide opleiding in softwareontwikkeling met focus op C# in het eerste jaar en webontwikkeling met PHP in de volgende jaren. Deze combinatie heeft mij voorbereid op een veelzijdige carrière.
                                </p>
                                
                                <!-- Premium Skills -->
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4 group/item">
                                        <div class="w-3 h-3 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                        <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">C# Programmering</span>
                                    </div>
                                    <div class="flex items-center gap-4 group/item">
                                        <div class="w-3 h-3 bg-gradient-to-r from-teal-500 to-green-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                        <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">PHP Webontwikkeling</span>
                                    </div>
                                    <div class="flex items-center gap-4 group/item">
                                        <div class="w-3 h-3 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                        <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Software Engineering</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pallas Athene College -->
                <div class="group">
                    <div class="relative h-full">
                        <!-- Premium glow effect -->
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-indigo-600/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        
                        <!-- Premium Card -->
                        <div class="relative bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-3xl p-8 lg:p-10 shadow-2xl hover:shadow-3xl transition-all duration-700 border border-blue-200/60 dark:border-blue-700/60 h-full flex flex-col group-hover:-translate-y-3 group-hover:scale-105">
                            
                            <!-- Premium Status Badge -->
                            <div class="flex items-center justify-between mb-8">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full blur-lg opacity-40"></div>
                                    <div class="relative px-5 py-3 bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/40 dark:to-indigo-900/40 border border-blue-200 dark:border-blue-700 rounded-full shadow-lg">
                                        <div class="flex items-center gap-2">
                                            <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                                            <span class="text-blue-700 dark:text-blue-300 font-bold text-sm uppercase tracking-wide">MAVO</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-18 h-18 bg-gradient-to-br from-blue-500 via-indigo-600 to-purple-600 rounded-3xl flex items-center justify-center shadow-2xl transform group-hover:rotate-12 group-hover:scale-110 transition-all duration-700">
                                    <svg class="w-9 h-9 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Premium School Info -->
                            <div class="mb-8">
                                <h4 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                                    Pallas Athene College
                                </h4>
                                <div class="flex items-center gap-3 text-blue-600 dark:text-blue-400 font-bold text-lg mb-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span>2017 - 2021</span>
                                </div>
                                <p class="text-xl font-bold text-gray-700 dark:text-gray-300">Theoretische Leerweg</p>
                            </div>
                            
                            <!-- Premium Beschrijving -->
                            <div class="flex-grow">
                                <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg mb-8">
                                    Brede basis in algemene vakken zoals wiskunde, natuurkunde en talen. Deze opleiding heeft mij voorbereid op verdere studies met sterke analytische vaardigheden en probleemoplossend denken.
                                </p>
                                
                                <!-- Premium Skills -->
                                <div class="space-y-4">
                                    <div class="flex items-center gap-4 group/item">
                                        <div class="w-3 h-3 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                        <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Analytische vaardigheden</span>
                                    </div>
                                    <div class="flex items-center gap-4 group/item">
                                        <div class="w-3 h-3 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                        <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Probleemoplossend denken</span>
                                    </div>
                                    <div class="flex items-center gap-4 group/item">
                                        <div class="w-3 h-3 bg-gradient-to-r from-purple-500 to-blue-500 rounded-full shadow-lg group-hover/item:scale-125 transition-transform"></div>
                                        <span class="text-gray-600 dark:text-gray-400 text-lg group-hover/item:text-gray-900 dark:group-hover/item:text-gray-200 transition-colors">Brede algemene kennis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Stage Ervaringen Sectie - Professioneel & Elegant -->
<section class="relative py-32 overflow-hidden bg-gradient-to-br from-slate-50 via-white to-blue-50/30 dark:from-slate-900 dark:via-slate-800 dark:to-blue-900/20 fade-in-scale">
    <!-- Decoratieve achtergrond elementen -->
    <div class="absolute inset-0">
        <!-- Subtiele gradient overlay -->
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-600/5 via-transparent to-purple-600/5"></div>
        
        <!-- Geometrische patronen -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-full blur-3xl animate-pulse delay-1000"></div>
        
        <!-- Subtiele lijnen -->
        <svg class="absolute inset-0 w-full h-full opacity-5" viewBox="0 0 1000 1000">
            <defs>
                <pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse">
                    <path d="M 50 0 L 0 0 0 50" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)" />
        </svg>
    </div>

    <div class="container mx-auto px-6 lg:px-8 relative z-10">
        <!-- Header sectie -->
        <div class="text-center mb-12 lg:mb-16">
            <!-- Badge -->
            <div class="inline-flex items-center justify-center mb-6">
                <div class="px-6 py-2 bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm border border-gray-200/50 dark:border-gray-700/50 rounded-full shadow-lg">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <span class="text-gray-700 dark:text-gray-300 font-medium text-sm">Professionele Aanbevelingen</span>
                    </div>
                </div>
            </div>

            <!-- Hoofdtitel -->
            <h2 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
                <span class="text-slate-900 dark:text-white">Professionele</span>
                <br class="hidden sm:block">
                <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">Aanbevelingen</span>
            </h2>

            <!-- Subtitel -->
            <p class="text-xl lg:text-2xl text-slate-600 dark:text-slate-300 max-w-4xl mx-auto leading-relaxed font-light">
                Ontdek wat mijn stagebegeleider en collega's bij <span class="font-semibold text-slate-800 dark:text-slate-200">Developing B.V.</span> te zeggen hebben over mijn prestaties, vaardigheden en professionele groei.
            </p>

            <!-- Decoratieve lijn -->
            <div class="flex justify-center mt-12">
                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-full"></div>
            </div>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 xl:gap-12">
            
            <!-- Testimonial 1 - Sven van der Berg -->
            <div class="group">
                <div class="relative h-full">
                    <!-- Glow effect -->
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-purple-500 rounded-3xl blur opacity-20 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
                    
                    <!-- Main card -->
                    <div class="relative bg-white dark:bg-slate-800 rounded-3xl shadow-2xl border border-slate-200/50 dark:border-slate-700/50 backdrop-blur-sm overflow-hidden h-full flex flex-col transform transition-all duration-500 group-hover:-translate-y-2">
                        
                        <!-- Header gradient -->
                        <div class="h-2 bg-gradient-to-r from-blue-500 via-blue-600 to-purple-600"></div>
                        
                        <!-- Content -->
                        <div class="p-8 flex-1 flex flex-col">
                            
                            <!-- Profile Section -->
                            <div class="flex items-center gap-4 mb-8">
                                <div class="relative">
                                    <!-- Avatar -->
                                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg transform transition-transform duration-300 group-hover:scale-110">
                                        <span class="text-white font-bold text-xl">SB</span>
                                    </div>
                                    <!-- Status indicator -->
                                    <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-white dark:border-slate-800"></div>
                                </div>
                                
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-1">Sven van der Berg</h3>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium flex items-center gap-2">
                                        <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        Werk Begeleider
                                    </p>
                                    <p class="text-blue-600 dark:text-blue-400 text-xs font-medium">Developing B.V.</p>
                                </div>
                            </div>

                            <!-- Quote -->
                            <div class="relative flex-1">
                                <!-- Quote icon -->
                                <svg class="absolute -top-2 -left-2 w-8 h-8 text-blue-500/20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                                
                                <blockquote class="text-slate-700 dark:text-slate-300 leading-relaxed text-lg italic pl-6">
                                    "Naoufal heeft tijdens zijn stage laten zien dat hij een gedreven developer is met een scherp oog voor detail. Hij pakt nieuwe technieken snel op en weet deze effectief toe te passen in zijn projecten."
                                </blockquote>
                            </div>

                            <!-- Skills -->
                            <div class="mt-8 pt-6 border-t border-slate-200/50 dark:border-slate-700/50">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-4 py-2 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-xl text-sm font-medium border border-blue-100 dark:border-blue-800/50 transition-all duration-300 hover:scale-105 hover:shadow-md">
                                        Innovatie
                                    </span>
                                    <span class="px-4 py-2 bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-xl text-sm font-medium border border-purple-100 dark:border-purple-800/50 transition-all duration-300 hover:scale-105 hover:shadow-md">
                                        Detail
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 - Kristian Huisman -->
            <div class="group">
                <div class="relative h-full">
                    <!-- Glow effect -->
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-green-500 to-teal-500 rounded-3xl blur opacity-20 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
                    
                    <!-- Main card -->
                    <div class="relative bg-white dark:bg-slate-800 rounded-3xl shadow-2xl border border-slate-200/50 dark:border-slate-700/50 backdrop-blur-sm overflow-hidden h-full flex flex-col transform transition-all duration-500 group-hover:-translate-y-2">
                        
                        <!-- Header gradient -->
                        <div class="h-2 bg-gradient-to-r from-green-500 via-emerald-600 to-teal-600"></div>
                        
                        <!-- Content -->
                        <div class="p-8 flex-1 flex flex-col">
                            
                            <!-- Profile Section -->
                            <div class="flex items-center gap-4 mb-8">
                                <div class="relative">
                                    <!-- Avatar -->
                                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl flex items-center justify-center shadow-lg transform transition-transform duration-300 group-hover:scale-110">
                                        <span class="text-white font-bold text-xl">KH</span>
                                    </div>
                                    <!-- Status indicator -->
                                    <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-white dark:border-slate-800"></div>
                                </div>
                                
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-1">Kristian Huisman</h3>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium flex items-center gap-2">
                                        <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                        </svg>
                                        Senior Developer
                                    </p>
                                    <p class="text-green-600 dark:text-green-400 text-xs font-medium">Developing B.V.</p>
                                </div>
                            </div>

                            <!-- Quote -->
                            <div class="relative flex-1">
                                <!-- Quote icon -->
                                <svg class="absolute -top-2 -left-2 w-8 h-8 text-green-500/20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                                
                                <blockquote class="text-slate-700 dark:text-slate-300 leading-relaxed text-lg italic pl-6">
                                    "Als senior developer ben ik onder de indruk van Naoufal's technische inzicht en probleemoplossend vermogen. Hij werkt zelfstandig en komt vaak met creatieve oplossingen voor complexe uitdagingen."
                                </blockquote>
                            </div>

                            <!-- Skills -->
                            <div class="mt-8 pt-6 border-t border-slate-200/50 dark:border-slate-700/50">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-4 py-2 bg-green-50 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-xl text-sm font-medium border border-green-100 dark:border-green-800/50 transition-all duration-300 hover:scale-105 hover:shadow-md">
                                        Technisch
                                    </span>
                                    <span class="px-4 py-2 bg-teal-50 dark:bg-teal-900/30 text-teal-600 dark:text-teal-400 rounded-xl text-sm font-medium border border-teal-100 dark:border-teal-800/50 transition-all duration-300 hover:scale-105 hover:shadow-md">
                                        Creatief
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 - Mark Timmers -->
            <div class="group">
                <div class="relative h-full">
                    <!-- Glow effect -->
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500 to-pink-500 rounded-3xl blur opacity-20 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
                    
                    <!-- Main card -->
                    <div class="relative bg-white dark:bg-slate-800 rounded-3xl shadow-2xl border border-slate-200/50 dark:border-slate-700/50 backdrop-blur-sm overflow-hidden h-full flex flex-col transform transition-all duration-500 group-hover:-translate-y-2">
                        
                        <!-- Header gradient -->
                        <div class="h-2 bg-gradient-to-r from-purple-500 via-purple-600 to-pink-600"></div>
                        
                        <!-- Content -->
                        <div class="p-8 flex-1 flex flex-col">
                            
                            <!-- Profile Section -->
                            <div class="flex items-center gap-4 mb-8">
                                <div class="relative">
                                    <!-- Avatar -->
                                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center shadow-lg transform transition-transform duration-300 group-hover:scale-110">
                                        <span class="text-white font-bold text-xl">MT</span>
                                    </div>
                                    <!-- Status indicator -->
                                    <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-white dark:border-slate-800"></div>
                                </div>
                                
                                <div>
                                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-1">Mark Timmers</h3>
                                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium flex items-center gap-2">
                                        <svg class="w-4 h-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                        </svg>
                                        Frontend Specialist
                                    </p>
                                    <p class="text-purple-600 dark:text-purple-400 text-xs font-medium">Developing B.V.</p>
                                </div>
                            </div>

                            <!-- Quote -->
                            <div class="relative flex-1">
                                <!-- Quote icon -->
                                <svg class="absolute -top-2 -left-2 w-8 h-8 text-purple-500/20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                                
                                <blockquote class="text-slate-700 dark:text-slate-300 leading-relaxed text-lg italic pl-6">
                                    "Naoufal heeft een natuurlijk talent voor frontend development. Zijn oog voor design en gebruikerservaring, gecombineerd met zijn technische vaardigheden, maken hem een waardevolle toevoeging aan ons team."
                                </blockquote>
                            </div>

                            <!-- Skills -->
                            <div class="mt-8 pt-6 border-t border-slate-200/50 dark:border-slate-700/50">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-4 py-2 bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-xl text-sm font-medium border border-purple-100 dark:border-purple-800/50 transition-all duration-300 hover:scale-105 hover:shadow-md">
                                        Frontend
                                    </span>
                                    <span class="px-4 py-2 bg-pink-50 dark:bg-pink-900/30 text-pink-600 dark:text-pink-400 rounded-xl text-sm font-medium border border-pink-100 dark:border-pink-800/50 transition-all duration-300 hover:scale-105 hover:shadow-md">
                                        UX Design
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom CTA Section -->
        <div class="mt-20 text-center">
            <div class="inline-flex items-center gap-4 px-8 py-4 bg-white/60 dark:bg-slate-800/60 backdrop-blur-sm rounded-2xl border border-slate-200/50 dark:border-slate-700/50 shadow-lg">
                <div class="flex -space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full border-2 border-white dark:border-slate-800 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">SB</span>
                    </div>
                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-teal-600 rounded-full border-2 border-white dark:border-slate-800 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">KH</span>
                    </div>
                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full border-2 border-white dark:border-slate-800 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">MT</span>
                    </div>
                </div>
                <div class="text-left">
                    <p class="text-slate-900 dark:text-white font-semibold text-sm">3 Professionele Aanbevelingen</p>
                    <p class="text-slate-600 dark:text-slate-400 text-xs">Van het team bij Developing B.V.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes blob {
    0% {
        transform: translate(0px, 0px) scale(1);
    }
    33% {
        transform: translate(30px, -50px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
    100% {
        transform: translate(0px, 0px) scale(1);
    }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}
</style>

<!-- Call to Action Section -->
<section class="py-20 px-4 bg-gradient-to-br from-blue-600 to-blue-800 text-white dark:from-blue-800 dark:to-blue-600">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-xl lg:text-2xl font-bold text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300 mb-2">
            Klaar om samen te werken?
        </h2>
        <p class="text-lg opacity-90 mb-8">
            Ik sta altijd open voor nieuwe uitdagingen en samenwerkingen
        </p>
        <a href="contact" 
           class="group inline-flex items-center px-8 py-3 bg-white text-blue-600 rounded-full hover:bg-blue-50 transform hover:-translate-y-1 hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl hover:shadow-blue-500/25 gap-2">
            <span>Neem contact op</span>
            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H6"/>
            </svg>
        </a>
    </div>
</section>

<?php 
// Bepaal de correcte pad voor includes gebaseerd op uitvoeringscontext
$includesFooterPath = file_exists('includes/footer.php') ? 'includes/footer.php' : '../includes/footer.php';
include $includesFooterPath; 
?>

<!-- Advanced JavaScript for Enhanced Interactivity -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced Intersection Observer for smooth animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                
                // Trigger any additional effects
                if (entry.target.classList.contains('group/skill')) {
                    const progressBar = entry.target.querySelector('[style*="width"]');
                    if (progressBar) {
                        progressBar.style.transform = 'scaleX(' + progressBar.style.width.replace('%', '') / 100 + ')';
                    }
                }
            }
        });
    }, observerOptions);
    
    // Observe all animated elements
    document.querySelectorAll('.slide-in-left, .slide-in-right, .slide-in-up, .fade-in-scale').forEach(el => {
        observer.observe(el);
    });
    
    // Smooth scrolling for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Enhanced card hover effects
    document.querySelectorAll('.group').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.3s ease';
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 20px 40px rgba(0,0,0,0.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0px)';
            this.style.boxShadow = 'none';
        });
    });
    
    // Accessibility: Respect prefers-reduced-motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    
    if (prefersReducedMotion.matches) {
        // Disable animations for users who prefer reduced motion
        document.querySelectorAll('[class*="animate-"]').forEach(el => {
            el.style.animation = 'none';
        });
        
        document.querySelectorAll('[class*="transition-"]').forEach(el => {
            el.style.transition = 'none';
        });
    }
    
    console.log('🚀 Home page animations initialized successfully!');
});
</script>