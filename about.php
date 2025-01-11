<?php
$pageTitle = "Over Mij";
$currentPage = "about";
include 'includes/header.php';
?>

<div class="pt-24 pb-12 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Linker kolom met foto en persoonlijke info -->
            <div class="space-y-8" data-aos="fade-right">
                <div class="relative">
                    <div class="w-72 h-72 mx-auto rounded-lg overflow-hidden shadow-xl">
                        <div class="w-full h-full bg-gradient-to-br from-blue-600 to-blue-400 dark:from-blue-700 dark:to-blue-500 flex items-center justify-center text-white text-4xl font-bold">
                            <div class="space-y-4 text-center">
                                <span class="block text-6xl">NA</span>
                                <span class="block text-lg font-normal">Software Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -inset-1 bg-blue-500/10 dark:bg-blue-400/10 rounded-lg blur-2xl -z-10"></div>
                </div>
                
                <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Contact Informatie</h2>
                    <ul class="space-y-3 text-gray-600 dark:text-gray-300">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:naoufal.exe@gmail.com" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                naoufal.exe@gmail.com
                            </a>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>Software Developer bij Developing B.V.</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-3 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>Wageningen, Nederland</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Rechter kolom met uitgebreide informatie -->
            <div class="space-y-8" data-aos="fade-left">
                <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-md">
                    <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">Over Mij</h1>
                    <div class="space-y-6 text-gray-600 dark:text-gray-300">
                        <p>
                            Ik ben een enthousiaste student die websites en apps maakt bij het RijnIJssel in Arnhem. 
                            Ik vind het leuk om dingen te maken die mensen helpen. Ik zoek altijd naar nieuwe 
                            uitdagingen om beter te worden in programmeren.
                        </p>
                        <p>
                            Op dit moment loop ik stage bij Developing B.V. Hier werk ik aan verschillende projecten 
                            met WordPress, PHP/Laravel en Tailwind CSS. Ik vind het leuk om wat ik heb geleerd 
                            in de praktijk te gebruiken.
                        </p>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Opleiding & Ervaring</h2>
                    <div class="space-y-4 text-gray-600 dark:text-gray-300">
                        <div class="mb-6">
                            <h3 class="font-semibold">Developing B.V.</h3>
                            <p>Software Developer Stage</p>
                            <p class="text-sm">sep. 2024 - heden</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="font-semibold">Rijn IJssel</h3>
                            <p>MBO 4 - Software Developer</p>
                            <p class="text-sm">2021 - 2024</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="font-semibold">I@control</h3>
                            <p>Software Developer Stage</p>
                            <p class="text-sm">feb. 2023 - apr. 2023</p>
                        </div>
                        <div class="mb-6">
                            <h3 class="font-semibold">Pallas Athene College</h3>
                            <p>MAVO</p>
                            <p class="text-sm">2017 - 2021</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Professionele Focus</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="font-semibold text-lg mb-2 text-gray-900 dark:text-white">Expertise Gebieden</h3>
                            <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                                <li>WordPress</li>
                                <li>PHP/Laravel</li>
                                <li>Tailwind CSS</li>
                                <li>TypeScript</li>
                                <li>C#</li>
                                <li>ASP.NET</li>
                                <li>AngularJS</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-2 text-gray-900 dark:text-white">Interesses</h3>
                            <ul class="list-disc list-inside text-gray-600 dark:text-gray-300 space-y-2">
                                <li>Front-end Development</li>
                                <li>Back-end Development</li>
                                <li>Web Development</li>
                                <li>Software Architecture</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 