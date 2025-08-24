@extends('layouts.app')

@section('title', 'Detail Transaksi | GOC TopUp')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-primary to-primary-dark text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.5" fill="white" opacity="0.08"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>')] opacity-60"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex items-center justify-center">
                <div class="text-center">
                    <div class="flex items-center justify-center mb-6">
                        <a href="{{ route('games.index') }}" class="bg-white/20 backdrop-blur-md border border-white/30 text-white px-6 py-3 rounded-xl hover:bg-white/30 transition-all duration-300 font-medium text-sm">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Kembali
                        </a>
                    </div>
                    
                    <h1 class="text-4xl md:text-6xl font-black mb-4">
                        <i class="fas fa-receipt mr-4"></i>
                        Detail Transaksi
                    </h1>
                    <p class="text-xl opacity-90">Lihat detail transaksi top up diamond Anda</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4 py-8">
        <!-- Transaction Details -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl shadow-xl border border-slate-200 p-8 relative overflow-hidden">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-green-500 to-primary"></div>
                
                <div class="text-center mb-8">
                    <div class="inline-block px-6 py-3 rounded-full font-bold text-sm uppercase tracking-wider mb-6 shadow-lg
                        @if($transaction->status == 'pending') bg-gradient-to-r from-accent to-orange-500 text-white
                        @elseif($transaction->status == 'success') bg-gradient-to-r from-green-500 to-green-600 text-white
                        @else bg-gradient-to-r from-red-500 to-red-600 text-white @endif">
                        <i class="fas fa-{{ $transaction->status == 'pending' ? 'clock' : ($transaction->status == 'success' ? 'check-circle' : 'times-circle') }} mr-2"></i>
                        {{ ucfirst($transaction->status) }}
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-4">
                        <i class="fas fa-diamond text-primary mr-4"></i>
                        Top Up Berhasil Dibuat!
                    </h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full mb-6"></div>
                    <p class="text-slate-600 text-xl max-w-3xl mx-auto leading-relaxed">
                        Transaksi top up diamond telah berhasil dibuat. Silakan lakukan pembayaran sesuai dengan instruksi di bawah.
                    </p>
                </div>

                <!-- Diamond Summary -->
                <div class="bg-gradient-to-br from-slate-50 to-slate-100 rounded-3xl p-6 mb-8 border border-slate-200 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-primary to-accent"></div>
                    
                    <div class="flex flex-col md:flex-row items-center gap-6">
                        <!-- Full Photo Display -->
                        <div class="w-24 h-24 bg-gradient-to-br from-primary to-primary-dark rounded-2xl overflow-hidden shadow-lg border-2 border-primary/30 flex-shrink-0">
                            @if($transaction->diamond->image && file_exists(public_path($transaction->diamond->image)))
                                <img src="{{ asset($transaction->diamond->image) }}" alt="{{ $transaction->diamond->name }}" 
                                     class="w-full h-full object-cover"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="fallback-icon hidden w-full h-full flex items-center justify-center">
                                    <i class="fas fa-diamond text-white text-3xl opacity-80"></i>
                                </div>
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <i class="fas fa-diamond text-white text-3xl opacity-80"></i>
                                </div>
                            @endif
                        </div>
                        
                        <div class="flex-1 text-center md:text-left">
                            <h5 class="text-2xl font-bold text-slate-800 mb-2">{{ $transaction->diamond->name }}</h5>
                            <p class="text-slate-600 text-lg">{{ $transaction->diamond->game->name }}</p>
                        </div>
                        
                        <div class="text-center md:text-right">
                            <div class="text-3xl font-black text-primary">Rp {{ number_format($transaction->amount, 0, ',', '.') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Transaction Info -->
                <div class="bg-slate-50 rounded-3xl p-6 mb-8 border border-slate-200">
                    <h5 class="text-xl font-bold text-slate-800 mb-6 flex items-center">
                        <i class="fas fa-info-circle text-primary mr-3"></i>
                        Informasi Transaksi
                    </h5>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-slate-200 last:border-b-0">
                            <div class="flex items-center text-slate-700 font-semibold">
                                <i class="fas fa-hashtag text-slate-500 mr-3"></i>
                                ID Transaksi
                            </div>
                            <div class="font-bold text-primary">{{ $transaction->id }}</div>
                        </div>
                        
                        <div class="flex justify-between items-center py-3 border-b border-slate-200 last:border-b-0">
                            <div class="flex items-center text-slate-700 font-semibold">
                                <i class="fas fa-gamepad text-slate-500 mr-3"></i>
                                Game ID
                            </div>
                            <div class="font-bold text-primary">{{ $transaction->game_id }}</div>
                        </div>
                        
                        <div class="flex justify-between items-center py-3 border-b border-slate-200 last:border-b-0">
                            <div class="flex items-center text-slate-700 font-semibold">
                                <i class="fas fa-credit-card text-slate-500 mr-3"></i>
                                Metode Pembayaran
                            </div>
                            <div class="font-bold text-primary">{{ ucfirst($transaction->payment_method) }}</div>
                        </div>
                        
                        <div class="flex justify-between items-center py-3 border-b border-slate-200 last:border-b-0">
                            <div class="flex items-center text-slate-700 font-semibold">
                                <i class="fas fa-calendar text-slate-500 mr-3"></i>
                                Tanggal Transaksi
                            </div>
                            <div class="font-bold text-primary">{{ $transaction->created_at->format('d M Y H:i') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Payment Code -->
                <div class="text-center">
                    <h5 class="text-2xl font-bold text-slate-800 mb-4 flex items-center justify-center">
                        <i class="fas fa-qrcode text-primary mr-3"></i>
                        Kode Pembayaran
                    </h5>
                    <div class="bg-gradient-to-r from-primary to-primary-dark text-white p-6 rounded-2xl text-2xl font-black tracking-widest shadow-lg mb-4">
                        {{ $transaction->payment_code }}
                    </div>
                    <p class="text-slate-500 text-lg flex items-center justify-center">
                        <i class="fas fa-info-circle mr-2"></i>
                        Simpan kode ini untuk referensi pembayaran
                    </p>
                </div>
            </div>
        </div>

        <!-- Payment Methods Section -->
        <div class="max-w-6xl mx-auto mt-8">
            @include('components.payment-methods')
        </div>

        <!-- Instructions Section -->
        <div class="max-w-4xl mx-auto mt-8">
            <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-8 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-accent to-orange-500"></div>
                
                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-accent to-orange-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-list-check text-white text-2xl"></i>
                    </div>
                    <h4 class="text-3xl font-bold text-slate-800 mb-4">Cara Melakukan Pembayaran</h4>
                    <p class="text-slate-600 text-lg">Ikuti langkah-langkah berikut untuk menyelesaikan pembayaran</p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-2xl border-l-4 border-primary">
                        <div class="w-8 h-8 bg-gradient-to-br from-primary to-primary-dark text-white rounded-full flex items-center justify-center font-bold text-sm flex-shrink-0">
                            1
                        </div>
                        <div>
                            <h6 class="font-semibold text-slate-800 mb-2 text-lg">Pilih Metode Pembayaran</h6>
                            <p class="text-slate-600">Gunakan {{ ucfirst($transaction->payment_method) }} yang telah dipilih untuk melakukan pembayaran</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-2xl border-l-4 border-primary">
                        <div class="w-8 h-8 bg-gradient-to-br from-primary to-primary-dark text-white rounded-full flex items-center justify-center font-bold text-sm flex-shrink-0">
                            2
                        </div>
                        <div>
                            <h6 class="font-semibold text-slate-800 mb-2 text-lg">Masukkan Kode Pembayaran</h6>
                            <p class="text-slate-600">Masukkan kode pembayaran <strong>{{ $transaction->payment_code }}</strong> pada aplikasi pembayaran</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-2xl border-l-4 border-primary">
                        <div class="w-8 h-8 bg-gradient-to-br from-primary to-primary-dark text-white rounded-full flex items-center justify-center font-bold text-sm flex-shrink-0">
                            3
                        </div>
                        <div>
                            <h6 class="font-semibold text-slate-800 mb-2 text-lg">Lakukan Pembayaran</h6>
                            <p class="text-slate-600">Transfer sejumlah <strong>Rp {{ number_format($transaction->amount, 0, ',', '.') }}</strong> sesuai dengan nominal yang tertera</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 bg-slate-50 rounded-2xl border-l-4 border-primary">
                        <div class="w-8 h-8 bg-gradient-to-br from-primary to-primary-dark text-white rounded-full flex items-center justify-center font-bold text-sm flex-shrink-0">
                            4
                        </div>
                        <div>
                            <h6 class="font-semibold text-slate-800 mb-2 text-lg">Tunggu Konfirmasi</h6>
                            <p class="text-slate-600">Diamond akan langsung masuk ke akun game dalam waktu 1-5 menit setelah pembayaran berhasil</p>
                        </div>
                    </div>
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
