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
                    Een overzicht van mijn technische expertise en professionele competenties
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Frontend Skills -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow transform hover:-translate-y-1 duration-300" 
                     data-aos="fade-right">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-2 bg-blue-100 rounded-lg">
                            <svg class="w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-semibold">Frontend</h2>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Specialisatie in het bouwen van moderne, responsieve en gebruiksvriendelijke interfaces
                        met focus op performance en toegankelijkheid.
                    </p>
                    <div class="space-y-4">
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-html5 text-orange-500"></i>
                                    HTML/CSS
                                </span>
                                <span class="text-blue-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                <div class="bg-blue-600 h-2 rounded-full transform origin-left transition-transform duration-1000 hover:scale-x-105"
                                     style="width: 90%"></div>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">
                                Semantic HTML, CSS3, Flexbox, Grid, Animations, Responsive Design
                            </p>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-js text-yellow-400"></i>
                                    JavaScript/TypeScript
                                </span>
                                <span class="text-blue-600">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                <div class="bg-blue-600 h-2 rounded-full transform origin-left transition-transform duration-1000 hover:scale-x-105"
                                     style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-react text-blue-400"></i>
                                    React
                                </span>
                                <span class="text-blue-600">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                <div class="bg-blue-600 h-2 rounded-full transform origin-left transition-transform duration-1000 hover:scale-x-105"
                                     style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-css3 text-blue-500"></i>
                                    TailwindCSS
                                </span>
                                <span class="text-blue-600">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                <div class="bg-blue-600 h-2 rounded-full transform origin-left transition-transform duration-1000 hover:scale-x-105"
                                     style="width: 95%"></div>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">
                                Utility-first CSS, Custom Components, Responsive Design
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Backend Skills -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow transform hover:-translate-y-1 duration-300" 
                     data-aos="fade-left">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-2 bg-green-100 rounded-lg">
                            <svg class="w-6 h-6 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                      d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-semibold">Backend</h2>
                    </div>
                    <p class="text-gray-600 mb-6">
                        Ervaring met het ontwikkelen van schaalbare applicaties en RESTful APIs
                        met focus op security en performance.
                    </p>
                    <div class="space-y-4">
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-php text-purple-600"></i>
                                    PHP
                                </span>
                                <span class="text-blue-600">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                <div class="bg-blue-600 h-2 rounded-full transform origin-left transition-transform duration-1000 hover:scale-x-105"
                                     style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-laravel text-red-600"></i>
                                    Laravel
                                </span>
                                <span class="text-blue-600">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                <div class="bg-blue-600 h-2 rounded-full transform origin-left transition-transform duration-1000 hover:scale-x-105"
                                     style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fas fa-database text-blue-600"></i>
                                    MySQL/PostgreSQL
                                </span>
                                <span class="text-blue-600">75%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                <div class="bg-blue-600 h-2 rounded-full transform origin-left transition-transform duration-1000 hover:scale-x-105"
                                     style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fas fa-code text-gray-600"></i>
                                    API Development
                                </span>
                                <span class="text-blue-600">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                <div class="bg-blue-600 h-2 rounded-full transform origin-left transition-transform duration-1000 hover:scale-x-105"
                                     style="width: 80%"></div>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">
                                RESTful APIs, API Security, Documentation
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Development Tools -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow transform hover:-translate-y-1 duration-300" 
                     data-aos="fade-right">
                    <h2 class="text-2xl font-semibold mb-4">Development Tools</h2>
                    <p class="text-gray-600 mb-6">
                        Beheersing van moderne ontwikkeltools en workflows voor efficiënte softwareontwikkeling.
                    </p>
                    <div class="space-y-4">
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-git-alt"></i>
                                    Git & Version Control
                                </span>
                                <span class="text-blue-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                <div class="bg-blue-600 h-2 rounded-full transform origin-left transition-transform duration-1000 hover:scale-x-105"
                                     style="width: 90%"></div>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">
                                Git, GitHub, Branching Strategies, Code Review
                            </p>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700 flex items-center gap-2">
                                    <i class="fab fa-docker"></i>
                                    Docker
                                </span>
                                <span class="text-blue-600">75%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                <div class="bg-blue-600 h-2 rounded-full transform origin-left transition-transform duration-1000 hover:scale-x-105"
                                     style="width: 75%"></div>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">
                                Containerization, Docker Compose, Development Environments
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Soft Skills -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-shadow transform hover:-translate-y-1 duration-300" 
                     data-aos="fade-left">
                    <h2 class="text-2xl font-semibold mb-4">Soft Skills</h2>
                    <p class="text-gray-600 mb-6">
                        Professionele vaardigheden die bijdragen aan effectieve samenwerking en projectsucces.
                    </p>
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 bg-blue-50 rounded-lg transform transition-all duration-300 hover:scale-105 hover:bg-blue-100 cursor-pointer">
                                <h3 class="font-semibold text-blue-900">Communicatie</h3>
                                <p class="text-sm text-blue-700 mt-2">
                                    Helder en effectief communiceren met teamleden en stakeholders
                                </p>
                            </div>
                            <div class="p-4 bg-blue-50 rounded-lg transform transition-all duration-300 hover:scale-105 hover:bg-blue-100 cursor-pointer">
                                <h3 class="font-semibold text-blue-900">Probleemoplossend</h3>
                                <p class="text-sm text-blue-700 mt-2">
                                    Analytisch denken en creatieve oplossingen vinden
                                </p>
                            </div>
                            <div class="p-4 bg-blue-50 rounded-lg transform transition-all duration-300 hover:scale-105 hover:bg-blue-100 cursor-pointer">
                                <h3 class="font-semibold text-blue-900">Teamwork</h3>
                                <p class="text-sm text-blue-700 mt-2">
                                    Effectief samenwerken in agile teams
                                </p>
                            </div>
                            <div class="p-4 bg-blue-50 rounded-lg transform transition-all duration-300 hover:scale-105 hover:bg-blue-100 cursor-pointer">
                                <h3 class="font-semibold text-blue-900">Leergierig</h3>
                                <p class="text-sm text-blue-700 mt-2">
                                    Continu ontwikkelen en nieuwe technologieën leren
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Extra Skills -->
                <div class="bg-white p-6 rounded-lg shadow-md col-span-1 md:col-span-2 hover:shadow-xl transition-shadow" 
                     data-aos="fade-up">
                    <h2 class="text-2xl font-semibold mb-4">Andere Vaardigheden</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-center flex items-center justify-center gap-2">
                            <i class="fab fa-git-alt"></i>
                            Git
                        </span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-center flex items-center justify-center gap-2">
                            <i class="fab fa-docker"></i>
                            Docker
                        </span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-center flex items-center justify-center gap-2">
                            <i class="fas fa-sync-alt"></i>
                            Agile/Scrum
                        </span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-center flex items-center justify-center gap-2">
                            <i class="fas fa-infinity"></i>
                            CI/CD
                        </span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-center flex items-center justify-center gap-2">
                            <i class="fab fa-wordpress text-blue-700"></i>
                            WordPress
                        </span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-center flex items-center justify-center gap-2">
                            <i class="fas fa-server"></i>
                            REST APIs
                        </span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-center flex items-center justify-center gap-2">
                            <i class="fas fa-vial"></i>
                            Unit Testing
                        </span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-center flex items-center justify-center gap-2">
                            <i class="fas fa-mobile-alt"></i>
                            Responsive Design
                        </span>
                    </div>
                    <p class="text-gray-600">
                        Naast deze technische vaardigheden ben ik ook ervaren in het werken met verschillende 
                        development methodologieën en tools die bijdragen aan efficiënte softwareontwikkeling.
                    </p>
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