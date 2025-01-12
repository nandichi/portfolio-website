<?php
$pageTitle = "Contact";
$currentPage = "contact";
include 'includes/header.php';
?>

<div class="min-h-screen bg-gradient-to-br from-gray-50 via-gray-100 to-gray-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
    <!-- Decoratieve elementen met zachtere gradients -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-40">
        <div class="absolute -top-1/2 -right-1/2 w-[1000px] h-[1000px] bg-gradient-to-br from-blue-500/10 to-purple-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-1/2 -left-1/2 w-[1000px] h-[1000px] bg-gradient-to-tr from-green-500/10 to-yellow-500/10 rounded-full blur-3xl"></div>
    </div>

    <div class="relative pt-24 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header Sectie -->
            <div class="text-center mb-20" data-aos="fade-down">
                <h1 class="text-5xl font-extrabold mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 dark:from-blue-400 dark:via-purple-400 dark:to-indigo-400">
                        Neem Contact Op
                    </span>
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Wil je meer weten of samen iets maken? Stuur me gerust een berichtje!
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="group relative" data-aos="fade-right">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                    <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-8 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-blue-500/20 dark:group-hover:border-blue-400/20">
                        <form id="contactForm" class="space-y-6">
                            <div class="space-y-2">
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Naam</label>
                                <input type="text" id="name" name="name" 
                                       class="w-full px-4 py-3 rounded-lg bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                       placeholder="Jouw naam">
                            </div>

                            <div class="space-y-2">
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                <input type="email" id="email" name="email" 
                                       class="w-full px-4 py-3 rounded-lg bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                       placeholder="jouw@email.nl">
                            </div>

                            <div class="space-y-2">
                                <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Onderwerp</label>
                                <input type="text" id="subject" name="subject" 
                                       class="w-full px-4 py-3 rounded-lg bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                                       placeholder="Onderwerp van je bericht">
                            </div>

                            <div class="space-y-2">
                                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bericht</label>
                                <textarea id="message" name="message" rows="6" 
                                          class="w-full px-4 py-3 rounded-lg bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none"
                                          placeholder="Schrijf je bericht hier..."></textarea>
                            </div>

                            <button type="submit" 
                                    class="w-full bg-gradient-to-r from-blue-500/90 to-indigo-600/90 backdrop-blur-sm text-white py-3 px-6 rounded-xl hover:from-blue-600/90 hover:to-indigo-700/90 transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Verstuur Bericht
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8" data-aos="fade-left">
                    <!-- Direct Contact -->
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-8 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-purple-500/20 dark:group-hover:border-purple-400/20">
                            <h3 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-purple-500 to-indigo-600 mb-6">Direct Contact</h3>
                            <div class="space-y-4">
                                <a href="mailto:naoufal.exe@gmail.com" class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500/90 to-indigo-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                        <i class="fas fa-envelope text-white"></i>
                                    </div>
                                    <span class="text-gray-700 dark:text-gray-300">naoufal.exe@gmail.com</span>
                                </a>
                                <a href="https://www.linkedin.com/in/naoufalandichi/" target="_blank" class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500/90 to-indigo-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                        <i class="fab fa-linkedin text-white"></i>
                                    </div>
                                    <span class="text-gray-700 dark:text-gray-300">LinkedIn Profiel</span>
                                </a>
                                <a href="https://github.com/nandichi" target="_blank" class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-purple-500/90 to-indigo-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                        <i class="fab fa-github text-white"></i>
                                    </div>
                                    <span class="text-gray-700 dark:text-gray-300">GitHub Profiel</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="group relative">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                        <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-8 border border-gray-100/10 dark:border-gray-700/10 transition-all duration-500 group-hover:border-green-500/20 dark:group-hover:border-green-400/20">
                            <h3 class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-emerald-600 mb-6">Locatie</h3>
                            <div class="group/item flex items-center gap-3 transform transition-all duration-300 hover:translate-x-2">
                                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-green-500/90 to-emerald-600/90 backdrop-blur-sm transition-all duration-500 group-hover/item:scale-110 flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h4 class="text-lg font-medium text-gray-900 dark:text-white">Ede</h4>
                                    <p class="text-gray-600 dark:text-gray-300">Gelderland, Nederland</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Message Modal -->
<div id="successModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center">
    <div class="relative bg-white/90 dark:bg-gray-800/90 rounded-xl p-8 max-w-md mx-4 transform transition-all border border-gray-100/10 dark:border-gray-700/10">
        <div class="text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-xl bg-gradient-to-br from-green-500/90 to-emerald-600/90 backdrop-blur-sm mb-4">
                <i class="fas fa-check text-xl text-white"></i>
            </div>
            <h3 class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-500 to-emerald-600 mb-2">Bericht verstuurd!</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-6">Bedankt voor je bericht. Ik neem zo snel mogelijk contact met je op.</p>
            <button onclick="closeModal()" 
                    class="px-6 py-2 bg-gradient-to-r from-green-500/90 to-emerald-600/90 backdrop-blur-sm text-white rounded-xl hover:from-green-600/90 hover:to-emerald-700/90 transform hover:-translate-y-0.5 transition-all duration-200">
                Sluiten
            </button>
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

document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitButton = this.querySelector('button[type="submit"]');
    submitButton.disabled = true;
    
    fetch('process_contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('successModal').classList.remove('hidden');
            this.reset();
        } else {
            alert('Er is een fout opgetreden: ' + data.message);
        }
    })
    .catch(error => {
        alert('Er is een fout opgetreden bij het verzenden van het bericht.');
        console.error('Error:', error);
    })
    .finally(() => {
        submitButton.disabled = false;
    });
});

function closeModal() {
    document.getElementById('successModal').classList.add('hidden');
    document.getElementById('contactForm').reset();
}
</script>

<?php include 'includes/footer.php'; ?> 