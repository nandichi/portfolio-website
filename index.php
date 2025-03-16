<?php
$pageTitle = "Home";
$currentPage = "home";
$pageDescription = "Welkom op de portfolio website van Naoufal Andichi. Ontdek mijn projecten, vaardigheden en ervaring als ontwikkelaar.";
$pageKeywords = "Naoufal Andichi, portfolio, ontwikkelaar, webdevelopment, programmeren, frontend, backend, fullstack";
include 'includes/header.php';
?>

<!-- Moderne en unieke hero-sectie met 3D-elementen en dynamische effecten -->
<header class="min-h-screen relative flex items-center justify-center overflow-hidden pt-16 sm:pt-0">
    <!-- Basis achtergrond met moderne gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-100 via-blue-50 to-purple-100 dark:from-gray-900 dark:via-indigo-950 dark:to-blue-900"></div>
    
    <!-- Geometrische patronen voor diepte en textuur -->
    <div class="absolute inset-0 opacity-[0.05] dark:opacity-10"
         style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M54.627 0l.83.828-1.415 1.415L51.8 0h2.827zM5.373 0l-.83.828L5.96 2.243 8.2 0H5.374zM48.97 0l3.657 3.657-1.414 1.414L46.143 0h2.828zM11.03 0L7.372 3.657 8.787 5.07 13.857 0H11.03zm32.284 0L49.8 6.485 48.384 7.9l-7.9-7.9h2.83zM16.686 0L10.2 6.485 11.616 7.9l7.9-7.9h-2.83zm20.97 0l9.315 9.314-1.414 1.414L34.828 0h2.83zM22.344 0L13.03 9.314l1.414 1.414L25.172 0h-2.83zM32 0l12.142 12.142-1.414 1.414L30 .828 17.272 13.556l-1.414-1.414L28 0h4zM.284 0l28 28-1.414 1.414L0 2.544v2.83L25.456 30l-1.414 1.414-28-28L0 0h.284zM0 5.373l25.456 25.455-1.414 1.415L0 8.2v2.83l21.627 21.628-1.414 1.414L0 13.657v2.828l17.8 17.8-1.414 1.414L0 19.1v2.83l14.142 14.14-1.414 1.415L0 24.544v2.83l10.314 10.313-1.414 1.414L0 30v2.828l6.485 6.485-1.414 1.415L0 35.373v2.83l2.657 2.656-1.414 1.415L0 40.717v2.83l-1.415-1.415L0 40.717v-2.83l-1.415-1.414L0 35.373v-2.83l-1.414-1.414L0 30v-2.83l-1.414-1.413L0 24.544v-2.83l-1.414-1.414L0 19.1v-2.83l-1.414-1.413L0 13.658v-2.83L-1.413 9.415 0 8.2V5.374l-1.413-1.415L0 2.544V0h2.827L0 5.373z\' fill=\'%234A5568\' fill-opacity=\'0.4\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');">
    </div>

    <!-- Dynamische 3D-lagen met diepte-effect -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Bovenste laag met subtiele beweging -->
        <div class="absolute -top-1/3 right-0 w-[900px] h-[900px] rounded-full bg-gradient-to-br from-blue-400/20 via-indigo-400/10 to-purple-400/20 dark:from-blue-500/10 dark:via-indigo-600/5 dark:to-purple-500/10 blur-3xl animate-[float_15s_ease-in-out_infinite]"></div>
        
        <!-- Onderste laag met tegengestelde beweging -->
        <div class="absolute -bottom-1/3 -left-1/4 w-[900px] h-[900px] rounded-full bg-gradient-to-tr from-indigo-400/20 via-blue-400/10 to-purple-400/20 dark:from-indigo-500/10 dark:via-blue-600/5 dark:to-purple-500/10 blur-3xl animate-[float_20s_ease-in-out_infinite_reverse]"></div>
        
        <!-- Centrale focus-punt met subtiele pulsatie -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] rounded-full bg-gradient-to-r from-blue-400/10 via-transparent to-purple-400/10 dark:from-blue-500/5 dark:via-transparent dark:to-purple-500/5 blur-3xl animate-[pulse_8s_ease-in-out_infinite]"></div>
    </div>

    <!-- Interactief raster met perspectief -->
    <div class="absolute inset-0 bg-[length:60px_60px] pointer-events-none opacity-[0.04] dark:opacity-10"
         style="background-image: 
            linear-gradient(to right, rgba(79, 70, 229, 0.2) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(79, 70, 229, 0.2) 1px, transparent 1px);
            transform: perspective(1000px) rotateX(5deg);
            transform-origin: center center;
            animation: perspectiveShift 20s ease-in-out infinite alternate;">
    </div>

    <!-- Zwevende elementen met verschillende dieptes -->
    <div class="absolute inset-0 pointer-events-none">
        <!-- Voorgrond elementen -->
        <div class="absolute w-2 h-2 bg-blue-500/60 dark:bg-blue-400/40 rounded-full blur-[2px]" style="top: 25%; left: 15%; animation: float3D 12s ease-in-out infinite; transform-style: preserve-3d;"></div>
        <div class="absolute w-3 h-3 bg-indigo-500/60 dark:bg-indigo-400/40 rounded-full blur-[2px]" style="top: 65%; left: 80%; animation: float3D 15s ease-in-out infinite 2s; transform-style: preserve-3d;"></div>
        <div class="absolute w-4 h-4 bg-purple-500/60 dark:bg-purple-400/40 rounded-full blur-[2px]" style="top: 45%; left: 75%; animation: float3D 18s ease-in-out infinite 1s; transform-style: preserve-3d;"></div>
        
        <!-- Middengrond elementen -->
        <div class="absolute w-2 h-2 bg-blue-400/40 dark:bg-blue-500/30 rounded-full blur-[3px]" style="top: 70%; left: 25%; animation: float3D 14s ease-in-out infinite 3s; transform-style: preserve-3d;"></div>
        <div class="absolute w-3 h-3 bg-indigo-400/40 dark:bg-indigo-500/30 rounded-full blur-[3px]" style="top: 30%; left: 60%; animation: float3D 16s ease-in-out infinite 2.5s; transform-style: preserve-3d;"></div>
        
        <!-- Achtergrond elementen -->
        <div class="absolute w-2 h-2 bg-blue-300/30 dark:bg-blue-600/20 rounded-full blur-[4px]" style="top: 40%; left: 30%; animation: float3D 20s ease-in-out infinite 1.5s; transform-style: preserve-3d;"></div>
        <div class="absolute w-4 h-4 bg-indigo-300/30 dark:bg-indigo-600/20 rounded-full blur-[4px]" style="top: 60%; left: 10%; animation: float3D 22s ease-in-out infinite 3.5s; transform-style: preserve-3d;"></div>
        <div class="absolute w-3 h-3 bg-purple-300/30 dark:bg-purple-600/20 rounded-full blur-[4px]" style="top: 20%; left: 85%; animation: float3D 19s ease-in-out infinite 4s; transform-style: preserve-3d;"></div>
    </div>

    <!-- Subtiele lichteffecten -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-white/20 dark:to-black/20 pointer-events-none"></div>

    <!-- Content container met glasmorfisme effect -->
    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-12">
        <!-- Linker kolom met profiel foto -->
        <div class="w-full md:w-2/5 flex justify-center md:justify-end animate-[fadeInLeft_1s_ease-out]">
            <div class="relative group">
                <!-- Foto container met geavanceerde effecten -->
                <div class="relative w-64 h-64 sm:w-72 sm:h-72 rounded-full overflow-hidden border-4 border-white/90 dark:border-gray-800/90 shadow-2xl transition-all duration-500 group-hover:scale-[1.03] group-hover:shadow-indigo-500/30 dark:group-hover:shadow-indigo-400/20">
                    <!-- Subtiele gloed achter de foto -->
                    <div class="absolute -inset-1 bg-gradient-to-br from-blue-400 to-purple-500 dark:from-blue-600 dark:to-purple-700 opacity-70 dark:opacity-50 blur-xl rounded-full group-hover:opacity-80 transition-opacity duration-500"></div>
                    
                    <!-- Foto met overlay effect -->
                    <div class="relative w-full h-full rounded-full overflow-hidden">
                        <img src="assets/images/profile.jpg" alt="Naoufal Andichi" class="w-full h-full object-cover">
                        
                        <!-- Subtiele overlay met kleureffect -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/10 to-purple-500/10 dark:from-blue-500/20 dark:to-purple-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Interactieve rand met animatie -->
                        <div class="absolute -inset-1 border-4 border-white/0 dark:border-gray-800/0 rounded-full group-hover:border-white/20 dark:group-hover:border-gray-800/20 transition-all duration-500"></div>
                    </div>
                </div>
                
                <!-- Decoratieve elementen rond de foto -->
                <div class="absolute -top-4 -right-4 w-12 h-12 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 dark:from-blue-500 dark:to-indigo-600 opacity-80 blur-md animate-[float_6s_ease-in-out_infinite]"></div>
                <div class="absolute -bottom-4 -left-4 w-10 h-10 rounded-full bg-gradient-to-tr from-indigo-400 to-purple-500 dark:from-indigo-500 dark:to-purple-600 opacity-80 blur-md animate-[float_8s_ease-in-out_infinite_1s]"></div>
            </div>
        </div>
        
        <!-- Rechter kolom met tekst content -->
        <div class="w-full md:w-3/5 text-center md:text-left space-y-6">
            <div class="space-y-2">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white tracking-tight animate-[fadeInUp_0.8s_ease-out]">
                    <span class="inline-block">Naoufal</span>
                    <span class="inline-block ml-2 sm:ml-3 relative">
                        Andichi
                        <span class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-500 to-purple-500 dark:from-blue-400 dark:to-purple-400 rounded-full transform origin-left animate-[scaleX_1.5s_ease-out]"></span>
                    </span>
                </h1>
                
                <p class="text-2xl sm:text-3xl text-indigo-700 dark:text-indigo-300 font-light animate-[fadeInUp_0.8s_ease-out_0.2s] tracking-wide">
                    <span class="relative inline-block">
                        Full Stack Developer
                        <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-indigo-300 dark:bg-indigo-700 rounded-full transform origin-left animate-[scaleX_1.5s_ease-out_0.4s]"></span>
                    </span>
                </p>
            </div>
            
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-2xl leading-relaxed animate-[fadeInUp_0.8s_ease-out_0.4s]">
                Een enthousiaste student Software Developer bij het RijnIJssel in Arnhem, met passie voor moderne technologieën en innovatieve oplossingen
            </p>
            
            <!-- Call-to-action knoppen met geavanceerde hover effecten -->
            <div class="flex flex-wrap justify-center md:justify-start gap-4 pt-2 animate-[fadeInUp_0.8s_ease-out_0.6s]">
                <a href="contact" 
                   class="group relative px-8 py-3 bg-gradient-to-br from-blue-500 to-indigo-600 dark:from-blue-600 dark:to-indigo-700 text-white rounded-full font-medium overflow-hidden shadow-lg hover:shadow-indigo-500/30 dark:hover:shadow-indigo-500/20 transition-all duration-300">
                    <!-- Achtergrond animatie -->
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-br from-indigo-500 to-purple-600 dark:from-indigo-600 dark:to-purple-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    
                    <!-- Tekst en icoon -->
                    <span class="relative flex items-center justify-center gap-2">
                        <span>Contact</span>
                        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </span>
                </a>
                
                <a href="projects" 
                   class="group relative px-8 py-3 bg-white/10 dark:bg-white/5 backdrop-blur-sm text-gray-800 dark:text-white rounded-full font-medium border border-indigo-100 dark:border-indigo-900/30 overflow-hidden shadow-md hover:shadow-indigo-500/20 dark:hover:shadow-indigo-500/10 transition-all duration-300">
                    <!-- Achtergrond animatie -->
                    <span class="absolute inset-0 w-full h-full bg-white/80 dark:bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    
                    <!-- Tekst en icoon -->
                    <span class="relative flex items-center justify-center gap-2">
                        <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400 transform group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                        <span class="text-gray-800 dark:text-gray-100">Projecten</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Animatie keyframes voor de 3D-effecten -->
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes float3D {
        0%, 100% { transform: translate3d(0, 0, 0); }
        25% { transform: translate3d(10px, -15px, 5px); }
        50% { transform: translate3d(0, -25px, 10px); }
        75% { transform: translate3d(-10px, -15px, 5px); }
    }
    
    @keyframes perspectiveShift {
        0%, 100% { transform: perspective(1000px) rotateX(5deg); }
        50% { transform: perspective(1000px) rotateX(10deg); }
    }
    
    @keyframes fadeInLeft {
        from { opacity: 0; transform: translateX(-30px); }
        to { opacity: 1; transform: translateX(0); }
    }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes scaleX {
        from { transform: scaleX(0); }
        to { transform: scaleX(1); }
    }
</style>

<!-- Expertise & Vaardigheden sectie -->
<section class="py-24 px-4 bg-gradient-to-b from-white via-blue-50/30 to-white dark:from-gray-900 dark:via-gray-800/50 dark:to-gray-900 relative overflow-hidden">
    <!-- Subtiele geometrische patronen -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 dark:opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%234F46E5\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="max-w-7xl mx-auto relative">
        <!-- Header sectie met moderne typografie -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center mb-4" data-aos="fade-down">
                <span class="h-px w-8 bg-blue-500 mr-3"></span>
                <span class="text-blue-600 dark:text-blue-400 font-medium tracking-wider uppercase text-sm">Expertise & Vaardigheden</span>
                <span class="h-px w-8 bg-blue-500 ml-3"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white" data-aos="fade-up">
                Professionele <span class="text-blue-600 dark:text-blue-400">Kwaliteiten</span>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Een gepassioneerde developer die technische expertise combineert met creatieve oplossingen
            </p>
        </div>

        <!-- Vaardigheden grid met minimalistische kaarten -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Technische Expertise -->
            <div class="group" data-aos="fade-up">
                <div class="relative overflow-hidden bg-white dark:bg-gray-800/80 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm">
                    <!-- Decorative accent -->
                    <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-blue-500 to-blue-700"></div>
                    
                    <!-- Main Content -->
                    <div class="p-8 pl-12">
                        <div class="flex items-center gap-5 mb-6">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/30 dark:to-blue-800/30 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-lg group-hover:scale-105 transition-all duration-500 border border-blue-100/50 dark:border-blue-700/30">
                                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            <h4 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">Technische Expertise</h4>
                        </div>
                        <div class="space-y-5">
                            <p class="text-gray-700 dark:text-gray-300 font-medium">Onderscheidend door:</p>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                    <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                        <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                    </div>
                                    <span>Modern Development Stack</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                    <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                        <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                    </div>
                                    <span>Clean Code Practices</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                    <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                        <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                    </div>
                                    <span>Performance Optimalisatie</span>
                                </li>
                            </ul>
                            
                            <!-- Skills Tags -->
                            <div class="mt-6 pt-5 border-t border-gray-100 dark:border-gray-700/50">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium border border-blue-100 dark:border-blue-700/50 shadow-sm">
                                        Modern
                                    </span>
                                    <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium border border-blue-100 dark:border-blue-700/50 shadow-sm">
                                        Clean Code
                                    </span>
                                    <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium border border-blue-100 dark:border-blue-700/50 shadow-sm">
                                        Performance
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Soft Skills -->
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden bg-white dark:bg-gray-800/80 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm">
                    <!-- Decorative accent -->
                    <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-indigo-500 to-indigo-700"></div>
                    
                    <!-- Main Content -->
                    <div class="p-8 pl-12">
                        <div class="flex items-center gap-5 mb-6">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 bg-gradient-to-br from-indigo-50 to-indigo-100 dark:from-indigo-900/30 dark:to-indigo-800/30 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-lg group-hover:scale-105 transition-all duration-500 border border-indigo-100/50 dark:border-indigo-700/30">
                                    <svg class="w-8 h-8 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <h4 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Soft Skills</h4>
                        </div>
                        <div class="space-y-5">
                            <p class="text-gray-700 dark:text-gray-300 font-medium">Onderscheidend door:</p>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                    <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center">
                                        <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                    </div>
                                    <span>Effectieve Communicatie</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                    <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center">
                                        <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                    </div>
                                    <span>Proactieve Houding</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                    <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center">
                                        <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                    </div>
                                    <span>Teamwork & Samenwerking</span>
                                </li>
                            </ul>
                            
                            <!-- Skills Tags -->
                            <div class="mt-6 pt-5 border-t border-gray-100 dark:border-gray-700/50">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium border border-indigo-100 dark:border-indigo-700/50 shadow-sm">
                                        Communicatie
                                    </span>
                                    <span class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium border border-indigo-100 dark:border-indigo-700/50 shadow-sm">
                                        Proactief
                                    </span>
                                    <span class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium border border-indigo-100 dark:border-indigo-700/50 shadow-sm">
                                        Teamwork
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Innovatieve Aanpak -->
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden bg-white dark:bg-gray-800/80 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm">
                    <!-- Decorative accent -->
                    <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-indigo-500 to-indigo-700"></div>
                    
                    <!-- Main Content -->
                    <div class="p-8 pl-12">
                        <div class="flex items-center gap-5 mb-6">
                            <div class="flex-shrink-0">
                                <div class="w-16 h-16 bg-gradient-to-br from-indigo-50 to-indigo-100 dark:from-indigo-900/30 dark:to-indigo-800/30 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-lg group-hover:scale-105 transition-all duration-500 border border-indigo-100/50 dark:border-indigo-700/30">
                                    <svg class="w-8 h-8 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                    </svg>
                                </div>
                            </div>
                            <h4 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Innovatieve Aanpak</h4>
                        </div>
                        <div class="space-y-5">
                            <p class="text-gray-700 dark:text-gray-300 font-medium">Onderscheidend door:</p>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                    <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center">
                                        <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                    </div>
                                    <span>Proactief meedenken in oplossingen</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                    <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center">
                                        <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                    </div>
                                    <span>Snelle adaptatie nieuwe technologieën</span>
                                </li>
                                <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                    <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center">
                                        <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                    </div>
                                    <span>Focus op schaalbaarheid & onderhoud</span>
                                </li>
                            </ul>
                            
                            <!-- Skills Tags -->
                            <div class="mt-6 pt-5 border-t border-gray-100 dark:border-gray-700/50">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium border border-indigo-100 dark:border-indigo-700/50 shadow-sm">
                                        Probleemoplossend
                                    </span>
                                    <span class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium border border-indigo-100 dark:border-indigo-700/50 shadow-sm">
                                    Toekomstgericht
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Professionele Waardepropositie Sectie -->
        <div class="mt-16" data-aos="fade-up">
            <!-- Moderne header met 3D effect -->
            <div class="relative overflow-hidden rounded-t-[2.5rem] bg-[conic-gradient(at_top_right,_var(--tw-gradient-stops))] from-blue-700 via-blue-800 to-gray-900 p-10">
                <div class="absolute inset-0">
                    <!-- Animated mesh pattern -->
                    <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px; animation: float 15s ease-in-out infinite;"></div>
                    <!-- Glowing orbs -->
                    <div class="absolute top-0 left-1/4 w-64 h-64 bg-blue-400/20 rounded-full filter blur-3xl mix-blend-overlay"></div>
                    <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-indigo-400/20 rounded-full filter blur-3xl mix-blend-overlay"></div>
                </div>
                <div class="relative">
                    <h3 class="text-4xl font-black text-white text-center mb-6 [text-shadow:_2px_2px_10px_rgb(0_0_0_/_20%)]">
                        Mijn Toegevoegde Waarde
                    </h3>
                    <p class="text-blue-50 text-center max-w-2xl mx-auto text-lg leading-relaxed">
                        Als developer combineer ik technische excellentie met innovatief denkvermogen om uitzonderlijke digitale oplossingen te creëren
                    </p>
                </div>
            </div>

            <!-- Hoofdcontent met glassmorphism effect -->
            <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-xl rounded-b-[2.5rem] shadow-[0_20px_50px_rgba(8,_112,_184,_0.7)] transition-all duration-500 hover:shadow-[0_30px_60px_rgba(8,_112,_184,_0.4)]">
                <div class="p-10 lg:p-14">
                    <!-- Expertise Grid met verbeterde layout -->
                    <div class="grid md:grid-cols-2 gap-10 mb-14">
                        <!-- Technische Expertise -->
                        <div class="group" data-aos="fade-up">
                            <div class="relative overflow-hidden bg-white dark:bg-gray-800/80 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm">
                                <!-- Decorative accent -->
                                <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-blue-500 to-blue-700"></div>
                                
                                <!-- Main Content -->
                                <div class="p-8 pl-12">
                                    <div class="flex items-center gap-5 mb-6">
                                        <div class="flex-shrink-0">
                                            <div class="w-16 h-16 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/30 dark:to-blue-800/30 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-lg group-hover:scale-105 transition-all duration-500 border border-blue-100/50 dark:border-blue-700/30">
                                                <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <h4 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">Technische Expertise</h4>
                                    </div>
                                    <div class="space-y-5">
                                        <p class="text-gray-700 dark:text-gray-300 font-medium">Onderscheidend door:</p>
                                        <ul class="space-y-4">
                                            <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                                <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                                    <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                                </div>
                                                <span>Modern Development Stack</span>
                                            </li>
                                            <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                                <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                                    <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                                </div>
                                                <span>Clean Code Practices</span>
                                            </li>
                                            <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                                <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                                    <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                                </div>
                                                <span>Performance Optimalisatie</span>
                                            </li>
                                        </ul>
                                        
                                        <!-- Skills Tags -->
                                        <div class="mt-6 pt-5 border-t border-gray-100 dark:border-gray-700/50">
                                            <div class="flex flex-wrap gap-2">
                                                <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium border border-blue-100 dark:border-blue-700/50 shadow-sm">
                                                    Modern
                                                </span>
                                                <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium border border-blue-100 dark:border-blue-700/50 shadow-sm">
                                                    Clean Code
                                                </span>
                                                <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium border border-blue-100 dark:border-blue-700/50 shadow-sm">
                                                    Performance
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Innovatieve Aanpak -->
                        <div class="group" data-aos="fade-up" data-aos-delay="100">
                            <div class="relative overflow-hidden bg-white dark:bg-gray-800/80 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm">
                                <!-- Decorative accent -->
                                <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-indigo-500 to-indigo-700"></div>
                                
                                <!-- Main Content -->
                                <div class="p-8 pl-12">
                                    <div class="flex items-center gap-5 mb-6">
                                        <div class="flex-shrink-0">
                                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-50 to-indigo-100 dark:from-indigo-900/30 dark:to-indigo-800/30 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-lg group-hover:scale-105 transition-all duration-500 border border-indigo-100/50 dark:border-indigo-700/30">
                                                <svg class="w-8 h-8 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <h4 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Innovatieve Aanpak</h4>
                                    </div>
                                    <div class="space-y-5">
                                        <p class="text-gray-700 dark:text-gray-300 font-medium">Onderscheidend door:</p>
                                        <ul class="space-y-4">
                                            <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                                <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center">
                                                    <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                                </div>
                                                <span>Proactief meedenken in oplossingen</span>
                                            </li>
                                            <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                                <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center">
                                                    <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                                </div>
                                                <span>Snelle adaptatie nieuwe technologieën</span>
                                            </li>
                                            <li class="flex items-start gap-3 text-gray-700 dark:text-gray-300">
                                                <div class="mt-1.5 flex-shrink-0 w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center">
                                                    <div class="w-2 h-2 rounded-full bg-indigo-500"></div>
                                                </div>
                                                <span>Focus op schaalbaarheid & onderhoud</span>
                                            </li>
                                        </ul>
                                        
                                        <!-- Skills Tags -->
                                        <div class="mt-6 pt-5 border-t border-gray-100 dark:border-gray-700/50">
                                            <div class="flex flex-wrap gap-2">
                                                <span class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium border border-indigo-100 dark:border-indigo-700/50 shadow-sm">
                                                    Probleemoplossend
                                                </span>
                                                <span class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium border border-indigo-100 dark:border-indigo-700/50 shadow-sm">
                                                    Innovatief
                                                </span>
                                                <span class="px-3 py-1 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium border border-indigo-100 dark:border-indigo-700/50 shadow-sm">
                                                    Toekomstgericht
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Unique Selling Points met moderne kaarten -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="group bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-600 p-6 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                            <div class="text-blue-600 dark:text-blue-400 mb-4 transform group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h5 class="font-bold mb-2 text-gray-900 dark:text-white">Snel & Efficiënt</h5>
                            <p class="text-sm text-gray-700 dark:text-gray-300">Snelle implementatie met behoud van kwaliteit</p>
                        </div>
                        <div class="group bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-600 p-6 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                            <div class="text-blue-600 dark:text-blue-400 mb-4 transform group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                                </svg>
                            </div>
                            <h5 class="font-bold mb-2 text-gray-900 dark:text-white">Maatwerk</h5>
                            <p class="text-sm text-gray-700 dark:text-gray-300">Oplossingen op maat voor uw behoeften</p>
                        </div>
                        <div class="group bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-600 p-6 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                            <div class="text-blue-600 dark:text-blue-400 mb-4 transform group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                </svg>
                            </div>
                            <h5 class="font-bold mb-2 text-gray-900 dark:text-white">Communicatie</h5>
                            <p class="text-sm text-gray-700 dark:text-gray-300">Heldere en proactieve communicatie</p>
                        </div>
                        <div class="group bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-600 p-6 rounded-2xl hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                            <div class="text-blue-600 dark:text-blue-400 mb-4 transform group-hover:scale-110 transition-transform">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h5 class="font-bold mb-2 text-gray-900 dark:text-white">Kwaliteit</h5>
                            <p class="text-sm text-gray-700 dark:text-gray-300">Code volgens moderne standaarden</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Werkervaring & Bijbanen sectie -->
<section class="py-24 px-4 bg-gradient-to-b from-white via-blue-50/30 to-white dark:from-gray-900 dark:via-gray-800/50 dark:to-gray-900 relative overflow-hidden">
    <!-- Subtiele geometrische patronen -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 dark:opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%234F46E5\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="max-w-7xl mx-auto relative">
        <!-- Header sectie met moderne typografie -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center mb-4" data-aos="fade-down">
                <span class="h-px w-8 bg-blue-500 mr-3"></span>
                <span class="text-blue-600 dark:text-blue-400 font-medium tracking-wider uppercase text-sm">Werkervaring & Bijbanen</span>
                <span class="h-px w-8 bg-blue-500 ml-3"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white" data-aos="fade-up">
                Professionele <span class="text-blue-600 dark:text-blue-400">Ervaring</span>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Mijn reis door verschillende rollen en verantwoordelijkheden
            </p>
        </div>

        <!-- Experience Cards Container -->
        <div class="grid gap-8 relative">
            <!-- Current Role - Developing B.V. -->
            <div class="group" data-aos="fade-up">
                <div class="relative overflow-hidden bg-white dark:bg-gray-800/80 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm">
                    <!-- Decorative accent -->
                    <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-blue-500 to-indigo-600"></div>
                    
                    <!-- Main Content -->
                    <div class="p-8 pl-12">
                        <div class="flex flex-col lg:flex-row gap-8">
                            <!-- Company Logo/Icon -->
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-blue-900/30 dark:to-indigo-800/30 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-lg group-hover:scale-105 transition-all duration-500 border border-blue-100/50 dark:border-blue-700/30">
                                    <svg class="w-10 h-10 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="flex-grow">
                                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                            Software Developer
                                        </h3>
                                        <p class="text-blue-600 dark:text-blue-400 font-medium flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                            </svg>
                                            Developing B.V.
                                        </p>
                                    </div>
                                    <div class="mt-2 md:mt-0">
                                        <span class="inline-flex items-center px-4 py-1.5 bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm font-medium border border-blue-100 dark:border-blue-800/50 shadow-sm">
                                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                            sep. 2024 - heden
                                        </span>
                                    </div>
                                </div>

                                <!-- Responsibilities Grid -->
                                <div class="grid md:grid-cols-2 gap-6 mt-6">
                                    <!-- Main Tasks -->
                                    <div class="space-y-4">
                                        <h4 class="font-semibold text-gray-900 dark:text-white flex items-center gap-2">
                                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                            </svg>
                                            Hoofdtaken
                                        </h4>
                                        <ul class="space-y-3">
                                            <li class="flex items-center gap-3 group/item">
                                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 group-hover/item:scale-150 transition-transform"></span>
                                                <span class="text-gray-600 dark:text-gray-300 group-hover/item:text-blue-500 transition-colors">WordPress Development</span>
                                            </li>
                                            <li class="flex items-center gap-3 group/item">
                                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 group-hover/item:scale-150 transition-transform"></span>
                                                <span class="text-gray-600 dark:text-gray-300 group-hover/item:text-blue-500 transition-colors">PHP/Laravel Projecten</span>
                                            </li>
                                            <li class="flex items-center gap-3 group/item">
                                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 group-hover/item:scale-150 transition-transform"></span>
                                                <span class="text-gray-600 dark:text-gray-300 group-hover/item:text-blue-500 transition-colors">Frontend met Tailwind CSS</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Additional Tasks -->
                                    <div class="space-y-4">
                                        <h4 class="font-semibold text-gray-900 dark:text-white flex items-center gap-2">
                                            <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                            </svg>
                                            Extra taken
                                        </h4>
                                        <ul class="space-y-3">
                                            <li class="flex items-center gap-3 group/item">
                                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 group-hover/item:scale-150 transition-transform"></span>
                                                <span class="text-gray-600 dark:text-gray-300 group-hover/item:text-blue-500 transition-colors">Stagiairs Interviewen</span>
                                            </li>
                                            <li class="flex items-center gap-3 group/item">
                                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 group-hover/item:scale-150 transition-transform"></span>
                                                <span class="text-gray-600 dark:text-gray-300 group-hover/item:text-blue-500 transition-colors">Kennisbank Opzetten</span>
                                            </li>
                                            <li class="flex items-center gap-3 group/item">
                                                <span class="w-1.5 h-1.5 rounded-full bg-blue-500 group-hover/item:scale-150 transition-transform"></span>
                                                <span class="text-gray-600 dark:text-gray-300 group-hover/item:text-blue-500 transition-colors">Klanten Ondersteunen</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Skills Tags -->
                                <div class="mt-6 flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium hover:bg-blue-200 dark:hover:bg-blue-800 transition-colors">
                                        WordPress
                                    </span>
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium hover:bg-blue-200 dark:hover:bg-blue-800 transition-colors">
                                        Laravel
                                    </span>
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium hover:bg-blue-200 dark:hover:bg-blue-800 transition-colors">
                                        Tailwind CSS
                                    </span>
                                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium hover:bg-blue-200 dark:hover:bg-blue-800 transition-colors">
                                        PHP
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pathé Role -->
            <div class="group" data-aos="fade-up" data-aos-delay="100">
                <div class="relative overflow-hidden bg-white dark:bg-gray-800/80 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm">
                    <!-- Decorative accent -->
                    <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-indigo-600 to-purple-600"></div>
                    
                    <!-- Main Content -->
                    <div class="p-8 pl-12">
                        <div class="flex flex-col lg:flex-row gap-8">
                            <!-- Company Logo/Icon -->
                            <div class="flex-shrink-0">
                                <div class="w-20 h-20 bg-gradient-to-br from-indigo-100 to-indigo-200 dark:from-indigo-900/30 dark:to-indigo-800/30 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-lg group-hover:scale-105 transition-all duration-500 border border-indigo-100/50 dark:border-indigo-700/30">
                                    <svg class="w-10 h-10 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/>
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="flex-grow">
                                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
                                    <div>
                                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                            Service Employee
                                        </h3>
                                        <p class="text-indigo-600 dark:text-indigo-400 font-medium flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                            </svg>
                                            Pathé
                                        </p>
                                    </div>
                                    <div class="mt-2 md:mt-0">
                                        <span class="inline-flex items-center px-4 py-1.5 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-full text-sm font-medium border border-indigo-100 dark:border-indigo-700/50 shadow-sm">
                                            <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                            mei 2023 - heden
                                        </span>
                                    </div>
                                </div>

                                <!-- Responsibilities -->
                                <div class="mt-6">
                                    <h4 class="font-semibold text-gray-900 dark:text-white flex items-center gap-2 mb-4">
                                        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        Verantwoordelijkheden
                                    </h4>
                                    <ul class="grid md:grid-cols-2 gap-3">
                                        <li class="flex items-center gap-3 group/item">
                                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 group-hover/item:scale-150 transition-transform"></span>
                                            <span class="text-gray-600 dark:text-gray-300 group-hover/item:text-indigo-500 transition-colors">Klantenservice Excellence</span>
                                        </li>
                                        <li class="flex items-center gap-3 group/item">
                                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 group-hover/item:scale-150 transition-transform"></span>
                                            <span class="text-gray-600 dark:text-gray-300 group-hover/item:text-indigo-500 transition-colors">Ticketverkoop & Advies</span>
                                        </li>
                                        <li class="flex items-center gap-3 group/item">
                                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 group-hover/item:scale-150 transition-transform"></span>
                                            <span class="text-gray-600 dark:text-gray-300 group-hover/item:text-indigo-500 transition-colors">Evenementen Coördinatie</span>
                                        </li>
                                        <li class="flex items-center gap-3 group/item">
                                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500 group-hover/item:scale-150 transition-transform"></span>
                                            <span class="text-gray-600 dark:text-gray-300 group-hover/item:text-indigo-500 transition-colors">Team Samenwerking</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Skills Tags -->
                                <div class="mt-6 flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/50 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium hover:bg-indigo-200 dark:hover:bg-indigo-800 transition-colors">
                                        Klantenservice
                                    </span>
                                    <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/50 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium hover:bg-indigo-200 dark:hover:bg-indigo-800 transition-colors">
                                        Communicatie
                                    </span>
                                    <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/50 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium hover:bg-indigo-200 dark:hover:bg-indigo-800 transition-colors">
                                        Teamwork
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes moveGrid {
            0% { background-position: 0 0; }
            100% { background-position: 50px 50px; }
        }
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
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
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
            <div class="inline-flex items-center justify-center mb-4" data-aos="fade-down">
                <span class="h-px w-8 bg-blue-500 mr-3"></span>
                <span class="text-blue-600 dark:text-blue-400 font-medium tracking-wider uppercase text-sm">Vaardigheden</span>
                <span class="h-px w-8 bg-blue-500 ml-3"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white" data-aos="fade-up">
                Technische <span class="text-blue-600 dark:text-blue-400">Expertise</span>
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
                    <span class="text-gray-400 text-sm">portfolio</span>
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
        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0);
            }
            25% {
                transform: translateY(-10px) translateX(5px);
            }
            50% {
                transform: translateY(0) translateX(10px);
            }
            75% {
                transform: translateY(10px) translateX(5px);
            }
        }

        @keyframes moveGrid {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: 50px 50px;
            }
        }
    </style>
</section>

<!-- Timeline Section -->
<section class="py-24 px-4 bg-gradient-to-b from-white via-blue-50/30 to-white dark:from-gray-900 dark:via-gray-800/50 dark:to-gray-900 relative overflow-hidden">
    <!-- Subtiele geometrische patronen -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 dark:opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%234F46E5\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="max-w-7xl mx-auto relative">
        <!-- Header sectie met moderne typografie -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center mb-4" data-aos="fade-down">
                <span class="h-px w-8 bg-blue-500 mr-3"></span>
                <span class="text-blue-600 dark:text-blue-400 font-medium tracking-wider uppercase text-sm">Tijdlijn</span>
                <span class="h-px w-8 bg-blue-500 ml-3"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white" data-aos="fade-up">
                Mijn <span class="text-blue-600 dark:text-blue-400">Reis</span>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Een tijdlijn van mijn professionele ontwikkeling
            </p>
        </div>

        <div class="relative">
            <!-- Verbeterde verticale lijn -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-blue-300 via-blue-500 to-blue-300 dark:from-blue-700 dark:via-blue-500 dark:to-blue-700 rounded-full opacity-50"></div>

            <!-- Timeline Items -->
            <div class="space-y-16">
                <!-- Developing B.V. -->
                <div class="relative group" data-aos="fade-right">
                    <div class="flex items-center">
                        <div class="flex-1 text-right pr-8">
                            <div class="bg-white dark:bg-gray-800/80 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm relative overflow-hidden group-hover:-translate-y-1">
                                <!-- Decorative accent -->
                                <div class="absolute top-0 right-0 h-2 w-full bg-gradient-to-l from-blue-500 to-indigo-600"></div>
                                
                                <div class="pt-3">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Werkzaam bij Developing B.V.
                                    </h3>
                                    <p class="text-blue-600 dark:text-blue-400 font-medium flex items-center justify-end gap-2 mt-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        sep. 2024 - heden
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-300 mt-3">
                                        Stage waar ik werk aan verschillende projecten met nieuwe technieken.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-6 h-6 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-blue-500/50 group-hover:scale-125 transition-transform z-10"></div>
                        <div class="flex-1"></div>
                    </div>
                </div>

                <!-- Pathé -->
                <div class="relative group" data-aos="fade-left">
                    <div class="flex items-center">
                        <div class="flex-1"></div>
                        <div class="w-6 h-6 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-indigo-500/50 group-hover:scale-125 transition-transform z-10"></div>
                        <div class="flex-1 pl-8">
                            <div class="bg-white dark:bg-gray-800/80 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm relative overflow-hidden group-hover:-translate-y-1">
                                <!-- Decorative accent -->
                                <div class="absolute top-0 left-0 h-2 w-full bg-gradient-to-r from-indigo-500 to-purple-600"></div>
                                
                                <div class="pt-3">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                        Service Employee bij Pathé
                                    </h3>
                                    <p class="text-indigo-600 dark:text-indigo-400 font-medium flex items-center gap-2 mt-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        mei 2023 - heden
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-300 mt-3">
                                        Klantenservice, ticketverkoop en evenementen assistentie
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- I@control -->
                <div class="relative group" data-aos="fade-right">
                    <div class="flex items-center">
                        <div class="flex-1 text-right pr-8">
                            <div class="bg-white dark:bg-gray-800/80 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm relative overflow-hidden group-hover:-translate-y-1">
                                <!-- Decorative accent -->
                                <div class="absolute top-0 right-0 h-2 w-full bg-gradient-to-l from-blue-500 to-indigo-600"></div>
                                
                                <div class="pt-3">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                        Stage bij I@control
                                    </h3>
                                    <p class="text-blue-600 dark:text-blue-400 font-medium flex items-center justify-end gap-2 mt-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        feb. 2023 - apr. 2023
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-300 mt-3">
                                        Ontwikkeling met TypeScript, C#, ASP.NET en AngularJS
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-6 h-6 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-blue-500/50 group-hover:scale-125 transition-transform z-10"></div>
                        <div class="flex-1"></div>
                    </div>
                </div>

                <!-- Action -->
                <div class="relative group" data-aos="fade-left">
                    <div class="flex items-center">
                        <div class="flex-1"></div>
                        <div class="w-6 h-6 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-purple-500/50 group-hover:scale-125 transition-transform z-10"></div>
                        <div class="flex-1 pl-8">
                            <div class="bg-white dark:bg-gray-800/80 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm relative overflow-hidden group-hover:-translate-y-1">
                                <!-- Decorative accent -->
                                <div class="absolute top-0 left-0 h-2 w-full bg-gradient-to-r from-purple-500 to-pink-600"></div>
                                
                                <div class="pt-3">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                                        Verkoopmedewerker bij Action
                                    </h3>
                                    <p class="text-purple-600 dark:text-purple-400 font-medium flex items-center gap-2 mt-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        okt. 2020 - mei 2023
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-300 mt-3">
                                        Klantenservice, voorraadbeheer en winkelnetheid
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Opleiding -->
                <div class="relative group" data-aos="fade-right">
                    <div class="flex items-center">
                        <div class="flex-1 text-right pr-8">
                            <div class="bg-white dark:bg-gray-800/80 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm relative overflow-hidden group-hover:-translate-y-1">
                                <!-- Decorative accent -->
                                <div class="absolute top-0 right-0 h-2 w-full bg-gradient-to-l from-indigo-500 to-blue-600"></div>
                                
                                <div class="pt-3">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                        Software Development Opleiding
                                    </h3>
                                    <p class="text-indigo-600 dark:text-indigo-400 font-medium flex items-center justify-end gap-2 mt-1">
                                        Rijn IJssel
                                    </p>
                                    <p class="text-indigo-600 dark:text-indigo-400 font-medium flex items-center justify-end gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        2021 - 2024
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-300 mt-3">
                                        MBO 4 - Software Developer
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-6 h-6 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-indigo-500/50 group-hover:scale-125 transition-transform z-10"></div>
                        <div class="flex-1"></div>
                    </div>
                </div>

                <!-- MAVO -->
                <div class="relative group" data-aos="fade-left">
                    <div class="flex items-center">
                        <div class="flex-1"></div>
                        <div class="w-6 h-6 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-full border-4 border-white dark:border-gray-800 shadow-lg shadow-indigo-500/50 group-hover:scale-125 transition-transform z-10"></div>
                        <div class="flex-1 pl-8">
                            <div class="bg-white dark:bg-gray-800/80 p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm relative overflow-hidden group-hover:-translate-y-1">
                                <!-- Decorative accent -->
                                <div class="absolute top-0 left-0 h-2 w-full bg-gradient-to-r from-indigo-500 to-blue-600"></div>
                                
                                <div class="pt-3">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                        MAVO
                                    </h3>
                                    <p class="text-indigo-600 dark:text-indigo-400 font-medium flex items-center gap-2 mt-1">
                                        Pallas Athene College
                                    </p>
                                    <p class="text-indigo-600 dark:text-indigo-400 font-medium flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        2017 - 2021
                                    </p>
                                    <p class="text-gray-600 dark:text-gray-300 mt-3">
                                        Theoretische leerweg
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Minimalistische overgang -->
<div class="relative">
    <!-- Golvend effect -->
    <div class="absolute inset-x-0 -top-16 h-32 bg-gradient-to-b from-transparent to-purple-100/50 dark:to-gray-900"></div>
    <div class="absolute inset-x-0 -top-16 h-32">
        <svg class="w-full h-full" viewBox="0 0 1440 100" fill="none" preserveAspectRatio="none">
            <path d="M0,50 C320,80 420,20 640,50 C860,80 960,20 1280,50 L1440,50 L1440,100 L0,100 Z" 
                  class="fill-purple-100/30 dark:fill-gray-800/30 transform translate-y-1"></path>
            <path d="M0,50 C320,80 420,20 640,50 C860,80 960,20 1280,50 L1440,50 L1440,100 L0,100 Z" 
                  class="fill-purple-100/20 dark:fill-gray-800/20"></path>
        </svg>
    </div>
</div>

<!-- Testimonials/Aanbevelingen Sectie -->
<section class="py-24 px-4 bg-gradient-to-b from-white via-blue-50/30 to-white dark:from-gray-900 dark:via-gray-800/50 dark:to-gray-900 relative overflow-hidden">
    <!-- Subtiele geometrische patronen -->
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 dark:opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%234F46E5\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>

    <div class="max-w-7xl mx-auto relative">
        <!-- Header sectie met moderne typografie -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center mb-4" data-aos="fade-down">
                <span class="h-px w-8 bg-blue-500 mr-3"></span>
                <span class="text-blue-600 dark:text-blue-400 font-medium tracking-wider uppercase text-sm">Aanbevelingen</span>
                <span class="h-px w-8 bg-blue-500 ml-3"></span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-gray-900 dark:text-white" data-aos="fade-up">
                Stage <span class="text-blue-600 dark:text-blue-400">Ervaringen</span>
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                Ontdek wat mijn stagebegeleider en collega's bij Developing B.V. te zeggen hebben over mijn werk, vaardigheden en bijdragen aan het team.
            </p>
        </div>

        <!-- Testimonial Cards Container -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 h-full">
            <!-- Testimonial 1 -->
            <div class="group h-full" data-aos="fade-up">
                <div class="bg-white dark:bg-gray-800/80 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm h-full flex flex-col group-hover:-translate-y-2 overflow-hidden">
                    <!-- Header met avatar en naam -->
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 p-6 flex items-center gap-4">
                        <div class="w-14 h-14 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center shadow-lg border-2 border-white">
                            <span class="text-blue-600 dark:text-blue-400 font-bold text-lg">SB</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white">Sven van der Berg</h3>
                            <p class="text-blue-100 font-medium text-sm flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                Stage Begeleider, Developing B.V.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="mb-6 flex-1">
                            <div class="text-blue-500 mb-4">
                                <svg class="w-8 h-8 opacity-20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                "Naoufal heeft tijdens zijn stage laten zien dat hij een gedreven developer is met een scherp oog voor detail. Hij pakt nieuwe technieken snel op en weet deze effectief toe te passen in zijn projecten."
                            </p>
                        </div>
                        
                        <!-- Skills Tags -->
                        <div class="mt-auto pt-5 border-t border-gray-100 dark:border-gray-700/50">
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium border border-blue-100 dark:border-blue-800/50 shadow-sm">
                                    Innovatie
                                </span>
                                <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium border border-blue-100 dark:border-blue-800/50 shadow-sm">
                                    Detail
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="group h-full" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white dark:bg-gray-800/80 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm h-full flex flex-col group-hover:-translate-y-2 overflow-hidden">
                    <!-- Header met avatar en naam -->
                    <div class="bg-gradient-to-r from-green-500 to-green-600 p-6 flex items-center gap-4">
                        <div class="w-14 h-14 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center shadow-lg border-2 border-white">
                            <span class="text-green-600 dark:text-green-400 font-bold text-lg">KH</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white">Kristian Huisman</h3>
                            <p class="text-green-100 font-medium text-sm flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                                Senior Developer, Developing B.V.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="mb-6 flex-1">
                            <div class="text-green-500 mb-4">
                                <svg class="w-8 h-8 opacity-20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                "Als senior developer ben ik onder de indruk van Naoufal's technische inzicht en probleemoplossend vermogen. Hij werkt zelfstandig en komt vaak met creatieve oplossingen voor complexe uitdagingen."
                            </p>
                        </div>
                        
                        <!-- Skills Tags -->
                        <div class="mt-auto pt-5 border-t border-gray-100 dark:border-gray-700/50">
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-green-50 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-full text-sm font-medium border border-green-100 dark:border-green-800/50 shadow-sm">
                                    Technisch
                                </span>
                                <span class="px-3 py-1 bg-green-50 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-full text-sm font-medium border border-green-100 dark:border-green-800/50 shadow-sm">
                                    Creatief
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="group h-full" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white dark:bg-gray-800/80 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 dark:border-gray-700/50 backdrop-blur-sm h-full flex flex-col group-hover:-translate-y-2 overflow-hidden">
                    <!-- Header met avatar en naam -->
                    <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6 flex items-center gap-4">
                        <div class="w-14 h-14 rounded-full bg-white dark:bg-gray-800 flex items-center justify-center shadow-lg border-2 border-white">
                            <span class="text-purple-600 dark:text-purple-400 font-bold text-lg">MT</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white">Mark Timmers</h3>
                            <p class="text-purple-100 font-medium text-sm flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                                Frontend Specialist, Developing B.V.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="p-6 flex-1 flex flex-col">
                        <div class="mb-6 flex-1">
                            <div class="text-purple-500 mb-4">
                                <svg class="w-8 h-8 opacity-20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                                "Naoufal heeft een natuurlijk talent voor frontend development. Zijn oog voor design en gebruikerservaring, gecombineerd met zijn technische vaardigheden, maken hem een waardevolle toevoeging aan ons team."
                            </p>
                        </div>
                        
                        <!-- Skills Tags -->
                        <div class="mt-auto pt-5 border-t border-gray-100 dark:border-gray-700/50">
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm font-medium border border-purple-100 dark:border-purple-800/50 shadow-sm">
                                    Frontend
                                </span>
                                <span class="px-3 py-1 bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-sm font-medium border border-purple-100 dark:border-purple-800/50 shadow-sm">
                                    UX Design
                                </span>
                            </div>
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
        <h2 class="text-3xl font-bold mb-6 text-white" data-aos="fade-up">
            Klaar om samen te werken?
        </h2>
        <p class="text-lg opacity-90 mb-8" data-aos="fade-up" data-aos-delay="100">
            Ik sta altijd open voor nieuwe uitdagingen en samenwerkingen
        </p>
        <a href="contact" 
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

<!-- Voeg lazy loading script toe aan het einde van de body -->
<script>
// Intersection Observer voor lazy loading van secties
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    
    const sectionObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('section-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    sections.forEach(section => {
        section.classList.add('opacity-0', 'transform', 'translate-y-10', 'transition-all', 'duration-700');
        sectionObserver.observe(section);
    });
});

// CSS voor fade-in animatie
const style = document.createElement('style');
style.textContent = `
    .section-visible {
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
`;
document.head.appendChild(style);
</script>