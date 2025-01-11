<?php
$pageTitle = "Contact";
$currentPage = "contact";
include 'includes/header.php';
?>

<div class="min-h-screen flex flex-col">
    <div class="flex-grow pt-24 pb-12 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-800">
        <div class="max-w-7xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-16" data-aos="fade-down">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Neem Contact Op</h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    Wil je meer weten of samen iets maken? Stuur me gerust een berichtje!
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white dark:bg-gray-700 rounded-2xl shadow-xl p-8" data-aos="fade-right">
                    <form id="contactForm" class="space-y-6">
                        <div class="space-y-2">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Naam</label>
                            <input type="text" id="name" name="name" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                   placeholder="Jouw naam">
                        </div>

                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" id="email" name="email" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                   placeholder="jouw@email.nl">
                        </div>

                        <div class="space-y-2">
                            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Onderwerp</label>
                            <input type="text" id="subject" name="subject" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                   placeholder="Onderwerp van je bericht">
                        </div>

                        <div class="space-y-2">
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bericht</label>
                            <textarea id="message" name="message" rows="6" 
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-800 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none"
                                      placeholder="Schrijf je bericht hier..."></textarea>
                        </div>

                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 dark:from-blue-500 dark:to-blue-600 text-white py-3 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 dark:hover:from-blue-600 dark:hover:to-blue-700 transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Verstuur Bericht
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="lg:pl-8" data-aos="fade-left">
                    <!-- Direct Contact -->
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 dark:from-blue-600 dark:to-blue-700 rounded-2xl shadow-xl p-8 text-white mb-8">
                        <h3 class="text-2xl font-semibold mb-6">Direct Contact</h3>
                        <div class="space-y-4">
                            <a href="mailto:naoufal.exe@gmail.com" 
                               class="flex items-center space-x-3 group hover:opacity-80 transition-opacity">
                                <div class="bg-white/20 p-3 rounded-lg group-hover:bg-white/30 transition-colors w-11 h-11 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <span class="text-lg">naoufal.exe@gmail.com</span>
                            </a>
                            <a href="https://www.linkedin.com/in/naoufalandichi/" 
                               class="flex items-center space-x-3 group hover:opacity-80 transition-opacity"
                               target="_blank">
                                <div class="bg-white/20 p-3 rounded-lg group-hover:bg-white/30 transition-colors w-11 h-11 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                    </svg>
                                </div>
                                <span class="text-lg">LinkedIn Profiel</span>
                            </a>
                            <a href="https://github.com/nandichi" 
                               class="flex items-center space-x-3 group hover:opacity-80 transition-opacity"
                               target="_blank">
                                <div class="bg-white/20 p-3 rounded-lg group-hover:bg-white/30 transition-colors w-11 h-11 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                    </svg>
                                </div>
                                <span class="text-lg">GitHub Profiel</span>
                            </a>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="bg-white dark:bg-gray-700 rounded-2xl shadow-xl p-8">
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Locatie</h3>
                        <div class="flex items-start space-x-3">
                            <div class="bg-blue-100 dark:bg-blue-900/50 p-3 rounded-lg">
                                <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-medium text-gray-900 dark:text-white">Wageningen</h4>
                                <p class="text-gray-600 dark:text-gray-300 mt-1">Gelderland, Nederland</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Message Modal -->
<div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
    <div class="bg-white dark:bg-gray-800 rounded-lg p-8 max-w-md mx-4 transform transition-all">
        <div class="text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 dark:bg-green-900/50 mb-4">
                <svg class="h-6 w-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2">Bericht verstuurd!</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-6">Bedankt voor je bericht. Ik neem zo snel mogelijk contact met je op.</p>
            <button onclick="closeModal()" 
                    class="bg-blue-600 dark:bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700 dark:hover:bg-blue-600 transition-colors">
                Sluiten
            </button>
        </div>
    </div>
</div>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Hier zou je normaal gesproken de form data versturen
    document.getElementById('successModal').classList.remove('hidden');
});

function closeModal() {
    document.getElementById('successModal').classList.add('hidden');
    document.getElementById('contactForm').reset();
}
</script>

<?php include 'includes/footer.php'; ?> 