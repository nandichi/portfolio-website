<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Naoufal Andichi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next/22.5.0/i18next.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next-http-backend/2.2.2/i18nextHttpBackend.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next-browser-languagedetector/7.2.0/i18nextBrowserLanguageDetector.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next-jquery/1.1.0/i18next-jquery.min.js"></script>
    <style>
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-scale:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .goog-te-combo {
            padding: 0.5rem;
            border-radius: 0.5rem;
            border: 1px solid #e5e7eb;
            background-color: white;
            color: #374151;
            font-size: 0.875rem;
            cursor: pointer;
        }
        
        .goog-te-banner-frame {
            display: none !important;
        }
        
        body {
            top: 0 !important;
        }
        /* Language Switcher Styling */
        .language-switcher {
            position: relative;
            display: inline-block;
        }
        
        .language-button {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .language-button:hover {
            background-color: #f3f4f6;
        }
        
        .language-options {
            position: absolute;
            top: 100%;
            right: 0;
            margin-top: 0.5rem;
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 50;
        }
        
        .language-options.show {
            display: block;
        }
        
        .language-option {
            padding: 0.5rem 1rem;
            cursor: pointer;
            white-space: nowrap;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .language-option:hover {
            background-color: #f3f4f6;
        }
        
        .language-flag {
            width: 1.5rem;
            height: 1rem;
            object-fit: cover;
            border-radius: 2px;
        }
    </style>
</head>
<body class="bg-gray-50">
    <nav class="fixed w-full bg-white/90 backdrop-blur-md shadow-lg z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.php" class="group flex items-center space-x-2">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-blue-400 rounded-lg flex items-center justify-center transform transition-transform group-hover:scale-110 group-hover:rotate-3">
                            <span class="text-xl font-bold text-white">NA</span>
                        </div>
                        <span class="text-xl font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">
                            Naoufal Andichi
                        </span>
                    </a>
                </div>
                <div class="hidden sm:flex sm:space-x-1 items-center">
                    <a href="index.php" 
                        class="<?php echo $currentPage === 'home' ? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:text-gray-900'; ?> 
                               px-4 py-2 rounded-lg transition-all duration-300 hover:text-blue-600 relative group"
                    >
                        <span class="relative z-10">Home</span>
                        <?php if ($currentPage === 'home'): ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-100"></div>
                        <?php endif; ?>
                    </a>
                    <a href="projects.php" 
                        class="<?php echo $currentPage === 'projects' ? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:text-gray-900'; ?> 
                               px-4 py-2 rounded-lg transition-all duration-300 hover:text-blue-600 relative group"
                    >
                        <span class="relative z-10">Projecten</span>
                        <?php if ($currentPage === 'projects'): ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-100"></div>
                        <?php endif; ?>
                    </a>
                    <a href="skills.php" class="<?php echo $currentPage === 'skills' ? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:text-gray-900'; ?> px-4 py-2 rounded-lg transition-all duration-300 hover:text-blue-600 relative group">
                        <span class="relative z-10">Vaardigheden</span>
                        <?php if ($currentPage === 'skills'): ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-100"></div>
                        <?php endif; ?>
                    </a>
                    <a href="about.php" class="<?php echo $currentPage === 'about' ? 'text-blue-600 bg-blue-50' : 'text-gray-700 hover:text-gray-900'; ?> px-4 py-2 rounded-lg transition-all duration-300 hover:text-blue-600 relative group">
                        <span class="relative z-10">Over Mij</span>
                        <?php if ($currentPage === 'about'): ?>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 transform scale-x-100"></div>
                        <?php endif; ?>
                    </a>
                    <a href="contact.php" class="<?php echo $currentPage === 'contact' ? 'text-blue-600' : 'text-gray-600 hover:text-gray-900'; ?>">
                        Contact
                    </a>
                    <div class="language-switcher ml-4">
                        <button class="language-button" onclick="toggleLanguageOptions()">
                            <img src="images/flags/nl.svg" alt="Dutch" class="language-flag" id="selected-language-flag">
                            <span id="selected-language">Nederlands</span>
                            <i class="fas fa-chevron-down ml-2"></i>
                        </button>
                        <div class="language-options" id="language-options">
                            <div class="language-option" onclick="changeLanguage('nl')">
                                <img src="images/flags/nl.svg" alt="Dutch" class="language-flag">
                                Nederlands
                            </div>
                            <div class="language-option" onclick="changeLanguage('en')">
                                <img src="images/flags/gb.svg" alt="English" class="language-flag">
                                English
                            </div>
                            <div class="language-option" onclick="changeLanguage('de')">
                                <img src="images/flags/de.svg" alt="German" class="language-flag">
                                Deutsch
                            </div>
                            <div class="language-option" onclick="changeLanguage('fr')">
                                <img src="images/flags/fr.svg" alt="French" class="language-flag">
                                Français
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sm:hidden flex items-center">
                    <button class="mobile-menu-button p-2 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <svg class="h-6 w-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="sm:hidden hidden mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="index.php" 
                    class="<?php echo $currentPage === 'home' ? 'text-blue-600 bg-blue-50' : 'text-gray-700'; ?> 
                           block px-3 py-2 rounded-lg text-base font-medium hover:bg-gray-50 hover:text-blue-600 transition-all"
                >
                    Home
                </a>
                <a href="projects.php" 
                    class="<?php echo $currentPage === 'projects' ? 'text-blue-600 bg-blue-50' : 'text-gray-700'; ?> 
                           block px-3 py-2 rounded-lg text-base font-medium hover:bg-gray-50 hover:text-blue-600 transition-all"
                >
                    Projecten
                </a>
                <a href="skills.php" 
                    class="<?php echo $currentPage === 'skills' ? 'text-blue-600 bg-blue-50' : 'text-gray-700'; ?> 
                           block px-3 py-2 rounded-lg text-base font-medium hover:bg-gray-50 hover:text-blue-600 transition-all"
                >
                    Vaardigheden
                </a>
                <a href="about.php" 
                    class="<?php echo $currentPage === 'about' ? 'text-blue-600 bg-blue-50' : 'text-gray-700'; ?> 
                           block px-3 py-2 rounded-lg text-base font-medium hover:bg-gray-50 hover:text-blue-600 transition-all"
                >
                    Over Mij
                </a>
                <a href="contact.php" 
                    class="<?php echo $currentPage === 'contact' ? 'text-blue-600 bg-blue-50' : 'text-gray-700'; ?> 
                           block px-3 py-2 rounded-lg text-base font-medium hover:bg-gray-50 hover:text-blue-600 transition-all"
                >
                    Contact
                </a>
            </div>
            <div class="px-3 py-2" id="google_translate_element_mobile"></div>
        </div>
    </nav>
    <script>
        // Initialize i18next
        i18next
            .use(i18nextHttpBackend)
            .use(i18nextBrowserLanguageDetector)
            .init({
                fallbackLng: 'nl',
                debug: true,
                backend: {
                    loadPath: '/locales/{{lng}}/{{ns}}.json'
                }
            });

        function toggleLanguageOptions() {
            document.getElementById('language-options').classList.toggle('show');
        }

        function changeLanguage(lang) {
            i18next.changeLanguage(lang, (err, t) => {
                if (err) return console.log('Something went wrong loading', err);
                updateContent();
                updateLanguageButton(lang);
                toggleLanguageOptions();
            });
        }

        function updateLanguageButton(lang) {
            const flagMap = {
                nl: { src: 'images/flags/nl.svg', text: 'Nederlands' },
                en: { src: 'images/flags/gb.svg', text: 'English' },
                de: { src: 'images/flags/de.svg', text: 'Deutsch' },
                fr: { src: 'images/flags/fr.svg', text: 'Français' }
            };

            document.getElementById('selected-language-flag').src = flagMap[lang].src;
            document.getElementById('selected-language').textContent = flagMap[lang].text;
        }

        // Close language options when clicking outside
        document.addEventListener('click', function(event) {
            const switcher = document.querySelector('.language-switcher');
            const options = document.getElementById('language-options');
            if (!switcher.contains(event.target)) {
                options.classList.remove('show');
            }
        });
    </script>
</body>
</html> 