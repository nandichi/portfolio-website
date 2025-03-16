<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Naoufal Andichi</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Portfolio van Naoufal Andichi - Ontdek mijn projecten, vaardigheden en ervaring als ontwikkelaar.'; ?>">
    <meta name="keywords" content="<?php echo isset($pageKeywords) ? $pageKeywords : 'Naoufal Andichi, portfolio, ontwikkelaar, webdevelopment, programmeren'; ?>">
    <meta name="author" content="Naoufal Andichi">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="<?php echo $pageTitle; ?> - Naoufal Andichi">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Portfolio van Naoufal Andichi - Ontdek mijn projecten, vaardigheden en ervaring als ontwikkelaar.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>/images/og-image.jpg">
    <meta property="og:site_name" content="Naoufal Andichi Portfolio">
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?> - Naoufal Andichi">
    <meta name="twitter:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Portfolio van Naoufal Andichi - Ontdek mijn projecten, vaardigheden en ervaring als ontwikkelaar.'; ?>">
    <meta name="twitter:image" content="<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>/images/og-image.jpg">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "<?php echo ($currentPage === 'home') ? 'Person' : 'WebPage'; ?>",
        <?php if ($currentPage === 'home'): ?>
        "name": "Naoufal Andichi",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>",
        "image": "<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>/images/og-image.jpg",
        "jobTitle": "Developer",
        "sameAs": [
            "https://www.linkedin.com/in/naoufal-andichi/",
            "https://github.com/naoufal-andichi"
        ],
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>"
        }
        <?php else: ?>
        "name": "<?php echo $pageTitle; ?> - Naoufal Andichi",
        "description": "<?php echo isset($pageDescription) ? $pageDescription : 'Portfolio van Naoufal Andichi - Ontdek mijn projecten, vaardigheden en ervaring als ontwikkelaar.'; ?>",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"
        <?php endif; ?>
    }
    </script>
    
    <!-- Uitgebreide Favicon Ondersteuning -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#3b82f6">
    <meta name="msapplication-TileColor" content="#3b82f6">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#3b82f6">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Tailwind configuratie voor dark mode
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {}
            }
        }

        // Controleer dark mode voorkeur
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        // Luister naar systeemvoorkeur veranderingen
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (!('theme' in localStorage)) {
                if (e.matches) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            }
        });
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .nav-item {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-item::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 50%;
            width: 0;
            height: 2px;
            background: currentColor;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-item:hover::after,
        .nav-item.active::after {
            width: 100%;
        }
        
        .header-shadow {
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        }
        
        .logo-text {
            background: linear-gradient(135deg, #2563EB, #1E40AF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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
<body class="bg-white dark:bg-gray-900 transition-colors duration-200">
    <header class="fixed w-full z-50 bg-white/95 dark:bg-gray-900/95 header-shadow backdrop-blur-sm">
        <div class="max-w-7xl mx-auto">
            <nav class="flex items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
                <div class="flex items-center space-x-8">
                    <a href="index" class="flex items-center space-x-3">
                        <div class="bg-blue-700 dark:bg-blue-600 w-10 h-10 rounded flex items-center justify-center shadow-lg">
                            <span class="text-lg font-bold text-white">NA</span>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold logo-text dark:text-white">Naoufal Andichi</h1>
                            <p class="text-sm text-gray-600 dark:text-gray-400 hidden sm:block">Full Stack Developer</p>
                        </div>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="index" 
                       class="nav-item px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-blue-700 dark:hover:text-blue-400 font-medium transition-colors
                              <?php echo $currentPage === 'home' ? 'text-blue-700 dark:text-blue-400 active' : ''; ?>">
                        Home
                    </a>
                    <a href="projects" 
                       class="nav-item px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-blue-700 dark:hover:text-blue-400 font-medium transition-colors
                              <?php echo $currentPage === 'projects' ? 'text-blue-700 dark:text-blue-400 active' : ''; ?>">
                        Projecten
                    </a>
                    <a href="skills" 
                       class="nav-item px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-blue-700 dark:hover:text-blue-400 font-medium transition-colors
                              <?php echo $currentPage === 'skills' ? 'text-blue-700 dark:text-blue-400 active' : ''; ?>">
                        Vaardigheden
                    </a>
                    <a href="about" 
                       class="nav-item px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-blue-700 dark:hover:text-blue-400 font-medium transition-colors
                              <?php echo $currentPage === 'about' ? 'text-blue-700 dark:text-blue-400 active' : ''; ?>">
                        Over Mij
                    </a>
                    <a href="contact" 
                       class="nav-item px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-blue-700 dark:hover:text-blue-400 font-medium transition-colors
                              <?php echo $currentPage === 'contact' ? 'text-blue-700 dark:text-blue-400 active' : ''; ?>">
                        Contact
                    </a>
                </div>

                <div class="flex items-center space-x-4">
                    <button id="darkModeToggle" 
                            class="p-2 text-gray-500 dark:text-gray-400 hover:text-blue-700 dark:hover:text-blue-400 transition-colors">
                        <svg class="w-6 h-6 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                        <svg class="w-6 h-6 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707"/>
                        </svg>
                    </button>

                    <button class="md:hidden p-2 text-gray-500 dark:text-gray-400 hover:text-blue-700 dark:hover:text-blue-400 transition-colors mobile-menu-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </nav>
        </div>

        <!-- Mobiel menu -->
        <div class="md:hidden hidden mobile-menu border-t border-gray-100 dark:border-gray-800">
            <div class="px-4 py-2 space-y-1">
                <a href="index" 
                   class="block px-3 py-2 rounded-lg text-base font-medium transition-colors
                          <?php echo $currentPage === 'home' ? 'text-blue-700 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/20' : 'text-gray-700 dark:text-gray-300'; ?>">
                    Home
                </a>
                <a href="projects" 
                   class="block px-3 py-2 rounded-lg text-base font-medium transition-colors
                          <?php echo $currentPage === 'projects' ? 'text-blue-700 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/20' : 'text-gray-700 dark:text-gray-300'; ?>">
                    Projecten
                </a>
                <a href="skills" 
                   class="block px-3 py-2 rounded-lg text-base font-medium transition-colors
                          <?php echo $currentPage === 'skills' ? 'text-blue-700 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/20' : 'text-gray-700 dark:text-gray-300'; ?>">
                    Vaardigheden
                </a>
                <a href="about" 
                   class="block px-3 py-2 rounded-lg text-base font-medium transition-colors
                          <?php echo $currentPage === 'about' ? 'text-blue-700 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/20' : 'text-gray-700 dark:text-gray-300'; ?>">
                    Over Mij
                </a>
                <a href="contact" 
                   class="block px-3 py-2 rounded-lg text-base font-medium transition-colors
                          <?php echo $currentPage === 'contact' ? 'text-blue-700 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/20' : 'text-gray-700 dark:text-gray-300'; ?>">
                    Contact
                </a>
            </div>
        </div>
    </header>
</body>
</html> 