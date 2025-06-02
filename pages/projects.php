<?php
$pageTitle = "Projecten";
$currentPage = "projects";
$pageDescription = "Bekijk de projecten waar Naoufal Andichi aan heeft gewerkt. Een portfolio van websites, applicaties en andere ontwikkelingsprojecten.";
$pageKeywords = "Naoufal Andichi, projecten, portfolio, development, webapplicaties, websites, coding";

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
        <div class="absolute top-20 left-10 w-72 h-72 bg-gradient-to-r from-blue-400/20 to-purple-500/20 rounded-full mix-blend-multiply filter blur-xl animate-slow-float"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-full mix-blend-multiply filter blur-xl animate-slow-float-reverse"></div>
        <div class="absolute bottom-20 left-1/3 w-80 h-80 bg-gradient-to-r from-cyan-400/20 to-blue-500/20 rounded-full mix-blend-multiply filter blur-xl animate-slow-float-delayed"></div>
        
        <!-- Subtiele lichteffecten -->
        <div class="absolute top-0 left-1/4 w-px h-32 bg-gradient-to-b from-blue-500/50 to-transparent"></div>
        <div class="absolute top-0 right-1/3 w-px h-40 bg-gradient-to-b from-purple-500/50 to-transparent"></div>
        <div class="absolute top-0 left-3/4 w-px h-24 bg-gradient-to-b from-pink-500/50 to-transparent"></div>
    </div>

    <!-- Content Container -->
    <div class="relative z-10 pt-24 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            <!-- Elegante Header Sectie -->
        <div class="text-center mb-20" data-aos="fade-down">
                <!-- Subtiele badge -->
                <div class="inline-flex items-center justify-center mb-6">
                    <div class="flex items-center space-x-3 px-6 py-3 bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg rounded-full border border-white/20 dark:border-gray-700/20 shadow-lg">
                        <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                        <span class="text-blue-600 dark:text-blue-400 font-medium tracking-wide text-sm uppercase">Portfolio Showcase</span>
                        <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse animation-delay-1000"></div>
                    </div>
            </div>

                <!-- Hoofd titel met gradient effect -->
                <h1 class="text-5xl sm:text-6xl md:text-7xl font-black mb-8 tracking-tight">
                    <span class="block bg-gradient-to-r from-gray-900 via-blue-800 to-purple-800 dark:from-white dark:via-blue-200 dark:to-purple-200 bg-clip-text text-transparent leading-tight">
                        Mijn Projecten
                    </span>
                    <span class="block text-3xl sm:text-4xl md:text-5xl font-light text-gray-600 dark:text-gray-300 mt-2">
                        & Innovaties
                    </span>
            </h1>

                <!-- Beschrijving met betere typografie -->
                <div class="max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-xl text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
                        Een collectie van mijn meest impactvolle technische creaties, van webapplicaties tot complexe systemen.
                        Elk project vertelt een verhaal van innovatie, problem-solving en technische excellentie.
                    </p>
                    
                    <!-- Stats sectie -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
                        <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                            <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">15+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Projecten</div>
                        </div>
                        <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                            <div class="text-3xl font-bold text-purple-600 dark:text-purple-400">8</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Technologieën</div>
                        </div>
                        <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                            <div class="text-3xl font-bold text-pink-600 dark:text-pink-400">2000+</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Commits</div>
                        </div>
                        <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                            <div class="text-3xl font-bold text-cyan-600 dark:text-cyan-400">3</div>
                            <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Jaar Ervaring</div>
                        </div>
                    </div>
                </div>
        </div>

            <!-- Uitgelicht Project: PolitiekPraat -->
            <div class="relative z-10 mb-20 overflow-hidden" data-aos="fade-up">
                <div class="bg-gradient-to-br from-blue-600 via-purple-700 to-indigo-800 rounded-3xl shadow-2xl overflow-hidden relative">

                    <!-- Decoratieve elementen -->
                    <div class="absolute inset-0">
                        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -translate-y-48 translate-x-48 blur-3xl"></div>
                        <div class="absolute bottom-0 left-0 w-80 h-80 bg-white/10 rounded-full translate-y-40 -translate-x-40 blur-3xl"></div>
                        <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-gradient-to-r from-pink-500/20 to-purple-500/20 rounded-full -translate-x-1/2 -translate-y-1/2 blur-2xl animate-pulse"></div>
                    </div>
                    
                    <div class="relative z-10 p-8 lg:p-12">
                        <div class="flex flex-col xl:flex-row gap-12 items-center">
                            
                        <!-- Project Info -->
                        <div class="flex-1 w-full">
                            <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm font-medium mb-6">
                                    <span class="mr-2 text-yellow-300">⭐</span> Uitgelicht Project
                            </div>
                            
                                <h2 class="text-4xl sm:text-5xl xl:text-6xl font-black text-white mb-4">PolitiekPraat</h2>
                                <p class="text-xl text-white/90 mb-4 font-medium">Samen bouwen aan democratie</p>
                                
                                <p class="text-white/80 mb-8 text-lg leading-relaxed">
                                    PolitiekPraat is een belangrijk platform waar mensen open en respectvol praten over politiek in Nederland. 
                                    We moedigen gesprekken aan waarin iedereen zijn mening kan geven en kritisch leert denken over actuele onderwerpen. 
                                    Op ons platform vind je blogs, nieuwsberichten, een stemwijzer, live peilingen en een actief forum.
                                </p>
                                
                            <!-- Tech Stack -->
                                <div class="flex flex-wrap gap-3 mb-8">
                                    <span class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm rounded-xl border border-white/20 hover:bg-white/20 transition-colors">
                                        <i class="fab fa-php mr-2 text-blue-200"></i> PHP
                                </span>
                                    <span class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm rounded-xl border border-white/20 hover:bg-white/20 transition-colors">
                                        <i class="fab fa-laravel mr-2 text-red-200"></i> Laravel
                                </span>
                                    <span class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm rounded-xl border border-white/20 hover:bg-white/20 transition-colors">
                                        <i class="fas fa-database mr-2 text-green-200"></i> MySQL
                                </span>
                                    <span class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm rounded-xl border border-white/20 hover:bg-white/20 transition-colors">
                                        <i class="fab fa-js mr-2 text-yellow-200"></i> JavaScript
                                </span>
                            </div>
                            
                            <!-- Project Stats -->
                                <div class="grid grid-cols-3 gap-6 mb-8">
                                    <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                                        <div class="text-3xl font-bold text-blue-300">345+</div>
                                        <div class="text-sm text-blue-100/80">Commits</div>
                                    </div>
                                    <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                                        <div class="text-3xl font-bold text-purple-300">128+</div>
                                        <div class="text-sm text-blue-100/80">Bestanden</div>
                                    </div>
                                    <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                                        <div class="text-3xl font-bold text-pink-300">15K+</div>
                                        <div class="text-sm text-blue-100/80">Gebruikers</div>
                                </div>
                            </div>
                            
                                <!-- CTA Button -->
                                <a href="https://politiekpraat.nl" target="_blank" rel="noopener noreferrer" 
                                   class="inline-flex items-center px-8 py-4 bg-white text-blue-600 hover:bg-blue-50 rounded-2xl transition-all duration-300 text-lg font-semibold transform hover:scale-105 shadow-lg">
                                    <i class="fas fa-external-link-alt mr-3"></i> Bekijk Website
                                </a>
                            </div>
                            
                            <!-- Project Features -->
                            <div class="flex-1 w-full bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20">
                                <h3 class="text-2xl font-bold text-white mb-6">Belangrijkste Functies</h3>
                                
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-white/20 rounded-xl mr-4">
                                            <i class="fas fa-newspaper text-white text-lg"></i>
                                    </div>
                                    <div>
                                            <h4 class="font-semibold text-white text-lg">Nieuws & Blogs</h4>
                                            <p class="text-white/80 text-sm">Actuele politieke artikelen en diepgaande analyses</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-white/20 rounded-xl mr-4">
                                            <i class="fas fa-chart-line text-white text-lg"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white text-lg">Live Peilingen</h4>
                                            <p class="text-white/80 text-sm">Real-time politieke peilingen en trendanalyses</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-white/20 rounded-xl mr-4">
                                            <i class="fas fa-vote-yea text-white text-lg"></i>
                                    </div>
                                    <div>
                                            <h4 class="font-semibold text-white text-lg">Stemwijzer</h4>
                                            <p class="text-white/80 text-sm">Interactieve tool om politieke voorkeuren te ontdekken</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-white/20 rounded-xl mr-4">
                                            <i class="fas fa-comments text-white text-lg"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white text-lg">Forum</h4>
                                            <p class="text-white/80 text-sm">Levendige discussies over actuele politieke thema's</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Actuele Thema's -->
                                <div class="mt-8 pt-6 border-t border-white/20">
                                    <h4 class="text-lg font-bold text-white mb-4">Actuele Thema's</h4>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="bg-white/10 rounded-xl p-3 hover:bg-white/15 transition-colors cursor-pointer">
                                            <span class="text-2xl mr-2">🌍</span>
                                            <span class="text-white text-sm font-medium">Klimaatbeleid</span>
                                        </div>
                                        <div class="bg-white/10 rounded-xl p-3 hover:bg-white/15 transition-colors cursor-pointer">
                                            <span class="text-2xl mr-2">🏠</span>
                                            <span class="text-white text-sm font-medium">Woningmarkt</span>
                                        </div>
                                        <div class="bg-white/10 rounded-xl p-3 hover:bg-white/15 transition-colors cursor-pointer">
                                            <span class="text-2xl mr-2">💶</span>
                                            <span class="text-white text-sm font-medium">Economie</span>
                                        </div>
                                        <div class="bg-white/10 rounded-xl p-3 hover:bg-white/15 transition-colors cursor-pointer">
                                            <span class="text-2xl mr-2">🏥</span>
                                            <span class="text-white text-sm font-medium">Zorg</span>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <span class="text-white/70 text-sm">Ontdek meer dan 30+ politieke thema's</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Uitgelicht Project: Elyse Iedema -->
            <div class="relative z-10 mb-20 overflow-hidden" data-aos="fade-up">
                <div class="bg-gradient-to-br from-pink-500 via-purple-600 to-indigo-700 rounded-3xl shadow-2xl overflow-hidden relative">
                    
                    <!-- Decoratieve elementen -->
                    <div class="absolute inset-0">
                        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -translate-y-48 translate-x-48 blur-3xl"></div>
                        <div class="absolute bottom-0 left-0 w-80 h-80 bg-white/10 rounded-full translate-y-40 -translate-x-40 blur-3xl"></div>
                        <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-gradient-to-r from-cyan-500/20 to-pink-500/20 rounded-full -translate-x-1/2 -translate-y-1/2 blur-2xl animate-pulse"></div>
                    </div>
                    
                    <div class="relative z-10 p-8 lg:p-12">
                        <div class="flex flex-col xl:flex-row gap-12 items-center">
                            
                            <!-- Project Info -->
                            <div class="flex-1 w-full">
                                <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm font-medium mb-6">
                                    <span class="mr-2 text-pink-300">📸</span> Fotografie Portfolio
                                </div>
                                
                                <h2 class="text-4xl sm:text-5xl xl:text-6xl font-black text-white mb-4">Elyse Iedema</h2>
                                <p class="text-xl text-white/90 mb-4 font-medium">Professioneel Fotografieplatform</p>
                                
                                <p class="text-white/80 mb-8 text-lg leading-relaxed">
                                    Een elegante portfolio website voor professionele fotograaf Elyse Iedema. Het platform toont haar 
                                    prachtige fotografie werk met een moderne, responsieve gallery en professioneel contactsysteem. 
                                    Perfect geoptimaliseerd voor zowel desktop als mobiele weergave.
                                </p>
                                
                                <!-- Tech Stack -->
                                <div class="flex flex-wrap gap-3 mb-8">
                                    <span class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm rounded-xl border border-white/20 hover:bg-white/20 transition-colors">
                                        <i class="fab fa-php mr-2 text-blue-200"></i> PHP
                                    </span>
                                    <span class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm rounded-xl border border-white/20 hover:bg-white/20 transition-colors">
                                        <i class="fas fa-database mr-2 text-green-200"></i> MySQL
                                    </span>
                                    <span class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm rounded-xl border border-white/20 hover:bg-white/20 transition-colors">
                                        <i class="fab fa-js mr-2 text-yellow-200"></i> JavaScript
                                    </span>
                                    <span class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm text-white text-sm rounded-xl border border-white/20 hover:bg-white/20 transition-colors">
                                        <i class="fab fa-bootstrap mr-2 text-purple-200"></i> Bootstrap
                                    </span>
                                </div>
                                
                                <!-- Project Stats -->
                                <div class="grid grid-cols-3 gap-6 mb-8">
                                    <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                                        <div class="text-3xl font-bold text-pink-300">167+</div>
                                        <div class="text-sm text-white/80">Commits</div>
                                    </div>
                                    <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                                        <div class="text-3xl font-bold text-purple-300">62+</div>
                                        <div class="text-sm text-white/80">Bestanden</div>
                                    </div>
                                    <div class="text-center p-4 bg-white/10 backdrop-blur-sm rounded-2xl border border-white/20">
                                        <div class="text-3xl font-bold text-cyan-300">500+</div>
                                        <div class="text-sm text-white/80">Foto's</div>
                                    </div>
                                </div>
                                
                                <!-- CTA Button -->
                                <a href="https://elyseiedema.nl" target="_blank" rel="noopener noreferrer" 
                                   class="inline-flex items-center px-8 py-4 bg-white text-pink-600 hover:bg-pink-50 rounded-2xl transition-all duration-300 text-lg font-semibold transform hover:scale-105 shadow-lg">
                                    <i class="fas fa-external-link-alt mr-3"></i> Bekijk Portfolio
                                </a>
                            </div>
                            
                            <!-- Project Features -->
                            <div class="flex-1 w-full bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20">
                                <h3 class="text-2xl font-bold text-white mb-6">Platform Features</h3>
                                
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-white/20 rounded-xl mr-4">
                                            <i class="fas fa-images text-white text-lg"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white text-lg">Responsieve Gallery</h4>
                                            <p class="text-white/80 text-sm">Moderne foto gallery met lightbox en mobile optimalisatie</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-white/20 rounded-xl mr-4">
                                            <i class="fas fa-envelope text-white text-lg"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white text-lg">Contact Systeem</h4>
                                            <p class="text-white/80 text-sm">Geïntegreerd contactformulier voor fotoshoot aanvragen</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-white/20 rounded-xl mr-4">
                                            <i class="fas fa-palette text-white text-lg"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white text-lg">Elegante Design</h4>
                                            <p class="text-white/80 text-sm">Minimalistisch design dat de fotografie centraal stelt</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 w-12 h-12 flex items-center justify-center bg-white/20 rounded-xl mr-4">
                                            <i class="fas fa-tachometer-alt text-white text-lg"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-white text-lg">Performance</h4>
                                            <p class="text-white/80 text-sm">Geoptimaliseerd voor snelle laadtijden en SEO</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Fotografie Specialisaties -->
                                <div class="mt-8 pt-6 border-t border-white/20">
                                    <h4 class="text-lg font-bold text-white mb-4">Fotografie Specialisaties</h4>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="bg-white/10 rounded-xl p-3 hover:bg-white/15 transition-colors cursor-pointer">
                                            <span class="text-2xl mr-2">💍</span>
                                            <span class="text-white text-sm font-medium">Bruiloften</span>
                                        </div>
                                        <div class="bg-white/10 rounded-xl p-3 hover:bg-white/15 transition-colors cursor-pointer">
                                            <span class="text-2xl mr-2">👶</span>
                                            <span class="text-white text-sm font-medium">Portretten</span>
                                        </div>
                                        <div class="bg-white/10 rounded-xl p-3 hover:bg-white/15 transition-colors cursor-pointer">
                                            <span class="text-2xl mr-2">🌸</span>
                                            <span class="text-white text-sm font-medium">Evenementen</span>
                                        </div>
                                        <div class="bg-white/10 rounded-xl p-3 hover:bg-white/15 transition-colors cursor-pointer">
                                            <span class="text-2xl mr-2">🏢</span>
                                            <span class="text-white text-sm font-medium">Zakelijk</span>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <span class="text-white/70 text-sm">Professionele fotografie voor alle gelegenheden</span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Filter Systeem -->
            <div class="relative z-10 flex flex-wrap justify-center gap-4 mb-16" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">
                        <span class="flex items-center">
                            <i class="fas fa-th-large mr-2"></i>
                            Alle Projecten
                        </span>
                    </button>
                <button class="filter-btn" data-filter="web">
                        <span class="flex items-center">
                            <i class="fas fa-globe mr-2"></i>
                            Web Development
                        </span>
                    </button>
                <button class="filter-btn" data-filter="app">
                        <span class="flex items-center">
                            <i class="fas fa-mobile-alt mr-2"></i>
                            Applicaties
                        </span>
                    </button>
                <button class="filter-btn" data-filter="system">
                        <span class="flex items-center">
                            <i class="fas fa-server mr-2"></i>
                            Systemen
                        </span>
                    </button>
                </div>

        <!-- Projecten Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="200">
            <?php
            $projects = [
                [
                    'name' => 'Elyse Iedema',
                    'description' => 'Elyse Iedema is een fotografie bedrijf dat ik heb gemaakt met PHP, MySQL, JavaScript en Bootstrap.',
                    'tech' => ['PHP', 'MySQL', 'JavaScript', 'Bootstrap'],
                    'icon' => 'fa-camera',
                    'category' => 'web',
                    'color' => 'cyan',
                    'github' => 'elyseiedema',
                    'preview_url' => 'https://elyseiedema.nl',
                        'stats' => ['commits' => '167', 'files' => '62', 'contributors' => '1']
                ],
                [
                    'name' => 'PAS',
                    'description' => 'PAS is een systeem dat ik heb gemaakt om pakketten bij te houden. Het helpt bij het opslaan van pakketten en laat zien wanneer mensen ze kunnen ophalen.',
                    'tech' => ['PHP', 'MySQL', 'Laravel', 'Docker'],
                    'icon' => 'fa-boxes-stacked',
                    'category' => 'web',
                    'color' => 'blue',
                    'github' => 'PAS',
                    'preview_url' => '#',
                        'stats' => ['commits' => '189', 'files' => '67', 'contributors' => '1']
                ],
                [
                    'name' => 'PMON',
                    'description' => 'Een Java-gebaseerd monitoring systeem voor applicatie prestaties. Real-time monitoring en data visualisatie.',
                    'tech' => ['Java', 'Spring Boot', 'PostgreSQL'],
                    'icon' => 'fa-gauge-high',
                    'category' => 'system',
                    'color' => 'orange',
                    'github' => 'pmon',
                    'preview_url' => '#',
                        'stats' => ['commits' => '145', 'files' => '52', 'contributors' => '1']
                ],
                [
                    'name' => 'Poketrader',
                    'description' => 'Een PHP-applicatie voor het beheren en verhandelen van Pokemon kaarten.',
                    'tech' => ['PHP', 'MySQL', 'JavaScript'],
                    'icon' => 'fa-diamond',
                    'category' => 'web',
                    'color' => 'red',
                    'github' => 'poketrader',
                    'preview_url' => '#',
                        'stats' => ['commits' => '167', 'files' => '45', 'contributors' => '1']
                ],
                [
                    'name' => 'Divo',
                    'description' => 'Een modern online stemsysteem ontwikkeld voor verkiezingen. Veilig, gebruiksvriendelijk en schaalbaar platform dat het democratische proces digitaliseert.',
                    'tech' => ['PHP', 'MySQL', 'Laravel'],
                    'icon' => 'fa-check-to-slot',
                    'category' => 'web',
                    'color' => 'green',
                    'github' => 'divo',
                    'preview_url' => '#',
                        'stats' => ['commits' => '223', 'files' => '78', 'contributors' => '2']
                ],
                [
                    'name' => 'GamePC',
                    'description' => 'PHP applicatie gericht op gaming en PC configuraties. Gebruikers kunnen hun eigen gaming PC samenstellen en de prestaties vergelijken.',
                    'tech' => ['PHP', 'MySQL', 'JavaScript'],
                    'icon' => 'fa-desktop',
                    'category' => 'web',
                    'color' => 'purple',
                    'github' => 'gamepc',
                    'preview_url' => '#',
                        'stats' => ['commits' => '178', 'files' => '56', 'contributors' => '1']
                ],
                [
                    'name' => 'Bookonshelf',
                    'description' => 'Een PHP-gebaseerd boekbeheersysteem voor het bijhouden van je persoonlijke bibliotheek, inclusief leesvoortgang en recensies.',
                    'tech' => ['PHP', 'MySQL', 'Bootstrap'],
                    'icon' => 'fa-book-open',
                    'category' => 'web',
                    'color' => 'yellow',
                    'github' => 'bookonshelf',
                    'preview_url' => '#',
                        'stats' => ['commits' => '134', 'files' => '42', 'contributors' => '1']
                ],
                [
                    'name' => 'Gimpies',
                    'description' => 'C# applicatie voor schoenenwinkel management. Beheert voorraad, verkopen en klantgegevens met een gebruiksvriendelijke interface.',
                    'tech' => ['C#', '.NET', 'SQL Server'],
                    'icon' => 'fa-shoe-prints',
                    'category' => 'app',
                    'color' => 'indigo',
                    'github' => 'gimpies',
                    'preview_url' => '#',
                        'stats' => ['commits' => '198', 'files' => '64', 'contributors' => '1']
                ],
                [
                    'name' => 'Geregeld.online',
                    'description' => 'Een platform voor ZZP\'ers om eenvoudig een professionele website aan te schaffen. Het platform biedt verschillende templates en opties om de website volledig aan te passen aan de wensen van de ondernemer.',
                    'tech' => ['WordPress', 'PHP', 'JavaScript', 'SCSS'],
                    'icon' => 'fa-briefcase',
                    'category' => 'web',
                    'color' => 'emerald',
                    'github' => 'go-theme',
                    'preview_url' => 'https://geregeld.online',
                        'stats' => ['commits' => '234', 'files' => '89', 'contributors' => '2']
                ],
                [
                    'name' => 'VoetbalVisie',
                    'description' => 'Een platform voor voetbalanalyses en statistieken. Biedt real-time wedstrijdanalyses, spelersstatistieken en tactische inzichten voor voetbalfans.',
                    'tech' => ['PHP', 'Laravel', 'React', 'MySQL'],
                    'icon' => 'fa-futbol',
                    'category' => 'web',
                    'color' => 'cyan',
                    'github' => 'VoetbalVisie',
                    'preview_url' => '#',
                        'stats' => ['commits' => '167', 'files' => '62', 'contributors' => '1']
                ],
                [
                    'name' => 'Portfolio Website',
                    'description' => 'Een moderne, responsieve portfolio website gebouwd met PHP, Tailwind CSS en JavaScript. Features dark mode, meertalige ondersteuning en een contactformulier.',
                    'tech' => ['PHP', 'Tailwind CSS', 'JavaScript'],
                    'icon' => 'fa-globe',
                    'category' => 'web',
                    'color' => 'blue',
                    'github' => 'portfolio-website',
                    'preview_url' => '#',
                        'stats' => ['commits' => '156', 'files' => '48', 'contributors' => '1']
                ],
            ];

            foreach ($projects as $project): ?>
                    <div class="project-card group" data-category="<?php echo $project['category']; ?>">
                        <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl hover:shadow-black/10">
                            
                            <!-- Gradient overlay -->
                            <div class="absolute inset-0 bg-gradient-to-br from-<?php echo $project['color']; ?>-500/10 via-transparent to-<?php echo $project['color']; ?>-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Decoratieve elementen -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-<?php echo $project['color']; ?>-400/20 to-transparent rounded-full -translate-y-16 translate-x-16 group-hover:scale-150 transition-transform duration-700"></div>
                            <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-<?php echo $project['color']; ?>-500/15 to-transparent rounded-full translate-y-12 -translate-x-12 group-hover:scale-125 transition-transform duration-700"></div>
                        
                            <!-- Content -->
                        <div class="relative z-10 p-8 h-full flex flex-col">
                                
                            <!-- Header -->
                                <div class="flex items-start justify-between mb-6">
                                    <div class="relative">
                                        <div class="w-16 h-16 bg-gradient-to-br from-<?php echo $project['color']; ?>-400 to-<?php echo $project['color']; ?>-600 rounded-2xl flex items-center justify-center shadow-lg">
                                    <i class="fas <?php echo $project['icon']; ?> text-2xl text-white"></i>
                                        </div>
                                </div>
                                
                                    <div class="flex flex-col items-end space-y-3">
                                        <span class="px-3 py-1.5 rounded-full text-xs font-semibold bg-<?php echo $project['color']; ?>-100 dark:bg-<?php echo $project['color']; ?>-900/30 text-<?php echo $project['color']; ?>-700 dark:text-<?php echo $project['color']; ?>-300">
                                        <?php echo ucfirst($project['category']); ?>
                                    </span>
                                    
                                        <div class="flex space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                    <?php if (isset($project['github'])): ?>
                                            <a href="https://github.com/nandichi/<?php echo $project['github']; ?>" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-lg bg-gray-900/80 dark:bg-white/80 text-white dark:text-gray-900 hover:scale-110 transition-transform">
                                                <i class="fab fa-github text-sm"></i>
                                            </a>
                                            <?php endif; ?>
                                            
                                            <?php if (isset($project['preview_url']) && $project['preview_url'] !== '#'): ?>
                                            <a href="<?php echo $project['preview_url']; ?>" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-lg bg-<?php echo $project['color']; ?>-500 text-white hover:scale-110 transition-transform">
                                                <i class="fas fa-external-link-alt text-sm"></i>
                                    </a>
                                    <?php endif; ?>
                                        </div>
                                </div>
                            </div>
                            
                                <!-- Project info -->
                            <div class="flex-grow">
                                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-<?php echo $project['color']; ?>-600 dark:group-hover:text-<?php echo $project['color']; ?>-400 transition-colors">
                                    <?php echo $project['name']; ?>
                                </h3>
                                
                                    <p class="text-gray-600 dark:text-gray-300 mb-6 text-sm leading-relaxed">
                                    <?php echo $project['description']; ?>
                                </p>
                                
                                    <!-- Tech stack -->
                                <div class="flex flex-wrap gap-2 mb-6">
                                    <?php foreach ($project['tech'] as $tech): ?>
                                        <span class="px-3 py-1.5 text-xs font-medium bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg hover:bg-<?php echo $project['color']; ?>-100 dark:hover:bg-<?php echo $project['color']; ?>-900/30 hover:text-<?php echo $project['color']; ?>-700 dark:hover:text-<?php echo $project['color']; ?>-300 transition-all transform hover:scale-105">
                                        <?php echo $tech; ?>
                                    </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            
                            <!-- Footer -->
                                <div class="mt-auto pt-6 border-t border-gray-200 dark:border-gray-700">
                                <div class="grid grid-cols-3 gap-4 mb-6">
                                    <div class="text-center">
                                            <div class="text-xl font-bold text-<?php echo $project['color']; ?>-600 dark:text-<?php echo $project['color']; ?>-400">
                                            <?php echo $project['stats']['commits']; ?>
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Commits</div>
                                    </div>
                                    <div class="text-center">
                                            <div class="text-xl font-bold text-<?php echo $project['color']; ?>-600 dark:text-<?php echo $project['color']; ?>-400">
                                            <?php echo $project['stats']['files']; ?>
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Bestanden</div>
                                    </div>
                                    <div class="text-center">
                                            <div class="text-xl font-bold text-<?php echo $project['color']; ?>-600 dark:text-<?php echo $project['color']; ?>-400">
                                            <?php echo $project['stats']['contributors']; ?>
                                            </div>
                                            <div class="text-xs text-gray-500 dark:text-gray-400">Bijdragers</div>
                                        </div>
                                    </div>
                                
                                <?php if (isset($project['preview_url']) && $project['preview_url'] !== '#'): ?>
                                    <a href="<?php echo $project['preview_url']; ?>" target="_blank" class="w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-<?php echo $project['color']; ?>-500 to-<?php echo $project['color']; ?>-600 hover:from-<?php echo $project['color']; ?>-600 hover:to-<?php echo $project['color']; ?>-700 text-white font-semibold text-sm rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300">
                                        <span class="mr-2">Bekijk Project</span>
                                        <i class="fas fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
                                </a>
                                    <?php else: ?>
                                    <div class="w-full inline-flex items-center justify-center px-6 py-3 bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-400 font-semibold text-sm rounded-xl cursor-not-allowed">
                                        <i class="fas fa-lock mr-2"></i>
                                        Privé Project
                                    </div>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
        </div>
    </div>
</div>

<!-- Aangepaste CSS -->
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

/* Filter buttons */
.filter-btn {
    @apply px-6 py-3 rounded-xl text-sm font-medium transition-all duration-300 hover:scale-105 bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg text-gray-700 dark:text-gray-200 border border-white/20 dark:border-gray-700/20;
}

.filter-btn.active {
    @apply bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg transform scale-105;
}

.filter-btn:hover:not(.active) {
    @apply bg-gradient-to-r from-blue-600 to-purple-600 text-white;
}

/* Project cards */
.project-card {
    transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 1;
    transform: translateY(0);
}

.project-card[style*="display: none"] {
    opacity: 0;
    transform: translateY(20px) scale(0.95);
}

/* Responsive verbeteringen */
@media (max-width: 768px) {
    .project-card .group { transform: none !important; }
    .project-card .group:hover { transform: none !important; }
    .animate-slow-float, .animate-slow-float-reverse, .animate-slow-float-delayed { animation: none; }
}

/* Toegankelijkheid */
@media (prefers-reduced-motion: reduce) {
    * { animation-duration: 0.01ms !important; transition-duration: 0.01ms !important; }
    .project-card:hover { transform: none; }
}

/* Focus states */
.filter-btn:focus-visible, .project-card a:focus-visible {
    outline: 2px solid #3b82f6;
    outline-offset: 2px;
}
</style>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    let activeFilter = 'all';
    
    function filterProjects(filter) {
        if (filter === activeFilter) return;
        activeFilter = filter;
        
        requestAnimationFrame(() => {
            projectCards.forEach((card, index) => {
                const category = card.dataset.category;
                const shouldShow = filter === 'all' || category === filter;
                
                if (shouldShow) {
                    card.style.display = 'block';
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px) scale(0.95)';
                    
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0) scale(1)';
                    }, index * 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(-20px) scale(0.95)';
                    setTimeout(() => { card.style.display = 'none'; }, 300);
                }
            });
        });
    }
    
    filterButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            filterProjects(btn.dataset.filter);
        });
        
        btn.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                btn.click();
            }
        });
    });
    
    // Intersection Observer voor scroll animaties
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1, rootMargin: '50px 0px' });
        
        projectCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(50px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    }
    
    // Performance optimalisaties
    projectCards.forEach(card => {
        card.addEventListener('mouseenter', () => { card.style.willChange = 'transform'; });
        card.addEventListener('mouseleave', () => { card.style.willChange = 'auto'; });
    });
});
</script>

<?php 
$includesFooterPath = file_exists('includes/footer.php') ? 'includes/footer.php' : '../includes/footer.php';
include $includesFooterPath; 
?> 