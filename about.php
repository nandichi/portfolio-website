<?php
$pageTitle = "Over Mij";
$currentPage = "about";
$pageDescription = "Leer meer over Naoufal Andichi, mijn achtergrond, ervaring en passie voor ontwikkeling.";
$pageKeywords = "Naoufal Andichi, over mij, biografie, ervaring, achtergrond, ontwikkelaar, carrière";
include 'includes/header.php';
?>

<style>
.card-container {
    perspective: 1000px;
}

.card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

.card-container:hover .card-inner {
    transform: rotateY(180deg);
}

.card-front, .card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden; /* Safari */
}

.card-back {
    transform: rotateY(180deg);
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
    100% { transform: translateY(0px); }
}

.float-animation {
    animation: float 3s ease-in-out infinite;
}

@keyframes pulse-custom {
    0% { opacity: 0.4; }
    50% { opacity: 1; }
    100% { opacity: 0.4; }
}

.animate-pulse {
    animation: pulse-custom 3s infinite;
}

@keyframes spin {
    0% {
        transform: rotateX(0deg) rotateY(0deg);
    }
    100% {
        transform: rotateX(360deg) rotateY(360deg);
    }
}
</style>

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50/50 to-purple-50/50 dark:from-gray-900 dark:via-blue-900/20 dark:to-purple-900/20">
    <!-- Decoratieve elementen met zachtere gradients -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-30">
        <div class="absolute -top-1/2 -right-1/2 w-[1000px] h-[1000px] bg-gradient-to-br from-blue-500/10 via-indigo-500/10 to-purple-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-1/2 -left-1/2 w-[1000px] h-[1000px] bg-gradient-to-tr from-blue-500/10 via-indigo-500/10 to-purple-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative pt-40 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header Sectie -->
            <div class="text-center mb-20" data-aos="fade-down">
                <h1 class="text-5xl font-extrabold mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 dark:from-blue-400 dark:via-purple-400 dark:to-indigo-400">
                        Over Mij
                    </span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Een kijkje in wie ik ben en waar ik voor sta
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Linker kolom met foto en persoonlijke info -->
                <div class="space-y-6" data-aos="fade-right">
                    <!-- Profiel Foto -->
                    <div class="card-container h-64">
                        <div class="card-inner">
                            <!-- Voorkant van de kaart -->
                            <div class="card-front">
                                <div class="w-full h-full rounded-xl overflow-hidden">
                                    <div class="w-full h-full bg-gradient-to-br from-blue-500/90 to-indigo-600/90 backdrop-blur-sm relative group">
                                        <!-- Animated Background Patterns -->
                                        <div class="absolute inset-0 opacity-20">
                                            <div class="absolute top-0 left-0 w-full h-full">
                                                <?php for($i = 0; $i < 50; $i++): ?>
                                                    <div class="absolute 
                                                        <?php 
                                                            echo 'top-['.rand(0, 100).'%] ';
                                                            echo 'left-['.rand(0, 100).'%] ';
                                                        ?> 
                                                        w-1 h-1 bg-white rounded-full animate-pulse"
                                                        style="animation-delay: <?php echo $i * 0.1; ?>s">
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                        
                                        <!-- Centrale Content -->
                                        <div class="relative z-10 w-full h-full flex flex-col items-center justify-center text-white space-y-4">
                                            <div class="w-24 h-24 rounded-full border-4 border-white/30 overflow-hidden">
                                                <img src="assets/images/profile.jpg" alt="Naoufal Andichi" class="w-full h-full object-cover">
                                            </div>
                                            <div class="text-center">
                                                <h3 class="text-2xl font-bold mb-2">Naoufal Andichi</h3>
                                                <p class="text-lg text-blue-100">Software Developer</p>
                                            </div>
                                            <div class="flex space-x-3 mt-4">
                                                <span class="px-3 py-1 bg-white/10 rounded-full text-sm backdrop-blur-sm">PHP</span>
                                                <span class="px-3 py-1 bg-white/10 rounded-full text-sm backdrop-blur-sm">Laravel</span>
                                                <span class="px-3 py-1 bg-white/10 rounded-full text-sm backdrop-blur-sm">JS</span>
                                            </div>
                                        </div>

                                        <!-- Animated Corner Decorations -->
                                        <div class="absolute top-0 left-0 w-16 h-16 border-t-2 border-l-2 border-white/20 rounded-tl-xl"></div>
                                        <div class="absolute top-0 right-0 w-16 h-16 border-t-2 border-r-2 border-white/20 rounded-tr-xl"></div>
                                        <div class="absolute bottom-0 left-0 w-16 h-16 border-b-2 border-l-2 border-white/20 rounded-bl-xl"></div>
                                        <div class="absolute bottom-0 right-0 w-16 h-16 border-b-2 border-r-2 border-white/20 rounded-br-xl"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Achterkant van de kaart -->
                            <div class="card-back">
                                <div class="w-full h-full rounded-xl overflow-hidden bg-gradient-to-br from-purple-500/90 to-indigo-600/90 backdrop-blur-sm p-6">
                                    <div class="h-full flex flex-col justify-between text-white">
                                        <div class="space-y-4">
                                            <h3 class="text-xl font-bold">Over Mij</h3>
                                            <p class="text-sm leading-relaxed text-blue-100">
                                                Gepassioneerde software developer met focus op moderne webtechnologieën en innovatieve oplossingen.
                                            </p>
                                        </div>
                                        <div class="space-y-3">
                                            <div class="flex items-center space-x-2">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>Arnhem, Nederland</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <i class="fas fa-graduation-cap"></i>
                                                <span>Software Development</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <i class="fas fa-code-branch"></i>
                                                <span>Full Stack Developer</span>
                        </div>
                    </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mijn Verhaal -->
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-8 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-blue-500/20 dark:group-hover:border-blue-400/20">
                            <!-- Header met speciale styling -->
                            <div class="relative mb-12">
                                <h2 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-indigo-600">
                                    Mijn Verhaal
                                </h2>
                                <div class="absolute -bottom-4 left-0 w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                            </div>

                            <!-- Interactieve kaarten -->
                            <div class="grid gap-6">
                                <!-- Opleiding Kaart -->
                                <div class="group/card relative overflow-hidden rounded-xl transition-all duration-500 hover:shadow-lg hover:shadow-blue-500/20">
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-indigo-500/10 opacity-0 group-hover/card:opacity-100 transition-all duration-500"></div>
                                    <div class="relative p-6 flex items-start gap-6">
                                        <!-- Icon Container -->
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center transform transition-all duration-500 group-hover/card:scale-110 group-hover/card:rotate-6">
                                                <i class="fas fa-graduation-cap text-xl text-white"></i>
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="flex-grow">
                                            <h3 class="text-xl font-semibold text-blue-600 dark:text-blue-400 mb-3 group-hover/card:translate-x-2 transition-all duration-500">
                                                Software Developer in Opleiding
                                            </h3>
                                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed group-hover/card:translate-x-2 transition-all duration-500 delay-100">
                                                Als student bij het RijnIJssel in Arnhem werk ik met passie aan het ontwikkelen van websites en applicaties.
                                                Mijn kracht ligt in het snel oppakken van nieuwe technologieën en het enthousiast aangaan van uitdagende projecten.
                                            </p>
                                        </div>
                                        <!-- Decoratieve elementen -->
                                        <div class="absolute bottom-0 right-0 w-24 h-24 opacity-10">
                                            <div class="absolute right-0 bottom-0 w-full h-full bg-gradient-to-tl from-blue-500 to-transparent transform rotate-45"></div>
                                    </div>
                                    </div>
                                </div>

                                <!-- Stage Kaart -->
                                <div class="group/card relative overflow-hidden rounded-xl transition-all duration-500 hover:shadow-lg hover:shadow-indigo-500/20">
                                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/10 to-purple-500/10 opacity-0 group-hover/card:opacity-100 transition-all duration-500"></div>
                                    <div class="relative p-6 flex items-start gap-6">
                                        <!-- Icon Container -->
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center transform transition-all duration-500 group-hover/card:scale-110 group-hover/card:rotate-6">
                                                <i class="fas fa-laptop-code text-xl text-white"></i>
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="flex-grow">
                                            <h3 class="text-xl font-semibold text-indigo-600 dark:text-indigo-400 mb-3 group-hover/card:translate-x-2 transition-all duration-500">
                                                Werkzaam bij Developing B.V.
                                            </h3>
                                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4 group-hover/card:translate-x-2 transition-all duration-500 delay-100">
                                                Momenteel werk ik bij Developing B.V., waar ik al verschillende gave projecten heb gemaakt. 
                                                Ik werk hier met moderne tools zoals WordPress, PHP/Laravel en Tailwind CSS.
                                            </p>
                                            <!-- Tech Stack -->
                                            <div class="flex flex-wrap gap-2 group-hover/card:translate-x-2 transition-all duration-500 delay-200">
                                                <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium">WordPress</span>
                                                <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium">PHP/Laravel</span>
                                                <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-medium">Tailwind CSS</span>
                                            </div>
                                        </div>
                                        <!-- Decoratieve elementen -->
                                        <div class="absolute bottom-0 right-0 w-24 h-24 opacity-10">
                                            <div class="absolute right-0 bottom-0 w-full h-full bg-gradient-to-tl from-indigo-500 to-transparent transform rotate-45"></div>
                                    </div>
                                    </div>
                                </div>

                                <!-- Passie Kaart -->
                                <div class="group/card relative overflow-hidden rounded-xl transition-all duration-500 hover:shadow-lg hover:shadow-purple-500/20">
                                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-500/10 opacity-0 group-hover/card:opacity-100 transition-all duration-500"></div>
                                    <div class="relative p-6 flex items-start gap-6">
                                        <!-- Icon Container -->
                                        <div class="flex-shrink-0">
                                            <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center transform transition-all duration-500 group-hover/card:scale-110 group-hover/card:rotate-6">
                                                <i class="fas fa-rocket text-xl text-white"></i>
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="flex-grow">
                                            <h3 class="text-xl font-semibold text-purple-600 dark:text-purple-400 mb-3 group-hover/card:translate-x-2 transition-all duration-500">
                                                Passie & Ambitie
                                            </h3>
                                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4 group-hover/card:translate-x-2 transition-all duration-500 delay-100">
                                                In mijn vrije tijd werk ik graag aan eigen projecten om mijn vaardigheden te verbeteren.
                                                Mijn passie ligt bij het ontwikkelen van innovatieve webapplicaties en het verkennen van nieuwe code talen.
                                            </p>
                                            <!-- Skills -->
                                            <div class="flex items-center gap-6 group-hover/card:translate-x-2 transition-all duration-500 delay-200">
                                                <div class="flex items-center gap-2">
                                                    <div class="w-8 h-8 rounded-lg bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center">
                                                        <i class="fas fa-code text-purple-500"></i>
                                                    </div>
                                                    <span class="text-sm text-gray-600 dark:text-gray-400">Full Stack</span>
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <div class="w-8 h-8 rounded-lg bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center">
                                                        <i class="fas fa-lightbulb text-purple-500"></i>
                                                    </div>
                                                    <span class="text-sm text-gray-600 dark:text-gray-400">Innovatie</span>
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <div class="w-8 h-8 rounded-lg bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center">
                                                        <i class="fas fa-book text-purple-500"></i>
                                                    </div>
                                                    <span class="text-sm text-gray-600 dark:text-gray-400">Leergierig</span>
                                    </div>
                                    </div>
                                </div>
                                        <!-- Decoratieve elementen -->
                                        <div class="absolute bottom-0 right-0 w-24 h-24 opacity-10">
                                            <div class="absolute right-0 bottom-0 w-full h-full bg-gradient-to-tl from-purple-500 to-transparent transform rotate-45"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rechter kolom met uitgebreide informatie -->
                <div class="space-y-6" data-aos="fade-left">
                    <!-- Doelen & Ambities -->
                    <div class="group relative h-full">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-8 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-purple-500/20 dark:group-hover:border-purple-400/20">
                            <!-- Header met 3D effect -->
                            <div class="relative mb-10">
                                <h2 class="text-3xl font-bold">
                                    <span class="relative inline-block">
                                        <span class="absolute inset-0 bg-gradient-to-r from-purple-500 to-indigo-500 blur-lg opacity-30"></span>
                                        <span class="relative bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-indigo-600">
                                            Mijn Doelen & Ambities
                                        </span>
                                    </span>
                                </h2>
                                <!-- Animated underline -->
                                <div class="absolute -bottom-2 left-0 w-0 h-0.5 bg-gradient-to-r from-purple-500 to-indigo-500 group-hover:w-48 transition-all duration-700"></div>
                            </div>

                            <!-- Doelen Grid -->
                            <div class="grid gap-6">
                                <!-- Korte Termijn -->
                                <div class="group/goal relative overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/5 to-indigo-500/5 rounded-xl opacity-0 group-hover/goal:opacity-100 transition-all duration-300"></div>
                                    <div class="relative p-6 rounded-xl border border-gray-200/20 dark:border-gray-700/20 transition-all duration-300 group-hover/goal:border-purple-500/30">
                                        <div class="flex items-start gap-6">
                                            <!-- Icon met animatie -->
                                            <div class="relative">
                                                <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-xl blur opacity-20 group-hover/goal:opacity-40 transition-all duration-300"></div>
                                                <div class="relative w-16 h-16 rounded-xl bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center transform transition-all duration-500 group-hover/goal:scale-110 group-hover/goal:rotate-6">
                                                    <i class="fas fa-rocket text-2xl text-white"></i>
                                                </div>
                                            </div>
                                            <!-- Content -->
                                            <div class="flex-grow">
                                                <h3 class="text-lg font-semibold text-purple-600 dark:text-purple-400 mb-2">Korte Termijn</h3>
                                                <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                                                    <li class="flex items-center gap-2">
                                                        <i class="fas fa-check text-green-500"></i>
                                                        Afstuderen als Software Developer
                                                    </li>
                                                    <li class="flex items-center gap-2">
                                                        <i class="fas fa-check text-green-500"></i>
                                                        Portfolio uitbreiden met innovatieve projecten
                                                    </li>
                                                    <li class="flex items-center gap-2">
                                                        <i class="fas fa-check text-green-500"></i>
                                                        Expertise in moderne frameworks verdiepen
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tech Stack Verbreding -->
                                <div class="group/goal relative overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/5 to-indigo-500/5 rounded-xl opacity-0 group-hover/goal:opacity-100 transition-all duration-300"></div>
                                    <div class="relative p-6 rounded-xl border border-gray-200/20 dark:border-gray-700/20 transition-all duration-300 group-hover/goal:border-purple-500/30">
                                        <div class="flex items-start gap-6">
                                            <!-- Icon met animatie -->
                                            <div class="relative">
                                                <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-xl blur opacity-20 group-hover/goal:opacity-40 transition-all duration-300"></div>
                                                <div class="relative w-16 h-16 rounded-xl bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center transform transition-all duration-500 group-hover/goal:scale-110 group-hover/goal:rotate-6">
                                                    <i class="fas fa-code text-2xl text-white"></i>
                                                </div>
                                            </div>
                                            <!-- Content -->
                                            <div class="flex-grow">
                                                <h3 class="text-lg font-semibold text-purple-600 dark:text-purple-400 mb-2">Tech Stack Verbreding</h3>
                                                <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                                                    <li class="flex items-center gap-2">
                                                        <i class="fab fa-react text-blue-500"></i>
                                                        React & Next.js beheersen
                                                    </li>
                                                    <li class="flex items-center gap-2">
                                                        <i class="fab fa-vuejs text-green-500"></i>
                                                        Vue.js specialist worden
                                                    </li>
                                                    <li class="flex items-center gap-2">
                                                        <i class="fab fa-node-js text-yellow-500"></i>
                                                        Node.js backend masteren
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Persoonlijke Ontwikkeling -->
                                <div class="group/goal relative overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/5 to-indigo-500/5 rounded-xl opacity-0 group-hover/goal:opacity-100 transition-all duration-300"></div>
                                    <div class="relative p-6 rounded-xl border border-gray-200/20 dark:border-gray-700/20 transition-all duration-300 group-hover/goal:border-purple-500/30">
                                        <div class="flex items-start gap-6">
                                            <!-- Icon met animatie -->
                                            <div class="relative">
                                                <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-xl blur opacity-20 group-hover/goal:opacity-40 transition-all duration-300"></div>
                                                <div class="relative w-16 h-16 rounded-xl bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center transform transition-all duration-500 group-hover/goal:scale-110 group-hover/goal:rotate-6">
                                                    <i class="fas fa-brain text-2xl text-white"></i>
                                                </div>
                                            </div>
                                            <!-- Content -->
                                            <div class="flex-grow">
                                                <h3 class="text-lg font-semibold text-purple-600 dark:text-purple-400 mb-2">Persoonlijke Ontwikkeling</h3>
                                                <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                                                    <li class="flex items-center gap-2">
                                                        <i class="fas fa-lightbulb text-amber-500"></i>
                                                        Blijven leren en groeien
                                                    </li>
                                                    <li class="flex items-center gap-2">
                                                        <i class="fas fa-lightbulb text-amber-500"></i>
                                                        Netwerk uitbreiden in tech community
                                                    </li>
                                                    <li class="flex items-center gap-2">
                                                        <i class="fas fa-lightbulb text-amber-500"></i>
                                                        Bijdragen aan open source projecten
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Decoratieve elementen -->
                            <div class="absolute top-0 right-0 w-32 h-32 opacity-10">
                                <div class="absolute right-0 top-0 w-full h-full bg-gradient-to-bl from-purple-500 to-transparent transform -rotate-45"></div>
                            </div>
                            <div class="absolute bottom-0 left-0 w-32 h-32 opacity-10">
                                <div class="absolute left-0 bottom-0 w-full h-full bg-gradient-to-tr from-indigo-500 to-transparent transform -rotate-45"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Professionele Focus - Nieuw Ontwerp -->
                    <div class="group relative overflow-hidden">
                        <!-- Achtergrond effecten -->
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        
                        <!-- Hoofdcontainer -->
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-8 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-cyan-500/20 dark:group-hover:border-cyan-400/20">
                            
                            <!-- Header met 3D glasmorphism effect -->
                            <div class="relative mb-12 overflow-hidden">
                                <div class="absolute -inset-4 bg-gradient-to-r from-cyan-500/20 to-blue-600/20 rounded-full blur-2xl transform -rotate-6 scale-110 opacity-0 group-hover:opacity-100 transition-all duration-700"></div>
                                <h2 class="text-4xl font-bold relative">
                                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-cyan-500 via-blue-500 to-indigo-600 dark:from-cyan-400 dark:via-blue-400 dark:to-indigo-500">
                                        Professionele Focus
                                    </span>
                                </h2>
                                <p class="mt-3 text-gray-600 dark:text-gray-300 max-w-xl">
                                    Mijn technische expertise en professionele vaardigheden, gekwalificeerd van beginner tot expert
                                </p>
                                <div class="absolute bottom-0 left-0 w-24 h-1 bg-gradient-to-r from-cyan-500 to-blue-600 transform -skew-x-12 group-hover:w-48 transition-all duration-700"></div>
                            </div>
                            
                            <!-- 3D Draaiende Technologie Kubus -->
                            <div class="mb-12 relative perspective-1000" style="height: 300px;">
                                <!-- Glasmorphism container -->
                                <div class="absolute inset-0 rounded-xl bg-gradient-to-r from-cyan-500/5 to-blue-600/5 border border-white/10 dark:border-gray-700/10 backdrop-filter backdrop-blur-sm overflow-hidden">
                                    <!-- Animerende technologie woorden op verschillende posities -->
                                    <?php 
                                    $techWords = [
                                        ['text' => 'JavaScript', 'top' => 15, 'left' => 20, 'size' => 24, 'rotate' => -5, 'color' => 'from-yellow-400 to-yellow-600'],
                                        ['text' => 'PHP', 'top' => 30, 'left' => 75, 'size' => 28, 'rotate' => 5, 'color' => 'from-indigo-500 to-purple-500'],
                                        ['text' => 'Laravel', 'top' => 65, 'left' => 30, 'size' => 22, 'rotate' => 3, 'color' => 'from-red-500 to-pink-600'],
                                        ['text' => 'CSS', 'top' => 20, 'left' => 50, 'size' => 20, 'rotate' => -2, 'color' => 'from-blue-400 to-blue-600'],
                                        ['text' => 'React', 'top' => 45, 'left' => 15, 'size' => 26, 'rotate' => 2, 'color' => 'from-cyan-400 to-blue-500'],
                                        ['text' => 'Node.js', 'top' => 70, 'left' => 65, 'size' => 24, 'rotate' => -4, 'color' => 'from-green-500 to-emerald-600'],
                                        ['text' => 'TailwindCSS', 'top' => 50, 'left' => 55, 'size' => 23, 'rotate' => 3, 'color' => 'from-cyan-500 to-blue-500'],
                                        ['text' => 'Vue.js', 'top' => 25, 'left' => 85, 'size' => 22, 'rotate' => -3, 'color' => 'from-green-500 to-emerald-600'],
                                        ['text' => 'TypeScript', 'top' => 80, 'left' => 40, 'size' => 22, 'rotate' => 4, 'color' => 'from-blue-600 to-indigo-700'],
                                        ['text' => 'MySQL', 'top' => 40, 'left' => 80, 'size' => 22, 'rotate' => -1, 'color' => 'from-orange-500 to-amber-600'],
                                        ['text' => 'Git', 'top' => 10, 'left' => 40, 'size' => 24, 'rotate' => 3, 'color' => 'from-orange-600 to-red-600'],
                                        ['text' => 'HTML', 'top' => 85, 'left' => 10, 'size' => 24, 'rotate' => -2, 'color' => 'from-orange-500 to-red-500'],
                                    ];
                                    
                                    foreach ($techWords as $tech): 
                                    ?>
                                    <div class="absolute float-animation" 
                                         style="top: <?= $tech['top'] ?>%; left: <?= $tech['left'] ?>%; animation-delay: <?= rand(0, 1000) / 1000 ?>s; animation-duration: <?= rand(3000, 5000) / 1000 ?>s;">
                                        <div class="<?= 'text-' . $tech['size'] ?> font-bold bg-clip-text text-transparent bg-gradient-to-r <?= $tech['color'] ?> transform rotate-<?= $tech['rotate'] ?> hover:scale-125 transition-all duration-300 cursor-pointer">
                                            <?= $tech['text'] ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    
                                    <!-- Centrale Draaiende 3D Kubus -->
                                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2" 
                                         style="transform-style: preserve-3d; animation: spin 15s infinite linear;">
                                        <?php 
                                        $cubeIcons = [
                                            ['icon' => 'fab fa-php', 'color' => 'bg-gradient-to-r from-indigo-500 to-purple-600', 'transform' => 'translateZ(50px)'],
                                            ['icon' => 'fab fa-js', 'color' => 'bg-gradient-to-r from-yellow-400 to-yellow-600', 'transform' => 'rotateY(90deg) translateZ(50px)'],
                                            ['icon' => 'fab fa-html5', 'color' => 'bg-gradient-to-r from-red-500 to-orange-600', 'transform' => 'rotateY(180deg) translateZ(50px)'],
                                            ['icon' => 'fab fa-css3-alt', 'color' => 'bg-gradient-to-r from-blue-500 to-blue-600', 'transform' => 'rotateY(270deg) translateZ(50px)'],
                                            ['icon' => 'fab fa-react', 'color' => 'bg-gradient-to-r from-cyan-400 to-blue-500', 'transform' => 'rotateX(90deg) translateZ(50px)'],
                                            ['icon' => 'fab fa-node-js', 'color' => 'bg-gradient-to-r from-green-500 to-emerald-600', 'transform' => 'rotateX(270deg) translateZ(50px)'],
                                        ];
                                        
                                        foreach ($cubeIcons as $face): 
                                        ?>
                                        <div class="absolute w-24 h-24 <?= $face['color'] ?> rounded-xl flex items-center justify-center transform transition-all duration-500"
                                             style="transform: <?= $face['transform'] ?>; box-shadow: 0 0 20px rgba(0,0,0,0.2);">
                                            <i class="<?= $face['icon'] ?> text-4xl text-white animate-pulse"></i>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Vaardigheden Visualisatie -->
                            <div class="mb-16">
                                <h3 class="text-2xl font-semibold mb-8 text-gray-800 dark:text-white flex items-center gap-3">
                                    <span class="w-10 h-10 rounded-lg bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center">
                                        <i class="fas fa-chart-bar text-white"></i>
                                    </span>
                                    Vaardigheidsmatrix
                                </h3>
                                
                                <!-- Interactieve Skill Bars -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <!-- Links: Front-end Skills -->
                                    <div class="space-y-6">
                                        <h4 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-4">Front-end Ontwikkeling</h4>
                                        <?php 
                                        $frontendSkills = [
                                            ['name' => 'HTML/CSS', 'level' => 95, 'icon' => 'fab fa-html5', 'color' => 'from-red-500 to-orange-600'],
                                            ['name' => 'JavaScript', 'level' => 90, 'icon' => 'fab fa-js', 'color' => 'from-yellow-400 to-yellow-600'],
                                            ['name' => 'React', 'level' => 80, 'icon' => 'fab fa-react', 'color' => 'from-cyan-400 to-blue-500'],
                                            ['name' => 'TailwindCSS', 'level' => 95, 'icon' => 'fab fa-css3-alt', 'color' => 'from-cyan-500 to-blue-500'],
                                            ['name' => 'Vue.js', 'level' => 75, 'icon' => 'fab fa-vuejs', 'color' => 'from-green-500 to-emerald-600'],
                                        ];
                                        
                                        foreach ($frontendSkills as $skill): 
                                        ?>
                                        <div class="group/skill relative mb-6">
                                            <div class="flex justify-between items-center mb-2">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br <?= $skill['color'] ?> flex items-center justify-center transform transition-all duration-500 group-hover/skill:scale-110 group-hover/skill:rotate-6">
                                                        <i class="<?= $skill['icon'] ?> text-white"></i>
                                                    </div>
                                                    <h5 class="font-medium text-gray-700 dark:text-gray-300"><?= $skill['name'] ?></h5>
                                                </div>
                                                <span class="text-sm font-semibold bg-clip-text text-transparent bg-gradient-to-r <?= $skill['color'] ?>"><?= $skill['level'] ?>%</span>
                                            </div>
                                            
                                            <!-- Progress Bar Container -->
                                            <div class="w-full h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden relative">
                                                <!-- Glass effect container -->
                                                <div class="absolute inset-0 rounded-full overflow-hidden backdrop-blur-sm">
                                                    <!-- White light effect -->
                                                    <div class="absolute top-0 left-0 w-full h-1/2 bg-white/20"></div>
                                                </div>
                                                
                                                <!-- Progress Bar -->
                                                <div class="h-full rounded-full bg-gradient-to-r <?= $skill['color'] ?> transform origin-left scale-x-0 group-hover/skill:scale-x-100 transition-transform duration-1000 ease-out" 
                                                     style="transform: scaleX(<?= $skill['level'] / 100 ?>);">
                                                    <!-- Animated Pulse Effect -->
                                                    <div class="absolute top-0 right-0 w-4 h-full bg-white opacity-70 blur-sm animate-pulse"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    
                                    <!-- Rechts: Back-end Skills -->
                                    <div class="space-y-6">
                                        <h4 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-4">Back-end Ontwikkeling</h4>
                                        <?php 
                                        $backendSkills = [
                                            ['name' => 'PHP', 'level' => 95, 'icon' => 'fab fa-php', 'color' => 'from-indigo-500 to-purple-600'],
                                            ['name' => 'Laravel', 'level' => 90, 'icon' => 'fab fa-laravel', 'color' => 'from-red-500 to-pink-600'],
                                            ['name' => 'Node.js', 'level' => 75, 'icon' => 'fab fa-node-js', 'color' => 'from-green-500 to-emerald-600'],
                                            ['name' => 'MySQL', 'level' => 85, 'icon' => 'fas fa-database', 'color' => 'from-orange-500 to-amber-600'],
                                            ['name' => 'REST API', 'level' => 80, 'icon' => 'fas fa-exchange-alt', 'color' => 'from-blue-500 to-indigo-600'],
                                        ];
                                        
                                        foreach ($backendSkills as $skill): 
                                        ?>
                                        <div class="group/skill relative mb-6">
                                            <div class="flex justify-between items-center mb-2">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br <?= $skill['color'] ?> flex items-center justify-center transform transition-all duration-500 group-hover/skill:scale-110 group-hover/skill:rotate-6">
                                                        <i class="<?= $skill['icon'] ?> text-white"></i>
                                                    </div>
                                                    <h5 class="font-medium text-gray-700 dark:text-gray-300"><?= $skill['name'] ?></h5>
                                                </div>
                                                <span class="text-sm font-semibold bg-clip-text text-transparent bg-gradient-to-r <?= $skill['color'] ?>"><?= $skill['level'] ?>%</span>
                                            </div>
                                            
                                            <!-- Progress Bar Container -->
                                            <div class="w-full h-3 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden relative">
                                                <!-- Glass effect container -->
                                                <div class="absolute inset-0 rounded-full overflow-hidden backdrop-blur-sm">
                                                    <!-- White light effect -->
                                                    <div class="absolute top-0 left-0 w-full h-1/2 bg-white/20"></div>
                                                </div>
                                                
                                                <!-- Progress Bar -->
                                                <div class="h-full rounded-full bg-gradient-to-r <?= $skill['color'] ?> transform origin-left scale-x-0 group-hover/skill:scale-x-100 transition-transform duration-1000 ease-out" 
                                                     style="transform: scaleX(<?= $skill['level'] / 100 ?>);">
                                                    <!-- Animated Pulse Effect -->
                                                    <div class="absolute top-0 right-0 w-4 h-full bg-white opacity-70 blur-sm animate-pulse"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Decoratieve elementen -->
                            <div class="absolute top-0 right-0 w-32 h-32 opacity-10">
                                <div class="absolute right-0 top-0 w-full h-full bg-gradient-to-bl from-cyan-500 to-transparent transform -rotate-45"></div>
                            </div>
                            <div class="absolute bottom-0 left-0 w-32 h-32 opacity-10">
                                <div class="absolute left-0 bottom-0 w-full h-full bg-gradient-to-tr from-blue-500 to-transparent transform -rotate-45"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialiseer AOS animaties
    AOS.init({
        duration: 1000,
        once: true,
        offset: 50,
        easing: 'ease-out-cubic'
    });
});
</script>

<?php include 'includes/footer.php'; ?> 