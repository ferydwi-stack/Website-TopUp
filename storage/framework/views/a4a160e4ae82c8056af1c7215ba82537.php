<!-- Footer Component -->
<footer class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #0ea5e9 0%, transparent 50%), radial-gradient(circle at 75% 75%, #eab308 0%, transparent 50%); background-size: 100px 100px;"></div>
    </div>
    
    <div class="container mx-auto px-4 py-16 relative z-10">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Company Info -->
            <div class="space-y-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-600 to-primary-700 rounded-2xl flex items-center justify-center shadow-glow">
                        <i class="fas fa-gamepad text-white text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-black text-gradient">GOC TopUp</h3>
                        <p class="text-sm text-slate-300">Game Top Up Center</p>
                    </div>
                </div>
                <p class="text-slate-300 leading-relaxed">
                    Platform top up diamond game terpercaya dengan harga terjangkau, proses instan, dan layanan 24/7.
                </p>
                
                <!-- Social Media -->
                <div class="flex space-x-4">
                    <a href="#" class="w-12 h-12 bg-slate-800/50 backdrop-blur-sm rounded-xl flex items-center justify-center text-slate-300 hover:bg-primary-600 hover:text-white hover:shadow-glow transform hover:scale-110 transition-all duration-300">
                        <i class="fab fa-facebook text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-slate-800/50 backdrop-blur-sm rounded-xl flex items-center justify-center text-slate-300 hover:bg-primary-600 hover:text-white hover:shadow-glow transform hover:scale-110 transition-all duration-300">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-slate-800/50 backdrop-blur-sm rounded-xl flex items-center justify-center text-slate-300 hover:bg-emerald-600 hover:text-white hover:shadow-glow transform hover:scale-110 transition-all duration-300">
                        <i class="fab fa-whatsapp text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-slate-800/50 backdrop-blur-sm rounded-xl flex items-center justify-center text-slate-300 hover:bg-accent-600 hover:text-white hover:shadow-glow transform hover:scale-110 transition-all duration-300">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h4 class="text-lg font-semibold text-white mb-4 flex items-center">
                    <i class="fas fa-link mr-2 text-primary-400"></i>
                    Quick Links
                </h4>
                <ul class="space-y-2">
                    <li>
                        <a href="<?php echo e(route('home.index')); ?>" class="text-slate-300 hover:text-primary-400 transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-primary-500"></i>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('games.index')); ?>" class="text-slate-300 hover:text-primary-400 transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-primary-500"></i>
                            Games
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('promo.index')); ?>" class="text-slate-300 hover:text-primary-400 transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-primary-500"></i>
                            Promo
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('guide.index')); ?>" class="text-slate-300 hover:text-primary-400 transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-primary-500"></i>
                            Cara Top Up
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('faq.index')); ?>" class="text-slate-300 hover:text-primary-400 transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-primary-500"></i>
                            FAQ
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Support & Help -->
            <div class="space-y-4">
                <h4 class="text-lg font-semibold text-white mb-4 flex items-center">
                    <i class="fas fa-headset mr-2 text-primary-400"></i>
                    Support & Help
                </h4>
                <ul class="space-y-2">
                    <li>
                        <a href="<?php echo e(route('support.index')); ?>" class="text-slate-300 hover:text-primary-400 transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-primary-500"></i>
                            Hubungi Kami
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('history.index')); ?>" class="text-slate-300 hover:text-primary-400 transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-primary-500"></i>
                            Riwayat Transaksi
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-slate-300 hover:text-primary-400 transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-primary-500"></i>
                            Status Order
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-slate-300 hover:text-primary-400 transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-primary-500"></i>
                            Panduan Penggunaan
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-slate-300 hover:text-primary-400 transition-colors duration-200 flex items-center">
                            <i class="fas fa-chevron-right mr-2 text-xs text-primary-500"></i>
                            Kebijakan Privasi
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Payment Methods -->
            <div class="space-y-4">
                <h4 class="text-lg font-semibold text-white mb-4 flex items-center">
                    <i class="fas fa-credit-card mr-2 text-primary-400"></i>
                    Metode Pembayaran
                </h4>
                <div class="grid grid-cols-2 gap-3">
                    <div class="bg-slate-800/50 backdrop-blur-sm rounded-xl p-3 hover:bg-slate-700/70 transform hover:scale-105 transition-all duration-300 border border-slate-700/50">
                        <i class="fas fa-university text-3xl text-emerald-400 mb-2"></i>
                        <p class="text-xs text-slate-300">Bank Transfer</p>
                    </div>
                    <div class="bg-slate-800/50 backdrop-blur-sm rounded-xl p-3 hover:bg-slate-700/70 transform hover:scale-105 transition-all duration-300 border border-slate-700/50">
                        <i class="fas fa-mobile-alt text-3xl text-primary-400 mb-2"></i>
                        <p class="text-xs text-slate-300">E-Wallet</p>
                    </div>
                    <div class="bg-slate-800/50 backdrop-blur-sm rounded-xl p-3 hover:bg-slate-700/70 transform hover:scale-105 transition-all duration-300 border border-slate-700/50">
                        <i class="fas fa-credit-card text-3xl text-accent-400 mb-2"></i>
                        <p class="text-xs text-slate-300">Credit Card</p>
                    </div>
                    <div class="bg-slate-800/50 backdrop-blur-sm rounded-xl p-3 hover:bg-slate-700/70 transform hover:scale-105 transition-all duration-300 border border-slate-700/50">
                        <i class="fas fa-store text-3xl text-warning-400 mb-2"></i>
                        <p class="text-xs text-slate-300">Convenience Store</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-slate-700 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-slate-400 text-sm">
                    <p>&copy; 2024 GOC TopUp. All rights reserved.</p>
                </div>
                
                <div class="flex space-x-6">
                    <a href="#" class="text-slate-400 hover:text-primary-400 transition-colors duration-200 text-sm">
                        Terms of Service
                    </a>
                    <a href="#" class="text-slate-400 hover:text-primary-400 transition-colors duration-200 text-sm">
                        Privacy Policy
                    </a>
                    <a href="#" class="text-slate-400 hover:text-primary-400 transition-colors duration-200 text-sm">
                        Cookie Policy
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\laragon\www\qr\resources\views/components/footer.blade.php ENDPATH**/ ?>