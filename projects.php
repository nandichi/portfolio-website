<?php
$pageTitle = "Projecten";
$currentPage = "projects";
include 'includes/header.php';
?>

<div class="min-h-screen bg-gradient-to-br from-gray-50 via-gray-100 to-gray-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
    <!-- Decoratieve elementen met zachtere gradients -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-40">
        <div class="absolute -top-1/2 -right-1/2 w-[1000px] h-[1000px] bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-1/2 -left-1/2 w-[1000px] h-[1000px] bg-gradient-to-tr from-green-500/10 to-yellow-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative pt-40 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header Sectie -->
            <div class="text-center mb-16" data-aos="fade-down">
                <h1 class="text-5xl font-extrabold mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 dark:from-blue-400 dark:via-purple-400 dark:to-indigo-400">
                        Mijn Projecten
                    </span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Een showcase van mijn meest recente en impactvolle projecten
                </p>
            </div>

            <!-- Projecten Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $projects = [
                    [
                        'name' => 'PAS',
                        'description' => 'PAS is een systeem dat ik heb gemaakt om pakketten bij te houden. Het helpt bij het opslaan van pakketten en laat zien wanneer mensen ze kunnen ophalen.',
                        'tech' => ['PHP', 'MySQL', 'Laravel', 'Docker'],
                        'icon' => 'fa-boxes-stacked',
                        'color' => 'blue',
                        'github' => 'PAS',
                        'features' => [
                            'Pakket Tracking Systeem',
                            'QR-code Scanning',
                            'Klant Notificaties',
                            'Voorraad Management'
                        ]
                    ],
                    [
                        'name' => 'PMON',
                        'description' => 'Een Java-gebaseerd monitoring systeem voor applicatie prestaties. Real-time monitoring en data visualisatie.',
                        'tech' => ['Java', 'Spring Boot', 'PostgreSQL'],
                        'icon' => 'fa-gauge-high',
                        'color' => 'orange',
                        'github' => 'pmon',
                        'features' => ['Real-time Monitoring', 'Performance Analytics', 'Alert System']
                    ],
                    [
                        'name' => 'Poketrader',
                        'description' => 'Een PHP-applicatie voor het beheren en verhandelen van Pokemon kaarten.',
                        'tech' => ['PHP', 'MySQL', 'JavaScript'],
                        'icon' => 'fa-diamond',
                        'color' => 'red',
                        'github' => 'poketrader',
                        'features' => ['Trading System', 'Card Management', 'User Authentication']
                    ],
                    [
                        'name' => 'Divo',
                        'description' => 'Een modern online stemsysteem ontwikkeld voor verkiezingen. Veilig, gebruiksvriendelijk en schaalbaar platform dat het democratische proces digitaliseert.',
                        'tech' => ['PHP', 'MySQL', 'Laravel'],
                        'icon' => 'fa-check-to-slot',
                        'color' => 'green',
                        'github' => 'divo',
                        'features' => [
                            'Veilige Authenticatie',
                            'Real-time Stemresultaten',
                            'Gebruiksvriendelijke Interface',
                            'Audit Trail & Logging'
                        ]
                    ],
                    [
                        'name' => 'GamePC',
                        'description' => 'PHP applicatie gericht op gaming en PC configuraties.',
                        'tech' => ['PHP', 'MySQL', 'JavaScript'],
                        'icon' => 'fa-desktop',
                        'color' => 'purple',
                        'github' => 'gamepc',
                        'features' => ['PC Builder', 'Component Database', 'Price Comparison']
                    ],
                    [
                        'name' => 'Bookonshelf',
                        'description' => 'Een PHP-gebaseerd boekbeheersysteem.',
                        'tech' => ['PHP', 'MySQL', 'Bootstrap'],
                        'icon' => 'fa-book-open',
                        'color' => 'yellow',
                        'github' => 'bookonshelf',
                        'features' => ['Book Management', 'User Reviews', 'Search System']
                    ],
                    [
                        'name' => 'Gimpies',
                        'description' => 'C# applicatie voor schoenenwinkel management.',
                        'tech' => ['C#', '.NET', 'SQL Server'],
                        'icon' => 'fa-shoe-prints',
                        'color' => 'indigo',
                        'github' => 'gimpies',
                        'features' => ['Inventory Management', 'Sales Tracking', 'Customer Database']
                    ]
                ];

                foreach ($projects as $project): ?>
                    <div class="group relative h-[600px]" data-aos="fade-up">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-<?php echo $project['color']; ?>-500 to-<?php echo $project['color']; ?>-600 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative h-full bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-6 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-<?php echo $project['color']; ?>-500/20 dark:group-hover:border-<?php echo $project['color']; ?>-400/20">
                            <!-- Project Header -->
                            <div class="flex items-center gap-4 mb-8">
                                <div class="flex items-center justify-center w-16 h-16 rounded-xl bg-gradient-to-br from-<?php echo $project['color']; ?>-500/90 to-<?php echo $project['color']; ?>-600/90 backdrop-blur-sm transition-all duration-500 group-hover:scale-105">
                                    <i class="fas <?php echo $project['icon']; ?> text-2xl text-white"></i>
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-<?php echo $project['color']; ?>-500 to-<?php echo $project['color']; ?>-600"><?php echo $project['name']; ?></h2>
                                    <p class="text-gray-600 dark:text-gray-400">
                                        <?php echo implode(' • ', array_slice($project['tech'], 0, 3)); ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Project Content -->
                            <div class="flex flex-col h-[calc(100%-6rem)]">
                                <div class="flex-grow space-y-6">
                                    <p class="text-gray-600 dark:text-gray-300"><?php echo $project['description']; ?></p>

                                    <!-- Features -->
                                    <div class="space-y-3">
                                        <?php 
                                        $featureIcons = [
                                            // PAS features
                                            'Pakket Tracking Systeem' => 'fa-truck-fast',
                                            'QR-code Scanning' => 'fa-qrcode',
                                            'Klant Notificaties' => 'fa-bell',
                                            'Voorraad Management' => 'fa-warehouse',
                                            
                                            // PMON features
                                            'Real-time Monitoring' => 'fa-chart-line',
                                            'Performance Analytics' => 'fa-chart-pie',
                                            'Alert System' => 'fa-triangle-exclamation',
                                            
                                            // Poketrader features
                                            'Trading System' => 'fa-right-left',
                                            'Card Management' => 'fa-layer-group',
                                            'User Authentication' => 'fa-user-shield',
                                            
                                            // Divo features
                                            'Veilige Authenticatie' => 'fa-lock',
                                            'Real-time Stemresultaten' => 'fa-chart-column',
                                            'Gebruiksvriendelijke Interface' => 'fa-desktop',
                                            'Audit Trail & Logging' => 'fa-clipboard-list',
                                            
                                            // GamePC features
                                            'PC Builder' => 'fa-screwdriver-wrench',
                                            'Component Database' => 'fa-microchip',
                                            'Price Comparison' => 'fa-tags',
                                            
                                            // Bookonshelf features
                                            'Book Management' => 'fa-book',
                                            'User Reviews' => 'fa-star',
                                            'Search System' => 'fa-magnifying-glass',
                                            
                                            // Gimpies features
                                            'Inventory Management' => 'fa-boxes-stacked',
                                            'Sales Tracking' => 'fa-chart-bar',
                                            'Customer Database' => 'fa-users'
                                        ];
                                        foreach ($project['features'] as $feature): ?>
                                            <div class="group/feature flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-<?php echo $project['color']; ?>-500/90 to-<?php echo $project['color']; ?>-600/90 backdrop-blur-sm transition-all duration-500 group-hover/feature:scale-110 flex items-center justify-center">
                                                    <i class="fas <?php echo $featureIcons[$feature] ?? 'fa-check'; ?> text-sm text-white"></i>
                                                </div>
                                                <span class="text-gray-700 dark:text-gray-300"><?php echo $feature; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <!-- GitHub Button -->
                                <div class="mt-6">
                                    <a href="https://github.com/nandichi/<?php echo $project['github']; ?>" 
                                       target="_blank"
                                       class="group inline-flex items-center justify-center w-full px-4 py-3 bg-<?php echo $project['color']; ?>-50 dark:bg-<?php echo $project['color']; ?>-900/20 text-<?php echo $project['color']; ?>-600 dark:text-<?php echo $project['color']; ?>-400 rounded-xl border border-<?php echo $project['color']; ?>-200 dark:border-<?php echo $project['color']; ?>-700/50 hover:bg-<?php echo $project['color']; ?>-100 dark:hover:bg-<?php echo $project['color']; ?>-900/30 transform hover:-translate-y-0.5 transition-all duration-300 gap-2">
                                        <i class="fab fa-github text-lg"></i>
                                        <span class="font-medium">Bekijk Code</span>
                                        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" 
                                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialiseer AOS animaties
    AOS.init({
        duration: 1000,
        once: true,
        offset: 50,
        easing: 'ease-out-cubic'
    });
});
</script>

<?php include 'includes/footer.php'; ?> 