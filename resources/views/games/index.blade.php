@extends('layouts.app')

@section('title', 'Games - GOC TopUp')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-primary via-primary-dark to-blue-900 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>
        
        <div class="container mx-auto px-4 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Game Populer
                <span class="block text-2xl md:text-3xl text-blue-200 font-normal mt-2">
                    Top Up Diamond Terpercaya
                </span>
            </h1>
            <p class="text-lg md:text-xl text-blue-100 mb-8 max-w-3xl mx-auto leading-relaxed">
                Pilih game favorit Anda dan top up diamond dengan harga terbaik. 
                Proses cepat dan aman dengan berbagai metode pembayaran.
            </p>
        </div>
    </section>

    <!-- Games Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-gamepad text-primary mr-3"></i>
                    Pilih Game Favorit
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-primary-dark mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Top up diamond untuk game-game populer dengan harga termurah dan proses tercepat
                </p>
            </div>

            <!-- Games Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($games as $game)
                <div class="group">
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 hover:border-primary/30 hover:-translate-y-2 h-full flex flex-col">
                        <!-- Game Image -->
                        <div class="h-48 bg-gradient-to-br from-primary to-primary-dark relative overflow-hidden">
                            @if($game->image && file_exists(public_path($game->image)))
                                <img src="{{ asset($game->image) }}" alt="{{ $game->name }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="fallback-icon hidden absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-gamepad text-white text-4xl opacity-80"></i>
                                </div>
                            @else
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i class="fas fa-gamepad text-white text-4xl opacity-80"></i>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Game Info -->
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">{{ $game->name }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-6 flex-grow">{{ Str::limit($game->description, 80) }}</p>
                            
                            <a href="{{ route('games.show', $game->slug) }}" 
                               class="w-full bg-gradient-to-r from-primary to-primary-dark text-white font-semibold py-3 px-4 rounded-xl hover:shadow-lg hover:shadow-primary/30 transition-all duration-300 transform hover:-translate-y-1 text-center">
                                <i class="fas fa-diamond mr-2"></i>
                                Top Up Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- No Games Message -->
            @if($games->isEmpty())
            <div class="text-center py-12">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-gamepad text-gray-400 text-4xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum Ada Game Tersedia</h3>
                <p class="text-gray-500">Game akan segera ditambahkan. Silakan cek kembali nanti.</p>
            </div>
            @endif
        </div>
    </section>

    <!-- Support Section -->
    <section class="py-16 bg-gradient-to-br from-slate-50 to-blue-50">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                    <i class="fas fa-headset text-white text-3xl"></i>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Butuh Bantuan?</h2>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                    Tim support kami siap membantu Anda 24/7 dengan berbagai channel komunikasi
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://wa.me/6281234567890" class="bg-green-500 text-white px-8 py-3 rounded-xl font-semibold hover:bg-green-600 transition-colors duration-200 flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2 text-xl"></i>
                        WhatsApp
                    </a>
                    <a href="mailto:support@goc.com" class="bg-primary text-white px-8 py-3 rounded-xl font-semibold hover:bg-primary-dark transition-colors duration-200 flex items-center justify-center">
                        <i class="fas fa-envelope mr-2"></i>
                        Email Support
                    </a>
                    <a href="tel:+6281234567890" class="bg-gray-600 text-white px-8 py-3 rounded-xl font-semibold hover:bg-gray-700 transition-colors duration-200 flex items-center justify-center">
                        <i class="fas fa-phone mr-2"></i>
                        Hotline
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection
