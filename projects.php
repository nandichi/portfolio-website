<?php
$pageTitle = "Projecten";
$currentPage = "projects";
include 'includes/header.php';
?>

<div class="min-h-screen flex flex-col">
    <div class="flex-grow pt-24 pb-12 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-down">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Mijn Projecten</h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    Dit zijn de projecten waar ik aan heb gewerkt tijdens mijn opleiding
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-8">
                <?php
                $projects = [
                    [
                        'name' => 'PAS',
                        'description' => 'PAS is een systeem dat ik heb gemaakt om pakketten bij te houden. Het helpt bij het opslaan van pakketten en laat zien wanneer mensen ze kunnen ophalen.',
                        'tech' => ['PHP', 'MySQL', 'Laravel', 'Docker'],
                        'icon' => 'fa-box',
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
                        'icon' => 'fa-chart-line',
                        'color' => 'orange',
                        'github' => 'pmon',
                        'features' => ['Real-time Monitoring', 'Performance Analytics', 'Alert System']
                    ],
                    [
                        'name' => 'Poketrader',
                        'description' => 'Een PHP-applicatie voor het beheren en verhandelen van Pokemon kaarten.',
                        'tech' => ['PHP', 'MySQL', 'JavaScript'],
                        'icon' => 'fa-gamepad',
                        'color' => 'red',
                        'github' => 'poketrader',
                        'features' => ['Trading System', 'Card Management', 'User Authentication']
                    ],
                    [
                        'name' => 'Divo',
                        'description' => 'Een modern online stemsysteem ontwikkeld voor verkiezingen. Veilig, gebruiksvriendelijk en schaalbaar platform dat het democratische proces digitaliseert.',
                        'tech' => ['PHP', 'MySQL', 'Laravel'],
                        'icon' => 'fa-vote-yea',
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
                        'icon' => 'fa-book',
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
                    <div class="group relative bg-white dark:bg-gray-700 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300">
                        
                        <!-- Project Header -->
                        <div class="relative h-36 sm:h-48 bg-gradient-to-br from-<?php echo $project['color']; ?>-500 
                                    to-<?php echo $project['color']; ?>-600 dark:from-<?php echo $project['color']; ?>-600 
                                    dark:to-<?php echo $project['color']; ?>-700 p-4 sm:p-6 overflow-hidden">
                            <!-- Animated Background Pattern -->
                            <div class="absolute inset-0 opacity-10">
                                <div class="absolute inset-0 transform rotate-45 scale-150">
                                    <div class="absolute inset-0 bg-white/20 blur-3xl animate-pulse"></div>
                                    <div class="h-full w-full bg-gradient-to-br from-white/0 to-white/20 animate-blob"></div>
                                </div>
                            </div>
                            
                            <!-- Project Icon -->
                            <div class="relative z-10">
                                <i class="fas <?php echo $project['icon']; ?> text-white text-5xl mb-4 transform transition-transform duration-500 group-hover:scale-110"></i>
                                <h3 class="text-2xl font-bold text-white mb-2"><?php echo $project['name']; ?></h3>
                            </div>
                        </div>
                        
                        <!-- Project Content -->
                        <div class="p-4 sm:p-6 flex flex-col h-[calc(100%-9rem)] sm:h-[calc(100%-12rem)]">
                            <div class="flex-grow">
                                <p class="text-sm sm:text-base text-gray-600 dark:text-gray-300 mb-4"><?php echo $project['description']; ?></p>
                                
                                <!-- Technologies -->
                                <div class="mb-6">
                                    <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-3">Technologieën</h4>
                                    <div class="flex flex-wrap gap-2">
                                        <?php foreach ($project['tech'] as $tech): ?>
                                            <span class="px-3 py-1 bg-<?php echo $project['color']; ?>-100 dark:bg-<?php echo $project['color']; ?>-900/50
                                                         text-<?php echo $project['color']; ?>-600 dark:text-<?php echo $project['color']; ?>-300 rounded-full text-sm">
                                                <?php echo $tech; ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                
                                <!-- Features -->
                                <div class="mb-6">
                                    <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-3">Kenmerken</h4>
                                    <ul class="space-y-2">
                                        <?php foreach ($project['features'] as $feature): ?>
                                            <li class="flex items-center text-gray-600 dark:text-gray-300">
                                                <i class="fas fa-check text-<?php echo $project['color']; ?>-500 dark:text-<?php echo $project['color']; ?>-400 mr-2"></i>
                                                <?php echo $feature; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Action Button -->
                            <a href="https://github.com/nandichi/<?php echo $project['github']; ?>" 
                               target="_blank"
                               class="inline-flex items-center justify-center w-full px-4 py-2 bg-<?php echo $project['color']; ?>-600 
                                      dark:bg-<?php echo $project['color']; ?>-500 text-white rounded-lg hover:bg-<?php echo $project['color']; ?>-700 
                                      dark:hover:bg-<?php echo $project['color']; ?>-600 transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fab fa-github mr-2"></i>
                                Bekijk Code
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
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

.group:hover .animate-blob {
    animation-play-state: paused;
}
</style>

<?php include 'includes/footer.php'; ?> 