@extends('layouts.app')

@section('title', 'Metode Pembayaran - GOC TopUp')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary to-primary-dark text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 hero-pattern opacity-10"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                    Metode Pembayaran
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent to-orange-400">
                        Lengkap
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 leading-relaxed">
                    Pilih metode pembayaran yang paling nyaman untuk Anda. 
                    Kami mendukung berbagai metode dari bank transfer hingga e-wallet populer.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#payment-methods" class="btn-accent text-lg px-8 py-4">
                        <i class="fas fa-credit-card mr-2"></i>
                        Lihat Semua Metode
                    </a>
                    <a href="{{ route('home.index') }}" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-primary">
                        <i class="fas fa-home mr-2"></i>
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-accent/20 rounded-full blur-xl animate-pulse-slow"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-white/20 rounded-full blur-xl animate-pulse-slow" style="animation-delay: 1s;"></div>
    </section>

    <!-- Payment Methods Section -->
    <section id="payment-methods" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            @include('components.payment-methods')
        </div>
    </section>

    <!-- Payment Info Section -->
    <section class="py-16 bg-gradient-to-br from-slate-50 to-slate-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-primary mr-3"></i>
                    Informasi Pembayaran
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Ketahui lebih lanjut tentang proses pembayaran dan keamanan transaksi
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Info 1 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">100% Aman</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Semua transaksi dilindungi dengan sistem keamanan berlapis dan enkripsi SSL
                    </p>
                </div>

                <!-- Info 2 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Proses Cepat</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Pembayaran diproses dalam waktu 1-5 menit setelah konfirmasi berhasil
                    </p>
                </div>

                <!-- Info 3 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-headset text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Support 24/7</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Tim support kami siap membantu jika ada kendala dalam proses pembayaran
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-accent to-orange-500 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Siap untuk Top Up?
            </h2>
            <p class="text-xl text-orange-100 mb-8 max-w-2xl mx-auto">
                Pilih metode pembayaran favorit Anda dan nikmati pengalaman top up yang nyaman
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('games.index') }}" class="btn-primary text-lg px-8 py-4">
                    <i class="fas fa-gamepad mr-2"></i>
                    Pilih Game
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
