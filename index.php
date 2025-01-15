<?php
$pageTitle = "Home";
$currentPage = "home";
include 'includes/header.php';
import { SpeedInsights } from "@vercel/speed-insights/next"
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

<!-- Waarom Mij Kiezen sectie -->
<section class="py-20 px-4 bg-gradient-to-b from-blue-50/80 via-indigo-50/90 to-purple-50/90 dark:from-gray-800 dark:via-gray-800 dark:to-gray-900 relative overflow-hidden">
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

        <!-- Professionele Waardepropositie Sectie -->
        <div class="mt-16" data-aos="fade-up">
            <!-- Geavanceerde gradient header -->
            <div class="relative overflow-hidden rounded-t-3xl bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 p-8">
                <div class="absolute inset-0">
                    <div class="absolute inset-0 bg-grid-white/[0.1] bg-[size:20px_20px]"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-600/50"></div>
                </div>
                <div class="relative">
                    <h3 class="text-3xl font-bold text-white text-center mb-4">
                        Mijn Toegevoegde Waarde
                    </h3>
                    <p class="text-blue-100 text-center max-w-2xl mx-auto">
                        Als developer breng ik een unieke combinatie van technische expertise en innovatief denken naar elk project
                    </p>
                </div>
            </div>

            <!-- Hoofdcontent met moderne styling -->
            <div class="bg-white dark:bg-gray-800 rounded-b-3xl shadow-2xl transform hover:shadow-3xl transition-all duration-500">
                <div class="p-8 lg:p-12">
                    <!-- Expertise Grid -->
                    <div class="grid md:grid-cols-2 gap-8 mb-12">
                        <!-- Technische Expertise -->
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white">Technische Expertise</h4>
                            </div>
                            <div class="pl-16 space-y-3">
                                <p class="text-gray-700 dark:text-gray-300">Specialist in moderne web development met focus op:</p>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                                        <span>Full-stack development (PHP, JavaScript)</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                                        <span>Responsive design & UX optimalisatie</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                                        <span>Performance & security best practices</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Innovatieve Aanpak -->
                        <div class="space-y-6">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 to-indigo-700 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white">Innovatieve Aanpak</h4>
                            </div>
                            <div class="pl-16 space-y-3">
                                <p class="text-gray-700 dark:text-gray-300">Onderscheidend door:</p>
                                <ul class="space-y-2">
                                    <li class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                                        <span class="w-2 h-2 bg-indigo-500 rounded-full"></span>
                                        <span>Proactief meedenken in oplossingen</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                                        <span class="w-2 h-2 bg-indigo-500 rounded-full"></span>
                                        <span>Snelle adaptatie nieuwe technologieën</span>
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 dark:text-gray-300">
                                        <span class="w-2 h-2 bg-indigo-500 rounded-full"></span>
                                        <span>Focus op schaalbaarheid & onderhoud</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Unique Selling Points -->
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-8">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-700 dark:to-gray-800 rounded-xl hover:shadow-lg transition-all duration-300">
                                <div class="text-blue-600 dark:text-blue-400 mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <h5 class="font-bold mb-2 text-gray-900 dark:text-white">Snel & Efficiënt</h5>
                                <p class="text-sm text-gray-700 dark:text-gray-300">Snelle implementatie van nieuwe features met oog voor kwaliteit</p>
                            </div>
                            <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-700 dark:to-gray-800 rounded-xl hover:shadow-lg transition-all duration-300">
                                <div class="text-blue-600 dark:text-blue-400 mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                                    </svg>
                                </div>
                                <h5 class="font-bold mb-2 text-gray-900 dark:text-white">Maatwerk</h5>
                                <p class="text-sm text-gray-700 dark:text-gray-300">Oplossingen perfect afgestemd op uw specifieke behoeften</p>
                            </div>
                            <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-700 dark:to-gray-800 rounded-xl hover:shadow-lg transition-all duration-300">
                                <div class="text-blue-600 dark:text-blue-400 mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                    </svg>
                                </div>
                                <h5 class="font-bold mb-2 text-gray-900 dark:text-white">Communicatie</h5>
                                <p class="text-sm text-gray-700 dark:text-gray-300">Heldere communicatie en regelmatige updates</p>
                            </div>
                            <div class="p-6 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-700 dark:to-gray-800 rounded-xl hover:shadow-lg transition-all duration-300">
                                <div class="text-blue-600 dark:text-blue-400 mb-4">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                </div>
                                <h5 class="font-bold mb-2 text-gray-900 dark:text-white">Kwaliteit</h5>
                                <p class="text-sm text-gray-700 dark:text-gray-300">Hoogwaardige code volgens moderne standaarden</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Werkervaring Section -->
<section class="py-20 px-4 bg-gradient-to-b from-purple-50/90 via-indigo-50/80 to-blue-50/80 dark:from-gray-900 dark:via-gray-800 dark:to-gray-800 relative overflow-hidden">
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
<section class="py-20 px-4 bg-gradient-to-b from-blue-50/80 via-indigo-50/90 to-purple-50/90 dark:from-gray-800 dark:via-gray-800 dark:to-gray-900 relative overflow-hidden">
    <!-- Animated background patterns -->
    <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-indigo-500/10 animate-pulse"></div>
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500/30 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
    </div>

    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400 relative inline-block" data-aos="fade-up">
                Technische Expertise
                <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-transparent rounded-full"></div>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Ontdek mijn technische vaardigheden door een interactieve visualisatie
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Development Stack -->
            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 group" data-aos="fade-right">
                <div class="grid grid-cols-2 gap-6">
                    <!-- Frontend -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-blue-600 dark:text-blue-400">Frontend</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-blue-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">JavaScript</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">Tailwind CSS</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-blue-400">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">React</span>
                            </div>
                        </div>
                    </div>

                    <!-- Backend -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400">Backend</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-indigo-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">PHP</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-red-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">Laravel</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-blue-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">MySQL</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tools -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-purple-600 dark:text-purple-400">Tools</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-purple-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">Git</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-blue-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">Docker</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-green-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">WordPress</span>
                            </div>
                        </div>
                    </div>

                    <!-- Extra Skills -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-pink-600 dark:text-pink-400">Extra</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-blue-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">TypeScript</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-purple-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">C#</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-indigo-500">⚡</span>
                                <span class="text-gray-700 dark:text-gray-300">ASP.NET</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Code Editor Preview -->
            <div class="bg-gray-900 rounded-2xl p-6 shadow-xl group" data-aos="fade-left">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <span class="text-gray-400 text-sm">portfolio.php</span>
                </div>
                <div class="font-mono text-sm text-gray-300">
                    <div class="typing-animation">
                        <span class="text-pink-400">&lt;?php</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 0.5s">
                        <span class="text-gray-400">namespace</span> 
                        <span class="text-blue-400">App\Developer;</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 1s">
                        <span class="text-pink-400">class</span> 
                        <span class="text-green-400">FullStackDeveloper</span> 
                        <span class="text-gray-400">{</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 1.5s">
                        <span class="pl-4 text-blue-400">public string</span> 
                        <span class="text-gray-400">$name =</span> 
                        <span class="text-yellow-300">'Naoufal Andichi'</span>;
                    </div>
                    <div class="typing-animation" style="animation-delay: 2s">
                        <span class="pl-4 text-blue-400">public array</span> 
                        <span class="text-gray-400">$primarySkills =</span> 
                        <span class="text-gray-400">[</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 2.5s">
                        <span class="pl-8 text-yellow-300">'PHP'</span>,
                        <span class="text-yellow-300">'Laravel'</span>,
                        <span class="text-yellow-300">'JavaScript'</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 3s">
                        <span class="pl-4 text-gray-400">];</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 3.5s">
                        <span class="pl-4 text-blue-400">public function</span> 
                        <span class="text-yellow-400">getPassion</span>
                        <span class="text-gray-400">(): string {</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 4s">
                        <span class="pl-8 text-pink-400">return</span>
                        <span class="text-yellow-300">'Building Amazing Web Applications'</span>;
                    </div>
                    <div class="typing-animation" style="animation-delay: 4.5s">
                        <span class="pl-4 text-gray-400">}</span>
                    </div>
                    <div class="typing-animation" style="animation-delay: 5s">
                        <span class="text-gray-400">}</span>
                    </div>
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
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        @keyframes typing {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .typing-animation {
            opacity: 0;
            animation: typing 0.5s ease-out forwards;
        }
    </style>
</section>

<!-- Timeline Section -->
<section class="py-20 px-4 bg-gradient-to-b from-blue-50/90 via-blue-100/50 to-indigo-100/50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-800 relative overflow-hidden">
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

<!-- Divider -->
<div class="relative h-24 bg-gradient-to-b from-indigo-100/50 via-purple-50/70 to-purple-100/50 dark:from-gray-800 dark:via-gray-850 dark:to-gray-900 overflow-hidden"></div>

<!-- Testimonials/Aanbevelingen Sectie -->
<section class="py-24 px-4 bg-gradient-to-b from-purple-100/50 via-purple-50/90 to-purple-100/50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-400/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-indigo-400/20 rounded-full blur-3xl animate-pulse animation-delay-2000"></div>
        <div class="absolute top-1/2 right-1/3 w-72 h-72 bg-purple-400/20 rounded-full blur-3xl animate-pulse animation-delay-4000"></div>
    </div>

    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-20">
            <h2 class="text-5xl font-bold mb-8 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 dark:from-blue-400 dark:via-indigo-400 dark:to-purple-400 bg-clip-text text-transparent" data-aos="fade-up">
                Stage Ervaringen
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                Ontdek wat mijn stagebegeleider en collega's bij Developing B.V. te zeggen hebben over mijn werk, vaardigheden en bijdragen aan het team.
            </p>
        </div>

        <!-- Testimonial Cards Container -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 h-full">
            <!-- Testimonial 1 -->
            <div class="group h-full" data-aos="fade-up">
                <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-xl rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 relative h-full flex flex-col">
                    <div class="absolute -top-6 left-8">
                        <div class="w-16 h-16 rounded-2xl shadow-lg border-4 border-white dark:border-gray-700 bg-gradient-to-br from-blue-100 to-blue-200 dark:from-blue-900 dark:to-blue-800 flex items-center justify-center">
                            <span class="text-blue-600 dark:text-blue-400 font-bold text-lg">SB</span>
                        </div>
                    </div>
                    <div class="pt-8 flex-1 flex flex-col">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Sven van der Berg</h3>
                                <p class="text-blue-600 dark:text-blue-400">Stage Begeleider, Developing B.V.</p>
                            </div>
                            <div class="text-blue-500">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6 flex-1">
                            "Naoufal heeft tijdens zijn stage laten zien dat hij een gedreven developer is met een scherp oog voor detail. Hij pakt nieuwe technieken snel op en weet deze effectief toe te passen in zijn projecten."
                        </p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded-full text-sm">Innovatie</span>
                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded-full text-sm">Detail</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="group h-full" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-xl rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 relative h-full flex flex-col">
                    <div class="absolute -top-6 left-8">
                        <div class="w-16 h-16 rounded-2xl shadow-lg border-4 border-white dark:border-gray-700 bg-gradient-to-br from-green-100 to-green-200 dark:from-green-900 dark:to-green-800 flex items-center justify-center">
                            <span class="text-green-600 dark:text-green-400 font-bold text-lg">KH</span>
                        </div>
                    </div>
                    <div class="pt-8 flex-1 flex flex-col">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Kristian Huisman</h3>
                                <p class="text-green-600 dark:text-green-400">Senior Developer, Developing B.V.</p>
                            </div>
                            <div class="text-green-500">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6 flex-1">
                            "Als senior developer ben ik onder de indruk van Naoufal's technische inzicht en probleemoplossend vermogen. Hij werkt zelfstandig en komt vaak met creatieve oplossingen voor complexe uitdagingen."
                        </p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-green-100 dark:bg-green-900/50 text-green-600 dark:text-green-400 rounded-full text-sm">Technisch</span>
                            <span class="px-3 py-1 bg-green-100 dark:bg-green-900/50 text-green-600 dark:text-green-400 rounded-full text-sm">Creatief</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="group h-full" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-xl rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 relative h-full flex flex-col">
                    <div class="absolute -top-6 left-8">
                        <div class="w-16 h-16 rounded-2xl shadow-lg border-4 border-white dark:border-gray-700 bg-gradient-to-br from-purple-100 to-purple-200 dark:from-purple-900 dark:to-purple-800 flex items-center justify-center">
                            <span class="text-purple-600 dark:text-purple-400 font-bold text-lg">MT</span>
                        </div>
                    </div>
                    <div class="pt-8 flex-1 flex flex-col">
                        <div class="flex justify-between items-center mb-6">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Mark Timmers</h3>
                                <p class="text-purple-600 dark:text-purple-400">Frontend Specialist, Developing B.V.</p>
                            </div>
                            <div class="text-purple-500">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6 flex-1">
                            "Als frontend specialist waardeer ik Naoufal's toewijding aan gebruiksvriendelijke interfaces. Zijn werk met moderne frontend frameworks en aandacht voor responsive design is indrukwekkend."
                        </p>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/50 text-purple-600 dark:text-purple-400 rounded-full text-sm">Frontend</span>
                            <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/50 text-purple-600 dark:text-purple-400 rounded-full text-sm">UX/UI</span>
                        </div>
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