

<?php $__env->startSection('title', 'Riwayat Transaksi - GOC TopUp'); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('components.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-secondary to-slate-600 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 hero-pattern opacity-10"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                    Riwayat Transaksi
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-cyan-300">
                        Lengkap
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-slate-200 mb-8 leading-relaxed">
                    Pantau semua transaksi top up Anda dengan detail lengkap. 
                    Lihat status, riwayat pembayaran, dan informasi transaksi lainnya.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#transaction-history" class="btn-primary text-lg px-8 py-4">
                        <i class="fas fa-history mr-2"></i>
                        Lihat Riwayat
                    </a>
                    <a href="<?php echo e(route('home.index')); ?>" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-secondary">
                        <i class="fas fa-home mr-2"></i>
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-blue-300/20 rounded-full blur-xl animate-pulse-slow"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-cyan-300/20 rounded-full blur-xl animate-pulse-slow" style="animation-delay: 1s;"></div>
    </section>

    <!-- Transaction History Section -->
    <section id="transaction-history" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-list-alt text-secondary mr-3"></i>
                    Riwayat Transaksi
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-secondary to-slate-600 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Semua transaksi top up Anda dalam satu tempat yang mudah diakses
                </p>
            </div>

            <!-- Filter Section -->
            <div class="bg-gray-50 rounded-2xl p-6 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:border-secondary focus:ring-4 focus:ring-secondary/10">
                            <option value="">Semua Status</option>
                            <option value="success">Berhasil</option>
                            <option value="pending">Pending</option>
                            <option value="failed">Gagal</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Game</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:border-secondary focus:ring-4 focus:ring-secondary/10">
                            <option value="">Semua Game</option>
                            <option value="ml">Mobile Legends</option>
                            <option value="pubg">PUBG Mobile</option>
                            <option value="ff">Free Fire</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal</label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:border-secondary focus:ring-4 focus:ring-secondary/10">
                    </div>
                    <div class="flex items-end">
                        <button class="w-full bg-secondary text-white px-6 py-2 rounded-xl hover:bg-slate-600 transition-colors duration-200">
                            <i class="fas fa-search mr-2"></i>
                            Filter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Transaction List -->
            <div class="space-y-4">
                <!-- Transaction Item 1 -->
                <div class="card-hover group border-l-4 border-success">
                    <div class="flex items-center justify-between p-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Mobile Legends</h3>
                                <p class="text-gray-600">86 💎 Diamond</p>
                                <p class="text-sm text-gray-500">ID: ML-2024-001</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-success">Rp 18.000</p>
                            <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-medium">Berhasil</span>
                            <p class="text-sm text-gray-500 mt-1">2 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between text-sm text-gray-600">
                            <span>Metode: Bank Transfer BCA</span>
                            <button class="text-secondary hover:text-slate-600 font-medium">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Transaction Item 2 -->
                <div class="card-hover group border-l-4 border-warning">
                    <div class="flex items-center justify-between p-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-gamepad text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">PUBG Mobile</h3>
                                <p class="text-gray-600">325 UC</p>
                                <p class="text-sm text-gray-500">ID: PUBG-2024-002</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-warning">Rp 60.000</p>
                            <span class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full font-medium">Pending</span>
                            <p class="text-sm text-gray-500 mt-1">1 jam yang lalu</p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between text-sm text-gray-600">
                            <span>Metode: E-Wallet OVO</span>
                            <button class="text-secondary hover:text-slate-600 font-medium">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Transaction Item 3 -->
                <div class="card-hover group border-l-4 border-error">
                    <div class="flex items-center justify-between p-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-fire text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Free Fire</h3>
                                <p class="text-gray-600">100 💎 Diamond</p>
                                <p class="text-sm text-gray-500">ID: FF-2024-003</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-error">Rp 25.000</p>
                            <span class="inline-block bg-red-100 text-red-800 text-xs px-2 py-1 rounded-full font-medium">Gagal</span>
                            <p class="text-sm text-gray-500 mt-1">30 menit yang lalu</p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between text-sm text-gray-600">
                            <span>Metode: QRIS</span>
                            <button class="text-secondary hover:text-slate-600 font-medium">Lihat Detail</button>
                        </div>
                    </div>
                </div>

                <!-- Transaction Item 4 -->
                <div class="card-hover group border-l-4 border-success">
                    <div class="flex items-center justify-between p-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-star text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Genshin Impact</h3>
                                <p class="text-gray-600">60 Genesis Crystal</p>
                                <p class="text-sm text-gray-500">ID: GI-2024-004</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="text-lg font-bold text-success">Rp 30.000</p>
                            <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-medium">Berhasil</span>
                            <p class="text-sm text-gray-500 mt-1">1 hari yang lalu</p>
                        </div>
                    </div>
                    <div class="px-6 pb-6">
                        <div class="flex items-center justify-between text-sm text-gray-600">
                            <span>Metode: Credit Card</span>
                            <button class="text-secondary hover:text-slate-600 font-medium">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-8">
                <nav class="flex items-center space-x-2">
                    <a href="#" class="px-3 py-2 text-gray-500 hover:text-secondary rounded-lg">Previous</a>
                    <a href="#" class="px-3 py-2 bg-secondary text-white rounded-lg">1</a>
                    <a href="#" class="px-3 py-2 text-gray-500 hover:text-secondary rounded-lg">2</a>
                    <a href="#" class="px-3 py-2 text-gray-500 hover:text-secondary rounded-lg">3</a>
                    <a href="#" class="px-3 py-2 text-gray-500 hover:text-secondary rounded-lg">Next</a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-gradient-to-br from-slate-50 to-slate-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-chart-bar text-secondary mr-3"></i>
                    Statistik Transaksi
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-secondary to-slate-600 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Lihat ringkasan transaksi dan aktivitas top up Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Total Transactions -->
                <div class="card text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shopping-cart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">24</h3>
                    <p class="text-gray-600">Total Transaksi</p>
                </div>

                <!-- Successful Transactions -->
                <div class="card text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-success to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-check-circle text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">20</h3>
                    <p class="text-gray-600">Berhasil</p>
                </div>

                <!-- Total Spent -->
                <div class="card text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-accent to-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-wallet text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Rp 1.2M</h3>
                    <p class="text-gray-600">Total Pengeluaran</p>
                </div>

                <!-- Favorite Game -->
                <div class="card text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-gamepad text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">ML</h3>
                    <p class="text-gray-600">Game Favorit</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-secondary to-slate-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Siap untuk Transaksi Berikutnya?
            </h2>
            <p class="text-xl text-slate-200 mb-8 max-w-2xl mx-auto">
                Lihat game favorit Anda dan lakukan top up dengan mudah dan aman
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo e(route('games.index')); ?>" class="btn-primary text-lg px-8 py-4">
                    <i class="fas fa-gamepad mr-2"></i>
                    Top Up Sekarang
                </a>
                <a href="<?php echo e(route('home.index')); ?>" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-secondary">
                    <i class="fas fa-home mr-2"></i>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\qr\resources\views/history/index.blade.php ENDPATH**/ ?>