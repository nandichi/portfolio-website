<?php
$pageTitle = "Projecten";
$currentPage = "projects";
include 'includes/header.php';
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
            <h1 class="text-6xl font-black mb-8">
                <span class="block bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 dark:from-blue-400 dark:via-purple-400 dark:to-pink-400">
                    Innovatieve Projecten
                </span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                Een collectie van mijn meest impactvolle technische creaties en innovaties
            </p>
        </div>

        <!-- Project Filter Systeem -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="filter-btn active px-6 py-2 rounded-full bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl transition-all duration-300" data-filter="all">
                Alle Projecten
            </button>
            <button class="filter-btn px-6 py-2 rounded-full bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl transition-all duration-300" data-filter="web">
                Web Development
            </button>
            <button class="filter-btn px-6 py-2 rounded-full bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl transition-all duration-300" data-filter="app">
                Applicaties
            </button>
            <button class="filter-btn px-6 py-2 rounded-full bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl transition-all duration-300" data-filter="system">
                Systemen
            </button>
        </div>

        <!-- Projecten Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $projects = [
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
                    'name' => 'PAS',
                    'description' => 'PAS is een systeem dat ik heb gemaakt om pakketten bij te houden. Het helpt bij het opslaan van pakketten en laat zien wanneer mensen ze kunnen ophalen.',
                    'tech' => ['PHP', 'MySQL', 'Laravel', 'Docker'],
                    'icon' => 'fa-boxes-stacked',
                    'category' => 'system',
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
                    'category' => 'app',
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
                    'category' => 'app',
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
                    'category' => 'app',
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
                ]
            ];

            foreach ($projects as $project): ?>
                <div class="project-card" data-category="<?php echo $project['category']; ?>">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col h-full">
                        <!-- Project Header -->
                        <div class="relative h-48 bg-gradient-to-br from-<?php echo $project['color']; ?>-500 to-<?php echo $project['color']; ?>-600 flex-shrink-0">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <i class="fas <?php echo $project['icon']; ?> text-6xl text-white opacity-75"></i>
                            </div>
                            <!-- GitHub Link -->
                            <div class="absolute top-4 right-4">
                                <a href="https://github.com/nandichi/<?php echo $project['github']; ?>" class="p-2 bg-white/20 rounded-full hover:bg-white/40 transition-colors">
                                    <i class="fab fa-github text-white"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Project Content -->
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="flex-grow">
                                <h3 class="text-2xl font-bold mb-2 text-<?php echo $project['color']; ?>-600 dark:text-<?php echo $project['color']; ?>-400">
                                    <?php echo $project['name']; ?>
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-6">
                                    <?php echo $project['description']; ?>
                                </p>

                                <!-- Tech Stack -->
                                <div class="flex flex-wrap gap-2 mb-6">
                                    <?php foreach ($project['tech'] as $tech): ?>
                                        <span class="inline-flex items-center px-3 py-1.5 text-sm font-medium bg-<?php echo $project['color']; ?>-50 text-<?php echo $project['color']; ?>-700 dark:bg-<?php echo $project['color']; ?>-900/30 dark:text-<?php echo $project['color']; ?>-300 rounded-lg border border-<?php echo $project['color']; ?>-100 dark:border-<?php echo $project['color']; ?>-800/50">
                                            <?php echo $tech; ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Project Stats -->
                            <?php if (isset($project['stats'])): ?>
                            <div class="grid grid-cols-3 gap-4 pt-4 border-t border-gray-100 dark:border-gray-700 mt-auto">
                                <div class="text-center">
                                    <div class="text-xl font-bold text-<?php echo $project['color']; ?>-500">
                                        <?php echo $project['stats']['commits']; ?>
                                    </div>
                                    <div class="text-sm text-gray-500">Commits</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-xl font-bold text-<?php echo $project['color']; ?>-500">
                                        <?php echo $project['stats']['files']; ?>
                                    </div>
                                    <div class="text-sm text-gray-500">Bestanden</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-xl font-bold text-<?php echo $project['color']; ?>-500">
                                        <?php echo $project['stats']['contributors']; ?>
                                    </div>
                                    <div class="text-sm text-gray-500">Contributers</div>
                                </div>
                            </div>
                            <?php endif; ?>
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

.filter-btn.active {
    background: linear-gradient(to right, #3b82f6, #8b5cf6);
    color: white;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionaliteit
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Filter projecten
            const filter = btn.dataset.filter;
            projectCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?> 