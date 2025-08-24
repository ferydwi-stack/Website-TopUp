@extends('layouts.app')

@section('title', $game->name . ' - Pilih Diamond | Goc TopUp')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <!-- Full Wallpaper Hero Section -->
    <section class="relative min-h-[60vh] flex items-end justify-center overflow-hidden pb-8">
        <!-- Background -->
        @if($game->image && file_exists(public_path($game->image)))
            <img src="{{ asset($game->image) }}"
                 alt="{{ $game->name }}"
                 class="absolute inset-0 w-full h-full object-cover">
        @elseif($game->image && Storage::disk('public')->exists($game->image))
            <img src="{{ asset('storage/' . $game->image) }}"
                 alt="{{ $game->name }}"
                 class="absolute inset-0 w-full h-full object-cover">
        @else
            <div class="absolute inset-0 bg-gradient-to-br from-primary to-primary-dark"></div>
        @endif

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Tombol Back -->
        <div class="absolute top-5 left-5 z-20">
            <a href="{{ route('games.index') }}"
               class="flex items-center gap-2 px-4 py-2 bg-white/25 backdrop-blur-sm
                      border border-white/30 text-white text-sm rounded-lg shadow 
                      hover:bg-white/40 hover:text-primary transition">
                <i class="fas fa-arrow-left"></i>
                <span class="font-medium">Kembali</span>
            </a>
        </div>

        <!-- Konten bawah -->
        <div class="relative z-20 text-center px-7 max-w-xl">
            <h1 class="text-xl md:text-3xl font-bold text-white drop-shadow-lg">
                {{ $game->name }}
            </h1>
            @if($game->description)
                <p class="mt-1 text-sm md:text-base text-slate-200 drop-shadow">
                    {{ $game->description }}
                </p>
            @endif
        </div>
    </section>

    <!-- Diamond Section -->
    <section class="py-16 bg-white relative">
        <div class="absolute top-0 left-0 right-0 h-24 bg-gradient-to-b from-transparent to-white"></div>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4 relative">
                    <i class="fas fa-diamond text-primary mr-3"></i>
                    Pilih Paket Diamond
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-primary to-accent mx-auto rounded-full mb-6"></div>
                <p class="text-slate-600 text-lg max-w-2xl mx-auto">
                    Pilih paket diamond yang sesuai dengan kebutuhan dan budget Anda
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-center mx-auto w-fit">
                @foreach($diamonds as $diamond)
                    <div class="group"
                         onclick="selectDiamond(event, @json($diamond->id), @json($diamond->name), @json($diamond->price))">
                        <div class="bg-gradient-to-br from-white via-slate-50 to-slate-100 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border-2 border-slate-200 hover:border-primary/50 hover:-translate-y-2 cursor-pointer h-full flex flex-col relative">

                            <!-- Diamond Icon Header -->
                            <div class="h-20 bg-gradient-to-br from-primary via-blue-600 to-primary-dark relative overflow-hidden flex items-center justify-center">
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><defs><pattern id=%22sparkle%22 width=%2220%22 height=%2220%22 patternUnits=%22userSpaceOnUse%22><circle cx=%2210%22 cy=%2210%22 r=%221%22 fill=%22white%22 opacity=%220.3%22/><circle cx=%225%22 cy=%225%22 r=%220.5%22 fill=%22white%22 opacity=%220.2%22/><circle cx=%2215%22 cy=%2215%22 r=%220.8%22 fill=%22white%22 opacity=%220.25%22/></pattern></defs><rect width=%22100%22 height=%22100%22 fill=%22url(%23sparkle)%22/></svg>')] opacity-60"></div>

                                <div class="relative z-10 flex items-center justify-center">
                                    <i class="fas fa-gem text-white text-2xl mr-2 animate-pulse"></i>
                                    <span class="text-white font-bold text-lg">{{ $diamond->name }}</span>
                                </div>

                                <!-- Popular Badge -->
                                @if($diamond->is_popular)
                                    <div class="absolute top-2 right-2 bg-gradient-to-r from-amber-400 via-yellow-500 to-orange-500 text-white px-4 py-1 rounded-full text-sm font-bold shadow-lg border-2 border-white transform rotate-12 animate-bounce tracking-wide z-20">
                                        <i class="fas fa-crown mr-1"></i>
                                        HOT
                                    </div>
                                @endif
                            </div>

                            <!-- Content Area -->
                            <div class="p-5 text-center flex flex-col flex-grow bg-gradient-to-b from-white to-slate-50/50">
                                <!-- Price Display -->
                                <div class="mb-4 flex-grow flex flex-col items-center justify-center">
                                    <div class="text-xs text-slate-500 mb-1 uppercase tracking-wider font-medium">Harga</div>
                                    <div class="text-2xl font-extrabold text-primary-dark">
    Rp {{ number_format($diamond->price ?? 0, 0, ',', '.') }}
</div>
<div class="w-12 h-0.5 bg-gradient-to-r from-primary to-blue-600 mx-auto mt-2 rounded-full"></div>
                                </div>

                                <!-- Purchase Button -->
                                <button onclick="event.stopPropagation(); proceedToTopUp({{ $diamond->id }})"
                                        class="w-full bg-gradient-to-r from-primary via-blue-600 to-primary-dark text-white font-semibold py-3 px-4 rounded-xl hover:shadow-lg hover:shadow-primary/40 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 text-sm group-hover:from-blue-600 group-hover:to-primary relative overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                                    <div class="relative z-10 flex items-center justify-center">
                                        <i class="fas fa-shopping-cart mr-2"></i>
                                        <span>Beli Sekarang</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section class="py-12 bg-gradient-to-br from-slate-50 to-slate-200">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-200 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-primary to-accent"></div>

                    <div class="text-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary to-primary-dark rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-info-circle text-white text-lg"></i>
                        </div>
                        <h4 class="text-xl font-bold text-slate-800 mb-3">Info Penting</h4>
                        <p class="text-slate-600 leading-relaxed">
                            <strong>Diamond akan langsung masuk ke akun game dalam waktu 1-5 menit setelah pembayaran berhasil.</strong>
                            <br>Pastikan Game ID atau Username yang dimasukkan sudah benar untuk menghindari kesalahan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection

@push('scripts')
<script>
    function selectDiamond(event, id, name, price) {
        // Hapus highlight sebelumnya
        document.querySelectorAll('.group > div').forEach(card => {
            card.classList.remove('ring-4', 'ring-primary/50', 'scale-105');
        });

        // Tambahkan highlight ke card terpilih
        event.currentTarget.querySelector('div')
            .classList.add('ring-4', 'ring-primary/50', 'scale-105');
    }

    function proceedToTopUp(diamondId) {
        window.location.href = `/topup/create/${diamondId}`;
    }
</script>
@endpush
