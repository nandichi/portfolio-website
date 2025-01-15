<?php
$pageTitle = "Over Mij";
$currentPage = "about";
include 'includes/header.php';
?>

<div class="min-h-screen bg-gradient-to-br from-gray-50 via-gray-100 to-gray-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
    <!-- Decoratieve elementen met zachtere gradients -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-40">
        <div class="absolute -top-1/2 -right-1/2 w-[1000px] h-[1000px] bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-1/2 -left-1/2 w-[1000px] h-[1000px] bg-gradient-to-tr from-green-500/10 to-yellow-500/10 rounded-full blur-3xl"></div>
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
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-6 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-blue-500/20 dark:group-hover:border-blue-400/20">
                            <div class="w-full h-64 mx-auto rounded-xl overflow-hidden">
                                <div class="w-full h-full bg-gradient-to-br from-blue-500/90 to-indigo-600/90 backdrop-blur-sm flex items-center justify-center text-white">
                                    <div class="space-y-4 text-center">
                                        <span class="block text-6xl font-bold">NA</span>
                                        <span class="block text-lg">Software Developer.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="group relative h-full">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-6 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-purple-500/20 dark:group-hover:border-purple-400/20">
                            <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-indigo-600 mb-6">Contact Informatie</h2>
                            <div class="space-y-4">
                                <a href="mailto:naoufal.exe@gmail.com" class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500/90 to-indigo-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                        <i class="fas fa-envelope text-white"></i>
                                    </div>
                                    <span class="text-gray-700 dark:text-gray-300">naoufal.exe@gmail.com</span>
                                </a>
                                <a href="https://github.com/nandichi" target="_blank" class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500/90 to-indigo-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                        <i class="fab fa-github text-white"></i>
                                    </div>
                                    <span class="text-gray-700 dark:text-gray-300">GitHub</span>
                                </a>
                                <a href="https://www.linkedin.com/in/naoufalandichi/" target="_blank" class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500/90 to-indigo-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                        <i class="fab fa-linkedin text-white"></i>
                                    </div>
                                    <span class="text-gray-700 dark:text-gray-300">LinkedIn</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Persoonlijke Highlights -->
                    <div class="group relative h-full">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-6 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-blue-500/20 dark:group-hover:border-blue-400/20">
                            <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-indigo-600 mb-6">Highlights</h2>
                            <div class="space-y-4">
                                <div class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500/90 to-indigo-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                        <i class="fas fa-graduation-cap text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-900 dark:text-white">MBO Niveau 4</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">Software Developer</p>
                                    </div>
                                </div>
                                <div class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500/90 to-indigo-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                        <i class="fas fa-code text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-900 dark:text-white">Stage Ervaring</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">Developing B.V.</p>
                                    </div>
                                </div>
                                <div class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500/90 to-indigo-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                        <i class="fas fa-laptop-code text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-900 dark:text-white">Portfolio Projecten</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">Eigen Ontwikkelde Apps</p>
                                    </div>
                                </div>
                                <div class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500/90 to-indigo-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                        <i class="fas fa-rocket text-white"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-900 dark:text-white">Ambitie</h3>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">Full Stack Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rechter kolom met uitgebreide informatie -->
                <div class="space-y-6" data-aos="fade-left">
                    <!-- Over Mij -->
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-8 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-blue-500/20 dark:group-hover:border-blue-400/20">
                            <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-indigo-600 mb-6">Mijn Verhaal</h2>
                            <div class="space-y-6 text-gray-600 dark:text-gray-300">
                                <p>
                                    Als student Software Developer bij het RijnIJssel in Arnhem werk ik elke dag met veel plezier aan het bouwen van websites en apps. 
                                    Mijn sterke punt? Ik pak nieuwe uitdagingen graag aan en leer supersnel nieuwe programmeertalen en technieken.
                                </p>
                                <p>
                                    Momenteel loop ik stage bij Developing B.V., waar ik al verschillende gave projecten heb gemaakt. 
                                    Ik werk hier met moderne tools zoals WordPress, PHP/Laravel en Tailwind CSS. 
                                    Mijn stagebegeleider is erg tevreden over mijn werk en zegt dat ik snel nieuwe dingen oppak.
                                </p>
                                <p>
                                    In mijn vrije tijd werk ik graag aan eigen projecten om mijn vaardigheden te verbeteren.
                                    Mijn passie ligt bij het ontwikkelen van innovatieve webapplicaties en het verkennen van nieuwe code talen.
                                    Door mijn praktijkervaring en passie voor programmeren kan ik direct waarde toevoegen aan elk development team.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Professionele Focus -->
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-8 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-green-500/20 dark:group-hover:border-green-400/20">
                            <h2 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-emerald-600 mb-6">Professionele Focus</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-6">
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Expertise Gebieden</h3>
                                        <div class="space-y-3">
                                            <?php
                                            $expertises = ['WordPress', 'PHP/Laravel', 'Tailwind CSS', 'TypeScript', 'C#', 'ASP.NET', 'AngularJS'];
                                            foreach ($expertises as $expertise): ?>
                                                <div class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-green-500/90 to-emerald-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                                        <i class="fas fa-check text-sm text-white"></i>
                                                    </div>
                                                    <span class="text-gray-700 dark:text-gray-300"><?php echo $expertise; ?></span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-6">
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Interesses</h3>
                                        <div class="space-y-3">
                                            <?php
                                            $interests = ['Front-end Development', 'Back-end Development', 'Web Development', 'Software Architecture'];
                                            foreach ($interests as $interest): ?>
                                                <div class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-green-500/90 to-emerald-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                                        <i class="fas fa-star text-sm text-white"></i>
                                                    </div>
                                                    <span class="text-gray-700 dark:text-gray-300"><?php echo $interest; ?></span>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
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