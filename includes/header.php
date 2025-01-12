<!DOCTYPE html>
<html lang="nl" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Naoufal Andichi</title>
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="favicon.svg">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Tailwind configuratie voor dark mode
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    // Je bestaande theme extensies hier...
                }
            }
        }
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-scale:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        body {
            top: 0 !important;
            overflow-x: hidden;
            width: 100%;
        }
        
        @media (max-width: 640px) {
            .text-sm {
                font-size: 0.875rem;
                line-height: 1.25rem;
            }
            
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            
            button, 
            [role="button"],
            a {
                min-height: 44px;
                min-width: 44px;
            }
        }
        
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
    <nav class="fixed w-full bg-white/90 dark:bg-gray-800/90 backdrop-blur-md shadow-lg z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 sm:h-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.php" class="group flex items-center space-x-2">
                        <div class="w-8 h-8 sm:w-10 sm:h-10 bg-gradient-to-br from-blue-600 to-blue-400 rounded-lg flex items-center justify-center">
                            <span class="text-lg sm:text-xl font-bold text-white">NA</span>
                        </div>
                        <span class="text-base sm:text-xl font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Naoufal Andichi
                        </span>
                    </a>
                </div>
                <div class="hidden sm:flex sm:space-x-1 items-center">
                    <a href="index.php" 
                        class="<?php echo $currentPage === 'home' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/50' : 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white'; ?> 
                               px-4 py-2 rounded-lg transition-all duration-300 hover:text-blue-600 dark:hover:text-blue-400 relative group"
                    >
                        <span class="relative z-10">Home</span>
                        <?php if ($currentPage === 'home'): ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 dark:bg-blue-400 transform scale-x-100"></div>
                        <?php endif; ?>
                    </a>
                    <a href="projects.php" 
                        class="<?php echo $currentPage === 'projects' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/50' : 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white'; ?> 
                               px-4 py-2 rounded-lg transition-all duration-300 hover:text-blue-600 dark:hover:text-blue-400 relative group"
                    >
                        <span class="relative z-10">Projecten</span>
                        <?php if ($currentPage === 'projects'): ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 dark:bg-blue-400 transform scale-x-100"></div>
                        <?php endif; ?>
                    </a>
                    <a href="skills.php" 
                        class="<?php echo $currentPage === 'skills' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/50' : 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white'; ?> 
                               px-4 py-2 rounded-lg transition-all duration-300 hover:text-blue-600 dark:hover:text-blue-400 relative group"
                    >
                        <span class="relative z-10">Vaardigheden</span>
                        <?php if ($currentPage === 'skills'): ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 dark:bg-blue-400 transform scale-x-100"></div>
                        <?php endif; ?>
                    </a>
                    <a href="about.php" 
                        class="<?php echo $currentPage === 'about' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/50' : 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white'; ?> 
                               px-4 py-2 rounded-lg transition-all duration-300 hover:text-blue-600 dark:hover:text-blue-400 relative group"
                    >
                        <span class="relative z-10">Over Mij</span>
                        <?php if ($currentPage === 'about'): ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 dark:bg-blue-400 transform scale-x-100"></div>
                        <?php endif; ?>
                    </a>
                    <a href="contact.php" 
                        class="<?php echo $currentPage === 'contact' ? 'text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white'; ?> 
                               px-4 py-2 rounded-lg transition-all duration-300 hover:text-blue-600 dark:hover:text-blue-400"
                    >
                        Contact
                    </a>
                    <!-- Dark Mode Toggle -->
                    <button id="darkModeToggle" class="p-2 rounded-lg text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-700 ml-2">
                        <svg class="w-5 h-5 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg class="w-5 h-5 hidden dark:block" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"></path>
                        </svg>
                    </button>
                </div>
                <div class="sm:hidden flex items-center">
                    <button class="mobile-menu-button p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <svg class="h-6 w-6 text-gray-700 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="sm:hidden hidden mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white/95 dark:bg-gray-800/95 backdrop-blur-md border-t border-gray-200 dark:border-gray-700">
                <a href="index.php" 
                    class="<?php echo $currentPage === 'home' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/50' : 'text-gray-700 dark:text-gray-300'; ?> 
                           block px-3 py-2 rounded-lg text-base font-medium hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 transition-all"
                >
                    Home
                </a>
                <a href="projects.php" 
                    class="<?php echo $currentPage === 'projects' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/50' : 'text-gray-700 dark:text-gray-300'; ?> 
                           block px-3 py-2 rounded-lg text-base font-medium hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 transition-all"
                >
                    Projecten
                </a>
                <a href="skills.php" 
                    class="<?php echo $currentPage === 'skills' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/50' : 'text-gray-700 dark:text-gray-300'; ?> 
                           block px-3 py-2 rounded-lg text-base font-medium hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 transition-all"
                >
                    Vaardigheden
                </a>
                <a href="about.php" 
                    class="<?php echo $currentPage === 'about' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/50' : 'text-gray-700 dark:text-gray-300'; ?> 
                           block px-3 py-2 rounded-lg text-base font-medium hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 transition-all"
                >
                    Over Mij
                </a>
                <a href="contact.php" 
                    class="<?php echo $currentPage === 'contact' ? 'text-blue-600 bg-blue-50 dark:bg-blue-900/50' : 'text-gray-700 dark:text-gray-300'; ?> 
                           block px-3 py-2 rounded-lg text-base font-medium hover:bg-gray-50 dark:hover:bg-gray-700 hover:text-blue-600 dark:hover:text-blue-400 transition-all"
                >
                    Contact
                </a>
            </div>
        </div>
    </nav>
</body>
</html> 