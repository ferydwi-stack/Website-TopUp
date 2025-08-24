@extends('layouts.app')

@section('title', 'Cara Top Up - GOC TopUp')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-info to-blue-600 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 hero-pattern opacity-10"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                    Cara Top Up
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-300">
                        Mudah
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 leading-relaxed">
                    Ikuti panduan lengkap cara top up diamond game dengan mudah dan cepat. 
                    Hanya dalam beberapa langkah, diamond akan masuk ke akun game Anda.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#step-by-step" class="btn-primary text-lg px-8 py-4">
                        <i class="fas fa-play mr-2"></i>
                        Mulai Panduan
                    </a>
                    <a href="{{ route('home.index') }}" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-info">
                        <i class="fas fa-home mr-2"></i>
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-cyan-300/20 rounded-full blur-xl animate-pulse-slow"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-blue-300/20 rounded-full blur-xl animate-pulse-slow" style="animation-delay: 1s;"></div>
    </section>

    <!-- Step by Step Guide Section -->
    <section id="step-by-step" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-list-ol text-info mr-3"></i>
                    Langkah-langkah Top Up
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-info to-blue-600 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Ikuti 4 langkah sederhana untuk melakukan top up diamond game
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-8">
                <!-- Step 1 -->
                <div class="flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-8">
                    <div class="flex-shrink-0">
                        <div class="w-24 h-24 bg-gradient-to-br from-info to-blue-600 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                            1
                        </div>
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Pilih Game</h3>
                        <p class="text-gray-600 text-lg leading-relaxed mb-4">
                            Pilih game yang ingin di-top up dari daftar game yang tersedia. 
                            Kami mendukung berbagai game populer seperti Mobile Legends, PUBG Mobile, Free Fire, dan lainnya.
                        </p>
                        <div class="flex justify-center md:justify-start">
                            <a href="{{ route('games.index') }}" class="btn-outline">
                                <i class="fas fa-gamepad mr-2"></i>
                                Lihat Game
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="flex flex-col md:flex-row-reverse items-center space-y-6 md:space-y-0 md:space-x-reverse md:space-x-8">
                    <div class="flex-shrink-0">
                        <div class="w-24 h-24 bg-gradient-to-br from-info to-blue-600 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                            2
                        </div>
                    </div>
                    <div class="flex-1 text-center md:text-right">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Pilih Nominal</h3>
                        <p class="text-gray-600 text-lg leading-relaxed mb-4">
                            Pilih nominal diamond yang diinginkan sesuai dengan budget Anda. 
                            Setiap nominal memiliki harga yang berbeda dan beberapa menawarkan bonus diamond.
                        </p>
                        <div class="flex justify-center md:justify-end">
                            <span class="inline-block bg-blue-100 text-blue-800 px-4 py-2 rounded-xl font-medium">
                                <i class="fas fa-tags mr-2"></i>
                                Harga Terbaik
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-8">
                    <div class="flex-shrink-0">
                        <div class="w-24 h-24 bg-gradient-to-br from-info to-blue-600 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                            3
                        </div>
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Pilih Metode Pembayaran</h3>
                        <p class="text-gray-600 text-lg leading-relaxed mb-4">
                            Pilih metode pembayaran yang paling nyaman. Kami mendukung bank transfer, 
                            e-wallet, QRIS, minimarket, dan kartu kredit/debit.
                        </p>
                        <div class="flex justify-center md:justify-start">
                            <a href="{{ route('payment.index') }}" class="btn-outline">
                                <i class="fas fa-credit-card mr-2"></i>
                                Lihat Metode
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="flex flex-col md:flex-row-reverse items-center space-y-6 md:space-y-0 md:space-x-reverse md:space-x-8">
                    <div class="flex-shrink-0">
                        <div class="w-24 h-24 bg-gradient-to-br from-info to-blue-600 rounded-full flex items-center justify-center text-white text-3xl font-bold">
                            4
                        </div>
                    </div>
                    <div class="flex-1 text-center md:text-right">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Konfirmasi & Bayar</h3>
                        <p class="text-gray-600 text-lg leading-relaxed mb-4">
                            Masukkan ID game dan server, lalu lakukan pembayaran. 
                            Diamond akan masuk ke akun game Anda dalam waktu 1-5 menit.
                        </p>
                        <div class="flex justify-center md:justify-end">
                            <span class="inline-block bg-green-100 text-green-800 px-4 py-2 rounded-xl font-medium">
                                <i class="fas fa-check-circle mr-2"></i>
                                Proses Cepat
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips Section -->
    <section class="py-16 bg-gradient-to-br from-slate-50 to-slate-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-info mr-3"></i>
                    Tips & Trik
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-info to-blue-600 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Beberapa tips untuk memastikan top up berjalan lancar dan aman
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Tip 1 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Pastikan ID Benar</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Periksa kembali ID game dan server sebelum melakukan pembayaran. 
                        ID yang salah dapat menyebabkan diamond masuk ke akun lain.
                    </p>
                </div>

                <!-- Tip 2 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Tunggu Konfirmasi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Setelah pembayaran, tunggu konfirmasi dari sistem. 
                        Jangan tutup halaman sampai proses selesai.
                    </p>
                </div>

                <!-- Tip 3 -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-headset text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Hubungi Support</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Jika ada kendala, jangan ragu untuk menghubungi tim support kami. 
                        Kami siap membantu 24/7.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-question-circle text-info mr-3"></i>
                    Pertanyaan Umum
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-info to-blue-600 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Temukan jawaban untuk pertanyaan yang sering diajukan tentang top up
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                <!-- FAQ Item 1 -->
                <div class="card">
                    <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleGuideFAQ(this)">
                        <h3 class="text-lg font-semibold text-gray-900">Berapa lama proses top up?</h3>
                        <i class="fas fa-chevron-down text-info transition-transform duration-300"></i>
                    </button>
                    <div class="hidden px-4 pb-4">
                        <p class="text-gray-600">Proses top up biasanya selesai dalam waktu 1-5 menit setelah pembayaran berhasil dikonfirmasi. Namun, dalam beberapa kasus bisa memakan waktu hingga 15 menit.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="card">
                    <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleGuideFAQ(this)">
                        <h3 class="text-lg font-semibold text-gray-900">Apa yang harus dilakukan jika top up gagal?</h3>
                        <i class="fas fa-chevron-down text-info transition-transform duration-300"></i>
                    </button>
                    <div class="hidden px-4 pb-4">
                        <p class="text-gray-600">Jika top up gagal, dana akan dikembalikan ke akun Anda dalam waktu 1x24 jam. Hubungi support kami untuk bantuan lebih lanjut dan pastikan ID game yang dimasukkan sudah benar.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="card">
                    <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleGuideFAQ(this)">
                        <h3 class="text-lg font-semibold text-gray-900">Bisakah top up untuk game yang tidak ada di daftar?</h3>
                        <i class="fas fa-chevron-down text-info transition-transform duration-300"></i>
                    </button>
                    <div class="hidden px-4 pb-4">
                        <p class="text-gray-600">Saat ini kami hanya mendukung game yang ada di daftar. Jika ada game yang ingin ditambahkan, silakan hubungi support kami untuk permintaan khusus.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="card">
                    <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleGuideFAQ(this)">
                        <h3 class="text-lg font-semibold text-gray-900">Apakah ada minimum pembelian?</h3>
                        <i class="fas fa-chevron-down text-info transition-transform duration-300"></i>
                    </button>
                    <div class="hidden px-4 pb-4">
                        <p class="text-gray-600">Ya, setiap game memiliki minimum pembelian yang berbeda. Biasanya mulai dari Rp 5.000 hingga Rp 10.000 tergantung pada game dan nominal diamond yang dipilih.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-info to-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Siap untuk Top Up?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Sekarang Anda sudah tahu cara top up. Mari mulai transaksi pertama Anda!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('games.index') }}" class="btn-accent text-lg px-8 py-4">
                    <i class="fas fa-gamepad mr-2"></i>
                    Mulai Top Up
                </a>
                <a href="{{ route('home.index') }}" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-info">
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

<script>
function toggleGuideFAQ(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('i');
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}
</script>
