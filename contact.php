<?php
$pageTitle = "Laten We Praten";
$currentPage = "contact";
include 'includes/header.php';
?>

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50/50 to-purple-50/50 dark:from-gray-900 dark:via-blue-900/20 dark:to-purple-900/20 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute w-[500px] h-[500px] bg-blue-500/30 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
        <div class="absolute w-[500px] h-[500px] bg-purple-500/30 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000 right-0"></div>
        <div class="absolute w-[500px] h-[500px] bg-indigo-500/30 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000 bottom-0"></div>
    </div>

    <div class="relative pt-40 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header Section with Typing Effect -->
            <div class="text-center mb-20" data-aos="fade-down">
                <h1 class="text-6xl font-extrabold mb-6 relative inline-block">
                    <span class="absolute -inset-1 blur-xl bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 opacity-30"></span>
                    <span class="relative bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 dark:from-blue-400 dark:via-purple-400 dark:to-indigo-400">
                        Laten We Samenwerken
                    </span>
                </h1>
                <p id="typing-text" class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed opacity-0">
                    Klaar om iets geweldigs te bouwen? Neem contact met mij op!
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Enhanced Contact Form -->
                <div class="group relative perspective-1000" data-aos="fade-right">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                    <div class="relative bg-white/90 dark:bg-gray-800/90 backdrop-blur-xl rounded-xl p-8 border border-gray-100/20 dark:border-gray-700/20 transform transition-all duration-500 group-hover:translate-z-10 hover:shadow-2xl">
                        <form id="contactForm" class="space-y-6">
                            <div class="form-group space-y-2">
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Naam</label>
                                <div class="relative">
                                    <input type="text" id="name" name="name" 
                                           class="form-input w-full px-4 py-3 rounded-lg bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                           required>
                                    <div class="input-focus-effect"></div>
                                </div>
                            </div>

                            <div class="form-group space-y-2">
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email" 
                                           class="form-input w-full px-4 py-3 rounded-lg bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                           required>
                                    <div class="input-focus-effect"></div>
                                </div>
                            </div>

                            <div class="form-group space-y-2">
                                <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Onderwerp</label>
                                <div class="relative">
                                    <input type="text" id="subject" name="subject" 
                                           class="form-input w-full px-4 py-3 rounded-lg bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                           required>
                                    <div class="input-focus-effect"></div>
                                </div>
                            </div>

                            <div class="form-group space-y-2">
                                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Bericht</label>
                                <div class="relative">
                                    <textarea id="message" name="message" rows="6" 
                                              class="form-textarea w-full px-4 py-3 rounded-lg bg-white/50 dark:bg-gray-700/50 backdrop-blur-sm border border-gray-200/50 dark:border-gray-600/50 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 resize-none"
                                              required></textarea>
                                    <div class="input-focus-effect"></div>
                                </div>
                            </div>

                            <button type="submit" 
                                    class="w-full relative group overflow-hidden px-6 py-3 rounded-xl bg-gradient-to-r from-blue-500 to-indigo-600 text-white transform hover:-translate-y-0.5 transition-all duration-200">
                                <span class="relative z-10">Verstuur Bericht</span>
                                <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-200 origin-left"></div>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="space-y-6" data-aos="fade-left">
                    <!-- Contact Links -->
                    <div class="bg-white/80 dark:bg-gray-800/90 rounded-xl p-8 shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">Sociale Media</h3>
                        <div class="space-y-6">
                            <a href="mailto:naoufal.exe@gmail.com" class="flex items-center space-x-4 group">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center transform transition-all duration-200 group-hover:scale-110">
                                    <i class="fas fa-envelope text-xl text-white"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Email</p>
                                    <p class="text-gray-900 dark:text-white font-medium">naoufal.exe@gmail.com</p>
                                </div>
                                <i class="fas fa-arrow-right text-gray-400 transform transition-transform duration-200 group-hover:translate-x-1"></i>
                            </a>

                            <a href="https://www.linkedin.com/in/naoufalandichi/" target="_blank" class="flex items-center space-x-4 group">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center transform transition-all duration-200 group-hover:scale-110">
                                    <i class="fab fa-linkedin-in text-xl text-white"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">LinkedIn</p>
                                    <p class="text-gray-900 dark:text-white font-medium">Naoufal Andichi</p>
                                </div>
                                <i class="fas fa-arrow-right text-gray-400 transform transition-transform duration-200 group-hover:translate-x-1"></i>
                            </a>

                            <a href="https://github.com/nandichi" target="_blank" class="flex items-center space-x-4 group">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center transform transition-all duration-200 group-hover:scale-110">
                                    <i class="fab fa-github text-xl text-white"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">GitHub</p>
                                    <p class="text-gray-900 dark:text-white font-medium">nandichi</p>
                                </div>
                                <i class="fas fa-arrow-right text-gray-400 transform transition-transform duration-200 group-hover:translate-x-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="bg-white/80 dark:bg-gray-800/90 rounded-xl p-8 shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Locatie</h3>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-xl text-white"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 dark:text-gray-400">Adres</p>
                                <p class="text-gray-900 dark:text-white font-medium">Ede, Gelderland</p>
                                <p class="text-gray-600 dark:text-gray-300">Nederland</p>
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
        <div id="modalContent" class="relative bg-gradient-to-br from-white/90 to-white/80 dark:from-gray-900/90 dark:to-gray-800/80 rounded-3xl p-8 max-w-md w-full transform transition-all duration-500 scale-0 opacity-0 shadow-[0_0_50px_0_rgba(0,0,0,0.1)] dark:shadow-[0_0_50px_0_rgba(255,255,255,0.1)]">
            <!-- Decorative Elements -->
            <div class="absolute -top-20 left-1/2 -translate-x-1/2">
                <div class="relative">
                    <div class="absolute inset-0 animate-pulse">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-blue-500/30 rounded-full blur-2xl"></div>
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-purple-500/30 rounded-full blur-2xl"></div>
                    </div>
                    <div class="relative w-40 h-40 flex items-center justify-center">
                        <svg class="w-full h-full text-blue-500 success-animation" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle class="success-circle" cx="12" cy="12" r="11" stroke="currentColor" stroke-width="2"/>
                            <path class="success-check" d="M7 13l3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="text-center mt-16">
                <h3 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 mb-4">
                    Geweldig!
                </h3>
                <p class="text-gray-600 dark:text-gray-300 mb-8">Je bericht is succesvol verzonden. Ik neem zo snel mogelijk contact met je op!</p>

                <button onclick="closeModal()" 
                        class="group relative px-8 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-xl overflow-hidden transition-all duration-300 hover:scale-105">
                    <div class="absolute inset-0 bg-white mix-blend-overlay opacity-0 group-hover:opacity-20 transition-opacity"></div>
                    <span class="relative">Terug naar het formulier</span>
                </button>
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

.animation-delay-4000 {
    animation-delay: 4s;
}

.perspective-1000 {
    perspective: 1000px;
}

.translate-z-10 {
    transform: translateZ(10px);
}

.input-focus-effect {
    @apply absolute bottom-0 left-0 h-0.5 w-0 bg-gradient-to-r from-blue-500 to-indigo-600 transition-all duration-300;
}

.form-input:focus + .input-focus-effect,
.form-textarea:focus + .input-focus-effect {
    @apply w-full;
}

/* Success Checkmark Animation */
.success-checkmark {
    width: 80px;
    height: 80px;
    margin: 0 auto;
    position: relative;
}

.check-icon {
    width: 80px;
    height: 80px;
    position: relative;
    border-radius: 50%;
    box-sizing: content-box;
    border: 4px solid #4CAF50;
}

.check-icon::before {
    top: 3px;
    left: -2px;
    width: 30px;
    transform-origin: 100% 50%;
    border-radius: 100px 0 0 100px;
}

.check-icon::after {
    top: 0;
    left: 30px;
    width: 60px;
    transform-origin: 0 50%;
    border-radius: 0 100px 100px 0;
    animation: rotate-circle 4.25s ease-in;
}

.icon-line {
    height: 5px;
    background-color: #4CAF50;
    display: block;
    border-radius: 2px;
    position: absolute;
    z-index: 10;
}

.icon-line.line-tip {
    top: 46px;
    left: 14px;
    width: 25px;
    transform: rotate(45deg);
    animation: icon-line-tip 0.75s;
}

.icon-line.line-long {
    top: 38px;
    right: 8px;
    width: 47px;
    transform: rotate(-45deg);
    animation: icon-line-long 0.75s;
}

.icon-circle {
    top: -4px;
    left: -4px;
    z-index: 10;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    position: absolute;
    box-sizing: content-box;
    border: 4px solid rgba(76, 175, 80, 0.5);
}

.icon-fix {
    top: 8px;
    width: 5px;
    left: 26px;
    z-index: 1;
    height: 85px;
    position: absolute;
    transform: rotate(-45deg);
    background-color: #FFFFFF;
}

@keyframes rotate-circle {
    0% { transform: rotate(-45deg); }
    5% { transform: rotate(-45deg); }
    12% { transform: rotate(-405deg); }
    100% { transform: rotate(-405deg); }
}

@keyframes icon-line-tip {
    0% { width: 0; left: 1px; top: 19px; }
    54% { width: 0; left: 1px; top: 19px; }
    70% { width: 50px; left: -8px; top: 37px; }
    84% { width: 17px; left: 21px; top: 48px; }
    100% { width: 25px; left: 14px; top: 45px; }
}

@keyframes icon-line-long {
    0% { width: 0; right: 46px; top: 54px; }
    65% { width: 0; right: 46px; top: 54px; }
    84% { width: 55px; right: 0px; top: 35px; }
    100% { width: 47px; right: 8px; top: 38px; }
}

/* Success Modal Animations */
@keyframes success-circle {
    from {
        stroke-dasharray: 0 100;
    }
    to {
        stroke-dasharray: 100 100;
    }
}

@keyframes success-check {
    from {
        stroke-dasharray: 0 100;
        stroke-dashoffset: 100;
    }
    to {
        stroke-dasharray: 100 100;
        stroke-dashoffset: 0;
    }
}

.success-animation circle {
    stroke-dasharray: 0 100;
    animation: success-circle 1s ease-out forwards;
}

.success-animation path {
    stroke-dasharray: 0 100;
    stroke-dashoffset: 100;
    animation: success-check 0.6s 0.4s ease-out forwards;
}

.modal-enter {
    animation: modal-enter 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
}

@keyframes modal-enter {
    from {
        transform: scale(0.8);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS animations
    AOS.init({
        duration: 1000,
        once: true,
        offset: 50,
        easing: 'ease-out-cubic'
    });

    // Typing effect for intro text
    const typingText = document.getElementById('typing-text');
    const text = typingText.textContent.trim();
    typingText.textContent = '';
    typingText.classList.remove('opacity-0');
    
    let charIndex = 0;
    function typeText() {
        if (charIndex < text.length) {
            typingText.textContent += text.charAt(charIndex);
            charIndex++;
            setTimeout(typeText, 50);
        }
    }
    setTimeout(typeText, 500);

    // Form validation and submission
    const form = document.getElementById('contactForm');
    const inputs = form.querySelectorAll('input, textarea');

    inputs.forEach(input => {
        input.addEventListener('invalid', function(e) {
            e.preventDefault();
            this.classList.add('border-red-500');
        });

        input.addEventListener('input', function() {
            this.classList.remove('border-red-500');
        });
    });

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const submitButton = this.querySelector('button[type="submit"]');
        submitButton.disabled = true;
        
        // Simulate loading state
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
            submitButton.innerHTML = 'Verstuur Bericht';
        });
    });
});

function showSuccessModal() {
    const modal = document.getElementById('successModal');
    const modalContent = document.getElementById('modalContent');
    
    modal.classList.remove('hidden');
    setTimeout(() => {
        modalContent.classList.add('scale-100', 'opacity-100', 'modal-enter');
    }, 10);
}

function closeModal() {
    const modal = document.getElementById('successModal');
    const modalContent = document.getElementById('modalContent');
    
    modalContent.classList.remove('scale-100', 'opacity-100', 'modal-enter');
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}
</script>

<?php include 'includes/footer.php'; ?> 