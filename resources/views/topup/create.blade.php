@extends('layouts.app')

@section('title', 'Top Up - ' . $diamond->name . ' | GOC TopUp')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary to-primary-dark text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('/img/grain.svg')] opacity-60"></div>
         <div class="container mx-auto px-4 relative z-10">
            <div class="flex items-center justify-center">
                <div class="text-center">
                    <div class="flex justify-center mb-8">
                        <a href="{{ route('games.show', $diamond->game->slug) }}" class="flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-slate-100 to-slate-300 text-primary-dark font-bold rounded-2xl shadow hover:bg-slate-200 transition-all duration-300 text-lg border border-primary/20">
                            <i class="fas fa-arrow-left"></i>
                            Pilih Kembali
                        </a>
                    </div>
                    
                    <h1 class="text-4xl md:text-6xl font-black mb-4">
                        <i class="fas fa-diamond mr-4"></i>
                        Top Up Diamond
                    </h1>
                    <p class="text-xl opacity-90">Lengkapi data untuk melanjutkan pembayaran</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4 py-8">
        <!-- Diamond Summary -->
        <div class="bg-white rounded-3xl shadow-xl border border-slate-200 p-8 mb-8 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-primary to-accent"></div>
            
            <div class="flex flex-col md:flex-row items-center gap-6">
                <!-- Full Photo Display -->
                <div class="w-32 h-32 bg-gradient-to-br from-primary to-primary-dark rounded-3xl overflow-hidden shadow-lg border-2 border-primary/30 flex-shrink-0">
                    @if($diamond->image && file_exists(public_path($diamond->image)))
                        <img src="{{ asset($diamond->image) }}" alt="{{ $diamond->name }}" 
                             class="w-full h-full object-cover"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="fallback-icon hidden w-full h-full flex items-center justify-center">
                            <i class="fas fa-diamond text-white text-4xl opacity-80"></i>
                        </div>
                    @else
                        <div class="w-full h-full flex items-center justify-center">
                            <i class="fas fa-diamond text-white text-4xl opacity-80"></i>
                        </div>
                    @endif
                </div>
                
                <div class="flex-1 text-center md:text-left">
                    <h4 class="text-2xl font-bold text-slate-800 mb-2">{{ $diamond->name }}</h4>
                    <p class="text-slate-600 text-lg">{{ $diamond->game->name }}</p>
                </div>
                
                <div class="text-center md:text-right">
                    <div class="text-3xl font-black text-primary">Rp {{ number_format($diamond->price, 0, ',', '.') }}</div>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-3xl shadow-xl border border-slate-200 p-8 relative overflow-hidden">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-accent"></div>
                
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold text-slate-800 mb-3">
                        <i class="fas fa-user text-primary mr-3"></i>
                        Data Pembeli
                    </h3>
                    <div class="w-16 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full mb-4"></div>
                    <p class="text-slate-600 text-lg">
                        Lengkapi informasi yang diperlukan untuk proses top up
                    </p>
                </div>

                @if (session('success'))
                    <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-4 rounded-2xl mb-6 shadow-lg">
                        <i class="fas fa-check-circle mr-2"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-gradient-to-r from-red-500 to-red-600 text-white p-4 rounded-2xl mb-6 shadow-lg">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('topup.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="diamond_id" value="{{ $diamond->id }}">
                    
                    <div class="mb-6">
                        <label for="game_id" class="block text-slate-800 font-semibold mb-3 text-lg">
                            <i class="fas fa-gamepad text-primary mr-2"></i>
                            Game ID / Username
                        </label>
                        <input type="text" 
                               class="w-full px-6 py-4 border-2 border-slate-200 rounded-2xl text-lg focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all duration-300 @error('game_id') border-red-500 focus:border-red-500 focus:ring-red-500/10 @enderror" 
                               id="game_id" 
                               name="game_id" 
                               value="{{ old('game_id') }}" 
                               placeholder="Masukkan Game ID atau Username" 
                               required>
                        @error('game_id')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                        <p class="text-slate-500 text-sm mt-2 flex items-center">
                            <i class="fas fa-info-circle mr-2"></i>
                            Pastikan Game ID atau Username sudah benar
                        </p>
                    </div>
                    
                    <div class="mb-8">
                        <label for="payment_method" class="block text-slate-800 font-semibold mb-3 text-lg">
                            <i class="fas fa-credit-card text-primary mr-2"></i>
                            Metode Pembayaran
                        </label>
                        <select class="w-full px-6 py-4 border-2 border-slate-200 rounded-2xl text-lg focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all duration-300 @error('payment_method') border-red-500 focus:border-red-500 focus:ring-red-500/10 @enderror" 
                                id="payment_method" 
                                name="payment_method" 
                                required>
                            <option value="">Pilih metode pembayaran</option>
                            <option value="bank_transfer" {{ old('payment_method') == 'bank_transfer' ? 'selected' : '' }}>
                                <i class="fas fa-university"></i> Transfer Bank
                            </option>
                            <option value="ewallet" {{ old('payment_method') == 'ewallet' ? 'selected' : '' }}>
                                <i class="fas fa-wallet"></i> E-Wallet
                            </option>
                            <option value="qris" {{ old('payment_method') == 'qris' ? 'selected' : '' }}>
                                <i class="fas fa-qrcode"></i> QRIS
                            </option>
                            <option value="convenience_store" {{ old('payment_method') == 'convenience_store' ? 'selected' : '' }}>
                                <i class="fas fa-store"></i> Minimarket
                            </option>
                            <option value="credit_card" {{ old('payment_method') == 'credit_card' ? 'selected' : '' }}>
                                <i class="fas fa-credit-card"></i> Kartu Kredit/Debit
                            </option>
                        </select>
                        @error('payment_method')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-primary to-primary-dark text-white font-bold py-4 px-8 rounded-2xl text-xl hover:shadow-2xl hover:shadow-primary/30 transition-all duration-300 transform hover:-translate-y-1">
                            <i class="fas fa-lock mr-3"></i>
                            Lanjutkan ke Pembayaran
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Payment Methods Preview -->
        <div class="max-w-6xl mx-auto mt-8">
            @include('components.payment-methods')
        </div>

        <!-- Info Section -->
        <div class="max-w-2xl mx-auto mt-8">
            <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-8 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-primary to-accent"></div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-primary-dark rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h5 class="text-2xl font-bold text-slate-800 mb-4">Keamanan & Privasi</h5>
                    <p class="text-slate-600 leading-relaxed text-lg">
                        Data Anda akan dijaga kerahasiaannya dan hanya digunakan untuk proses top up. 
                        Kami menggunakan sistem keamanan tingkat tinggi untuk melindungi informasi Anda.
                    </p>
                </div>
            </div>
        </div>

        <!-- Support Section -->
        <div class="max-w-4xl mx-auto mt-8">
            <div class="bg-gradient-to-r from-primary to-primary-dark text-white rounded-3xl shadow-lg p-8 text-center">
                <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-headset text-white text-3xl"></i>
                </div>
                <h4 class="text-3xl font-bold mb-4">Butuh Bantuan?</h4>
                <p class="text-xl opacity-90 mb-6">Tim support kami siap membantu 24/7</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="bg-white text-primary px-8 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-colors duration-200 flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2 text-xl"></i>
                        WhatsApp
                    </a>
                    <a href="#" class="bg-white/20 backdrop-blur-md border border-white/30 text-white px-8 py-3 rounded-xl font-semibold hover:bg-white/30 transition-colors duration-200 flex items-center justify-center">
                        <i class="fas fa-envelope mr-2"></i>
                        Email Support
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.footer')
@endsection
