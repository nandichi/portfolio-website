<?php
$pageTitle = "Over Mij";
$currentPage = "about";
$pageDescription = "Leer meer over Naoufal Andichi, mijn achtergrond, ervaring en passie voor ontwikkeling.";
$pageKeywords = "Naoufal Andichi, over mij, biografie, ervaring, achtergrond, ontwikkelaar, carrière";

// Bepaal de correcte pad voor includes gebaseerd op uitvoeringscontext
$includesPath = file_exists('includes/header.php') ? 'includes/header.php' : '../includes/header.php';

// Bepaal ook het correcte pad voor assets
$assetsPath = file_exists('assets/images/profile.jpg') ? 'assets' : '../assets';

include $includesPath;
?>

<style>
/* Custom Animations */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

@keyframes slideInLeft {
    from { transform: translateX(-100%); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

@keyframes slideInRight {
    from { transform: translateX(100%); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

@keyframes slideInUp {
    from { transform: translateY(100%); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@keyframes fadeInScale {
    from { transform: scale(0.8); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes pulse {
    0%, 100% { opacity: 0.4; }
    50% { opacity: 1; }
}

@keyframes morphing {
    0%, 100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
    50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
}

.float-animation { animation: float 6s ease-in-out infinite; }
.slide-in-left { animation: slideInLeft 0.8s ease-out forwards; }
.slide-in-right { animation: slideInRight 0.8s ease-out forwards; }
.slide-in-up { animation: slideInUp 0.8s ease-out forwards; }
.fade-in-scale { animation: fadeInScale 0.8s ease-out forwards; }
.gradient-shift { 
    background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c);
    background-size: 400% 400%;
    animation: gradientShift 15s ease infinite;
}
.pulse-custom { animation: pulse 3s infinite; }
.morphing-shape { animation: morphing 8s ease-in-out infinite; }

/* Animation delays */
.animation-delay-1000 { animation-delay: 1s; }

/* Glassmorphism Effect */
.glass {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.dark .glass {
    background: rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Custom Grid Pattern */
.grid-pattern {
    background-image: 
        linear-gradient(rgba(59, 130, 246, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
    background-size: 20px 20px;
}

/* Smooth scroll behavior */
html { scroll-behavior: smooth; }

/* Custom scrollbar */
::-webkit-scrollbar { width: 8px; }
::-webkit-scrollbar-track { background: #f1f1f1; }
::-webkit-scrollbar-thumb { 
    background: linear-gradient(180deg, #667eea, #764ba2);
    border-radius: 4px;
}
::-webkit-scrollbar-thumb:hover { background: linear-gradient(180deg, #764ba2, #667eea); }
</style>

<!-- Main Container -->
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-blue-50/30 dark:from-gray-900 dark:via-gray-800 dark:to-blue-900/20 relative overflow-hidden">
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Morphing Shapes -->
        <div class="absolute -top-1/4 -left-1/4 w-96 h-96 bg-gradient-to-br from-blue-400/20 to-purple-600/20 rounded-full morphing-shape"></div>
        <div class="absolute -bottom-1/4 -right-1/4 w-96 h-96 bg-gradient-to-br from-purple-400/20 to-pink-600/20 rounded-full morphing-shape" style="animation-delay: -4s;"></div>
        <div class="absolute top-1/3 -right-1/5 w-64 h-64 bg-gradient-to-br from-indigo-400/15 to-blue-600/15 rounded-full morphing-shape" style="animation-delay: -2s;"></div>
        
        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 grid-pattern opacity-30"></div>
        
        <!-- Floating Particles -->
        <?php for($i = 0; $i < 20; $i++): ?>
        <div class="absolute w-2 h-2 bg-blue-400/30 rounded-full pulse-custom"
             style="
                top: <?php echo rand(10, 90); ?>%;
                left: <?php echo rand(10, 90); ?>%;
                animation-delay: <?php echo $i * 0.5; ?>s;
                animation-duration: <?php echo rand(2, 4); ?>s;
             "></div>
        <?php endfor; ?>
    </div>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            <!-- Hero Content -->
            <div class="text-center mb-16">
                <!-- Subtiele badge -->
                <div class="inline-flex items-center justify-center mb-6">
                    <div class="flex items-center space-x-3 px-6 py-3 bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg rounded-full border border-white/20 dark:border-gray-700/20 shadow-lg">
                        <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                        <span class="text-blue-600 dark:text-blue-400 font-medium tracking-wide text-sm uppercase">Persoonlijke Introductie</span>
                        <div class="w-2 h-2 bg-purple-500 rounded-full animate-pulse animation-delay-1000"></div>
                    </div>
                </div>

                <div class="fade-in-scale">
                    <!-- Hoofd titel met gradient effect -->
                    <h1 class="text-5xl sm:text-6xl md:text-7xl font-black mb-8 tracking-tight">
                        <span class="block bg-gradient-to-r from-gray-900 via-blue-800 to-purple-800 dark:from-white dark:via-blue-200 dark:to-purple-200 bg-clip-text text-transparent leading-tight">
                            Over Mij
                        </span>
                        <span class="block text-3xl sm:text-4xl md:text-5xl font-light text-gray-600 dark:text-gray-300 mt-2">
                            & Mijn Verhaal
                        </span>
                    </h1>
                    
                    <!-- Beschrijving met betere typografie -->
                    <div class="max-w-3xl mx-auto">
                        <p class="text-xl text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
                            Een passie voor <span class="font-semibold text-blue-600 dark:text-blue-400">innovatie</span>, 
                            gedreven door <span class="font-semibold text-purple-600 dark:text-purple-400">creativiteit</span>, 
                            en toegewijd aan <span class="font-semibold text-indigo-600 dark:text-indigo-400">excellentie</span>
                        </p>
                        
                        <!-- Stats sectie -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
                            <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                                <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">4+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Jaar Ervaring</div>
                            </div>
                            <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                                <div class="text-3xl font-bold text-purple-600 dark:text-purple-400">15K+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Gebruikers Bereikt</div>
                            </div>
                            <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                                <div class="text-3xl font-bold text-green-600 dark:text-green-400">50+</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Projecten</div>
                            </div>
                            <div class="text-center p-4 bg-white/60 dark:bg-gray-800/60 backdrop-blur-sm rounded-2xl border border-white/20 dark:border-gray-700/20">
                                <div class="text-3xl font-bold text-pink-600 dark:text-pink-400">100%</div>
                                <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Passie</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="relative py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            <!-- Profile Card Container -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <!-- Left: Profile Image & Quick Info -->
                <div class="slide-in-left">
                    <div class="relative">
                        <!-- Main Profile Card -->
                        <div class="glass rounded-3xl p-8 md:p-12 relative overflow-hidden group">
                            <!-- Background Pattern -->
                            <div class="absolute inset-0 opacity-10">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-purple-600"></div>
                                <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, rgba(255,255,255,0.2) 2px, transparent 2px); background-size: 24px 24px;"></div>
                            </div>
                            
                            <!-- Profile Image -->
                            <div class="relative z-10 mb-8">
                                <div class="w-48 h-48 md:w-56 md:h-56 mx-auto relative">
                                    <!-- Animated Border -->
                                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-full p-1 gradient-shift">
                                        <div class="w-full h-full bg-white dark:bg-gray-800 rounded-full p-2">
                                            <img src="<?php echo $assetsPath; ?>/images/profile.jpg" 
                                                 alt="Naoufal Andichi" 
                                                 class="w-full h-full object-cover rounded-full group-hover:scale-105 transition-transform duration-500">
                                        </div>
                                    </div>
                                    
                                    <!-- Floating Status Badge -->
                                    <div class="absolute -bottom-4 -right-4 glass rounded-2xl px-4 py-2 float-animation">
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 bg-green-500 rounded-full pulse-custom"></div>
                                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Beschikbaar</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Name & Title -->
                            <div class="relative z-10 text-center">
                                <h2 class="text-3xl md:text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-gray-800 to-gray-600 dark:from-white dark:to-gray-300 mb-2">
                                    Naoufal Andichi
                                </h2>
                                <p class="text-lg md:text-xl text-blue-600 dark:text-blue-400 font-semibold mb-6">
                                    Software Developer
                                </p>
                                
                                <!-- Location & Status -->
                                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 text-gray-600 dark:text-gray-400">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-map-marker-alt text-red-500"></i>
                                        <span>Arnhem, Nederland</span>
                                    </div>
                                    <div class="hidden sm:block w-1 h-1 bg-gray-400 rounded-full"></div>
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-graduation-cap text-blue-500"></i>
                                        <span>RijnIJssel Student</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Tech Stack -->
                        <div class="absolute -bottom-8 -right-8 hidden lg:block">
                            <div class="glass rounded-2xl p-4 float-animation" style="animation-delay: 1s;">
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-blue-500/20 text-blue-700 dark:text-blue-300 rounded-lg text-sm font-medium">PHP</span>
                                    <span class="px-3 py-1 bg-purple-500/20 text-purple-700 dark:text-purple-300 rounded-lg text-sm font-medium">Laravel</span>
                                    <span class="px-3 py-1 bg-yellow-500/20 text-yellow-700 dark:text-yellow-300 rounded-lg text-sm font-medium">JavaScript</span>
                                    <span class="px-3 py-1 bg-green-500/20 text-green-700 dark:text-green-300 rounded-lg text-sm font-medium">Vue.js</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right: About Content -->
                <div class="slide-in-right">
                    <div class="glass rounded-3xl p-8 md:p-12 relative overflow-hidden">
                        <!-- Background Decoration -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-blue-500/10 to-transparent rounded-full"></div>
                        <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-purple-500/10 to-transparent rounded-full"></div>
                        
                        <div class="relative z-10">
                            <!-- Section Header -->
                            <div class="mb-8">
                                <h3 class="text-3xl md:text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600 mb-4">
                                    Mijn Verhaal
                                </h3>
                                <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full"></div>
                            </div>
                            
                            <!-- Story Content -->
                            <div class="space-y-6 text-gray-700 dark:text-gray-300 leading-relaxed">
                                <p class="text-lg">
                                    Als <span class="font-semibold text-blue-600 dark:text-blue-400">passioneerder software developer</span> 
                                    in opleiding bij het RijnIJssel in Arnhem, werk ik dagelijks aan het verwezenlijken van 
                                    <span class="font-semibold text-purple-600 dark:text-purple-400">innovatieve digitale oplossingen</span>.
                                </p>
                                
                                <p class="text-lg">
                                    Mijn reis begon met nieuwsgierigheid naar hoe technologie werkt, en is uitgegroeid tot een 
                                    <span class="font-semibold text-indigo-600 dark:text-indigo-400">diepe passie voor ontwikkeling</span>. 
                                    Ik geloof in de kracht van clean code, gebruiksvriendelijk design en continue learning.
                                </p>
                                
                                <p class="text-lg">
                                    Momenteel werk ik bij <span class="font-semibold text-green-600 dark:text-green-400">Developing B.V.</span>, 
                                    waar ik mijn vaardigheden in de praktijk breng en voortdurend nieuwe technieken leer. 
                                    Van WordPress tot Laravel, van vanilla JavaScript tot moderne frameworks - 
                                    ik sta altijd open voor nieuwe uitdagingen.
                                </p>
                            </div>
                            
                            <!-- Call to Action -->
                            <div class="mt-8 pt-6 border-t border-gray-200/20 dark:border-gray-700/20">
                                <a href="#contact" class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                                    <i class="fas fa-handshake"></i>
                                    <span>Laten we samenwerken</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience & Expertise Section -->
    <section class="relative py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50/50 to-blue-50/50 dark:from-gray-800/50 dark:to-blue-900/50">
        <div class="max-w-7xl mx-auto">
            
            <!-- Section Header -->
            <div class="text-center mb-16 slide-in-up">
                <h2 class="text-5xl md:text-6xl font-black mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 dark:from-indigo-400 dark:via-purple-400 dark:to-pink-400">
                        Ervaring & Expertise
                    </span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Mijn professionele reis en technische vaardigheden
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-full mx-auto mt-4"></div>
            </div>

            <!-- Experience Cards Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-20">
                
                <!-- Education Card -->
                <div class="group slide-in-left">
                    <div class="glass rounded-3xl p-8 h-full relative overflow-hidden transition-all duration-500 hover:scale-105">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 opacity-5">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-indigo-600"></div>
                            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" width=\"60\" height=\"60\" viewBox=\"0 0 60 60\"%3E%3Cg fill-rule=\"evenodd\"%3E%3Cg fill=\"%23000\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M30 0L60 30L30 60L0 30z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-size: 30px 30px;"></div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="relative z-10 mb-6">
                            <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center transform transition-all duration-500 group-hover:scale-110 group-hover:rotate-6">
                                <i class="fas fa-graduation-cap text-3xl text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10 text-center">
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-3">
                                Opleiding
                            </h3>
                            <p class="text-blue-600 dark:text-blue-400 font-semibold mb-4">
                                Software Developer
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                                Student bij het RijnIJssel in Arnhem. Specialisatie in moderne webontwikkeling 
                                met focus op innovatieve technologieën en praktijkgerichte projecten.
                            </p>
                            
                            <!-- Progress Bar -->
                            <div class="space-y-2">
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-600 dark:text-gray-400">Voortgang</span>
                                    <span class="text-blue-600 dark:text-blue-400 font-semibold">85%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full transform origin-left scale-x-0 group-hover:scale-x-[0.85] transition-transform duration-1000 ease-out" style="transform: scaleX(0.85);"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Decorative Corner -->
                        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-bl from-blue-500/20 to-transparent rounded-full transform translate-x-10 -translate-y-10"></div>
                    </div>
                </div>
                
                <!-- Work Experience Card -->
                <div class="group slide-in-up">
                    <div class="glass rounded-3xl p-8 h-full relative overflow-hidden transition-all duration-500 hover:scale-105">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 opacity-5">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-600"></div>
                            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 40 40\"%3E%3Cg fill-rule=\"evenodd\"%3E%3Cg fill=\"%23000\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-size: 20px 20px;"></div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="relative z-10 mb-6">
                            <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center transform transition-all duration-500 group-hover:scale-110 group-hover:rotate-6">
                                <i class="fas fa-laptop-code text-3xl text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10 text-center">
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-3">
                                Werkervaring
                            </h3>
                            <p class="text-purple-600 dark:text-purple-400 font-semibold mb-4">
                                Developing B.V.
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                                Praktijkervaring met moderne tools: WordPress, PHP/Laravel, Tailwind CSS. 
                                Ontwikkeling van diverse professionele projecten in een dynamische omgeving.
                            </p>
                            
                            <!-- Tech Stack Tags -->
                            <div class="flex flex-wrap gap-2 justify-center">
                                <span class="px-3 py-1 bg-purple-500/20 text-purple-700 dark:text-purple-300 rounded-lg text-xs font-medium">WordPress</span>
                                <span class="px-3 py-1 bg-purple-500/20 text-purple-700 dark:text-purple-300 rounded-lg text-xs font-medium">PHP/Laravel</span>
                                <span class="px-3 py-1 bg-purple-500/20 text-purple-700 dark:text-purple-300 rounded-lg text-xs font-medium">Tailwind CSS</span>
                            </div>
                        </div>
                        
                        <!-- Decorative Corner -->
                        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-bl from-purple-500/20 to-transparent rounded-full transform translate-x-10 -translate-y-10"></div>
                    </div>
                </div>
                
                <!-- Personal Development Card -->
                <div class="group slide-in-right">
                    <div class="glass rounded-3xl p-8 h-full relative overflow-hidden transition-all duration-500 hover:scale-105">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 opacity-5">
                            <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-emerald-600"></div>
                            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"50\" viewBox=\"0 0 50 50\"%3E%3Cg fill-rule=\"evenodd\"%3E%3Cg fill=\"%23000\" fill-opacity=\"0.1\"%3E%3Ccircle cx=\"25\" cy=\"25\" r=\"3\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-size: 25px 25px;"></div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="relative z-10 mb-6">
                            <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center transform transition-all duration-500 group-hover:scale-110 group-hover:rotate-6">
                                <i class="fas fa-rocket text-3xl text-white"></i>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10 text-center">
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-3">
                                Passie & Ambitie
                            </h3>
                            <p class="text-green-600 dark:text-green-400 font-semibold mb-4">
                                Persoonlijke Ontwikkeling
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                                Continue learning, innovatieve projecten ontwikkelen, en bijdragen aan de 
                                tech community. Focus op modern development en emerging technologies.
                            </p>
                            
                            <!-- Skills Icons -->
                            <div class="flex justify-center gap-4">
                                <div class="w-10 h-10 rounded-xl bg-green-500/20 flex items-center justify-center">
                                    <i class="fas fa-code text-green-600 dark:text-green-400"></i>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-green-500/20 flex items-center justify-center">
                                    <i class="fas fa-lightbulb text-green-600 dark:text-green-400"></i>
                                </div>
                                <div class="w-10 h-10 rounded-xl bg-green-500/20 flex items-center justify-center">
                                    <i class="fas fa-book text-green-600 dark:text-green-400"></i>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Decorative Corner -->
                        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-bl from-green-500/20 to-transparent rounded-full transform translate-x-10 -translate-y-10"></div>
                    </div>
                </div>
            </div>

            <!-- Technical Skills Visualization -->
            <div class="slide-in-up">
                <div class="glass rounded-3xl p-8 md:p-12 relative overflow-hidden">
                    <!-- Background Decoration -->
                    <div class="absolute inset-0 opacity-5">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500"></div>
                        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%), radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%), radial-gradient(circle at 40% 40%, rgba(120, 119, 255, 0.3) 0%, transparent 50%); background-size: 500px 500px;"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="text-center mb-12">
                            <h3 class="text-4xl md:text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-pink-600 mb-4">
                                Technische Vaardigheden
                            </h3>
                            <p class="text-xl text-gray-600 dark:text-gray-300">
                                Mijn expertise in moderne webtechnologieën
                            </p>
                        </div>
                        
                        <!-- Skills Grid -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                            
                            <!-- Frontend Skills -->
                            <div class="space-y-8">
                                <div class="text-center mb-8">
                                    <h4 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Frontend Development</h4>
                                    <div class="w-16 h-1 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mx-auto"></div>
                                </div>
                                
                                <?php 
                                $frontendSkills = [
                                    ['name' => 'HTML/CSS', 'level' => 95, 'icon' => 'fab fa-html5', 'color' => 'from-red-500 to-orange-600'],
                                    ['name' => 'JavaScript', 'level' => 90, 'icon' => 'fab fa-js', 'color' => 'from-yellow-400 to-yellow-600'],
                                    ['name' => 'TailwindCSS', 'level' => 95, 'icon' => 'fab fa-css3-alt', 'color' => 'from-cyan-500 to-blue-500'],
                                    ['name' => 'React', 'level' => 80, 'icon' => 'fab fa-react', 'color' => 'from-cyan-400 to-blue-500'],
                                    ['name' => 'Vue.js', 'level' => 75, 'icon' => 'fab fa-vuejs', 'color' => 'from-green-500 to-emerald-600'],
                                ];
                                
                                foreach ($frontendSkills as $skill): 
                                ?>
                                <div class="group/skill">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br <?= $skill['color'] ?> flex items-center justify-center transform transition-all duration-500 group-hover/skill:scale-110 group-hover/skill:rotate-12">
                                                <i class="<?= $skill['icon'] ?> text-xl text-white"></i>
                                            </div>
                                            <h5 class="text-lg font-semibold text-gray-800 dark:text-white"><?= $skill['name'] ?></h5>
                                        </div>
                                        <span class="text-lg font-bold bg-clip-text text-transparent bg-gradient-to-r <?= $skill['color'] ?>"><?= $skill['level'] ?>%</span>
                                    </div>
                                    
                                    <!-- Advanced Progress Bar -->
                                    <div class="relative h-4 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                        <!-- Background glow -->
                                        <div class="absolute inset-0 bg-gradient-to-r <?= $skill['color'] ?> opacity-20 rounded-full"></div>
                                        
                                        <!-- Progress fill -->
                                        <div class="h-full bg-gradient-to-r <?= $skill['color'] ?> rounded-full transform origin-left transition-all duration-1000 ease-out relative overflow-hidden" 
                                             style="width: <?= $skill['level'] ?>%;">
                                            
                                            <!-- Shine effect -->
                                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent transform -skew-x-12 animate-pulse"></div>
                                            
                                            <!-- Pulse dot -->
                                            <div class="absolute right-1 top-1/2 transform -translate-y-1/2 w-2 h-2 bg-white rounded-full pulse-custom"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            
                            <!-- Backend Skills -->
                            <div class="space-y-8">
                                <div class="text-center mb-8">
                                    <h4 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Backend Development</h4>
                                    <div class="w-16 h-1 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mx-auto"></div>
                                </div>
                                
                                <?php 
                                $backendSkills = [
                                    ['name' => 'PHP', 'level' => 95, 'icon' => 'fab fa-php', 'color' => 'from-indigo-500 to-purple-600'],
                                    ['name' => 'Laravel', 'level' => 90, 'icon' => 'fab fa-laravel', 'color' => 'from-red-500 to-pink-600'],
                                    ['name' => 'MySQL', 'level' => 85, 'icon' => 'fas fa-database', 'color' => 'from-orange-500 to-amber-600'],
                                    ['name' => 'Node.js', 'level' => 75, 'icon' => 'fab fa-node-js', 'color' => 'from-green-500 to-emerald-600'],
                                    ['name' => 'REST API', 'level' => 80, 'icon' => 'fas fa-exchange-alt', 'color' => 'from-blue-500 to-indigo-600'],
                                ];
                                
                                foreach ($backendSkills as $skill): 
                                ?>
                                <div class="group/skill">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br <?= $skill['color'] ?> flex items-center justify-center transform transition-all duration-500 group-hover/skill:scale-110 group-hover/skill:rotate-12">
                                                <i class="<?= $skill['icon'] ?> text-xl text-white"></i>
                                            </div>
                                            <h5 class="text-lg font-semibold text-gray-800 dark:text-white"><?= $skill['name'] ?></h5>
                                        </div>
                                        <span class="text-lg font-bold bg-clip-text text-transparent bg-gradient-to-r <?= $skill['color'] ?>"><?= $skill['level'] ?>%</span>
                                    </div>
                                    
                                    <!-- Advanced Progress Bar -->
                                    <div class="relative h-4 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                                        <!-- Background glow -->
                                        <div class="absolute inset-0 bg-gradient-to-r <?= $skill['color'] ?> opacity-20 rounded-full"></div>
                                        
                                        <!-- Progress fill -->
                                        <div class="h-full bg-gradient-to-r <?= $skill['color'] ?> rounded-full transform origin-left transition-all duration-1000 ease-out relative overflow-hidden" 
                                             style="width: <?= $skill['level'] ?>%;">
                                            
                                            <!-- Shine effect -->
                                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent transform -skew-x-12 animate-pulse"></div>
                                            
                                            <!-- Pulse dot -->
                                            <div class="absolute right-1 top-1/2 transform -translate-y-1/2 w-2 h-2 bg-white rounded-full pulse-custom"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Goals & Ambitions Section -->
    <section class="relative py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            <!-- Section Header -->
            <div class="text-center mb-16 slide-in-up">
                <h2 class="text-5xl md:text-6xl font-black mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-600 via-pink-600 to-red-600 dark:from-purple-400 dark:via-pink-400 dark:to-red-400">
                        Doelen & Ambities
                    </span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Mijn visie voor de toekomst en professionele groeiplannen
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-purple-500 to-red-500 rounded-full mx-auto mt-4"></div>
            </div>

            <!-- Goals Timeline -->
            <div class="relative">
                
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-purple-500 via-pink-500 to-red-500 rounded-full hidden lg:block"></div>
                
                <!-- Goals Grid -->
                <div class="space-y-16">
                    
                    <!-- Short Term Goals -->
                    <div class="relative">
                        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                            
                            <!-- Content (Left) -->
                            <div class="slide-in-left lg:text-right">
                                <div class="glass rounded-3xl p-8 md:p-10 relative overflow-hidden group">
                                    <!-- Background Pattern -->
                                    <div class="absolute inset-0 opacity-5">
                                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-600"></div>
                                        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" width=\"80\" height=\"80\" viewBox=\"0 0 80 80\"%3E%3Cg fill-rule=\"evenodd\"%3E%3Cg fill=\"%23000\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M40 0l40 40-40 40L0 40z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-size: 40px 40px;"></div>
                                    </div>
                                    
                                    <div class="relative z-10">
                                        <div class="flex items-center gap-4 mb-6 lg:justify-end">
                                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center transform transition-all duration-500 group-hover:scale-110 group-hover:rotate-6">
                                                <i class="fas fa-rocket text-2xl text-white"></i>
                                            </div>
                                            <div>
                                                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white">Korte Termijn</h3>
                                                <p class="text-purple-600 dark:text-purple-400 font-semibold">2024 - 2025</p>
                                            </div>
                                        </div>
                                        
                                        <div class="space-y-4">
                                            <div class="flex items-center gap-3 lg:justify-end">
                                                <span class="lg:order-2 text-gray-700 dark:text-gray-300">Afstuderen als Software Developer</span>
                                                <div class="lg:order-1 w-6 h-6 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                                                    <i class="fas fa-check text-white text-xs"></i>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-3 lg:justify-end">
                                                <span class="lg:order-2 text-gray-700 dark:text-gray-300">Portfolio uitbreiden met innovatieve projecten</span>
                                                <div class="lg:order-1 w-6 h-6 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                                                    <i class="fas fa-check text-white text-xs"></i>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-3 lg:justify-end">
                                                <span class="lg:order-2 text-gray-700 dark:text-gray-300">Expertise in moderne frameworks verdiepen</span>
                                                <div class="lg:order-1 w-6 h-6 rounded-full bg-green-500 flex items-center justify-center flex-shrink-0">
                                                    <i class="fas fa-check text-white text-xs"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Floating Icon -->
                                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center float-animation opacity-80">
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Visual (Right) -->
                            <div class="mt-8 lg:mt-0 slide-in-right">
                                <div class="relative">
                                    <!-- Main Visual Card -->
                                    <div class="glass rounded-3xl p-8 relative overflow-hidden h-64">
                                        <!-- Animated Background -->
                                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-pink-600/10"></div>
                                        
                                        <!-- Floating Elements -->
                                        <div class="absolute inset-0 overflow-hidden">
                                            <?php for($i = 0; $i < 15; $i++): ?>
                                            <div class="absolute w-4 h-4 bg-purple-400/30 rounded-full float-animation"
                                                 style="
                                                    top: <?php echo rand(10, 80); ?>%;
                                                    left: <?php echo rand(10, 80); ?>%;
                                                    animation-delay: <?php echo $i * 0.3; ?>s;
                                                    animation-duration: <?php echo rand(3, 6); ?>s;
                                                 "></div>
                                            <?php endfor; ?>
                                        </div>
                                        
                                        <!-- Central Icon -->
                                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <div class="w-32 h-32 rounded-full bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center gradient-shift">
                                                <i class="fas fa-graduation-cap text-5xl text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Timeline Dot -->
                        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-purple-500 rounded-full border-4 border-white dark:border-gray-800 shadow-lg hidden lg:block"></div>
                    </div>
                    
                    <!-- Tech Stack Expansion -->
                    <div class="relative">
                        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                            
                            <!-- Visual (Left) -->
                            <div class="slide-in-left">
                                <div class="relative">
                                    <!-- Main Visual Card -->
                                    <div class="glass rounded-3xl p-8 relative overflow-hidden h-64">
                                        <!-- Animated Background -->
                                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-indigo-600/10"></div>
                                        
                                        <!-- Tech Icons Cloud -->
                                        <div class="absolute inset-0 overflow-hidden">
                                            <?php 
                                            $techIcons = [
                                                ['icon' => 'fab fa-react', 'color' => 'text-blue-500', 'size' => 'text-2xl'],
                                                ['icon' => 'fab fa-vuejs', 'color' => 'text-green-500', 'size' => 'text-xl'],
                                                ['icon' => 'fab fa-node-js', 'color' => 'text-green-600', 'size' => 'text-2xl'],
                                                ['icon' => 'fab fa-js', 'color' => 'text-yellow-500', 'size' => 'text-lg'],
                                                ['icon' => 'fab fa-python', 'color' => 'text-blue-600', 'size' => 'text-xl'],
                                                ['icon' => 'fab fa-docker', 'color' => 'text-blue-500', 'size' => 'text-lg'],
                                            ];
                                            
                                            foreach ($techIcons as $index => $tech): 
                                            ?>
                                            <div class="absolute float-animation"
                                                 style="
                                                    top: <?php echo rand(20, 70); ?>%;
                                                    left: <?php echo rand(20, 70); ?>%;
                                                    animation-delay: <?php echo $index * 0.5; ?>s;
                                                 ">
                                                <i class="<?php echo $tech['icon'] . ' ' . $tech['color'] . ' ' . $tech['size']; ?>"></i>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                        
                                        <!-- Central Icon -->
                                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <div class="w-32 h-32 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center gradient-shift">
                                                <i class="fas fa-code text-5xl text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Content (Right) -->
                            <div class="mt-8 lg:mt-0 slide-in-right">
                                <div class="glass rounded-3xl p-8 md:p-10 relative overflow-hidden group">
                                    <!-- Background Pattern -->
                                    <div class="absolute inset-0 opacity-5">
                                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-indigo-600"></div>
                                        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" width=\"80\" height=\"80\" viewBox=\"0 0 80 80\"%3E%3Cg fill-rule=\"evenodd\"%3E%3Cg fill=\"%23000\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M40 0l40 40-40 40L0 40z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-size: 40px 40px;"></div>
                                    </div>
                                    
                                    <div class="relative z-10">
                                        <div class="flex items-center gap-4 mb-6">
                                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center transform transition-all duration-500 group-hover:scale-110 group-hover:rotate-6">
                                                <i class="fas fa-code text-2xl text-white"></i>
                                            </div>
                                            <div>
                                                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white">Tech Stack Verbreding</h3>
                                                <p class="text-blue-600 dark:text-blue-400 font-semibold">2025 - 2026</p>
                                            </div>
                                        </div>
                                        
                                        <div class="space-y-4">
                                            <div class="flex items-center gap-3">
                                                <i class="fab fa-react text-blue-500 text-xl"></i>
                                                <span class="text-gray-700 dark:text-gray-300">React & Next.js beheersen</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <i class="fab fa-vuejs text-green-500 text-xl"></i>
                                                <span class="text-gray-700 dark:text-gray-300">Vue.js specialist worden</span>
                                            </div>
                                            <div class="flex items-center gap-3">
                                                <i class="fab fa-node-js text-yellow-500 text-xl"></i>
                                                <span class="text-gray-700 dark:text-gray-300">Node.js backend masteren</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Floating Icon -->
                                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center float-animation opacity-80" style="animation-delay: 1s;">
                                        <i class="fas fa-cog text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Timeline Dot -->
                        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-blue-500 rounded-full border-4 border-white dark:border-gray-800 shadow-lg hidden lg:block"></div>
                    </div>
                    
                    <!-- Personal Development -->
                    <div class="relative">
                        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                            
                            <!-- Content (Left) -->
                            <div class="slide-in-left lg:text-right">
                                <div class="glass rounded-3xl p-8 md:p-10 relative overflow-hidden group">
                                    <!-- Background Pattern -->
                                    <div class="absolute inset-0 opacity-5">
                                        <div class="absolute inset-0 bg-gradient-to-br from-green-500 to-emerald-600"></div>
                                        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg xmlns=\"http://www.w3.org/2000/svg\" width=\"80\" height=\"80\" viewBox=\"0 0 80 80\"%3E%3Cg fill-rule=\"evenodd\"%3E%3Cg fill=\"%23000\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M40 0l40 40-40 40L0 40z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-size: 40px 40px;"></div>
                                    </div>
                                    
                                    <div class="relative z-10">
                                        <div class="flex items-center gap-4 mb-6 lg:justify-end">
                                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center transform transition-all duration-500 group-hover:scale-110 group-hover:rotate-6">
                                                <i class="fas fa-brain text-2xl text-white"></i>
                                            </div>
                                            <div>
                                                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white">Persoonlijke Ontwikkeling</h3>
                                                <p class="text-green-600 dark:text-green-400 font-semibold">Continue Groei</p>
                                            </div>
                                        </div>
                                        
                                        <div class="space-y-4">
                                            <div class="flex items-center gap-3 lg:justify-end">
                                                <span class="lg:order-2 text-gray-700 dark:text-gray-300">Blijven leren en groeien</span>
                                                <div class="lg:order-1 w-6 h-6 rounded-full bg-amber-500 flex items-center justify-center flex-shrink-0">
                                                    <i class="fas fa-lightbulb text-white text-xs"></i>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-3 lg:justify-end">
                                                <span class="lg:order-2 text-gray-700 dark:text-gray-300">Netwerk uitbreiden in tech community</span>
                                                <div class="lg:order-1 w-6 h-6 rounded-full bg-amber-500 flex items-center justify-center flex-shrink-0">
                                                    <i class="fas fa-lightbulb text-white text-xs"></i>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-3 lg:justify-end">
                                                <span class="lg:order-2 text-gray-700 dark:text-gray-300">Bijdragen aan open source projecten</span>
                                                <div class="lg:order-1 w-6 h-6 rounded-full bg-amber-500 flex items-center justify-center flex-shrink-0">
                                                    <i class="fas fa-lightbulb text-white text-xs"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Floating Icon -->
                                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center float-animation opacity-80" style="animation-delay: 2s;">
                                        <i class="fas fa-heart text-white"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Visual (Right) -->
                            <div class="mt-8 lg:mt-0 slide-in-right">
                                <div class="relative">
                                    <!-- Main Visual Card -->
                                    <div class="glass rounded-3xl p-8 relative overflow-hidden h-64">
                                        <!-- Animated Background -->
                                        <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 to-emerald-600/10"></div>
                                        
                                        <!-- Growth Network -->
                                        <div class="absolute inset-0 overflow-hidden">
                                            <!-- Connection Lines -->
                                            <svg class="absolute inset-0 w-full h-full" viewBox="0 0 300 300">
                                                <defs>
                                                    <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                                        <stop offset="0%" style="stop-color:#10b981;stop-opacity:0.3" />
                                                        <stop offset="100%" style="stop-color:#059669;stop-opacity:0.6" />
                                                    </linearGradient>
                                                </defs>
                                                <path d="M50 150 Q150 50 250 150" stroke="url(#lineGradient)" stroke-width="2" fill="none" class="animate-pulse"/>
                                                <path d="M50 150 Q150 250 250 150" stroke="url(#lineGradient)" stroke-width="2" fill="none" class="animate-pulse"/>
                                                <path d="M150 50 L150 250" stroke="url(#lineGradient)" stroke-width="2" fill="none" class="animate-pulse"/>
                                            </svg>
                                            
                                            <!-- Network Nodes -->
                                            <div class="absolute top-4 left-4 w-6 h-6 bg-green-500 rounded-full pulse-custom"></div>
                                            <div class="absolute top-4 right-4 w-6 h-6 bg-emerald-500 rounded-full pulse-custom" style="animation-delay: 0.5s;"></div>
                                            <div class="absolute bottom-4 left-4 w-6 h-6 bg-green-600 rounded-full pulse-custom" style="animation-delay: 1s;"></div>
                                            <div class="absolute bottom-4 right-4 w-6 h-6 bg-emerald-600 rounded-full pulse-custom" style="animation-delay: 1.5s;"></div>
                                        </div>
                                        
                                        <!-- Central Icon -->
                                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                            <div class="w-32 h-32 rounded-full bg-gradient-to-br from-green-500 to-emerald-600 flex items-center justify-center gradient-shift">
                                                <i class="fas fa-users text-5xl text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Timeline Dot -->
                        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-green-500 rounded-full border-4 border-white dark:border-gray-800 shadow-lg hidden lg:block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Advanced JavaScript for Enhanced Interactivity -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS (Animate On Scroll) with enhanced settings
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1200,
            once: false,
            offset: 100,
            easing: 'ease-out-cubic',
            delay: 100
        });
    }
    
    // Enhanced Intersection Observer for smooth animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                
                // Trigger skill bar animations
                if (entry.target.classList.contains('group/skill')) {
                    const progressBar = entry.target.querySelector('[style*="width"]');
                    if (progressBar) {
                        progressBar.style.transform = 'scaleX(' + progressBar.style.width.replace('%', '') / 100 + ')';
                    }
                }
            }
        });
    }, observerOptions);
    
    // Observe all animated elements
    document.querySelectorAll('.slide-in-left, .slide-in-right, .slide-in-up, .fade-in-scale, .group/skill').forEach(el => {
        observer.observe(el);
    });
    
    // Smooth scrolling for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Enhanced parallax effect for background elements
    let ticking = false;
    
    function updateParallax() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.morphing-shape');
        
        parallaxElements.forEach((element, index) => {
            const speed = 0.5 + (index * 0.1);
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
        
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestTick);
    
    // Dynamic gradient animation for glassmorphism cards
    const glassCards = document.querySelectorAll('.glass');
    
    glassCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;
            
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale(1)';
        });
    });
    
    // Skill level counter animation
    function animateValue(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const currentValue = Math.floor(progress * (end - start) + start);
            element.textContent = currentValue + '%';
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }
    
    // Trigger skill counters when they come into view
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const percentage = entry.target.textContent.replace('%', '');
                animateValue(entry.target, 0, parseInt(percentage), 2000);
                skillObserver.unobserve(entry.target);
            }
        });
    });
    
    document.querySelectorAll('.bg-clip-text.text-transparent[class*="font-bold"]').forEach(el => {
        if (el.textContent.includes('%')) {
            skillObserver.observe(el);
        }
    });
    
    // Advanced floating animation for particles
    function createFloatingParticle() {
        const particle = document.createElement('div');
        particle.className = 'fixed w-2 h-2 bg-blue-400/20 rounded-full pointer-events-none z-10';
        particle.style.left = Math.random() * window.innerWidth + 'px';
        particle.style.top = window.innerHeight + 'px';
        
        document.body.appendChild(particle);
        
        const animation = particle.animate([
            { 
                transform: 'translateY(0px) scale(0)', 
                opacity: 0 
            },
            { 
                transform: 'translateY(-50px) scale(1)', 
                opacity: 1 
            },
            { 
                transform: `translateY(-${window.innerHeight + 100}px) scale(0)`, 
                opacity: 0 
            }
        ], {
            duration: Math.random() * 3000 + 2000,
            easing: 'ease-out'
        });
        
        animation.onfinish = () => particle.remove();
    }
    
    // Create floating particles periodically
    setInterval(createFloatingParticle, 3000);
    
    // Enhanced card hover effects
    document.querySelectorAll('.group').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.3s ease';
            this.style.transform = 'translateY(-5px)';
            this.style.boxShadow = '0 20px 40px rgba(0,0,0,0.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0px)';
            this.style.boxShadow = 'none';
        });
    });
    
    // Interactive timeline dots
    document.querySelectorAll('[class*="bg-purple-500"][class*="rounded-full"]').forEach(dot => {
        if (dot.classList.contains('w-6') && dot.classList.contains('h-6')) {
            dot.addEventListener('click', function() {
                // Create ripple effect
                const ripple = document.createElement('div');
                ripple.className = 'absolute inset-0 bg-white rounded-full animate-ping';
                this.appendChild(ripple);
                setTimeout(() => ripple.remove(), 600);
            });
        }
    });
    
    // Dynamic text typing effect for hero subtitle
    const subtitle = document.querySelector('p.text-xl.md\\:text-2xl');
    if (subtitle) {
        const originalText = subtitle.innerHTML;
        subtitle.innerHTML = '';
        
        let i = 0;
        function typeWriter() {
            if (i < originalText.length) {
                subtitle.innerHTML += originalText.charAt(i);
                i++;
                setTimeout(typeWriter, 50);
            }
        }
        
        // Start typing effect after a delay
        setTimeout(typeWriter, 1000);
    }
    
    // Performance optimization: Debounced resize handler
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function() {
            // Recalculate any position-dependent animations
            updateParallax();
        }, 250);
    });
    
    // Accessibility: Respect prefers-reduced-motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    
    if (prefersReducedMotion.matches) {
        // Disable animations for users who prefer reduced motion
        document.querySelectorAll('[class*="animate-"]').forEach(el => {
            el.style.animation = 'none';
        });
        
        document.querySelectorAll('[class*="transition-"]').forEach(el => {
            el.style.transition = 'none';
        });
    }
    
    console.log('🚀 About page animations initialized successfully!');
});

// Additional utility functions
window.addEventListener('load', function() {
    // Hide loading indicators and show content
    document.body.classList.add('loaded');
    
    // Initialize any additional libraries or components
    if (typeof initializeAdditionalComponents === 'function') {
        initializeAdditionalComponents();
    }
});
</script>

<?php 
// Bepaal de correcte pad voor includes gebaseerd op uitvoeringscontext
$includesFooterPath = file_exists('includes/footer.php') ? 'includes/footer.php' : '../includes/footer.php';
include $includesFooterPath; 
?> 