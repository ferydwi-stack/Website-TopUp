@extends('layouts.app')

@section('title', 'Promo & Bonus - GOC TopUp')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-accent to-orange-500 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 hero-pattern opacity-10"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                    Promo & Bonus
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-white">
                        Menarik
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-orange-100 mb-8 leading-relaxed">
                    Dapatkan promo dan bonus menarik untuk setiap transaksi top up Anda. 
                    Hemat lebih banyak dengan berbagai penawaran spesial.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#current-promos" class="btn-primary text-lg px-8 py-4">
                        <i class="fas fa-gift mr-2"></i>
                        Lihat Promo
                    </a>
                    <a href="{{ route('home.index') }}" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-accent">
                        <i class="fas fa-home mr-2"></i>
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-yellow-300/20 rounded-full blur-xl animate-pulse-slow"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-white/20 rounded-full blur-xl animate-pulse-slow" style="animation-delay: 1s;"></div>
    </section>

    <!-- Current Promos Section -->
    <section id="current-promos" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-fire text-accent mr-3"></i>
                    Promo Aktif
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-accent to-orange-500 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Promo terbaru yang sedang berlangsung. Jangan lewatkan kesempatan emas ini!
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Promo 1 -->
                <div class="card-hover group relative overflow-hidden">
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        HOT
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                        <i class="fas fa-percentage text-white text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Diskon 20%</h3>
                        <p class="text-gray-600 mb-4">Untuk top up pertama dengan minimum pembelian Rp 50.000</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-500">Berlaku sampai:</span>
                            <span class="text-sm font-semibold text-accent">31 Des 2024</span>
                        </div>
                        <a href="{{ route('games.index') }}" class="btn-primary w-full text-center">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Gunakan Promo
                        </a>
                    </div>
                </div>

                <!-- Promo 2 -->
                <div class="card-hover group relative overflow-hidden">
                    <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        NEW
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-green-500 to-blue-600 flex items-center justify-center">
                        <i class="fas fa-gift text-white text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Bonus Diamond</h3>
                        <p class="text-gray-600 mb-4">Dapatkan bonus 10% diamond untuk pembelian di atas Rp 100.000</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-500">Berlaku sampai:</span>
                            <span class="text-sm font-semibold text-accent">15 Jan 2025</span>
                        </div>
                        <a href="{{ route('games.index') }}" class="btn-primary w-full text-center">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Gunakan Promo
                        </a>
                    </div>
                </div>

                <!-- Promo 3 -->
                <div class="card-hover group relative overflow-hidden">
                    <div class="absolute top-4 right-4 bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                        VIP
                    </div>
                    <div class="w-full h-48 bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center">
                        <i class="fas fa-crown text-white text-6xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Cashback 5%</h3>
                        <p class="text-gray-600 mb-4">Cashback untuk member VIP dengan minimum transaksi Rp 200.000</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-500">Berlaku sampai:</span>
                            <span class="text-sm font-semibold text-accent">28 Feb 2025</span>
                        </div>
                        <a href="{{ route('games.index') }}" class="btn-primary w-full text-center">
                            <i class="fas fa-shopping-cart mr-2"></i>
                            Gunakan Promo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers Section -->
    <section class="py-16 bg-gradient-to-br from-slate-50 to-slate-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-star text-accent mr-3"></i>
                    Penawaran Spesial
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-accent to-orange-500 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Penawaran khusus untuk game-game populer dengan harga terbaik
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Mobile Legends Special -->
                <div class="card-hover group">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Mobile Legends</h3>
                            <p class="text-accent font-semibold">Harga Spesial</p>
                        </div>
                    </div>
                    <div class="space-y-2 mb-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">86 💎</span>
                            <span class="font-semibold text-green-600">Rp 18.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">172 💎</span>
                            <span class="font-semibold text-green-600">Rp 35.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">257 💎</span>
                            <span class="font-semibold text-green-600">Rp 50.000</span>
                        </div>
                    </div>
                    <a href="{{ route('games.index') }}" class="btn-accent w-full text-center">
                        <i class="fas fa-shopping-cart mr-2"></i>
                        Beli Sekarang
                    </a>
                </div>

                <!-- PUBG Mobile Special -->
                <div class="card-hover group">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center">
                            <i class="fas fa-gamepad text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">PUBG Mobile</h3>
                            <p class="text-accent font-semibold">Harga Spesial</p>
                        </div>
                    </div>
                    <div class="space-y-2 mb-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">60 UC</span>
                            <span class="font-semibold text-green-600">Rp 12.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">325 UC</span>
                            <span class="font-semibold text-green-600">Rp 60.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">660 UC</span>
                            <span class="font-semibold text-green-600">Rp 120.000</span>
                        </div>
                    </div>
                    <a href="{{ route('games.index') }}" class="btn-accent w-full text-center">
                        <i class="fas fa-shopping-cart mr-2"></i>
                        Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Use Promo Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-question-circle text-accent mr-3"></i>
                    Cara Menggunakan Promo
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-accent to-orange-500 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Ikuti langkah-langkah sederhana untuk menggunakan promo dan mendapatkan diskon
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-accent to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">
                        1
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Pilih Game</h3>
                    <p class="text-gray-600">Pilih game yang ingin di-top up</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-accent to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">
                        2
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Pilih Nominal</h3>
                    <p class="text-gray-600">Pilih nominal diamond yang diinginkan</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-accent to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">
                        3
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Masukkan Kode</h3>
                    <p class="text-gray-600">Masukkan kode promo yang tersedia</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-accent to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-bold">
                        4
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Bayar & Nikmati</h3>
                    <p class="text-gray-600">Lakukan pembayaran dan nikmati diskon</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-accent to-orange-500 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Siap Hemat Lebih Banyak?
            </h2>
            <p class="text-xl text-orange-100 mb-8 max-w-2xl mx-auto">
                Gunakan promo yang tersedia dan dapatkan diskon menarik untuk setiap transaksi
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('games.index') }}" class="btn-primary text-lg px-8 py-4">
                    <i class="fas fa-gamepad mr-2"></i>
                    Mulai Top Up
                </a>
                <a href="{{ route('home.index') }}" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-accent">
                    <i class="fas fa-home mr-2"></i>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection
