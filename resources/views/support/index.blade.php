@extends('layouts.app')

@section('title', 'Support & Bantuan - GOC TopUp')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-success to-green-600 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 hero-pattern opacity-10"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                    Support & Bantuan
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-orange-300">
                        24/7
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-green-100 mb-8 leading-relaxed">
                    Tim support kami siap membantu Anda kapan saja. 
                    Jangan ragu untuk menghubungi kami jika mengalami kendala.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact-channels" class="btn-accent text-lg px-8 py-4">
                        <i class="fas fa-headset mr-2"></i>
                        Hubungi Kami
                    </a>
                    <a href="{{ route('home.index') }}" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-success">
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

    <!-- Contact Channels Section -->
    <section id="contact-channels" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-comments text-success mr-3"></i>
                    Channel Komunikasi
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-success to-green-600 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Pilih channel komunikasi yang paling nyaman untuk Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- WhatsApp -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300 border-2 border-green-100 hover:border-green-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-whatsapp text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">WhatsApp</h3>
                    <p class="text-gray-600 mb-4">Chat langsung dengan tim support</p>
                    <p class="text-green-600 font-semibold text-lg mb-4">+62 812-3456-7890</p>
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn-primary">
                        <i class="fab fa-whatsapp mr-2"></i>
                        Chat Sekarang
                    </a>
                </div>
                
                <!-- Email -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300 border-2 border-blue-100 hover:border-blue-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-envelope text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Email</h3>
                    <p class="text-gray-600 mb-4">Kirim email untuk bantuan</p>
                    <p class="text-blue-600 font-semibold text-lg mb-4">support@goc.com</p>
                    <a href="mailto:support@goc.com" class="btn-primary">
                        <i class="fas fa-envelope mr-2"></i>
                        Kirim Email
                    </a>
                </div>
                
                <!-- Live Chat -->
                <div class="card text-center group hover:shadow-glow transition-all duration-300 border-2 border-purple-100 hover:border-purple-300">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-comments text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Live Chat</h3>
                    <p class="text-gray-600 mb-4">Chat real-time di website</p>
                    <p class="text-purple-600 font-semibold text-lg mb-4">Online 24/7</p>
                    <button onclick="startLiveChat()" class="btn-primary">
                        <i class="fas fa-comments mr-2"></i>
                        Mulai Chat
                    </button>
                </div>
            </div>

            <!-- Operating Hours -->
            <div class="max-w-2xl mx-auto">
                <div class="card text-center border-2 border-success/20">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        <i class="fas fa-clock text-success mr-2"></i>
                        Jam Operasional
                    </h3>
                    <p class="text-gray-600 mb-4">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        Support 24/7 - Kami siap membantu Anda kapan saja!
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div class="bg-green-50 p-4 rounded-xl">
                            <p class="font-semibold text-green-800">WhatsApp</p>
                            <p class="text-green-600">Response time: < 5 menit</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-xl">
                            <p class="font-semibold text-blue-800">Email</p>
                            <p class="text-blue-600">Response time: < 2 jam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gradient-to-br from-slate-50 to-slate-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-question-circle text-success mr-3"></i>
                    Pertanyaan Umum
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-success to-green-600 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Temukan jawaban untuk pertanyaan yang sering diajukan
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                <!-- FAQ Item 1 -->
                <div class="card">
                    <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-semibold text-gray-900">Berapa lama proses top up?</h3>
                        <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                    </button>
                    <div class="hidden px-4 pb-4">
                        <p class="text-gray-600">Proses top up biasanya selesai dalam waktu 1-5 menit setelah pembayaran berhasil dikonfirmasi.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="card">
                    <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-semibold text-gray-900">Apakah transaksi aman?</h3>
                        <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                    </button>
                    <div class="hidden px-4 pb-4">
                        <p class="text-gray-600">Ya, semua transaksi dilindungi dengan sistem keamanan berlapis dan enkripsi SSL untuk keamanan maksimal.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="card">
                    <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-semibold text-gray-900">Metode pembayaran apa saja yang didukung?</h3>
                        <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                    </button>
                    <div class="hidden px-4 pb-4">
                        <p class="text-gray-600">Kami mendukung berbagai metode pembayaran termasuk bank transfer, e-wallet, QRIS, minimarket, dan kartu kredit/debit.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="card">
                    <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                        <h3 class="text-lg font-semibold text-gray-900">Bagaimana jika top up gagal?</h3>
                        <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                    </button>
                    <div class="hidden px-4 pb-4">
                        <p class="text-gray-600">Jika top up gagal, dana akan dikembalikan ke akun Anda dalam waktu 1x24 jam. Hubungi support kami untuk bantuan lebih lanjut.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-success to-green-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Masih Butuh Bantuan?
            </h2>
            <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">
                Tim support kami siap membantu Anda dengan berbagai pertanyaan dan kendala
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6281234567890" target="_blank" class="btn-accent text-lg px-8 py-4">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Chat WhatsApp
                </a>
                <a href="{{ route('home.index') }}" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-success">
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
function toggleFAQ(button) {
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

function startLiveChat() {
    // Simulasi live chat
    alert('Live chat akan segera tersedia! Untuk sementara, silakan gunakan WhatsApp atau Email.');
}
</script>
