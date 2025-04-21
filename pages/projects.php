<?php
$pageTitle = "Projecten";
$currentPage = "projects";
$pageDescription = "Bekijk de projecten waar Naoufal Andichi aan heeft gewerkt. Een portfolio van websites, applicaties en andere ontwikkelingsprojecten.";
$pageKeywords = "Naoufal Andichi, projecten, portfolio, development, webapplicaties, websites, coding";

// Bepaal de correcte pad voor includes gebaseerd op uitvoeringscontext
$includesPath = file_exists('includes/header.php') ? 'includes/header.php' : '../includes/header.php';
include $includesPath;
?>

<div class="min-h-screen bg-[#fafafa] dark:bg-gray-900 relative overflow-hidden">
    <!-- Dynamische achtergrond animatie -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute w-[500px] h-[500px] bg-gradient-to-r from-blue-500 to-purple-500 rounded-full filter blur-3xl animate-blob"></div>
        <div class="absolute right-0 w-[500px] h-[500px] bg-gradient-to-r from-purple-500 to-pink-500 rounded-full filter blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-0 left-1/2 w-[500px] h-[500px] bg-gradient-to-r from-pink-500 to-blue-500 rounded-full filter blur-3xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="relative pt-32 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <!-- Header Sectie -->
        <div class="text-center mb-20" data-aos="fade-down">
            <div class="inline-flex items-center justify-center mb-4">
                <span class="h-px w-8 bg-blue-500 mr-3"></span>
                <span class="text-blue-600 dark:text-blue-400 font-medium tracking-wider uppercase text-sm">Portfolio Projecten</span>
                <span class="h-px w-8 bg-blue-500 ml-3"></span>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white">
                <span class="text-blue-600 dark:text-blue-400">Innovatieve</span> Projecten
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Een collectie van mijn meest impactvolle technische creaties en innovaties
            </p>
        </div>



        <!-- Uitgelicht Project: PolitiekPraat -->
        <div class="relative z-10 mb-16 overflow-hidden" data-aos="fade-up">
            <div class="bg-gradient-to-br from-blue-600 via-purple-600 to-blue-600 rounded-3xl shadow-2xl overflow-hidden">
                <div class="relative p-6 md:p-8 lg:p-12">
                    <!-- Decoratieve elementen -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full -translate-y-1/2 translate-x-1/2 blur-2xl"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-10 rounded-full translate-y-1/2 -translate-x-1/2 blur-2xl"></div>
                    
                    <div class="relative z-10 flex flex-col lg:flex-row gap-8 lg:gap-12 items-center">
                        <!-- Project Info -->
                        <div class="flex-1 w-full">
                            <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm font-medium mb-6">
                                <span class="mr-2">⭐</span> Uitgelicht Project
                            </div>
                            
                            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-white mb-2 sm:mb-4">PolitiekPraat</h2>
                            <p class="text-lg sm:text-xl text-white/80 mb-3 sm:mb-4 font-medium">Samen bouwen aan democratie</p>
                            
                            <p class="text-white/90 mb-6 sm:mb-8 text-base sm:text-lg leading-relaxed">
                                PolitiekPraat is een belangrijk platform waar mensen open en respectvol praten over politiek in Nederland. We moedigen gesprekken aan waarin iedereen zijn mening kan geven en kritisch leert denken over actuele onderwerpen. Op ons platform vind je blogs, nieuwsberichten, een stemwijzer, live peilingen en een actief forum waar je zelf mee kunt discussiëren.
                            </p>
                            <!-- Tech Stack -->
                            <div class="flex flex-wrap gap-2 sm:gap-3 mb-6 sm:mb-8">
                                <span class="inline-flex items-center px-3 py-1.5 sm:px-4 sm:py-2 bg-white/10 backdrop-blur-sm text-white text-xs sm:text-sm rounded-lg border border-white/20">
                                    <i class="fab fa-php mr-2"></i> PHP
                                </span>
                                <span class="inline-flex items-center px-3 py-1.5 sm:px-4 sm:py-2 bg-white/10 backdrop-blur-sm text-white text-xs sm:text-sm rounded-lg border border-white/20">
                                    <i class="fab fa-laravel mr-2"></i> Laravel
                                </span>
                                <span class="inline-flex items-center px-3 py-1.5 sm:px-4 sm:py-2 bg-white/10 backdrop-blur-sm text-white text-xs sm:text-sm rounded-lg border border-white/20">
                                    <i class="fas fa-database mr-2"></i> MySQL
                                </span>
                                <span class="inline-flex items-center px-3 py-1.5 sm:px-4 sm:py-2 bg-white/10 backdrop-blur-sm text-white text-xs sm:text-sm rounded-lg border border-white/20">
                                    <i class="fab fa-js mr-2"></i> JavaScript
                                </span>
                            </div>
                            
                            <!-- Project Stats -->
                            <div class="grid grid-cols-3 gap-3 sm:gap-6 mb-6 sm:mb-8">
                                <div class="text-center">
                                    <div class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-300">
                                        345+
                                    </div>
                                    <div class="text-xs sm:text-sm text-blue-100/70">Commits</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-300">
                                        128+
                                    </div>
                                    <div class="text-xs sm:text-sm text-blue-100/70">Bestanden</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-300">
                                        15K+
                                    </div>
                                    <div class="text-xs sm:text-sm text-blue-100/70">Gebruikers</div>
                                </div>
                            </div>
                            
                            <!-- CTA Buttons -->
                            <div class="flex flex-wrap gap-4">
                                <a href="https://politiekpraat.nl" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center px-4 py-2 sm:px-6 sm:py-3 bg-white text-blue-600 hover:bg-opacity-90 rounded-xl transition-all duration-300 text-sm sm:text-base font-medium">
                                    <i class="fas fa-external-link-alt mr-2"></i> Bekijk website
                                </a>
                            </div>
                        </div>
                        
                        <!-- Project Features -->
                        <div class="flex-1 w-full bg-white/10 backdrop-blur-md rounded-2xl p-4 sm:p-6 border border-white/20">
                            <h3 class="text-lg sm:text-xl font-bold text-white mb-3 sm:mb-4">Belangrijkste Functies</h3>
                            
                            <ul class="space-y-3 sm:space-y-4">
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-6 h-6 sm:w-8 sm:h-8 flex items-center justify-center bg-white/20 rounded-lg mr-2 sm:mr-3 mt-0.5">
                                        <i class="fas fa-newspaper text-white text-xs sm:text-base"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-white text-sm sm:text-base">Nieuws & Blogs</h4>
                                        <p class="text-white/80 text-xs sm:text-sm">Actuele politieke artikelen en diepgaande analyses</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-6 h-6 sm:w-8 sm:h-8 flex items-center justify-center bg-white/20 rounded-lg mr-2 sm:mr-3 mt-0.5">
                                        <i class="fas fa-chart-line text-white text-xs sm:text-base"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-white text-sm sm:text-base">Live Peilingen</h4>
                                        <p class="text-white/80 text-xs sm:text-sm">Real-time politieke peilingen en trendanalyses</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-6 h-6 sm:w-8 sm:h-8 flex items-center justify-center bg-white/20 rounded-lg mr-2 sm:mr-3 mt-0.5">
                                        <i class="fas fa-vote-yea text-white text-xs sm:text-base"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-white text-sm sm:text-base">Stemwijzer</h4>
                                        <p class="text-white/80 text-xs sm:text-sm">Interactieve tool om jouw politieke voorkeuren te ontdekken</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-6 h-6 sm:w-8 sm:h-8 flex items-center justify-center bg-white/20 rounded-lg mr-2 sm:mr-3 mt-0.5">
                                        <i class="fas fa-comments text-white text-xs sm:text-base"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-white text-sm sm:text-base">Forum</h4>
                                        <p class="text-white/80 text-xs sm:text-sm">Levendige discussies over actuele politieke thema's</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-6 h-6 sm:w-8 sm:h-8 flex items-center justify-center bg-white/20 rounded-lg mr-2 sm:mr-3 mt-0.5">
                                        <i class="fas fa-user-shield text-white text-xs sm:text-base"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-white text-sm sm:text-base">Gebruikersbeheer</h4>
                                        <p class="text-white/80 text-xs sm:text-sm">Geavanceerd profiel- en rechtensysteem</p>
                                    </div>
                                </li>
                            </ul>
                            
                            <!-- Interactieve Demo -->
                            <div class="mt-6 sm:mt-8 pt-4 sm:pt-6 border-t border-white/20">
                                <h3 class="text-lg sm:text-xl font-bold text-white mb-3 sm:mb-4">Actuele Thema's</h3>
                                <div class="grid grid-cols-2 gap-2 sm:gap-4">
                                    <div class="bg-white/10 rounded-xl p-3 sm:p-4 hover:bg-white/15 transition-colors">
                                        <div class="flex items-center">
                                            <span class="text-xl sm:text-2xl mr-2">🌍</span>
                                            <h4 class="font-medium text-white text-sm sm:text-base">Klimaatbeleid</h4>
                                        </div>
                                    </div>
                                    <div class="bg-white/10 rounded-xl p-3 sm:p-4 hover:bg-white/15 transition-colors">
                                        <div class="flex items-center">
                                            <span class="text-xl sm:text-2xl mr-2">🏠</span>
                                            <h4 class="font-medium text-white text-sm sm:text-base">Woningmarkt</h4>
                                        </div>
                                    </div>
                                    <div class="bg-white/10 rounded-xl p-3 sm:p-4 hover:bg-white/15 transition-colors">
                                        <div class="flex items-center">
                                            <span class="text-xl sm:text-2xl mr-2">💶</span>
                                            <h4 class="font-medium text-white text-sm sm:text-base">Economie</h4>
                                        </div>
                                    </div>
                                    <div class="bg-white/10 rounded-xl p-3 sm:p-4 hover:bg-white/15 transition-colors">
                                        <div class="flex items-center">
                                            <span class="text-xl sm:text-2xl mr-2">🏥</span>
                                            <h4 class="font-medium text-white text-sm sm:text-base">Zorg</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-3 sm:mt-4">
                                    <span class="text-white/70 text-xs sm:text-sm">Ontdek meer dan 30+ politieke thema's</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <!-- Project Filter Systeem -->
                <div class="relative z-10 flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up">
                    <button class="filter-btn active px-6 py-3 rounded-xl text-sm font-medium transition-all duration-300 hover:scale-105 bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg shadow-blue-500/25" data-filter="all">
                        <span class="flex items-center">
                            <i class="fas fa-th-large mr-2"></i>
                            Alle Projecten
                        </span>
                    </button>
                    <button class="filter-btn px-6 py-3 rounded-xl text-sm font-medium transition-all duration-300 hover:scale-105 bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg text-gray-700 dark:text-gray-200 hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:text-white" data-filter="web">
                        <span class="flex items-center">
                            <i class="fas fa-globe mr-2"></i>
                            Web Development
                        </span>
                    </button>
                    <button class="filter-btn px-6 py-3 rounded-xl text-sm font-medium transition-all duration-300 hover:scale-105 bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg text-gray-700 dark:text-gray-200 hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:text-white" data-filter="app">
                        <span class="flex items-center">
                            <i class="fas fa-mobile-alt mr-2"></i>
                            Applicaties
                        </span>
                    </button>
                    <button class="filter-btn px-6 py-3 rounded-xl text-sm font-medium transition-all duration-300 hover:scale-105 bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg text-gray-700 dark:text-gray-200 hover:bg-gradient-to-r hover:from-blue-600 hover:to-purple-600 hover:text-white" data-filter="system">
                        <span class="flex items-center">
                            <i class="fas fa-server mr-2"></i>
                            Systemen
                        </span>
                    </button>
                </div>

                <style>
                    .filter-btn.active {
                        background: linear-gradient(to right, var(--tw-gradient-from) 0%, var(--tw-gradient-to) 100%);
                        color: white;
                        transform: scale(1.05);
                    }
                    
                    .filter-btn:not(.active):hover {
                        background: linear-gradient(to right, var(--tw-gradient-from) 0%, var(--tw-gradient-to) 100%);
                        color: white;
                    }
                </style>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const filterButtons = document.querySelectorAll('.filter-btn');
                    const projectCards = document.querySelectorAll('.project-card');

                    filterButtons.forEach(btn => {
                        btn.addEventListener('click', () => {
                            // Verwijder active class van alle buttons
                            filterButtons.forEach(b => b.classList.remove('active'));
                            
                            // Voeg active class toe aan geklikte button
                            btn.classList.add('active');
                            
                            const filter = btn.dataset.filter;
                            
                            projectCards.forEach(card => {
                                // Start fade out animatie
                                card.style.opacity = '0';
                                card.style.transform = 'scale(0.95)';
                                
                                setTimeout(() => {
                                    if (filter === 'all' || card.dataset.category === filter) {
                                        card.style.display = 'block';
                                        // Start fade in animatie
                                        setTimeout(() => {
                                            card.style.opacity = '1';
                                            card.style.transform = 'scale(1)';
                                        }, 50);
                                    } else {
                                        card.style.display = 'none';
                                    }
                                }, 300);
                            });
                        });
                    });
                });
                </script>

        <!-- Projecten Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" data-aos="fade-up" data-aos-delay="200">
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
                    'stats' => [
                        'commits' => '167',
                        'files' => '62',
                        'contributors' => '1'
                    ]
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
                    'stats' => [
                        'commits' => '189',
                        'files' => '67',
                        'contributors' => '1'
                    ]
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
                    'stats' => [
                        'commits' => '145',
                        'files' => '52',
                        'contributors' => '1'
                    ]
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
                    'stats' => [
                        'commits' => '167',
                        'files' => '45',
                        'contributors' => '1'
                    ]
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
                    'stats' => [
                        'commits' => '223',
                        'files' => '78',
                        'contributors' => '2'
                    ]
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
                    'stats' => [
                        'commits' => '178',
                        'files' => '56',
                        'contributors' => '1'
                    ]
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
                    'stats' => [
                        'commits' => '134',
                        'files' => '42',
                        'contributors' => '1'
                    ]
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
                    'stats' => [
                        'commits' => '198',
                        'files' => '64',
                        'contributors' => '1'
                    ]
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
                    'stats' => [
                        'commits' => '234',
                        'files' => '89',
                        'contributors' => '2'
                    ]
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
                    'stats' => [
                        'commits' => '167',
                        'files' => '62',
                        'contributors' => '1'
                    ]
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
                    'stats' => [
                        'commits' => '156',
                        'files' => '48',
                        'contributors' => '1'
                    ]
                ],
            ];

            foreach ($projects as $project): ?>
                <div class="project-card" data-category="<?php echo $project['category']; ?>">
                    <div class="relative overflow-hidden h-full rounded-2xl shadow-lg transform transition-all duration-500">
                        <!-- Achtergrond met gradient -->
                        <div class="absolute inset-0 bg-gradient-to-br from-<?php echo $project['color']; ?>-400 to-<?php echo $project['color']; ?>-700 opacity-90"></div>
                        
                        <!-- Decoratieve elementen -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full -translate-y-1/3 translate-x-1/3"></div>
                        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white opacity-10 rounded-full translate-y-1/3 -translate-x-1/3"></div>
                        
                        <!-- Content container -->
                        <div class="relative z-10 p-8 h-full flex flex-col">
                            <!-- Header -->
                            <div class="flex items-start justify-between mb-5">
                                <div class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                                    <i class="fas <?php echo $project['icon']; ?> text-2xl text-white"></i>
                                </div>
                                
                                <div class="flex space-x-3">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/20 backdrop-blur-sm text-white">
                                        <?php echo ucfirst($project['category']); ?>
                                    </span>
                                    
                                    <?php if (isset($project['github'])): ?>
                                    <a href="https://github.com/nandichi/<?php echo $project['github']; ?>" class="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-sm text-white hover:bg-white/30" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <!-- Project Info -->
                            <div class="flex-grow">
                                <h3 class="text-2xl font-bold text-white mb-2">
                                    <?php echo $project['name']; ?>
                                </h3>
                                
                                <p class="text-white/80 mb-6 text-sm">
                                    <?php echo $project['description']; ?>
                                </p>
                                
                                <!-- Tech Stack --> 
                                <div class="flex flex-wrap gap-2 mb-6">
                                    <?php foreach ($project['tech'] as $tech): ?>
                                    <span class="inline-flex items-center px-2.5 py-1 text-xs font-medium bg-white/20 backdrop-blur-sm text-white rounded-lg">
                                        <?php echo $tech; ?>
                                    </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            
                            <!-- Footer -->
                            <div class="mt-auto pt-4 border-t border-white/20">
                                <?php if (isset($project['stats'])): ?>
                                <div class="grid grid-cols-3 gap-4 mb-6">
                                    <div class="text-center">
                                        <div class="text-xl font-bold text-white">
                                            <?php echo $project['stats']['commits']; ?>
                                        </div>
                                        <div class="text-xs text-white/70">Commits</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-xl font-bold text-white">
                                            <?php echo $project['stats']['files']; ?>
                                        </div>
                                        <div class="text-xs text-white/70">Bestanden</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-xl font-bold text-white">
                                            <?php echo $project['stats']['contributors']; ?>
                                        </div>
                                        <div class="text-xs text-white/70">Contributers</div>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (isset($project['preview_url']) && $project['preview_url'] !== '#'): ?>
                                <a href="<?php echo $project['preview_url']; ?>" class="w-full inline-block text-center py-3 rounded-xl bg-white font-medium text-<?php echo $project['color']; ?>-600 transform transition-transform" target="_blank" rel="noopener noreferrer">
                                    Bekijk Project
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<style>
@keyframes blob {
    0% { transform: translate(0, 0) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
    100% { transform: translate(0, 0) scale(1); }
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

.filter-btn {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #4B5563;
}

.dark .filter-btn {
    background: rgba(31, 41, 55, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.05);
    color: #E5E7EB;
}

.filter-btn:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

.filter-btn.active {
    background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 50%, #ec4899 100%);
    color: white;
    border: none;
    box-shadow: 0 8px 16px rgba(59, 130, 246, 0.2);
}

.dark .filter-btn.active {
    box-shadow: 0 8px 16px rgba(59, 130, 246, 0.4);
}

/* Uitgelicht Project Stijlen */
@keyframes pulse-glow {
    0% { box-shadow: 0 0 0 0 rgba(244, 63, 94, 0.4); }
    70% { box-shadow: 0 0 0 15px rgba(244, 63, 94, 0); }
    100% { box-shadow: 0 0 0 0 rgba(244, 63, 94, 0); }
}

.bg-gradient-to-br.from-rose-500.to-purple-600 {
    position: relative;
    animation: pulse-glow 3s infinite;
}

.bg-gradient-to-br.from-rose-500.to-purple-600::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(244, 63, 94, 0.8) 0%, rgba(168, 85, 247, 0.8) 100%);
    mask-image: radial-gradient(circle at center, transparent 0%, black 100%);
    z-index: -1;
}

@media (prefers-reduced-motion: reduce) {
    .bg-gradient-to-br.from-rose-500.to-purple-600 {
        animation: none;
    }
}

.project-card {
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 1;
    transform: translateY(0);
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.project-card[style*="display: none"] {
    opacity: 0;
    transform: translateY(20px);
}

@media (prefers-reduced-motion: reduce) {
    .project-card {
        transition: opacity 0.1s ease-in-out;
    }
    .project-card:hover {
        transform: none;
    }
}

.dark .project-card {
    box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.05);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Uitgelicht project animatie
    const featuredProject = document.querySelector('.bg-gradient-to-br.from-rose-500.to-purple-600');
    if (featuredProject) {
        // Verwijder de hover zoom-in effect
        // featuredProject.addEventListener('mouseenter', function() {
        //     this.style.transform = 'scale(1.02)';
        //     this.style.transition = 'transform 0.3s ease-in-out';
        // });
        
        // featuredProject.addEventListener('mouseleave', function() {
        //     this.style.transform = 'scale(1)';
        //     this.style.transition = 'transform 0.3s ease-in-out';
        // });
        
        // Voeg een subtiele beweging toe aan de decoratieve elementen
        const decorElements = featuredProject.querySelectorAll('.absolute.bg-white.opacity-10.rounded-full');
        decorElements.forEach(elem => {
            let startPos = { x: 0, y: 0 };
            
            document.addEventListener('mousemove', function(e) {
                const mouseX = e.clientX / window.innerWidth;
                const mouseY = e.clientY / window.innerHeight;
                
                const moveX = (mouseX - 0.5) * 20;
                const moveY = (mouseY - 0.5) * 20;
                
                elem.style.transform = `translate(${startPos.x + moveX}px, ${startPos.y + moveY}px)`;
                elem.style.transition = 'transform 0.3s ease-out';
            });
        });
        
        // Animeer de thema kaarten
        const themeCards = featuredProject.querySelectorAll('.bg-white\\/10.rounded-xl');
        themeCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
                card.style.transition = 'all 0.5s ease-out';
            }, 100 * (index + 1));
        });
    }

    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button met vloeiende overgang
            filterButtons.forEach(b => {
                b.classList.remove('active');
                b.style.transform = 'scale(1)';
            });
            btn.classList.add('active');
            btn.style.transform = 'scale(1.05)';

            // Filter projecten met vloeiende animatie
            const filter = btn.dataset.filter;
            projectCards.forEach(card => {
                card.style.transition = 'all 0.5s ease-in-out';
                
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95)';
                    card.style.display = 'block';
                    
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95)';
                    
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 500);
                }
            });
        });
    });
});
</script>

<?php 
// Bepaal de correcte pad voor includes gebaseerd op uitvoeringscontext
$includesFooterPath = file_exists('includes/footer.php') ? 'includes/footer.php' : '../includes/footer.php';
include $includesFooterPath; 
?> 