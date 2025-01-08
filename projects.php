<?php
$pageTitle = "Projecten";
$currentPage = "projects";
include 'includes/header.php';
?>

<div class="pt-24 pb-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-4xl font-bold text-gray-900 mb-8 relative" data-aos="fade-down">
            Mijn Projecten
            <div class="absolute bottom-0 left-0 w-20 h-1 bg-blue-600 transform -translate-y-2" data-aos="slide-right"></div>
        </h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $projects = [
                [
                    'name' => 'PAS',
                    'description' => 'Een PHP-gebaseerd project met focus op applicatie ontwikkeling.',
                    'tech' => ['PHP'],
                    'color' => 'blue',
                    'github' => 'PAS',
                    'delay' => 0
                ],
                [
                    'name' => 'PMON',
                    'description' => 'Een Java-gebaseerd monitoring systeem voor applicatie prestaties.',
                    'tech' => ['Java'],
                    'color' => 'orange',
                    'github' => 'pmon',
                    'delay' => 100
                ],
                [
                    'name' => 'Poketrader',
                    'description' => 'Een PHP-applicatie voor het beheren en verhandelen van Pokemon kaarten.',
                    'tech' => ['PHP', 'MySQL'],
                    'color' => 'red',
                    'github' => 'poketrader',
                    'delay' => 200
                ],
                [
                    'name' => 'Divo',
                    'description' => 'Recent PHP project met moderne ontwikkelpraktijken.',
                    'tech' => ['PHP'],
                    'color' => 'green',
                    'github' => 'divo',
                    'delay' => 300
                ],
                [
                    'name' => 'GamePC',
                    'description' => 'PHP applicatie gericht op gaming en PC configuraties.',
                    'tech' => ['PHP'],
                    'color' => 'purple',
                    'github' => 'gamepc',
                    'delay' => 400
                ],
                [
                    'name' => 'Bookonshelf',
                    'description' => 'Een PHP-gebaseerd boekbeheersysteem.',
                    'tech' => ['PHP'],
                    'color' => 'yellow',
                    'github' => 'bookonshelf',
                    'delay' => 500
                ],
                [
                    'name' => 'Gimpies',
                    'description' => 'C# applicatie voor schoenenwinkel management.',
                    'tech' => ['C#'],
                    'color' => 'indigo',
                    'github' => 'gimpies',
                    'delay' => 600
                ]
            ];

            foreach ($projects as $project): ?>
                <div class="project-card bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 transform hover:-translate-y-2 hover:shadow-xl" 
                     data-aos="fade-up" 
                     data-aos-delay="<?php echo $project['delay']; ?>">
                    
                    <div class="h-48 bg-gradient-to-r from-<?php echo $project['color']; ?>-500 to-<?php echo $project['color']; ?>-600 
                                flex items-center justify-center relative overflow-hidden group">
                        <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                        <svg class="w-16 h-16 text-white transform transition-all duration-500 group-hover:scale-110 group-hover:rotate-12 icon" 
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                        <div class="gradient-overlay"></div>
                    </div>

                    <div class="p-6 relative z-10">
                        <h3 class="text-xl font-semibold mb-2 transition-colors duration-300 hover:text-blue-600">
                            <?php echo $project['name']; ?>
                        </h3>
                        <p class="text-gray-600 mb-4"><?php echo $project['description']; ?></p>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($project['tech'] as $tech): ?>
                                <span class="tech-tag px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm 
                                           transition-transform duration-300 hover:scale-110 cursor-default">
                                    <?php echo $tech; ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                        <a href="https://github.com/nandichi/<?php echo $project['github']; ?>" 
                           target="_blank"
                           class="github-button inline-block bg-blue-600 text-white px-4 py-2 rounded-lg 
                                  transition-all duration-300 hover:bg-blue-700 
                                  hover:shadow-lg transform hover:-translate-y-1">
                            Bekijk op GitHub
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 