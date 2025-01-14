<?php
$pageTitle = "Home";
$currentPage = "home";
include 'includes/header.php';
?>

<!-- Verbeterde header met meer dynamische animaties -->
<header class="min-h-screen bg-gradient-to-br from-blue-500 via-blue-600 to-indigo-700 dark:from-blue-700 dark:via-blue-800 dark:to-indigo-900 flex items-center justify-center relative overflow-hidden pt-16 sm:pt-0">
    <!-- Verbeterde animated background shapes met meer dynamiek -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-white/10 rounded-full blur-3xl animate-blob"></div>
        <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-indigo-300/20 rounded-full blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-1/4 left-1/3 w-80 h-80 bg-blue-300/20 rounded-full blur-3xl animate-blob animation-delay-4000"></div>
        <!-- Extra glowing orbs met verbeterde animaties -->
        <div class="absolute top-1/2 right-1/3 w-48 h-48 bg-blue-400/30 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/2 w-64 h-64 bg-indigo-400/20 rounded-full blur-2xl animate-pulse animation-delay-2000"></div>
        <!-- Nieuwe particle effecten -->
        <div class="absolute inset-0 mix-blend-overlay opacity-30">
            <div class="absolute w-2 h-2 bg-white rounded-full animate-float" style="top: 10%; left: 20%;"></div>
            <div class="absolute w-2 h-2 bg-white rounded-full animate-float animation-delay-1000" style="top: 30%; right: 20%;"></div>
            <div class="absolute w-2 h-2 bg-white rounded-full animate-float animation-delay-2000" style="bottom: 20%; left: 40%;"></div>
        </div>
    </div>
    
    <!-- Verbeterd grid pattern overlay met subtiele animatie -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/5 dark:to-black/20 backdrop-blur-[1px] animate-grid" 
         style="background-image: linear-gradient(rgba(255,255,255,.025) 1px, transparent 1px),
                                linear-gradient(90deg, rgba(255,255,255,.025) 1px, transparent 1px);
                background-size: 32px 32px;"></div>
    
    <!-- Verbeterde content styling -->
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="space-y-8">
            <div class="flex justify-center mb-8 animate-fade-in-up">
                <div class="w-32 h-32 sm:w-40 sm:h-40 rounded-full border-4 border-white/90 shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300 hover:shadow-2xl hover:shadow-blue-500/25">
                    <div class="w-full h-full bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center text-white text-4xl font-bold relative group">
                        <span class="transform group-hover:scale-110 transition-transform duration-300">NA</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent animate-shimmer"></div>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white text-shadow-lg animate-fade-in-up mb-4 tracking-tight">
                    Naoufal Andichi
                </h1>
                <p class="text-2xl sm:text-3xl text-blue-100 font-light animate-fade-in-up animation-delay-100 tracking-wide">
                    Full Stack Developer
                </p>
            </div>
            <p class="text-xl sm:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed animate-fade-in-up animation-delay-200">
                Een enthousiaste student Software Developer bij het RijnIJssel in Arnhem, met passie voor moderne technologieën en innovatieve oplossingen
            </p>
            <div class="flex flex-wrap justify-center gap-4 animate-fade-in-up animation-delay-400">
                <a href="contact.php" 
                   class="group px-8 py-3 bg-white text-blue-600 rounded-full font-semibold hover:bg-blue-50 transform hover:-translate-y-1 hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl hover:shadow-blue-500/25 flex items-center gap-2">
                    <span>Contact</span>
                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="projects.php" 
                   class="group px-8 py-3 bg-blue-700/30 text-white rounded-full font-semibold hover:bg-blue-600/40 transform hover:-translate-y-1 hover:scale-105 transition-all duration-300 backdrop-blur-sm border border-white/10 hover:border-white/25 hover:shadow-lg hover:shadow-blue-500/20 flex items-center gap-2">
                    <svg class="w-5 h-5 transform group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    <span>Projecten</span>
                </a>
            </div>
        </div>
    </div>
</header>

<section class="py-20 px-4 bg-gradient-to-b from-blue-50 to-indigo-50 dark:from-gray-900 dark:to-gray-800 relative overflow-hidden">
    <!-- Verbeterde achtergrond effecten -->
    <div class="absolute inset-0 bg-gradient-to-b from-blue-50/50 to-transparent dark:from-blue-900/10 dark:to-transparent"></div>
    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
    
    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400 relative inline-block" data-aos="fade-up">
                Waarom Mij Kiezen?
                <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-transparent rounded-full"></div>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Een jonge, gedreven developer met een passie voor moderne technologieën en innovatieve oplossingen
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Modern Development met verbeterde styling -->
            <div class="group bg-white dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 dark:border-gray-600" data-aos="fade-up">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white group-hover:text-blue-500 transition-colors">Moderne Ontwikkeling</h3>
                <ul class="space-y-3 text-gray-600 dark:text-gray-300">
                    <li class="flex items-start group/item">
                        <svg class="w-5 h-5 mr-2 text-blue-500 mt-1 transform group-hover/item:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="group-hover/item:text-blue-500 transition-colors">Focus op clean code en best practices</span>
                    </li>
                    <li class="flex items-start group/item">
                        <svg class="w-5 h-5 mr-2 text-blue-500 mt-1 transform group-hover/item:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="group-hover/item:text-blue-500 transition-colors">Ervaring met moderne frameworks en tools</span>
                    </li>
                    <li class="flex items-start group/item">
                        <svg class="w-5 h-5 mr-2 text-blue-500 mt-1 transform group-hover/item:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="group-hover/item:text-blue-500 transition-colors">Responsive en performante applicaties</span>
                    </li>
                </ul>
            </div>

            <!-- Soft Skills met verbeterde styling -->
            <div class="group bg-white dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 dark:border-gray-600" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 bg-gradient-to-br from-indigo-400 to-indigo-600 rounded-xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white group-hover:text-indigo-500 transition-colors">Soft Skills</h3>
                <ul class="space-y-3 text-gray-600 dark:text-gray-300">
                    <li class="flex items-start group/item">
                        <svg class="w-5 h-5 mr-2 text-indigo-500 mt-1 transform group-hover/item:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="group-hover/item:text-indigo-500 transition-colors">Sterke communicatieve vaardigheden</span>
                    </li>
                    <li class="flex items-start group/item">
                        <svg class="w-5 h-5 mr-2 text-indigo-500 mt-1 transform group-hover/item:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="group-hover/item:text-indigo-500 transition-colors">Proactieve werkhouding</span>
                    </li>
                    <li class="flex items-start group/item">
                        <svg class="w-5 h-5 mr-2 text-indigo-500 mt-1 transform group-hover/item:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="group-hover/item:text-indigo-500 transition-colors">Teamplayer met oog voor detail</span>
                    </li>
                </ul>
            </div>

            <!-- Groei & Ontwikkeling met verbeterde styling -->
            <div class="group bg-white dark:bg-gray-700 p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 dark:border-gray-600" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl flex items-center justify-center mb-6 transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-4 text-gray-900 dark:text-white group-hover:text-purple-500 transition-colors">Groei & Ontwikkeling</h3>
                <ul class="space-y-3 text-gray-600 dark:text-gray-300">
                    <li class="flex items-start group/item">
                        <svg class="w-5 h-5 mr-2 text-purple-500 mt-1 transform group-hover/item:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="group-hover/item:text-purple-500 transition-colors">Continu leren en ontwikkelen</span>
                    </li>
                    <li class="flex items-start group/item">
                        <svg class="w-5 h-5 mr-2 text-purple-500 mt-1 transform group-hover/item:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="group-hover/item:text-purple-500 transition-colors">Snel nieuwe technologieën eigen maken</span>
                    </li>
                    <li class="flex items-start group/item">
                        <svg class="w-5 h-5 mr-2 text-purple-500 mt-1 transform group-hover/item:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="group-hover/item:text-purple-500 transition-colors">Ambitieus en resultaatgericht</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Extra Info met verbeterde styling -->
        <div class="mt-16 bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-gray-700/50 dark:to-gray-700/30 rounded-2xl p-8 shadow-lg transform hover:scale-[1.02] transition-all duration-300" data-aos="fade-up">
            <div class="max-w-3xl mx-auto">
                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 text-center relative inline-block">
                    Wat ik kan betekenen voor uw bedrijf
                    <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-transparent"></div>
                </h3>
                <div class="space-y-4 text-gray-700 dark:text-gray-300">
                    <p class="leading-relaxed">
                        Als developer kan ik uw bedrijf helpen met het bouwen van websites en apps. Ik ken de nieuwste technieken 
                        en kan deze meteen toepassen om uw online aanwezigheid te verbeteren. Door mijn opleiding en stages weet 
                        ik precies wat er nodig is om een project tot een succes te maken.
                    </p>
                    <p class="leading-relaxed">
                        Ik kan zowel de voorkant (wat bezoekers zien) als de achterkant (hoe alles werkt) van websites maken. 
                        Door mijn stage bij Developing B.V. heb ik al veel ervaring opgedaan met het maken van websites die er 
                        niet alleen mooi uitzien, maar ook goed werken. Ik lever altijd netjes werk op tijd af.
                    </p>
                    <p class="font-medium text-gray-800 dark:text-white">
                        Wat mij speciaal maakt is dat ik:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3 group/item">
                            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center flex-shrink-0 transform group-hover/item:scale-110 group-hover/item:rotate-3 transition-all duration-300">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-blue-600 dark:group-hover/item:text-blue-400 transition-colors">Snel nieuwe dingen leer en direct kan toepassen</span>
                        </div>
                        <div class="flex items-start gap-3 group/item">
                            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center flex-shrink-0 transform group-hover/item:scale-110 group-hover/item:rotate-3 transition-all duration-300">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-blue-600 dark:group-hover/item:text-blue-400 transition-colors">Websites en apps maak die er mooi uitzien en snel werken</span>
                        </div>
                        <div class="flex items-start gap-3 group/item">
                            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center flex-shrink-0 transform group-hover/item:scale-110 group-hover/item:rotate-3 transition-all duration-300">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-blue-600 dark:group-hover/item:text-blue-400 transition-colors">Met een frisse blik naar problemen kijk en met slimme oplossingen kom</span>
                        </div>
                        <div class="flex items-start gap-3 group/item">
                            <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center flex-shrink-0 transform group-hover/item:scale-110 group-hover/item:rotate-3 transition-all duration-300">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 dark:text-gray-300 group-hover/item:text-blue-600 dark:group-hover/item:text-blue-400 transition-colors">Goed kan samenwerken en duidelijk communiceer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Werkervaring Section -->
<section class="py-20 px-4 bg-gradient-to-b from-indigo-50 to-blue-50 dark:from-gray-800 dark:to-gray-900 relative">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400 relative inline-block" data-aos="fade-up">
                Werkervaring & Bijbanen
                <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-transparent rounded-full"></div>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Mijn professionele ervaring en werkzaamheden
            </p>
        </div>

        <!-- Experience Cards Container -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Current Role - Developing B.V. -->
            <div class="col-span-1 lg:col-span-2" data-aos="fade-up">
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl p-1">
                    <div class="bg-white dark:bg-gray-700 rounded-xl p-6 sm:p-8 h-full hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-colors duration-300">
                        <div class="flex flex-col sm:flex-row items-start gap-6">
                            <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="flex-grow">
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4">
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">Software Developer</h3>
                                        <p class="text-blue-600 dark:text-blue-400 font-medium">Developing B.V.</p>
                                    </div>
                                    <span class="mt-2 sm:mt-0 px-4 py-1.5 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                                        sep. 2024 - heden
                                    </span>
                                </div>
                                <div class="space-y-4">
                                    <p class="text-gray-600 dark:text-gray-300">Stage waar ik werk aan verschillende projecten met nieuwe technieken.</p>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <h4 class="font-medium text-gray-900 dark:text-white mb-2">Hoofdtaken</h4>
                                            <ul class="space-y-2">
                                                <li class="flex items-center text-gray-600 dark:text-white">
                                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    WordPress Development
                                                </li>
                                                <li class="flex items-center text-gray-600 dark:text-white">
                                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    PHP/Laravel Projecten
                                                </li>
                                                <li class="flex items-center text-gray-600 dark:text-white">
                                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    Frontend met Tailwind CSS
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h4 class="font-medium text-gray-900 dark:text-white mb-2">Extra taken</h4>
                                            <ul class="space-y-2">
                                                <li class="flex items-center text-gray-600 dark:text-white">
                                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    Stagiairs Interviewen
                                                </li>
                                                <li class="flex items-center text-gray-600 dark:text-white">
                                                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                    Kennisbank Opzetten
                                                </li>
                                                <li class="flex items-center text-gray-600 dark:text-white">
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
                <div class="bg-white dark:bg-gray-700 rounded-xl shadow-lg p-6 h-full hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1zM9 9h6v6H9V9z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Service Employee</h3>
                            <p class="text-indigo-600 dark:text-indigo-400">Pathé</p>
                        </div>
                        <span class="ml-auto px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 rounded-full text-sm">
                            mei 2023 - heden
                        </span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/50 text-indigo-700 dark:text-indigo-300 rounded-full text-sm">Klantenservice</span>
                            <span class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/50 text-indigo-700 dark:text-indigo-300 rounded-full text-sm">Ticketverkoop</span>
                            <span class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/50 text-indigo-700 dark:text-indigo-300 rounded-full text-sm">Evenementen</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Role -->
            <div class="group" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white dark:bg-gray-700 rounded-xl shadow-lg p-6 h-full hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Verkoopmedewerker</h3>
                            <p class="text-purple-600 dark:text-purple-400">Action</p>
                        </div>
                        <span class="ml-auto px-3 py-1 bg-purple-100 dark:bg-purple-900 text-purple-700 dark:text-purple-300 rounded-full text-sm">
                            2020 - 2023
                        </span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-50 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full text-sm">Klantenservice</span>
                            <span class="px-3 py-1 bg-purple-50 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full text-sm">Voorraadbeheer</span>
                            <span class="px-3 py-1 bg-purple-50 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 rounded-full text-sm">Winkelnetheid</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Overview Section -->
<section class="py-20 px-4 bg-gradient-to-b from-blue-50 to-indigo-50 dark:from-gray-900 dark:to-gray-800 relative">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400 relative inline-block" data-aos="fade-up">
                Vaardigheden
                <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-transparent rounded-full"></div>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Een overzicht van mijn technische vaardigheden en expertise
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Frontend Skills -->
            <div class="group bg-white/50 dark:bg-gray-700/50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 backdrop-blur-sm border border-blue-100/20 dark:border-blue-700/20 hover:scale-105 hover:border-blue-300/30 dark:hover:border-blue-500/30" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-bold mb-6 text-gray-900 dark:text-white flex items-center gap-3">
                    <span class="p-2 bg-blue-100 dark:bg-blue-900/50 rounded-lg">
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>
                    </span>
                    Frontend
                </h3>
                <div class="space-y-4">
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">HTML/CSS</span>
                            <span class="text-sm font-bold text-blue-600 dark:text-blue-400">90%</span>
                        </div>
                        <div class="h-2 bg-blue-100 dark:bg-blue-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 dark:from-blue-400 dark:to-blue-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">JavaScript</span>
                            <span class="text-sm font-bold text-blue-600 dark:text-blue-400">85%</span>
                        </div>
                        <div class="h-2 bg-blue-100 dark:bg-blue-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 dark:from-blue-400 dark:to-blue-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Tailwind CSS</span>
                            <span class="text-sm font-bold text-blue-600 dark:text-blue-400">85%</span>
                        </div>
                        <div class="h-2 bg-blue-100 dark:bg-blue-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-blue-500 to-blue-600 dark:from-blue-400 dark:to-blue-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Backend Skills -->
            <div class="group bg-white/50 dark:bg-gray-700/50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 backdrop-blur-sm border border-blue-100/20 dark:border-blue-700/20 hover:scale-105 hover:border-blue-300/30 dark:hover:border-blue-500/30" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-bold mb-6 text-gray-900 dark:text-white flex items-center gap-3">
                    <span class="p-2 bg-indigo-100 dark:bg-indigo-900/50 rounded-lg">
                        <svg class="w-6 h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                        </svg>
                    </span>
                    Backend
                </h3>
                <div class="space-y-4">
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">PHP</span>
                            <span class="text-sm font-bold text-indigo-600 dark:text-indigo-400">85%</span>
                        </div>
                        <div class="h-2 bg-indigo-100 dark:bg-indigo-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-indigo-500 to-indigo-600 dark:from-indigo-400 dark:to-indigo-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Laravel</span>
                            <span class="text-sm font-bold text-indigo-600 dark:text-indigo-400">80%</span>
                        </div>
                        <div class="h-2 bg-indigo-100 dark:bg-indigo-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-indigo-500 to-indigo-600 dark:from-indigo-400 dark:to-indigo-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">MySQL</span>
                            <span class="text-sm font-bold text-indigo-600 dark:text-indigo-400">75%</span>
                        </div>
                        <div class="h-2 bg-indigo-100 dark:bg-indigo-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-indigo-500 to-indigo-600 dark:from-indigo-400 dark:to-indigo-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CMS & Tools -->
            <div class="group bg-white/50 dark:bg-gray-700/50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 backdrop-blur-sm border border-blue-100/20 dark:border-blue-700/20 hover:scale-105 hover:border-blue-300/30 dark:hover:border-blue-500/30" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-bold mb-6 text-gray-900 dark:text-white flex items-center gap-3">
                    <span class="p-2 bg-purple-100 dark:bg-purple-900/50 rounded-lg">
                        <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                    </span>
                    CMS & Tools
                </h3>
                <div class="space-y-4">
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">WordPress</span>
                            <span class="text-sm font-bold text-purple-600 dark:text-purple-400">90%</span>
                        </div>
                        <div class="h-2 bg-purple-100 dark:bg-purple-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-purple-500 to-purple-600 dark:from-purple-400 dark:to-purple-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Git</span>
                            <span class="text-sm font-bold text-purple-600 dark:text-purple-400">85%</span>
                        </div>
                        <div class="h-2 bg-purple-100 dark:bg-purple-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-purple-500 to-purple-600 dark:from-purple-400 dark:to-purple-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">Docker</span>
                            <span class="text-sm font-bold text-purple-600 dark:text-purple-400">70%</span>
                        </div>
                        <div class="h-2 bg-purple-100 dark:bg-purple-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-purple-500 to-purple-600 dark:from-purple-400 dark:to-purple-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Skills -->
            <div class="group bg-white/50 dark:bg-gray-700/50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 backdrop-blur-sm border border-blue-100/20 dark:border-blue-700/20 hover:scale-105 hover:border-blue-300/30 dark:hover:border-blue-500/30" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-xl font-bold mb-6 text-gray-900 dark:text-white flex items-center gap-3">
                    <span class="p-2 bg-pink-100 dark:bg-pink-900/50 rounded-lg">
                        <svg class="w-6 h-6 text-pink-600 dark:text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </span>
                    Extra Skills
                </h3>
                <div class="space-y-4">
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">TypeScript</span>
                            <span class="text-sm font-bold text-pink-600 dark:text-pink-400">75%</span>
                        </div>
                        <div class="h-2 bg-pink-100 dark:bg-pink-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-pink-500 to-pink-600 dark:from-pink-400 dark:to-pink-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">C#</span>
                            <span class="text-sm font-bold text-pink-600 dark:text-pink-400">70%</span>
                        </div>
                        <div class="h-2 bg-pink-100 dark:bg-pink-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-pink-500 to-pink-600 dark:from-pink-400 dark:to-pink-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200">ASP.NET</span>
                            <span class="text-sm font-bold text-pink-600 dark:text-pink-400">65%</span>
                        </div>
                        <div class="h-2 bg-pink-100 dark:bg-pink-900/50 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-pink-500 to-pink-600 dark:from-pink-400 dark:to-pink-500 rounded-full transition-all duration-500 group-hover:scale-x-105" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="py-20 px-4 bg-gradient-to-b from-indigo-50 via-indigo-50 to-blue-50 dark:from-gray-800 dark:via-gray-800 dark:to-gray-900 relative overflow-hidden">
    <!-- Verbeterde achtergrond effecten -->
    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>

    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400 relative inline-block" data-aos="fade-up">
                Mijn Reis
                <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-transparent rounded-full"></div>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Een tijdlijn van mijn professionele ontwikkeling
            </p>
        </div>

        <div class="relative">
            <!-- Verbeterde verticale lijn -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-blue-200 via-blue-400 to-blue-200 dark:from-blue-700 dark:via-blue-500 dark:to-blue-700 rounded-full"></div>

            <!-- Timeline Items -->
            <div class="space-y-16">
                <div class="relative group" data-aos="fade-right">
                    <div class="flex items-center">
                        <div class="flex-1 text-right pr-8">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-blue-500 transition-colors">Stage bij Developing B.V.</h3>
                            <p class="text-blue-600 dark:text-blue-400 font-medium">sep. 2024 - heden</p>
                            <p class="text-gray-600 dark:text-gray-300 mt-2 group-hover:text-gray-900 dark:group-hover:text-gray-100 transition-colors">
                                Stage waar ik werk aan verschillende projecten met nieuwe technieken.
                            </p>
                        </div>
                        <div class="w-5 h-5 bg-blue-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-blue-500/50 group-hover:scale-125 transition-transform"></div>
                        <div class="flex-1"></div>
                    </div>
                </div>

                <div class="relative group" data-aos="fade-left">
                    <div class="flex items-center">
                        <div class="flex-1"></div>
                        <div class="w-5 h-5 bg-blue-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-blue-500/50 group-hover:scale-125 transition-transform"></div>
                        <div class="flex-1 pl-8">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-blue-500 transition-colors">Service Employee bij Pathé</h3>
                            <p class="text-blue-600 dark:text-blue-400 font-medium">mei 2023 - heden</p>
                            <p class="text-gray-600 dark:text-gray-300 mt-2 group-hover:text-gray-900 dark:group-hover:text-gray-100 transition-colors">
                                Klantenservice, ticketverkoop en evenementen assistentie
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative group" data-aos="fade-right">
                    <div class="flex items-center">
                        <div class="flex-1 text-right pr-8">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-blue-500 transition-colors">Stage bij I@control</h3>
                            <p class="text-blue-600 dark:text-blue-400 font-medium">feb. 2023 - apr. 2023</p>
                            <p class="text-gray-600 dark:text-gray-300 mt-2 group-hover:text-gray-900 dark:group-hover:text-gray-100 transition-colors">
                                Ontwikkeling met TypeScript, C#, ASP.NET en AngularJS
                            </p>
                        </div>
                        <div class="w-5 h-5 bg-blue-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-blue-500/50 group-hover:scale-125 transition-transform"></div>
                        <div class="flex-1"></div>
                    </div>
                </div>

                <div class="relative group" data-aos="fade-left">
                    <div class="flex items-center">
                        <div class="flex-1"></div>
                        <div class="w-5 h-5 bg-blue-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-blue-500/50 group-hover:scale-125 transition-transform"></div>
                        <div class="flex-1 pl-8">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-blue-500 transition-colors">Verkoopmedewerker bij Action</h3>
                            <p class="text-blue-600 dark:text-blue-400 font-medium">okt. 2020 - mei 2023</p>
                            <p class="text-gray-600 dark:text-gray-300 mt-2 group-hover:text-gray-900 dark:group-hover:text-gray-100 transition-colors">
                                Klantenservice, voorraadbeheer en winkelnetheid
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative group" data-aos="fade-right">
                    <div class="flex items-center">
                        <div class="flex-1 text-right pr-8">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-500 transition-colors">Software Development Opleiding</h3>
                            <p class="text-indigo-600 dark:text-indigo-400 font-medium">Rijn IJssel</p>
                            <p class="text-indigo-600 dark:text-indigo-400">2021 - 2024</p>
                            <p class="text-gray-600 dark:text-gray-300 mt-2 group-hover:text-gray-900 dark:group-hover:text-gray-100 transition-colors">
                                MBO 4 - Software Developer
                            </p>
                        </div>
                        <div class="w-5 h-5 bg-indigo-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-indigo-500/50 group-hover:scale-125 transition-transform"></div>
                        <div class="flex-1"></div>
                    </div>
                </div>

                <div class="relative group" data-aos="fade-left">
                    <div class="flex items-center">
                        <div class="flex-1"></div>
                        <div class="w-5 h-5 bg-indigo-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-indigo-500/50 group-hover:scale-125 transition-transform"></div>
                        <div class="flex-1 pl-8">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-500 transition-colors">MAVO</h3>
                            <p class="text-indigo-600 dark:text-indigo-400 font-medium">Pallas Athene College</p>
                            <p class="text-indigo-600 dark:text-indigo-400">2017 - 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials/Aanbevelingen Sectie -->
<section class="py-24 px-4 bg-gradient-to-b from-blue-50 via-blue-50 to-indigo-50 dark:from-gray-900 dark:via-gray-900 dark:to-gray-800 relative overflow-hidden">
    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-20">
            <h2 class="text-4xl font-bold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400 relative inline-block" data-aos="fade-up">
                Wat collega's Zeggen
                <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-transparent rounded-full"></div>
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Ervaringen van collega's tijdens mijn stages.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Testimonial 1 -->
            <div class="group bg-white/80 dark:bg-gray-700/80 backdrop-blur-lg rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 p-8 relative transform hover:-translate-y-2 h-full flex flex-col justify-between" data-aos="fade-up">
                <div class="absolute -top-4 right-8">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl rotate-12 group-hover:rotate-0 transition-transform duration-300 flex items-center justify-center shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-300 mb-8 text-lg leading-relaxed h-40">
                    "Naoufal heeft tijdens zijn stage laten zien dat hij een gedreven developer is met een scherp oog voor detail. Hij pakt nieuwe technieken snel op en weet deze effectief toe te passen in zijn projecten."
                </p>
                <div class="flex items-center gap-4 mt-auto">
                    <div class="flex-shrink-0">
                        <div class="h-12 w-12 rounded-xl bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-900 dark:to-blue-800 flex items-center justify-center shadow-inner">
                            <span class="text-blue-600 dark:text-blue-400 font-bold text-lg">SB</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-base font-semibold text-gray-900 dark:text-white">Sven van der Berg</p>
                        <p class="text-sm text-blue-600 dark:text-blue-400">Stage Begeleider, Developing B.V.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="group bg-white/80 dark:bg-gray-700/80 backdrop-blur-lg rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 p-8 relative transform hover:-translate-y-2 h-full flex flex-col justify-between" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute -top-4 right-8">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl rotate-12 group-hover:rotate-0 transition-transform duration-300 flex items-center justify-center shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-300 mb-8 text-lg leading-relaxed h-40">
                    "Als senior developer ben ik onder de indruk van Naoufal's technische inzicht en probleemoplossend vermogen. Hij werkt zelfstandig en komt vaak met creatieve oplossingen voor complexe uitdagingen."
                </p>
                <div class="flex items-center gap-4 mt-auto">
                    <div class="flex-shrink-0">
                        <div class="h-12 w-12 rounded-xl bg-gradient-to-br from-green-100 to-green-200 dark:from-green-900 dark:to-green-800 flex items-center justify-center shadow-inner">
                            <span class="text-green-600 dark:text-green-400 font-bold text-lg">KH</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-base font-semibold text-gray-900 dark:text-white">Kristian Huisman</p>
                        <p class="text-sm text-green-600 dark:text-green-400">Senior Developer, Developing B.V.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="group bg-white/80 dark:bg-gray-700/80 backdrop-blur-lg rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 p-8 relative transform hover:-translate-y-2 h-full flex flex-col justify-between" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute -top-4 right-8">
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl rotate-12 group-hover:rotate-0 transition-transform duration-300 flex items-center justify-center shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                        </svg>
                    </div>
                </div>
                <p class="text-gray-600 dark:text-gray-300 mb-8 text-lg leading-relaxed h-40">
                    "Als frontend specialist waardeer ik Naoufal's toewijding aan gebruiksvriendelijke interfaces. Zijn werk met moderne frontend frameworks en aandacht voor responsive design is indrukwekkend."
                </p>
                <div class="flex items-center gap-4 mt-auto">
                    <div class="flex-shrink-0">
                        <div class="h-12 w-12 rounded-xl bg-gradient-to-br from-purple-100 to-purple-200 dark:from-purple-900 dark:to-purple-800 flex items-center justify-center shadow-inner">
                            <span class="text-purple-600 dark:text-purple-400 font-bold text-lg">MT</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-base font-semibold text-gray-900 dark:text-white">Mark Timmers</p>
                        <p class="text-sm text-purple-600 dark:text-purple-400">Frontend Specialist, Developing B.V.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Call to Action Section -->
<section class="py-20 px-4 bg-gradient-to-br from-blue-600 to-blue-800 text-white dark:from-blue-800 dark:to-blue-600">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6" data-aos="fade-up">Klaar om samen te werken?</h2>
        <p class="text-lg opacity-90 mb-8" data-aos="fade-up" data-aos-delay="100">
            Ik sta altijd open voor nieuwe uitdagingen en samenwerkingen
        </p>
        <a href="contact.php" 
           class="group inline-flex items-center px-8 py-3 bg-white text-blue-600 rounded-full hover:bg-blue-50 transform hover:-translate-y-1 hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl hover:shadow-blue-500/25 gap-2"
           data-aos="fade-up" data-aos-delay="200">
            <span>Neem contact op</span>
            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H6"/>
            </svg>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 