

<?php $__env->startSection('title', 'Beranda - GOC TopUp'); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white py-16 md:py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full blur-xl animate-float"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-accent-500/20 rounded-full blur-xl animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-20 w-16 h-16 bg-white/10 rounded-full blur-lg animate-float" style="animation-delay: 4s;"></div>
        <div class="absolute top-1/3 right-20 w-24 h-24 bg-primary-400/20 rounded-full blur-xl animate-float" style="animation-delay: 1s;"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-5xl mx-auto">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-black mb-6 leading-tight">
                    Top Up Diamond Game
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-400 to-accent-500">
                        Terpercaya
                    </span>
                </h1>
                <p class="text-lg md:text-xl lg:text-2xl text-blue-100 mb-8 leading-relaxed max-w-3xl mx-auto">
                    Platform top up diamond game terlengkap dengan berbagai metode pembayaran. 
                    Proses cepat, aman, dan 24/7 support.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo e(route('games.index')); ?>" class="btn-accent text-lg px-8 py-4 transform hover:scale-105 transition-all duration-300">
                        <i class="fas fa-gamepad mr-2"></i>
                        Mulai Top Up
                    </a>
                    <a href="#features" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-primary-600 transform hover:scale-105 transition-all duration-300">
                        <i class="fas fa-info-circle mr-2"></i>
                        Pelajari Lebih Lanjut
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12 max-w-4xl mx-auto">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                        <div class="text-3xl font-bold text-accent-400 mb-2">50K+</div>
                        <div class="text-blue-100">Pengguna Aktif</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                        <div class="text-3xl font-bold text-emerald-400 mb-2">99.9%</div>
                        <div class="text-blue-100">Keberhasilan</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                        <div class="text-3xl font-bold text-indigo-400 mb-2">24/7</div>
                        <div class="text-blue-100">Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Games Section -->
    <section id="games" class="py-16 md:py-20 bg-gradient-to-br from-slate-50 to-blue-50 relative">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mb-4">
                    <i class="fas fa-gamepad text-primary-600 mr-3"></i>
                    Game Populer
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary-600 via-accent-500 to-indigo-500 mx-auto rounded-full mb-6"></div>
                <p class="text-slate-600 text-lg md:text-xl max-w-3xl mx-auto">
                    Top up diamond untuk game-game populer dengan harga termurah dan proses tercepat
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                <!-- Mobile Legends -->
                <div class="card-hover group transform hover:scale-105 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-2xl">
                        <div class="w-full h-48 md:h-56 bg-gradient-to-br from-primary-500 via-primary-600 to-primary-700 flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-white text-6xl md:text-7xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white font-bold text-xl mb-2">Mobile Legends</h3>
                            <p class="text-slate-200 text-sm mb-3">Top up diamond ML dengan harga termurah</p>
                            <a href="<?php echo e(route('games.index')); ?>" class="btn-primary text-sm px-4 py-2">
                                Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- PUBG Mobile -->
                <div class="card-hover group transform hover:scale-105 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-2xl">
                        <div class="w-full h-48 md:h-56 bg-gradient-to-br from-emerald-500 via-emerald-600 to-emerald-700 flex items-center justify-center">
                            <i class="fas fa-gamepad text-white text-6xl md:text-7xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white font-bold text-xl mb-2">PUBG Mobile</h3>
                            <p class="text-slate-200 text-sm mb-3">Top up UC PUBG dengan harga termurah</p>
                            <a href="<?php echo e(route('games.index')); ?>" class="btn-primary text-sm px-4 py-2">
                                Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Free Fire -->
                <div class="card-hover group transform hover:scale-105 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-2xl">
                        <div class="w-full h-48 md:h-56 bg-gradient-to-br from-accent-500 via-accent-600 to-accent-700 flex items-center justify-center">
                            <i class="fas fa-fire text-white text-6xl md:text-7xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white font-bold text-xl mb-2">Free Fire</h3>
                            <p class="text-slate-200 text-sm mb-3">Top up diamond FF dengan harga termurah</p>
                            <a href="<?php echo e(route('games.index')); ?>" class="btn-primary text-sm px-4 py-2">
                                Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Genshin Impact -->
                <div class="card-hover group transform hover:scale-105 transition-all duration-300">
                    <div class="relative overflow-hidden rounded-2xl">
                        <div class="w-full h-48 md:h-56 bg-gradient-to-br from-indigo-500 via-indigo-600 to-indigo-700 flex items-center justify-center">
                            <i class="fas fa-star text-white text-6xl md:text-7xl group-hover:scale-110 transition-transform duration-300"></i>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h3 class="text-white font-bold text-xl mb-2">Genshin Impact</h3>
                            <p class="text-slate-200 text-sm mb-3">Top up genesis crystal dengan harga termurah</p>
                            <a href="<?php echo e(route('games.index')); ?>" class="btn-primary text-sm px-4 py-2">
                                Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="<?php echo e(route('games.index')); ?>" class="btn-outline text-lg px-8 py-4 border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-gamepad mr-2"></i>
                    Lihat Semua Game
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 md:py-20 bg-gradient-to-br from-slate-100 via-white to-blue-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 mb-4">
                    <i class="fas fa-star text-accent-500 mr-3"></i>
                    Fitur Unggulan
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-accent-500 via-primary-500 to-emerald-500 mx-auto rounded-full mb-6"></div>
                <p class="text-slate-600 text-lg md:text-xl max-w-3xl mx-auto">
                    Nikmati berbagai fitur unggulan yang membuat pengalaman top up Anda lebih mudah dan aman
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-primary-500 to-primary-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-bolt text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Proses Instan</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Top up diamond dalam hitungan detik dengan sistem otomatis 24/7
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-shield-alt text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">100% Aman</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Transaksi aman dengan enkripsi SSL dan sistem keamanan berlapis
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-accent-500 to-accent-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-headset text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Support 24/7</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Tim support siap membantu Anda kapan saja dengan berbagai channel
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-credit-card text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Metode Pembayaran</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Berbagai metode pembayaran dari bank transfer hingga e-wallet
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-gift text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Bonus & Promo</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Dapatkan bonus dan promo menarik untuk setiap transaksi
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-rose-500 to-rose-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-mobile-alt text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Mobile Friendly</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Website responsif yang mudah digunakan di semua perangkat
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 md:py-20 bg-gradient-to-r from-primary-600 via-primary-700 to-primary-800 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-accent-500/20 rounded-full blur-xl animate-float"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-white/20 rounded-full blur-xl animate-float" style="animation-delay: 2s;"></div>
        
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                Siap untuk Top Up?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Bergabunglah dengan ribuan pengguna yang telah mempercayai GOC TopUp untuk kebutuhan top up game mereka
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo e(route('games.index')); ?>" class="btn-accent text-lg px-8 py-4 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-gamepad mr-2"></i>
                    Mulai Top Up Sekarang
                </a>
                <a href="<?php echo e(route('auth.register')); ?>" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-primary-600 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-user-plus mr-2"></i>
                    Daftar Akun
                </a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\qr\resources\views/home/index.blade.php ENDPATH**/ ?>