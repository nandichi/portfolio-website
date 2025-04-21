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
    
    <!-- Dark mode initialisatie -->
    <script>
        // Controleer dark mode voorkeur en pas toe
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Tailwind configuratie voor dark mode
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        accent: {
                            50: '#eef7ff',
                            100: '#d9edff',
                            200: '#bce0ff',
                            300: '#8acbff',
                            400: '#54abff',
                            500: '#3b88ff',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                            950: '#172554',
                        }
                    },
                    animation: {
                        'gradient-x': 'gradient-x 8s ease infinite',
                        'pulse-slow': 'pulse 6s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        'gradient-x': {
                            '0%, 100%': {
                                'background-size': '200% 200%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        }
                    },
                    boxShadow: {
                        'soft': '0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04)',
                        'inner-soft': 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.05)'
                    }
                }
            }
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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', system-ui, sans-serif;
        }
        
        .nav-item {
            position: relative;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        
        .nav-item::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #3b88ff, #1e40af);
            transition: width 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            border-radius: 2px;
        }
        
        .nav-item:hover::after,
        .nav-item.active::after {
            width: 100%;
        }
        
        .dark .nav-item::after {
            background: linear-gradient(135deg, #54abff, #3b88ff);
        }
        
        .header-shadow {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
        }
        
        .dark .header-shadow {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }
        
        .logo-container {
            position: relative;
            z-index: 1;
        }
        
        .logo-bg {
            background: linear-gradient(135deg, #2563eb, #1e40af);
            transition: all 0.5s ease;
        }
        
        .logo-bg:hover {
            transform: rotate(5deg) scale(1.05);
            box-shadow: 0 5px 15px rgba(37, 99, 235, 0.4);
        }
        
        .dark .logo-bg:hover {
            box-shadow: 0 5px 15px rgba(59, 136, 255, 0.4);
        }
        
        .logo-text {
            background: linear-gradient(135deg, #2563eb, #1e40af);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient-x 8s ease infinite;
        }
        
        .dark .logo-text {
            background: linear-gradient(135deg, #54abff, #3b88ff);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .mobile-menu {
            transition: max-height 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            max-height: 0;
            overflow: hidden;
        }
        
        .mobile-menu.open {
            max-height: 300px;
        }
        
        .mobile-nav-item {
            transform: translateY(-10px);
            opacity: 0;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            transition-delay: calc(var(--item-index) * 0.05s);
        }
        
        .mobile-menu.open .mobile-nav-item {
            transform: translateY(0);
            opacity: 1;
        }
        
        .dark-mode-toggle {
            position: relative;
            overflow: hidden;
            border-radius: 50%;
            z-index: 1;
            cursor: pointer;
        }
        
        .dark-mode-toggle::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(59, 136, 255, 0.1);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
            transition: width 0.4s ease, height 0.4s ease;
        }
        
        .dark-mode-toggle:hover::before {
            width: 200%;
            height: 200%;
        }
        
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
        
        /* Toegankelijkheid verbeteringen */
        @media (max-width: 640px) {
            button, 
            [role="button"],
            a {
                min-height: 44px;
                min-width: 44px;
                display: flex;
                align-items: center;
            }
        }
    </style>
</head>
<body class="bg-white dark:bg-gray-900 transition-colors duration-300">
    <header class="fixed w-full z-50 bg-white/95 dark:bg-gray-900/95 header-shadow backdrop-blur-sm transition-all duration-300 border-b border-gray-100/80 dark:border-gray-800/80">
        <div class="max-w-7xl mx-auto">
            <nav class="flex items-center justify-between px-4 py-4 sm:px-6 lg:px-8" x-data="{ mobileMenuOpen: false }">
                <div class="flex items-center space-x-4">
                    <a href="/" class="group flex items-center space-x-3">
                        <div class="logo-container">
                            <div class="logo-bg w-12 h-12 rounded-lg flex items-center justify-center shadow-lg transition-all duration-300 group-hover:rounded-xl">
                                <span class="text-xl font-bold text-white tracking-tight">NA</span>
                            </div>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold logo-text dark:text-white transition-all duration-300">Naoufal Andichi</h1>
                            <p class="text-sm text-gray-500 dark:text-gray-400 opacity-90 transition-all duration-300 hidden sm:block">Full Stack Developer</p>
                        </div>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="/" 
                       class="nav-item px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-accent-700 dark:hover:text-accent-400 font-medium transition-colors rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50
                              <?php echo $currentPage === 'home' ? 'text-accent-700 dark:text-accent-400 active' : ''; ?>">
                        Home
                    </a>
                    <a href="/projects" 
                       class="nav-item px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-accent-700 dark:hover:text-accent-400 font-medium transition-colors rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50
                              <?php echo $currentPage === 'projects' ? 'text-accent-700 dark:text-accent-400 active' : ''; ?>">
                        Projecten
                    </a>
                    <a href="/skills" 
                       class="nav-item px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-accent-700 dark:hover:text-accent-400 font-medium transition-colors rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50
                              <?php echo $currentPage === 'skills' ? 'text-accent-700 dark:text-accent-400 active' : ''; ?>">
                        Vaardigheden
                    </a>
                    <a href="/about" 
                       class="nav-item px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-accent-700 dark:hover:text-accent-400 font-medium transition-colors rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50
                              <?php echo $currentPage === 'about' ? 'text-accent-700 dark:text-accent-400 active' : ''; ?>">
                        Over Mij
                    </a>
                    <a href="/contact" 
                       class="nav-item px-3 py-2 text-gray-700 dark:text-gray-300 hover:text-accent-700 dark:hover:text-accent-400 font-medium transition-colors rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50
                              <?php echo $currentPage === 'contact' ? 'text-accent-700 dark:text-accent-400 active' : ''; ?>">
                        Contact
                    </a>
                </div>

                <div class="flex items-center space-x-1 lg:space-x-3">
                    <button 
                        aria-label="Schakel tussen licht en donker thema"
                        class="dark-mode-toggle p-2 text-gray-500 dark:text-gray-400 hover:text-accent-600 dark:hover:text-accent-400 transition-colors duration-300 rounded-full"
                        onclick="document.documentElement.classList.toggle('dark'); localStorage.theme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';">
                        <svg class="w-6 h-6 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                        <svg class="w-6 h-6 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707"/>
                        </svg>
                    </button>

                    <button 
                        aria-label="Open menu" 
                        aria-expanded="false"
                        x-on:click="mobileMenuOpen = !mobileMenuOpen" 
                        x-bind:aria-expanded="mobileMenuOpen.toString()"
                        class="md:hidden p-2 text-gray-500 dark:text-gray-400 hover:text-accent-600 dark:hover:text-accent-400 transition-colors rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800/50 focus:outline-none focus:ring-2 focus:ring-accent-500/30 dark:focus:ring-accent-400/30">
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </nav>
        </div>

        <!-- Mobiel menu met AlpineJS -->
        <div 
            x-data="{ open: false }" 
            x-show="open"
            x-bind:class="{'open': open}"
            x-on:mobileMenuOpen.window="open = $event.detail"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="md:hidden mobile-menu border-t border-gray-100 dark:border-gray-800/80 bg-white/95 dark:bg-gray-900/95 backdrop-blur-sm shadow-sm"
            style="display: none;">
            <div class="px-4 py-2 space-y-2">
                <a href="/" 
                   style="--item-index: 0"
                   class="mobile-nav-item block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300
                          <?php echo $currentPage === 'home' ? 'text-accent-700 dark:text-accent-400 bg-accent-50/50 dark:bg-accent-900/20' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800/50 hover:text-accent-700 dark:hover:text-accent-400'; ?>">
                    Home
                </a>
                <a href="/projects" 
                   style="--item-index: 1"
                   class="mobile-nav-item block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300
                          <?php echo $currentPage === 'projects' ? 'text-accent-700 dark:text-accent-400 bg-accent-50/50 dark:bg-accent-900/20' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800/50 hover:text-accent-700 dark:hover:text-accent-400'; ?>">
                    Projecten
                </a>
                <a href="/skills" 
                   style="--item-index: 2"
                   class="mobile-nav-item block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300
                          <?php echo $currentPage === 'skills' ? 'text-accent-700 dark:text-accent-400 bg-accent-50/50 dark:bg-accent-900/20' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800/50 hover:text-accent-700 dark:hover:text-accent-400'; ?>">
                    Vaardigheden
                </a>
                <a href="/about" 
                   style="--item-index: 3"
                   class="mobile-nav-item block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300
                          <?php echo $currentPage === 'about' ? 'text-accent-700 dark:text-accent-400 bg-accent-50/50 dark:bg-accent-900/20' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800/50 hover:text-accent-700 dark:hover:text-accent-400'; ?>">
                    Over Mij
                </a>
                <a href="/contact" 
                   style="--item-index: 4"
                   class="mobile-nav-item block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300
                          <?php echo $currentPage === 'contact' ? 'text-accent-700 dark:text-accent-400 bg-accent-50/50 dark:bg-accent-900/20' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800/50 hover:text-accent-700 dark:hover:text-accent-400'; ?>">
                    Contact
                </a>
            </div>
        </div>
    </header>

    <script>
        // Alpine.js setup voor mobiel menu
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.querySelector('[x-on\\:click="mobileMenuOpen = !mobileMenuOpen"]');
            if (mobileMenuToggle) {
                mobileMenuToggle.addEventListener('click', function() {
                    const isOpen = mobileMenuToggle.getAttribute('aria-expanded') === 'true';
                    window.dispatchEvent(new CustomEvent('mobileMenuOpen', { detail: !isOpen }));
                });
            }
        });
    </script>
</body>
</html> 