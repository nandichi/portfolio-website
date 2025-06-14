<?php
$pageTitle = "Contact";
$currentPage = "contact";
$pageDescription = "Neem contact op met Naoufal Andichi voor vragen over samenwerking, projecten of andere informatie.";
$pageKeywords = "Naoufal Andichi, contact, e-mail, bericht, samenwerking, vragen";

// Bepaal de correcte pad voor includes gebaseerd op uitvoeringscontext
$includesPath = file_exists('includes/header.php') ? 'includes/header.php' : '../includes/header.php';
include $includesPath;
?>

<!-- Hoofd container met moderne achtergrond -->
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 relative overflow-hidden">
    
    <!-- Achtergrond decoratie -->
    <div class="absolute inset-0">
        <!-- Grid patroon -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,rgba(59,130,246,0.15)_1px,transparent_0)] [background-size:24px_24px]"></div>
        
        <!-- Bewegende gradient orbs -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-gradient-to-r from-purple-400/20 to-pink-500/20 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-gradient-to-r from-blue-500/20 to-cyan-500/20 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2 w-64 h-64 bg-gradient-to-r from-indigo-400/15 to-purple-500/15 rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
    </div>

    <!-- Content Container -->
    <div class="container mx-auto px-6 lg:px-8 relative z-10">
        
        <!-- Header sectie -->
        <div class="text-center mb-16 pt-20">
            <!-- Badge -->
            <div class="inline-flex items-center justify-center mb-6">
                <div class="flex items-center space-x-3 px-6 py-3 bg-white/80 dark:bg-gray-800/80 backdrop-blur-lg rounded-full border border-white/20 dark:border-gray-700/20 shadow-lg">
                    <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                    <span class="text-blue-600 dark:text-blue-400 font-medium tracking-wide text-sm uppercase">Neem contact op</span>
                    <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                </div>
            </div>

            <!-- Hoofd titel -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black mb-4 sm:mb-6 tracking-tight">
                <span class="block bg-gradient-to-r from-gray-900 via-blue-800 to-purple-800 dark:from-white dark:via-blue-200 dark:to-purple-200 bg-clip-text text-transparent leading-tight">
                    Laten We Samenwerken
                </span>
                <span class="block text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-light text-gray-600 dark:text-gray-300 mt-1 sm:mt-2">
                    & Iets Moois Bouwen
                </span>
            </h1>

            <!-- Introductie -->
            <div class="max-w-3xl mx-auto mb-8 sm:mb-12">
                <p class="text-base sm:text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
                    Heb je een idee? Een project? Of gewoon een vraag? Ik sta altijd open voor nieuwe mogelijkheden 
                    en interessante gesprekken. Stuur me een bericht en laten we ontdekken wat we samen kunnen bereiken.
                </p>
            </div>
        </div>

        <!-- Contact sectie -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
            
            <!-- Contact formulier -->
            <div class="group">
                <div class="relative h-full bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                    
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-transparent to-purple-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Decoratieve elementen -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-blue-400/20 to-transparent rounded-full -translate-y-32 translate-x-32 group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <!-- Header -->
                    <div class="relative z-10 bg-gradient-to-br from-blue-500 via-blue-600 to-purple-700 p-4 sm:p-6 lg:p-8">
                        <div class="flex items-center gap-3 sm:gap-4 lg:gap-6">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-white/20 backdrop-blur-sm rounded-xl sm:rounded-2xl flex items-center justify-center border border-white/30 group-hover:rotate-6 transition-transform duration-500">
                                <i class="fas fa-paper-plane text-lg sm:text-xl lg:text-2xl text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-lg sm:text-xl lg:text-2xl font-black text-white mb-1 sm:mb-2">Stuur een Bericht</h3>
                                <p class="text-sm sm:text-base text-blue-100 font-medium">Laat van je horen via het formulier</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Formulier content -->
                    <div class="relative z-10 p-4 sm:p-6 lg:p-8">
                        <form id="contactForm" class="space-y-4 sm:space-y-6">
                            
                            <!-- Naam veld -->
                            <div class="group/field">
                                <label for="name" class="block text-xs sm:text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1 sm:mb-2">
                                    <i class="fas fa-user text-blue-500 mr-1 sm:mr-2 text-xs sm:text-sm"></i>Naam
                                </label>
                                <div class="relative">
                                    <input type="text" id="name" name="name" required
                                           class="w-full px-3 py-3 sm:px-4 sm:py-4 bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 rounded-lg sm:rounded-xl text-sm sm:text-base text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 group-hover/field:border-blue-300 dark:group-hover/field:border-blue-400"
                                           placeholder="Jouw volledige naam">
                                    <div class="absolute bottom-0 left-0 h-0.5 w-0 bg-gradient-to-r from-blue-500 to-purple-500 transition-all duration-300 group-focus-within/field:w-full"></div>
                                </div>
                            </div>

                            <!-- Email veld -->
                            <div class="group/field">
                                <label for="email" class="block text-xs sm:text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1 sm:mb-2">
                                    <i class="fas fa-envelope text-blue-500 mr-1 sm:mr-2 text-xs sm:text-sm"></i>Email
                                </label>
                                <div class="relative">
                                    <input type="email" id="email" name="email" required
                                           class="w-full px-3 py-3 sm:px-4 sm:py-4 bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 rounded-lg sm:rounded-xl text-sm sm:text-base text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 group-hover/field:border-blue-300 dark:group-hover/field:border-blue-400"
                                           placeholder="jouw@email.com">
                                    <div class="absolute bottom-0 left-0 h-0.5 w-0 bg-gradient-to-r from-blue-500 to-purple-500 transition-all duration-300 group-focus-within/field:w-full"></div>
                                </div>
                            </div>

                            <!-- Onderwerp veld -->
                            <div class="group/field">
                                <label for="subject" class="block text-xs sm:text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1 sm:mb-2">
                                    <i class="fas fa-tag text-blue-500 mr-1 sm:mr-2 text-xs sm:text-sm"></i>Onderwerp
                                </label>
                                <div class="relative">
                                    <input type="text" id="subject" name="subject" required
                                           class="w-full px-3 py-3 sm:px-4 sm:py-4 bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 rounded-lg sm:rounded-xl text-sm sm:text-base text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 group-hover/field:border-blue-300 dark:group-hover/field:border-blue-400"
                                           placeholder="Waar gaat je bericht over?">
                                    <div class="absolute bottom-0 left-0 h-0.5 w-0 bg-gradient-to-r from-blue-500 to-purple-500 transition-all duration-300 group-focus-within/field:w-full"></div>
                                </div>
                            </div>

                            <!-- Bericht veld -->
                            <div class="group/field">
                                <label for="message" class="block text-xs sm:text-sm font-semibold text-gray-700 dark:text-gray-300 mb-1 sm:mb-2">
                                    <i class="fas fa-comment-dots text-blue-500 mr-1 sm:mr-2 text-xs sm:text-sm"></i>Bericht
                                </label>
                                <div class="relative">
                                    <textarea id="message" name="message" rows="5" required
                                              class="w-full px-3 py-3 sm:px-4 sm:py-4 bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 rounded-lg sm:rounded-xl text-sm sm:text-base text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 group-hover/field:border-blue-300 dark:group-hover/field:border-blue-400 resize-none"
                                              placeholder="Vertel me over je project, vraag of idee..."></textarea>
                                    <div class="absolute bottom-0 left-0 h-0.5 w-0 bg-gradient-to-r from-blue-500 to-purple-500 transition-all duration-300 group-focus-within/field:w-full"></div>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" 
                                    class="group/btn w-full relative overflow-hidden px-4 py-3 sm:px-6 sm:py-4 lg:px-8 bg-gradient-to-r from-blue-500 via-blue-600 to-purple-600 text-white font-bold rounded-lg sm:rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                                <span class="relative z-10 flex items-center justify-center gap-2 sm:gap-3">
                                    <i class="fas fa-rocket text-sm sm:text-base"></i>
                                    <span class="text-sm sm:text-base">Verstuur Bericht</span>
                                    <i class="fas fa-arrow-right text-sm sm:text-base transform group-hover/btn:translate-x-1 transition-transform duration-300"></i>
                                </span>
                                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-500 transform scale-x-0 group-hover/btn:scale-x-100 transition-transform duration-300 origin-left"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact informatie -->
            <div class="space-y-8">
                
                <!-- Sociale media card -->
                <div class="group">
                    <div class="relative bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-3xl border border-white/20 dark:border-gray-700/20 shadow-xl shadow-black/5 dark:shadow-black/20 overflow-hidden transform transition-all duration-700 hover:scale-[1.02] hover:shadow-2xl">
                        
                        <!-- Gradient overlay -->
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 via-transparent to-pink-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Header -->
                        <div class="relative z-10 bg-gradient-to-br from-purple-500 via-purple-600 to-pink-600 p-4 sm:p-6 lg:p-8">
                            <div class="flex items-center gap-3 sm:gap-4 lg:gap-6">
                                <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-white/20 backdrop-blur-sm rounded-xl sm:rounded-2xl flex items-center justify-center border border-white/30 group-hover:rotate-6 transition-transform duration-500">
                                    <i class="fas fa-share-alt text-lg sm:text-xl lg:text-2xl text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg sm:text-xl lg:text-2xl font-black text-white mb-1 sm:mb-2">Sociale Media</h3>
                                    <p class="text-sm sm:text-base text-purple-100 font-medium">Volg en connect met mij</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social links -->
                        <div class="relative z-10 p-4 sm:p-6 lg:p-8 space-y-4 sm:space-y-6">
                            
                            <!-- Email -->
                            <a href="mailto:naoufal.exe@gmail.com" class="group/link flex items-center gap-4 p-4 rounded-2xl bg-white/40 dark:bg-gray-700/40 backdrop-blur-sm border border-white/20 dark:border-gray-600/20 hover:bg-white/60 dark:hover:bg-gray-700/60 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                                <div class="w-12 h-12 bg-gradient-to-br from-red-400 to-red-600 rounded-xl flex items-center justify-center shadow-lg group-hover/link:rotate-6 transition-transform duration-300">
                                    <i class="fas fa-envelope text-white text-lg"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-900 dark:text-white">Email</h4>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm">naoufal.exe@gmail.com</p>
                                </div>
                                <i class="fas fa-arrow-right text-gray-400 dark:text-gray-500 transform group-hover/link:translate-x-1 transition-transform duration-300"></i>
                            </a>

                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/in/naoufalandichi/" target="_blank" class="group/link flex items-center gap-4 p-4 rounded-2xl bg-white/40 dark:bg-gray-700/40 backdrop-blur-sm border border-white/20 dark:border-gray-600/20 hover:bg-white/60 dark:hover:bg-gray-700/60 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center shadow-lg group-hover/link:rotate-6 transition-transform duration-300">
                                    <i class="fab fa-linkedin-in text-white text-lg"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-900 dark:text-white">LinkedIn</h4>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm">Naoufal Andichi</p>
                                </div>
                                <i class="fas fa-external-link-alt text-gray-400 dark:text-gray-500 transform group-hover/link:translate-x-1 transition-transform duration-300"></i>
                            </a>

                            <!-- GitHub -->
                            <a href="https://github.com/nandichi" target="_blank" class="group/link flex items-center gap-4 p-4 rounded-2xl bg-white/40 dark:bg-gray-700/40 backdrop-blur-sm border border-white/20 dark:border-gray-600/20 hover:bg-white/60 dark:hover:bg-gray-700/60 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                                <div class="w-12 h-12 bg-gradient-to-br from-gray-700 to-gray-900 dark:from-gray-600 dark:to-gray-800 rounded-xl flex items-center justify-center shadow-lg group-hover/link:rotate-6 transition-transform duration-300">
                                    <i class="fab fa-github text-white text-lg"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-900 dark:text-white">GitHub</h4>
                                    <p class="text-gray-600 dark:text-gray-300 text-sm">nandichi</p>
                                </div>
                                <i class="fas fa-external-link-alt text-gray-400 dark:text-gray-500 transform group-hover/link:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- FAQ sectie -->
        <div class="mb-12 sm:mb-16 lg:mb-20">
            <div class="text-center mb-8 sm:mb-12">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-3 sm:mb-4">
                    Veelgestelde <span class="text-blue-600 dark:text-blue-400">Vragen</span>
                </h2>
                <p class="text-sm sm:text-base text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                    Snel antwoord op de meest gestelde vragen
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4 sm:space-y-6">
                <!-- FAQ Item 1 -->
                <div class="group bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-xl sm:rounded-2xl border border-white/20 dark:border-gray-700/20 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="p-4 sm:p-6">
                        <div class="flex items-start sm:items-center gap-3 sm:gap-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg sm:rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-white text-sm sm:text-base"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base sm:text-lg font-bold text-gray-900 dark:text-white mb-1 sm:mb-2">Hoe snel reageer je op berichten?</h3>
                                <p class="text-sm sm:text-base text-gray-600 dark:text-gray-300">Ik probeer binnen 24 uur te reageren op alle berichten. Voor urgente zaken kun je me het beste via LinkedIn contacteren.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="group bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-xl sm:rounded-2xl border border-white/20 dark:border-gray-700/20 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="p-4 sm:p-6">
                        <div class="flex items-start sm:items-center gap-3 sm:gap-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg sm:rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-handshake text-white text-sm sm:text-base"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base sm:text-lg font-bold text-gray-900 dark:text-white mb-1 sm:mb-2">Ben je beschikbaar voor nieuwe projecten?</h3>
                                <p class="text-sm sm:text-base text-gray-600 dark:text-gray-300">Ja! Ik sta altijd open voor interessante projecten en samenwerkingen. Laat me weten waar je aan denkt.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="group bg-white/70 dark:bg-gray-800/70 backdrop-blur-xl rounded-xl sm:rounded-2xl border border-white/20 dark:border-gray-700/20 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="p-4 sm:p-6">
                        <div class="flex items-start sm:items-center gap-3 sm:gap-4">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg sm:rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-code text-white text-sm sm:text-base"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base sm:text-lg font-bold text-gray-900 dark:text-white mb-1 sm:mb-2">Welke technologieën gebruik je?</h3>
                                <p class="text-sm sm:text-base text-gray-600 dark:text-gray-300">Hoofdzakelijk PHP, MySQL, JavaScript, React en TailwindCSS. Bekijk mijn vaardigheden pagina voor een volledig overzicht.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div id="successModal" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/30 backdrop-blur-sm"></div>
    <div class="min-h-screen flex items-center justify-center p-4">
        <div id="modalContent" class="relative bg-white/90 dark:bg-gray-900/90 backdrop-blur-xl rounded-3xl p-12 max-w-md w-full transform transition-all duration-500 scale-0 opacity-0 shadow-2xl border border-white/20 dark:border-gray-700/20">
            
            <!-- Success Icon -->
            <div class="text-center mb-8">
                <div class="w-24 h-24 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-check text-3xl text-white"></i>
                </div>
                <h3 class="text-3xl font-bold bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent mb-4">
                    Bericht Verzonden!
                </h3>
                <p class="text-gray-600 dark:text-gray-300 mb-8">
                    Bedankt voor je bericht! Ik neem zo snel mogelijk contact met je op.
                </p>
                
                <button onclick="closeModal()" 
                        class="w-full px-8 py-4 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                    <i class="fas fa-thumbs-up mr-2"></i>
                    Perfect!
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form validation en submission
    const form = document.getElementById('contactForm');
    const inputs = form.querySelectorAll('input, textarea');

    inputs.forEach(input => {
        input.addEventListener('invalid', function(e) {
            e.preventDefault();
            this.classList.add('border-red-500', 'ring-red-500');
        });

        input.addEventListener('input', function() {
            this.classList.remove('border-red-500', 'ring-red-500');
        });
    });

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const submitButton = this.querySelector('button[type="submit"]');
        const originalHTML = submitButton.innerHTML;
        
        submitButton.disabled = true;
        submitButton.innerHTML = '<span class="flex items-center justify-center"><svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Versturen...</span>';
        
        fetch('src/pages/process_contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showSuccessModal();
                form.reset();
            } else {
                alert('Er is een fout opgetreden: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Er is een fout opgetreden bij het verzenden van het bericht.');
        })
        .finally(() => {
            submitButton.disabled = false;
            submitButton.innerHTML = originalHTML;
        });
    });
});

function showSuccessModal() {
    const modal = document.getElementById('successModal');
    const modalContent = document.getElementById('modalContent');
    
    modal.classList.remove('hidden');
    setTimeout(() => {
        modalContent.classList.add('scale-100', 'opacity-100');
    }, 10);
}

function closeModal() {
    const modal = document.getElementById('successModal');
    const modalContent = document.getElementById('modalContent');
    
    modalContent.classList.remove('scale-100', 'opacity-100');
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}
</script>

<?php 
// Bepaal de correcte pad voor includes gebaseerd op uitvoeringscontext
$includesFooterPath = file_exists('includes/footer.php') ? 'includes/footer.php' : '../includes/footer.php';
include $includesFooterPath; 
?> 