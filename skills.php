<?php
$pageTitle = "Vaardigheden";
$currentPage = "skills";
include 'includes/header.php';
?>

<div class="min-h-screen flex flex-col">
    <div class="flex-grow pt-24 pb-12 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-down">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Mijn Vaardigheden</h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Dit zijn de dingen waar ik goed in ben en wat ik allemaal heb geleerd
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Frontend Skills -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow transform hover:-translate-y-1 duration-300" 
                     data-aos="fade-right">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-2 bg-blue-100 rounded-lg">
                            <i class="fas fa-code text-blue-600 text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-semibold">Frontend</h2>
                    </div>
                    
                    <div class="space-y-4">
                        <!-- HTML/CSS -->
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-html5 text-orange-500 text-xl"></i>
                                    HTML/CSS
                                </span>
                                <span class="text-blue-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>

                        <!-- JavaScript -->
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-js text-yellow-400 text-xl"></i>
                                    JavaScript
                                </span>
                                <span class="text-blue-600">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>

                        <!-- React -->
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-react text-blue-400 text-xl"></i>
                                    React
                                </span>
                                <span class="text-blue-600">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow transform hover:-translate-y-1 duration-300" 
                     data-aos="fade-left">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-2 bg-green-100 rounded-lg">
                            <i class="fas fa-database text-green-600 text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-semibold">Backend</h2>
                    </div>

                    <div class="space-y-4">
                        <!-- PHP -->
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-php text-purple-600 text-xl"></i>
                                    PHP
                                </span>
                                <span class="text-blue-600">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>

                        <!-- MySQL -->
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fas fa-database text-blue-500 text-xl"></i>
                                    MySQL
                                </span>
                                <span class="text-blue-600">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>

                        <!-- Laravel -->
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-laravel text-red-500 text-xl"></i>
                                    Laravel
                                </span>
                                <span class="text-blue-600">75%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Development Tools -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow transform hover:-translate-y-1 duration-300" 
                     data-aos="fade-right">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-2 bg-purple-100 rounded-lg">
                            <i class="fas fa-tools text-purple-600 text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-semibold">Development Tools</h2>
                    </div>

                    <div class="space-y-4">
                        <!-- Git -->
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-git-alt text-orange-500 text-xl"></i>
                                    Git & Version Control
                                </span>
                                <span class="text-blue-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>

                        <!-- Docker -->
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-docker text-blue-500 text-xl"></i>
                                    Docker
                                </span>
                                <span class="text-blue-600">75%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Soft Skills -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow transform hover:-translate-y-1 duration-300" 
                     data-aos="fade-left">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-2 bg-yellow-100 rounded-lg">
                            <i class="fas fa-users text-yellow-600 text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-semibold">Soft Skills</h2>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 bg-blue-50 rounded-lg transform transition-all duration-300 hover:scale-105 hover:bg-blue-100">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="fas fa-comments text-blue-600"></i>
                                <h3 class="font-semibold text-blue-900">Communicatie</h3>
                            </div>
                            <p class="text-sm text-blue-700">Helder en effectief communiceren</p>
                        </div>

                        <div class="p-4 bg-blue-50 rounded-lg transform transition-all duration-300 hover:scale-105 hover:bg-blue-100">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="fas fa-lightbulb text-blue-600"></i>
                                <h3 class="font-semibold text-blue-900">Probleemoplossend</h3>
                            </div>
                            <p class="text-sm text-blue-700">Analytisch denken</p>
                        </div>

                        <div class="p-4 bg-blue-50 rounded-lg transform transition-all duration-300 hover:scale-105 hover:bg-blue-100">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="fas fa-users text-blue-600"></i>
                                <h3 class="font-semibold text-blue-900">Teamwork</h3>
                            </div>
                            <p class="text-sm text-blue-700">Effectieve samenwerking</p>
                        </div>

                        <div class="p-4 bg-blue-50 rounded-lg transform transition-all duration-300 hover:scale-105 hover:bg-blue-100">
                            <div class="flex items-center gap-2 mb-2">
                                <i class="fas fa-book text-blue-600"></i>
                                <h3 class="font-semibold text-blue-900">Leergierig</h3>
                            </div>
                            <p class="text-sm text-blue-700">Continue ontwikkeling</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gedetailleerde Ervaringen Sectie -->
            <div class="mt-20">
                <div class="text-center mb-16" data-aos="fade-down">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Mijn Ervaringen</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Een diepgaande blik op mijn projecten en de technologieën die ik heb gebruikt
                    </p>
                </div>
                
                <div class="space-y-12">
                    <!-- PHP & Laravel Experience -->
                    <div class="bg-white rounded-xl shadow-lg p-8 transform hover:shadow-xl transition-all duration-300"
                         data-aos="fade-up">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="p-3 bg-purple-100 rounded-xl">
                                <i class="fab fa-php text-2xl text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">PHP & Laravel</h3>
                                <p class="text-gray-600">Backend Development</p>
                            </div>
                        </div>
                        
                        <div class="prose max-w-none text-gray-600">
                            <p class="mb-4">
                                Voor PAS (Pakket Afhaal Service) en DIVO (online stemmen) heb ik PHP en Laravel gebruikt. Ik koos hiervoor omdat het fijn werkt en er veel handige functies in zitten die ik kon gebruiken.
                            </p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-6">
                                <div class="bg-purple-50 rounded-lg p-4">
                                    <h4 class="font-semibold text-purple-900 mb-2">Waarom PHP & Laravel?</h4>
                                    <ul class="space-y-2 text-purple-800">
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-purple-600"></i>
                                            Snelle ontwikkeling met Eloquent ORM
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-purple-600"></i>
                                            Uitgebreide beveiligingsfuncties
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-purple-600"></i>
                                            Blade templating engine
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="bg-purple-50 rounded-lg p-4">
                                    <h4 class="font-semibold text-purple-900 mb-2">Uitdagingen & Oplossingen</h4>
                                    <ul class="space-y-2 text-purple-800">
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-lightbulb text-purple-600"></i>
                                            Complex database ontwerp opgelost met migrations
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-lightbulb text-purple-600"></i>
                                            API authenticatie met Laravel Sanctum
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- JavaScript & React Experience -->
                    <div class="bg-white rounded-xl shadow-lg p-8 transform hover:shadow-xl transition-all duration-300"
                         data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="p-3 bg-yellow-100 rounded-xl">
                                <i class="fab fa-js text-2xl text-yellow-600"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">JavaScript & React</h3>
                                <p class="text-gray-600">Frontend Development</p>
                            </div>
                        </div>
                        
                        <div class="prose max-w-none text-gray-600">
                            <p class="mb-4">
                                Bij DIVO heb ik React gebruikt om de website mooi en snel te maken. Hierdoor kon ik zorgen dat de stemresultaten meteen te zien waren zonder dat je de pagina hoeft te verversen.
                            </p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-6">
                                <div class="bg-yellow-50 rounded-lg p-4">
                                    <h4 class="font-semibold text-yellow-900 mb-2">Voordelen React</h4>
                                    <ul class="space-y-2 text-yellow-800">
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-yellow-600"></i>
                                            Component-gebaseerde architectuur
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-yellow-600"></i>
                                            Efficiënte DOM updates
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-check-circle text-yellow-600"></i>
                                            Grote community support
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="bg-yellow-50 rounded-lg p-4">
                                    <h4 class="font-semibold text-yellow-900 mb-2">Leermomenten</h4>
                                    <ul class="space-y-2 text-yellow-800">
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-lightbulb text-yellow-600"></i>
                                            State management met Redux
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="fas fa-lightbulb text-yellow-600"></i>
                                            Real-time updates met WebSockets
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Leerproces & Groei -->
                    <div class="bg-gradient-to-br from-blue-600 to-blue-700 text-white rounded-xl shadow-lg p-8"
                         data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-2xl font-bold mb-6">Continu Leren & Ontwikkelen</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-white/10 backdrop-blur-lg rounded-lg p-6 transform hover:scale-105 transition-transform">
                                <i class="fas fa-brain text-3xl mb-4"></i>
                                <h4 class="text-lg font-semibold mb-2">Probleemoplossend Vermogen</h4>
                                <p class="text-white/80">
                                    Als ik tegen problemen aanloop, probeer ik er altijd van te leren en een goede oplossing te vinden.
                                </p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-lg rounded-lg p-6 transform hover:scale-105 transition-transform">
                                <i class="fas fa-users text-3xl mb-4"></i>
                                <h4 class="text-lg font-semibold mb-2">Samenwerking</h4>
                                <p class="text-white/80">
                                    Door samen te werken leer ik van anderen en deel ik mijn eigen kennis.
                                </p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-lg rounded-lg p-6 transform hover:scale-105 transition-transform">
                                <i class="fas fa-rocket text-3xl mb-4"></i>
                                <h4 class="text-lg font-semibold mb-2">Innovatie</h4>
                                <p class="text-white/80">
                                    Altijd op zoek naar nieuwe technologieën en beste practices.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<script>
    // Initialize progress bars with animation
    document.addEventListener('DOMContentLoaded', function() {
        const progressBars = document.querySelectorAll('.bg-blue-600');
        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0';
            setTimeout(() => {
                bar.style.width = width;
            }, 300);
        });
    });

    // Add scroll reveal animation for skill cards
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic'
    });
</script> 