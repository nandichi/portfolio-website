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
    
    <!-- Premium Favicon Setup -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#6366f1">
    <meta name="msapplication-TileColor" content="#6366f1">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#6366f1">
    
    <!-- Premium Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Dark mode initialisatie -->
    <script>
        // Geavanceerde dark mode ondersteuning
        (function() {
            const theme = localStorage.getItem('theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            
            if (theme === 'dark' || (!theme && prefersDark)) {
                document.documentElement.classList.add('dark');
                document.documentElement.style.colorScheme = 'dark';
            } else {
                document.documentElement.classList.remove('dark');
                document.documentElement.style.colorScheme = 'light';
            }
        })();
    </script>
    
    <!-- Tailwind CSS met uitgebreide configuratie -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                        'mono': ['JetBrains Mono', 'Monaco', 'Cascadia Code', 'Segoe UI Mono', 'Roboto Mono', 'Oxygen Mono', 'Ubuntu Monospace', 'Source Code Pro', 'Fira Mono', 'Droid Sans Mono', 'Courier New', 'monospace'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                            950: '#082f49',
                        },
                        accent: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            200: '#c7d2fe',
                            300: '#a5b4fc',
                            400: '#818cf8',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                            950: '#1e1b4b',
                        },
                        neutral: {
                            50: '#fafafa',
                            100: '#f5f5f5',
                            150: '#f0f0f0',
                            200: '#e5e5e5',
                            300: '#d4d4d4',
                            400: '#a3a3a3',
                            500: '#737373',
                            600: '#525252',
                            700: '#404040',
                            750: '#363636',
                            800: '#262626',
                            850: '#1f1f1f',
                            900: '#171717',
                            950: '#0a0a0a',
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-out',
                        'slide-down': 'slideDown 0.4s ease-out',
                        'slide-up': 'slideUp 0.4s ease-out',
                        'scale-in': 'scaleIn 0.3s ease-out',
                        'bounce-gentle': 'bounceGentle 1s ease-in-out',
                        'gradient-x': 'gradient-x 3s ease infinite',
                        'shimmer': 'shimmer 2s linear infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(-10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideDown: {
                            '0%': { transform: 'translateY(-100%)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(100%)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        scaleIn: {
                            '0%': { transform: 'scale(0.9)', opacity: '0' },
                            '100%': { transform: 'scale(1)', opacity: '1' }
                        },
                        bounceGentle: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-5px)' }
                        },
                        'gradient-x': {
                            '0%, 100%': {
                                'background-size': '200% 200%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        },
                        shimmer: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(100%)' }
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 5px rgba(99, 102, 241, 0.5)' },
                            '100%': { boxShadow: '0 0 20px rgba(99, 102, 241, 0.8)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    },
                    boxShadow: {
                        'elegant': '0 4px 20px -4px rgba(0, 0, 0, 0.08), 0 8px 16px -8px rgba(0, 0, 0, 0.12)',
                        'elegant-lg': '0 8px 30px -6px rgba(0, 0, 0, 0.12), 0 20px 25px -10px rgba(0, 0, 0, 0.15)',
                        'inner-elegant': 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.03)',
                        'glow-primary': '0 0 20px rgba(99, 102, 241, 0.3)',
                        'glow-accent': '0 0 20px rgba(6, 182, 212, 0.3)',
                    },
                    backdropBlur: {
                        'xs': '2px',
                    },
                    spacing: {
                        '18': '4.5rem',
                        '88': '22rem',
                        '100': '25rem',
                        '112': '28rem',
                        '128': '32rem',
                    }
                }
            }
        }

        // Systeemvoorkeur listener
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (!localStorage.getItem('theme')) {
                if (e.matches) {
                    document.documentElement.classList.add('dark');
                    document.documentElement.style.colorScheme = 'dark';
                } else {
                    document.documentElement.classList.remove('dark');
                    document.documentElement.style.colorScheme = 'light';
                }
            }
        });
    </script>
    
    <!-- Alpine.js voor interactiviteit -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Font Awesome Pro -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Premium Custom Styles -->
    <style>
        /* Globale body styling */
        body {
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            font-feature-settings: 'cv02', 'cv03', 'cv04', 'cv11';
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        /* Premium Header Styling */
        .header-glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.18);
        }
        
        .dark .header-glass {
            background: rgba(15, 23, 42, 0.85);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
        
        /* Premium Logo Styling */
        .logo-container {
            position: relative;
            overflow: hidden;
        }
        
        .logo-background {
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 50%, #4338ca 100%);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .logo-background::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
        }
        
        .logo-background:hover::before {
            animation: shimmer 1.5s ease-in-out;
            opacity: 1;
        }
        
        .logo-background:hover {
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 20px 40px -12px rgba(99, 102, 241, 0.4);
        }
        
        .dark .logo-background:hover {
            box-shadow: 0 20px 40px -12px rgba(139, 92, 246, 0.4);
        }
        
        /* Premium Navigation Styling */
        .nav-link {
            position: relative;
            font-weight: 500;
            letter-spacing: -0.025em;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            border-radius: 2px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        .nav-link:hover {
            color: #6366f1;
            transform: translateY(-1px);
        }
        
        .dark .nav-link:hover {
            color: #a5b4fc;
        }
        
        .dark .nav-link::after {
            background: linear-gradient(135deg, #a5b4fc, #818cf8);
        }
        
        /* Premium Button Styling */
        .theme-toggle {
            position: relative;
            padding: 0.75rem;
            border-radius: 0.75rem;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }
        
        .theme-toggle::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .theme-toggle:hover::before {
            opacity: 1;
        }
        
        .theme-toggle:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px -8px rgba(99, 102, 241, 0.3);
        }
        
        .dark .theme-toggle {
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        
        .dark .theme-toggle:hover {
            box-shadow: 0 8px 25px -8px rgba(139, 92, 246, 0.3);
        }
        
        /* Mobile Menu Styling */
        .mobile-menu {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .dark .mobile-menu {
            background: rgba(15, 23, 42, 0.95);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }
        
        .mobile-nav-item {
            font-weight: 500;
            letter-spacing: -0.025em;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .mobile-nav-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(99, 102, 241, 0.1), transparent);
            transition: left 0.5s ease;
        }
        
        .mobile-nav-item:hover::before {
            left: 100%;
        }
        
        /* Accessibility Improvements */
        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
        
        /* Focus Styles voor toegankelijkheid */
        .focus-ring:focus {
            outline: 2px solid #6366f1;
            outline-offset: 2px;
        }
        
        .dark .focus-ring:focus {
            outline-color: #a5b4fc;
        }
        
        /* Touch Target Optimization */
        @media (max-width: 768px) {
            button,
            [role="button"],
            a {
                min-height: 44px;
                min-width: 44px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }
        
        /* Premium Scroll Behavior */
        @media (prefers-reduced-motion: no-preference) {
            html {
                scroll-behavior: smooth;
            }
        }
    </style>
</head>

<body class="bg-white dark:bg-neutral-900 text-neutral-900 dark:text-neutral-100 transition-colors duration-300">
    <!-- Premium Header -->
    <header class="fixed top-0 left-0 right-0 z-50 header-glass border-b border-neutral-200/20 dark:border-neutral-800/20" 
            x-data="{ 
                mobileMenuOpen: false,
                scrolled: false 
            }"
            x-init="
                window.addEventListener('scroll', () => {
                    scrolled = window.scrollY > 20
                })
            "
            :class="{ 'shadow-elegant': scrolled }">
        
        <div class="max-w-7xl mx-auto">
            <nav class="flex items-center justify-between px-6 py-4 lg:px-8">
                
                <!-- Premium Logo Section -->
                <div class="flex items-center space-x-4">
                    <a href="/" class="group flex items-center space-x-4 focus-ring rounded-xl" aria-label="Ga naar homepage">
                        <div class="logo-container">
                            <div class="logo-background w-14 h-14 rounded-xl flex items-center justify-center shadow-elegant">
                                <span class="text-xl font-bold text-white tracking-tight select-none">NA</span>
                            </div>
                        </div>
                        <div class="hidden sm:block">
                            <h1 class="text-xl font-bold bg-gradient-to-r from-neutral-900 via-neutral-700 to-neutral-900 dark:from-neutral-100 dark:via-neutral-300 dark:to-neutral-100 bg-clip-text text-transparent">
                                Naoufal Andichi
                            </h1>
                            <p class="text-sm text-neutral-600 dark:text-neutral-400 font-medium tracking-wide">
                                Full Stack Developer
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Premium Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-1" role="navigation" aria-label="Hoofdnavigatie">
                    <a href="/" 
                       class="nav-link px-4 py-2.5 text-neutral-700 dark:text-neutral-300 hover:text-accent-600 dark:hover:text-accent-400 rounded-lg transition-all duration-300 focus-ring
                              <?php echo $currentPage === 'home' ? 'active text-accent-600 dark:text-accent-400' : ''; ?>"
                       aria-current="<?php echo $currentPage === 'home' ? 'page' : 'false'; ?>">
                        Home
                    </a>
                    <a href="/projects" 
                       class="nav-link px-4 py-2.5 text-neutral-700 dark:text-neutral-300 hover:text-accent-600 dark:hover:text-accent-400 rounded-lg transition-all duration-300 focus-ring
                              <?php echo $currentPage === 'projects' ? 'active text-accent-600 dark:text-accent-400' : ''; ?>"
                       aria-current="<?php echo $currentPage === 'projects' ? 'page' : 'false'; ?>">
                        Projecten
                    </a>
                    <a href="/skills" 
                       class="nav-link px-4 py-2.5 text-neutral-700 dark:text-neutral-300 hover:text-accent-600 dark:hover:text-accent-400 rounded-lg transition-all duration-300 focus-ring
                              <?php echo $currentPage === 'skills' ? 'active text-accent-600 dark:text-accent-400' : ''; ?>"
                       aria-current="<?php echo $currentPage === 'skills' ? 'page' : 'false'; ?>">
                        Vaardigheden
                    </a>
                    <a href="/about" 
                       class="nav-link px-4 py-2.5 text-neutral-700 dark:text-neutral-300 hover:text-accent-600 dark:hover:text-accent-400 rounded-lg transition-all duration-300 focus-ring
                              <?php echo $currentPage === 'about' ? 'active text-accent-600 dark:text-accent-400' : ''; ?>"
                       aria-current="<?php echo $currentPage === 'about' ? 'page' : 'false'; ?>">
                        Over Mij
                    </a>
                    <a href="/contact" 
                       class="nav-link px-4 py-2.5 text-neutral-700 dark:text-neutral-300 hover:text-accent-600 dark:hover:text-accent-400 rounded-lg transition-all duration-300 focus-ring
                              <?php echo $currentPage === 'contact' ? 'active text-accent-600 dark:text-accent-400' : ''; ?>"
                       aria-current="<?php echo $currentPage === 'contact' ? 'page' : 'false'; ?>">
                        Contact
                    </a>
                </nav>

                <!-- Premium Controls Section -->
                <div class="flex items-center space-x-3">
                    
                    <!-- Premium Theme Toggle -->
                    <button 
                        class="theme-toggle focus-ring"
                        aria-label="Schakel tussen licht en donker thema"
                        x-data="{ 
                            isDark: document.documentElement.classList.contains('dark'),
                            toggle() {
                                this.isDark = !this.isDark;
                                if (this.isDark) {
                                    document.documentElement.classList.add('dark');
                                    document.documentElement.style.colorScheme = 'dark';
                                    localStorage.setItem('theme', 'dark');
                                } else {
                                    document.documentElement.classList.remove('dark');
                                    document.documentElement.style.colorScheme = 'light';
                                    localStorage.setItem('theme', 'light');
                                }
                            }
                        }"
                        @click="toggle()"
                        :aria-pressed="isDark.toString()">
                        
                        <!-- Light Mode Icon -->
                        <svg x-show="!isDark" 
                             class="w-5 h-5 text-neutral-600 dark:text-neutral-400 transition-colors duration-300" 
                             fill="none" 
                             stroke="currentColor" 
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                        </svg>
                        
                        <!-- Dark Mode Icon -->
                        <svg x-show="isDark" 
                             class="w-5 h-5 text-neutral-600 dark:text-neutral-400 transition-colors duration-300" 
                             fill="none" 
                             stroke="currentColor" 
                             viewBox="0 0 24 24" 
                             style="display: none;">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M12 7a5 5 0 100 10 5 5 0 000-10z"/>
                        </svg>
                    </button>

                    <!-- Premium Mobile Menu Toggle -->
                    <button 
                        class="lg:hidden theme-toggle focus-ring"
                        aria-label="Open mobiel menu" 
                        :aria-expanded="mobileMenuOpen.toString()"
                        @click="mobileMenuOpen = !mobileMenuOpen">
                        
                        <!-- Hamburger Icon -->
                        <svg x-show="!mobileMenuOpen" 
                             class="w-6 h-6 text-neutral-600 dark:text-neutral-400 transition-all duration-300" 
                             fill="none" 
                             stroke="currentColor" 
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        
                        <!-- Close Icon -->
                        <svg x-show="mobileMenuOpen" 
                             class="w-6 h-6 text-neutral-600 dark:text-neutral-400 transition-all duration-300" 
                             fill="none" 
                             stroke="currentColor" 
                             viewBox="0 0 24 24" 
                             style="display: none;">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </nav>
        </div>

        <!-- Premium Mobile Menu -->
        <div x-show="mobileMenuOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="lg:hidden mobile-menu border-t border-neutral-200/20 dark:border-neutral-800/20"
             style="display: none;"
             @click.away="mobileMenuOpen = false">
            
            <nav class="px-6 py-6 space-y-2" role="navigation" aria-label="Mobiele navigatie">
                <a href="/" 
                   class="mobile-nav-item block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 focus-ring
                          <?php echo $currentPage === 'home' ? 'text-accent-600 dark:text-accent-400 bg-accent-50/50 dark:bg-accent-950/30' : 'text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100/80 dark:hover:bg-neutral-800/50 hover:text-accent-600 dark:hover:text-accent-400'; ?>"
                   aria-current="<?php echo $currentPage === 'home' ? 'page' : 'false'; ?>"
                   @click="mobileMenuOpen = false">
                    <i class="fas fa-home w-5 text-center mr-3"></i>
                    Home
                </a>
                <a href="/projects" 
                   class="mobile-nav-item block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 focus-ring
                          <?php echo $currentPage === 'projects' ? 'text-accent-600 dark:text-accent-400 bg-accent-50/50 dark:bg-accent-950/30' : 'text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100/80 dark:hover:bg-neutral-800/50 hover:text-accent-600 dark:hover:text-accent-400'; ?>"
                   aria-current="<?php echo $currentPage === 'projects' ? 'page' : 'false'; ?>"
                   @click="mobileMenuOpen = false">
                    <i class="fas fa-laptop-code w-5 text-center mr-3"></i>
                    Projecten
                </a>
                <a href="/skills" 
                   class="mobile-nav-item block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 focus-ring
                          <?php echo $currentPage === 'skills' ? 'text-accent-600 dark:text-accent-400 bg-accent-50/50 dark:bg-accent-950/30' : 'text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100/80 dark:hover:bg-neutral-800/50 hover:text-accent-600 dark:hover:text-accent-400'; ?>"
                   aria-current="<?php echo $currentPage === 'skills' ? 'page' : 'false'; ?>"
                   @click="mobileMenuOpen = false">
                    <i class="fas fa-tools w-5 text-center mr-3"></i>
                    Vaardigheden
                </a>
                <a href="/about" 
                   class="mobile-nav-item block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 focus-ring
                          <?php echo $currentPage === 'about' ? 'text-accent-600 dark:text-accent-400 bg-accent-50/50 dark:bg-accent-950/30' : 'text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100/80 dark:hover:bg-neutral-800/50 hover:text-accent-600 dark:hover:text-accent-400'; ?>"
                   aria-current="<?php echo $currentPage === 'about' ? 'page' : 'false'; ?>"
                   @click="mobileMenuOpen = false">
                    <i class="fas fa-user w-5 text-center mr-3"></i>
                    Over Mij
                </a>
                <a href="/contact" 
                   class="mobile-nav-item block px-4 py-3 rounded-xl text-base font-medium transition-all duration-300 focus-ring
                          <?php echo $currentPage === 'contact' ? 'text-accent-600 dark:text-accent-400 bg-accent-50/50 dark:bg-accent-950/30' : 'text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100/80 dark:hover:bg-neutral-800/50 hover:text-accent-600 dark:hover:text-accent-400'; ?>"
                   aria-current="<?php echo $currentPage === 'contact' ? 'page' : 'false'; ?>"
                   @click="mobileMenuOpen = false">
                    <i class="fas fa-envelope w-5 text-center mr-3"></i>
                    Contact
                </a>
            </nav>
        </div>
    </header>

    <!-- Body padding voor fixed header -->
    <div class="pt-20"></div>
</body>
</html> 