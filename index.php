<?php
$pageTitle = "Home";
$currentPage = "home";
include 'includes/header.php';
?>

<header class="min-h-screen bg-gradient-to-br from-blue-600 to-blue-400 flex items-center justify-center relative overflow-hidden">
    <!-- Animated background shapes -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-white/10 rounded-full blur-3xl animate-blob"></div>
        <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-blue-300/20 rounded-full blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-1/4 left-1/3 w-80 h-80 bg-blue-400/15 rounded-full blur-3xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-center gap-12 relative z-10">
        <div class="md:w-1/3 text-center md:text-left text-white" data-aos="fade-right">
            <h1 class="text-5xl md:text-6xl font-bold mb-4 leading-tight">Naoufal Andichi</h1>
            <h2 class="text-2xl md:text-3xl mb-8 opacity-90 font-semibold">Full Stack Developer</h2>
            <p class="text-xl mb-8 opacity-80">Welkom op mijn portfolio website</p>
            <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                <a href="#about" 
                   class="bg-white text-blue-600 px-8 py-3 rounded-full hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300 font-medium">
                    Leer mij kennen
                </a>
                <a href="projects.php" 
                   class="bg-transparent text-white border-2 border-white px-8 py-3 rounded-full hover:bg-white/10 transition-all duration-300 font-medium">
                    Bekijk Projecten
                </a>
            </div>
        </div>
        <div class="md:w-1/4 relative" data-aos="fade-left" data-aos-delay="200">
            <div class="w-72 h-72 mx-auto rounded-full overflow-hidden border-4 border-white/90 shadow-xl transform hover:scale-105 transition-transform duration-300">
                <img src="Naoufal%20Andichi.jpeg" 
                     alt="Naoufal Andichi" 
                     class="w-full h-full object-cover"
                >
            </div>
            <div class="absolute -inset-4 bg-white/20 rounded-full blur-3xl -z-10"></div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</header>

<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Introductie Text -->
            <div class="space-y-6" data-aos="fade-right">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Welkom op mijn Portfolio</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Als Software Development student en stagiair bij Developing B.V. combineer ik mijn passie voor technologie 
                    met praktische ervaring. Ik focus me op het bouwen van moderne web applicaties met de nieuwste technologieën.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Mijn doel is om innovatieve oplossingen te creëren die niet alleen functioneel zijn, maar ook een geweldige 
                    gebruikerservaring bieden. Ik geloof sterk in continu leren en blijf mezelf ontwikkelen in nieuwe technologieën.
                </p>
                <div class="flex flex-wrap gap-4 mt-8">
                    <a href="about.php" 
                       class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium">
                        Meer over mij
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="projects.php" 
                       class="inline-flex items-center px-6 py-3 border-2 border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition-colors font-medium">
                        Bekijk projecten
                    </a>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 gap-8" data-aos="fade-left">
                <!-- Project Stats -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                        <span class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-blue-400 bg-clip-text text-transparent">8+</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Projecten</h3>
                    <p class="text-gray-600 mt-2">Afgeronde projecten in verschillende technologieën</p>
                </div>

                <!-- Experience Stats -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <span class="text-3xl font-bold bg-gradient-to-r from-indigo-600 to-indigo-400 bg-clip-text text-transparent">4+</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Jaar Ervaring</h3>
                    <p class="text-gray-600 mt-2">In software & web development, inclusief stages en bijbanen</p>
                </div>

                <!-- Technologies Stats -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <span class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-purple-400 bg-clip-text text-transparent">6+</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Technologieën</h3>
                    <p class="text-gray-600 mt-2">Verschillende programmeertalen en frameworks</p>
                </div>

                <!-- Education Stats -->
                <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0L3 9m0 0l9 5 9-5"/>
                            </svg>
                        </div>
                        <span class="text-3xl font-bold bg-gradient-to-r from-yellow-600 to-yellow-400 bg-clip-text text-transparent">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Stages</h3>
                    <p class="text-gray-600 mt-2">Afgeronde en huidige stages</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="highlights" class="py-20 px-4 bg-white relative">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">Wat Ik Doe</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Ik ontwikkel moderne web applicaties met focus op gebruiksvriendelijkheid en schaalbaarheid
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Frontend Development Card -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" 
                 data-aos="fade-up" data-aos-delay="100">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6 transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">Frontend Development</h3>
                <p class="text-gray-600">Moderne en responsieve interfaces met React en TypeScript</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        React.js
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        TypeScript
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Tailwind CSS
                    </li>
                </ul>
            </div>

            <!-- Backend Development Card -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" 
                 data-aos="fade-up" data-aos-delay="200">
                <div class="bg-gradient-to-br from-indigo-500 to-indigo-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6 transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">Backend Development</h3>
                <p class="text-gray-600">Schaalbare backend systemen met PHP en Laravel</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        PHP/Laravel
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        MySQL
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        API Development
                    </li>
                </ul>
            </div>

            <!-- DevOps Card -->
            <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2" 
                 data-aos="fade-up" data-aos-delay="300">
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-16 h-16 rounded-lg flex items-center justify-center mb-6 transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">DevOps</h3>
                <p class="text-gray-600">CI/CD, Docker en Cloud deployment</p>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Git
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Docker
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        CI/CD
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">Waarom Mij Kiezen?</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Een jonge, gedreven developer met een passie voor moderne technologieën en innovatieve oplossingen
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Modern Development -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">Moderne Ontwikkeling</h3>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 text-blue-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Focus op clean code en best practices</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 text-blue-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Ervaring met moderne frameworks en tools</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 text-blue-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Responsive en performante applicaties</span>
                    </li>
                </ul>
            </div>

            <!-- Soft Skills -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">Soft Skills</h3>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 text-indigo-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Sterke communicatieve vaardigheden</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 text-indigo-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Proactieve werkhouding</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 text-indigo-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Teamplayer met oog voor detail</span>
                    </li>
                </ul>
            </div>

            <!-- Groei & Ontwikkeling -->
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900">Groei & Ontwikkeling</h3>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 text-purple-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Continu leren en ontwikkelen</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 text-purple-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Snel nieuwe technologieën eigen maken</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 text-purple-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Ambitieus en resultaatgericht</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Extra Info -->
        <div class="mt-16 bg-blue-50 rounded-2xl p-8" data-aos="fade-up">
            <div class="max-w-3xl mx-auto">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Wat ik kan betekenen voor uw bedrijf</h3>
                <div class="space-y-4 text-gray-600">
                    <p>
                        Als jonge developer breng ik een frisse blik en actuele kennis van moderne technologieën. 
                        Mijn ervaring met zowel frontend als backend development stelt mij in staat om flexibel bij te dragen 
                        aan diverse projecten.
                    </p>
                    <p>
                        Door mijn stages bij verschillende bedrijven heb ik geleerd om snel te schakelen tussen projecten 
                        en technologieën. Ik ben gewend aan het werken in een professionele omgeving en het leveren van 
                        kwaliteit volgens de gestelde deadlines.
                    </p>
                    <p>
                        Ik zoek een uitdagende positie waar ik kan groeien als developer en mijn technische vaardigheden 
                        verder kan ontwikkelen. Mijn doel is om waardevol bij te dragen aan innovatieve projecten en het 
                        succes van uw organisatie.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Werkervaring Section -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">Werkervaring & Bijbanen</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Mijn professionele ervaring en werkzaamheden
            </p>
        </div>

        <!-- Experience Cards Container -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Current Role - Developing B.V. -->
            <div class="col-span-1 lg:col-span-2" data-aos="fade-up">
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl p-1">
                    <div class="bg-white rounded-xl p-6 sm:p-8 h-full hover:bg-blue-50 transition-colors duration-300">
                        <div class="flex flex-col sm:flex-row items-start gap-6">
                            <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="flex-grow">
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900">Software Developer</h3>
                                        <p class="text-blue-600 font-medium">Developing B.V.</p>
                                    </div>
                                    <span class="mt-2 sm:mt-0 px-4 py-1.5 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                                        sep. 2024 - heden
                                    </span>
                                </div>
                                <div class="space-y-4">
                                    <p class="text-gray-600">Stage waarbij ik werk aan diverse projecten met moderne technologieën.</p>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <h4 class="font-medium text-gray-900 mb-2">Hoofdtaken</h4>
                                            <ul class="space-y-2">
                                                <li class="flex items-center text-gray-600">
                                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    WordPress Development
                                                </li>
                                                <li class="flex items-center text-gray-600">
                                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    PHP/Laravel Projecten
                                                </li>
                                                <li class="flex items-center text-gray-600">
                                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    Frontend met Tailwind CSS
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 mb-2">Extra taken</h4>
                                            <ul class="space-y-2">
                                                <li class="flex items-center text-gray-600">
                                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    Stagiairs Interviewen
                                                </li>
                                                <li class="flex items-center text-gray-600">
                                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    Kennisbank Opzetten
                                                </li>
                                                <li class="flex items-center text-gray-600">
                                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    Klanten Ondersteunen
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pathé Role -->
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white rounded-xl shadow-lg p-6 h-full hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Service Employee</h3>
                            <p class="text-indigo-600">Pathé</p>
                        </div>
                        <span class="ml-auto px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-sm">
                            mei 2023 - heden
                        </span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-full text-sm">Klantenservice</span>
                            <span class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-full text-sm">Ticketverkoop</span>
                            <span class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-full text-sm">Evenementen</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Role -->
            <div class="group" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white rounded-xl shadow-lg p-6 h-full hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Verkoopmedewerker</h3>
                            <p class="text-purple-600">Action</p>
                        </div>
                        <span class="ml-auto px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm">
                            2020 - 2023
                        </span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm">Klantenservice</span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm">Voorraadbeheer</span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm">Winkelnetheid</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Overview Section -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">Vaardigheden</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Een overzicht van mijn technische vaardigheden en expertise
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Frontend Skills -->
            <div class="bg-white p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-lg font-semibold mb-4 text-gray-900">Frontend</h3>
                <div class="space-y-3">
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">HTML/CSS</span>
                            <span class="text-sm font-medium text-blue-600">90%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">JavaScript</span>
                            <span class="text-sm font-medium text-blue-600">85%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">Tailwind CSS</span>
                            <span class="text-sm font-medium text-blue-600">85%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Backend Skills -->
            <div class="bg-white p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-lg font-semibold mb-4 text-gray-900">Backend</h3>
                <div class="space-y-3">
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">PHP</span>
                            <span class="text-sm font-medium text-blue-600">85%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">Laravel</span>
                            <span class="text-sm font-medium text-blue-600">80%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">MySQL</span>
                            <span class="text-sm font-medium text-blue-600">75%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CMS & Tools -->
            <div class="bg-white p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-lg font-semibold mb-4 text-gray-900">CMS & Tools</h3>
                <div class="space-y-3">
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">WordPress</span>
                            <span class="text-sm font-medium text-blue-600">90%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">Git</span>
                            <span class="text-sm font-medium text-blue-600">85%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">Docker</span>
                            <span class="text-sm font-medium text-blue-600">70%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Skills -->
            <div class="bg-white p-6 rounded-xl shadow-lg" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-lg font-semibold mb-4 text-gray-900">Extra Skills</h3>
                <div class="space-y-3">
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">TypeScript</span>
                            <span class="text-sm font-medium text-blue-600">75%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">C#</span>
                            <span class="text-sm font-medium text-blue-600">70%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="relative pt-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-600">ASP.NET</span>
                            <span class="text-sm font-medium text-blue-600">65%</span>
                        </div>
                        <div class="overflow-hidden h-2 bg-gray-200 rounded">
                            <div class="h-full bg-blue-600 rounded" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">Mijn Reis</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Een tijdlijn van mijn professionele ontwikkeling
            </p>
        </div>

        <div class="relative">
            <!-- Verticale lijn -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-blue-200"></div>

            <!-- Timeline Items -->
            <div class="space-y-12">
                <div class="relative" data-aos="fade-right">
                    <div class="flex items-center">
                        <div class="flex-1 text-right pr-8">
                            <h3 class="text-lg font-semibold text-gray-900">Stage bij Developing B.V.</h3>
                            <p class="text-gray-600">sep. 2024 - heden</p>
                            <p class="text-gray-600 mt-2">
                                Werken met WordPress, PHP/Laravel en Tailwind CSS voor diverse projecten
                            </p>
                        </div>
                        <div class="w-4 h-4 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="flex-1"></div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <div class="flex items-center">
                        <div class="flex-1"></div>
                        <div class="w-4 h-4 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="flex-1 pl-8">
                            <h3 class="text-lg font-semibold text-gray-900">Service Employee bij Pathé</h3>
                            <p class="text-gray-600">mei 2023 - heden</p>
                            <p class="text-gray-600 mt-2">
                                Klantenservice, ticketverkoop en evenementen assistentie
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <div class="flex items-center">
                        <div class="flex-1"></div>
                        <div class="w-4 h-4 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="flex-1 pl-8">
                            <h3 class="text-lg font-semibold text-gray-900">Stage bij I@control</h3>
                            <p class="text-gray-600">feb. 2023 - apr. 2023</p>
                            <p class="text-gray-600 mt-2">
                                Ontwikkeling met TypeScript, C#, ASP.NET en AngularJS
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-right">
                    <div class="flex items-center">
                        <div class="flex-1 text-right pr-8">
                            <h3 class="text-lg font-semibold text-gray-900">Verkoopmedewerker bij Action</h3>
                            <p class="text-gray-600">okt. 2020 - mei 2023</p>
                            <p class="text-gray-600 mt-2">
                                Klantenservice, voorraadbeheer en winkelnetheid
                            </p>
                        </div>
                        <div class="w-4 h-4 bg-blue-600 rounded-full border-4 border-white shadow"></div>
                        <div class="flex-1"></div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left">
                    <div class="flex items-center">
                        <div class="flex-1"></div>
                        <div class="w-4 h-4 bg-indigo-600 rounded-full border-4 border-white shadow"></div>
                        <div class="flex-1 pl-8">
                            <h3 class="text-lg font-semibold text-gray-900">Software Development Opleiding</h3>
                            <p class="text-gray-600">Rijn IJssel</p>
                            <p class="text-gray-600">2021 - 2024</p>
                            <p class="text-gray-600 mt-2">
                                MBO 4 - Software Developer
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-right">
                    <div class="flex items-center">
                        <div class="flex-1 text-right pr-8">
                            <h3 class="text-lg font-semibold text-gray-900">MAVO</h3>
                            <p class="text-gray-600">Pallas Athene College</p>
                            <p class="text-gray-600">2017 - 2021</p>
                        </div>
                        <div class="w-4 h-4 bg-indigo-600 rounded-full border-4 border-white shadow"></div>
                        <div class="flex-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials/Aanbevelingen Sectie -->
<section class="py-20 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">Wat Anderen Zeggen</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Feedback van collega's en mentoren
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-xl shadow-lg p-8 relative" data-aos="fade-up">
                <div class="absolute top-0 right-0 transform -translate-y-1/2 translate-x-1/2">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-600 mb-6">
                    "Als stagebegeleider ben ik onder de indruk van Naoufal's vermogen om complexe problemen op te lossen. 
                    Hij pakt nieuwe uitdagingen met enthousiasme aan en levert consistent hoogwaardig werk af."
                </p>
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                            <span class="text-blue-600 font-semibold">SB</span>
                        </div>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Sven van den Berg</p>
                        <p class="text-sm text-gray-500">Stage Begeleider, Developing B.V.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white rounded-xl shadow-lg p-8 relative" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-0 right-0 transform -translate-y-1/2 translate-x-1/2">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-600 mb-6">
                    "Naoufal heeft een uitstekend oog voor detail en een sterke drive om zich te blijven ontwikkelen. 
                    Zijn vermogen om snel nieuwe technologieën te leren en toe te passen is indrukwekkend."
                </p>
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                            <span class="text-green-600 font-semibold">MT</span>
                        </div>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Mark Timmer</p>
                        <p class="text-sm text-gray-500">Senior Developer, Developing B.V.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white rounded-xl shadow-lg p-8 relative" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute top-0 right-0 transform -translate-y-1/2 translate-x-1/2">
                    <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-600 mb-6">
                    "De samenwerking met Naoufal is altijd prettig en productief. Hij denkt goed mee over oplossingen 
                    en is niet bang om nieuwe ideeën aan te dragen. Een echte teamspeler met technische expertise."
                </p>
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                            <span class="text-purple-600 font-semibold">KH</span>
                        </div>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Kristian Huisman</p>
                        <p class="text-sm text-gray-500">Lead Developer, Developing B.V.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-20 px-4 bg-gradient-to-br from-blue-600 to-blue-800 text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6" data-aos="fade-up">Klaar om samen te werken?</h2>
        <p class="text-lg opacity-90 mb-8" data-aos="fade-up" data-aos-delay="100">
            Ik sta altijd open voor nieuwe uitdagingen en samenwerkingen
        </p>
        <a href="contact.php" 
           class="inline-flex items-center px-8 py-3 bg-white text-blue-600 rounded-full hover:bg-blue-50 transition-colors duration-300"
           data-aos="fade-up" data-aos-delay="200">
            Neem contact op
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 