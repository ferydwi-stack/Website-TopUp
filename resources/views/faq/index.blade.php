@extends('layouts.app')

@section('title', 'FAQ - GOC TopUp')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-warning to-orange-500 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute inset-0 hero-pattern opacity-10"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight">
                    FAQ
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-white">
                        Lengkap
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-orange-100 mb-8 leading-relaxed">
                    Temukan jawaban untuk pertanyaan yang sering diajukan tentang layanan top up kami. 
                    Jika tidak menemukan jawaban, hubungi tim support kami.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#faq-section" class="btn-primary text-lg px-8 py-4">
                        <i class="fas fa-search mr-2"></i>
                        Cari Jawaban
                    </a>
                    <a href="{{ route('home.index') }}" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-warning">
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

    <!-- Search Section -->
    <section class="py-8 bg-white border-b border-gray-200">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto">
                <div class="relative">
                    <input type="text" id="faq-search" placeholder="Cari pertanyaan..." 
                           class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-2xl focus:border-warning focus:ring-4 focus:ring-warning/10 transition-all duration-300 text-lg">
                    <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq-section" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-question-circle text-warning mr-3"></i>
                    Pertanyaan Umum
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-warning to-orange-500 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Kumpulan pertanyaan dan jawaban yang paling sering diajukan oleh pengguna
                </p>
            </div>

            <!-- FAQ Categories -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="faq-category active px-6 py-3 bg-warning text-white rounded-xl font-medium hover:bg-orange-500 transition-colors duration-200" data-category="all">
                    Semua
                </button>
                <button class="faq-category px-6 py-3 bg-gray-100 text-gray-700 rounded-xl font-medium hover:bg-warning hover:text-white transition-colors duration-200" data-category="general">
                    Umum
                </button>
                <button class="faq-category px-6 py-3 bg-gray-100 text-gray-700 rounded-xl font-medium hover:bg-warning hover:text-white transition-colors duration-200" data-category="payment">
                    Pembayaran
                </button>
                <button class="faq-category px-6 py-3 bg-gray-100 text-gray-700 rounded-xl font-medium hover:bg-warning hover:text-white transition-colors duration-200" data-category="technical">
                    Teknis
                </button>
                <button class="faq-category px-6 py-3 bg-gray-100 text-gray-700 rounded-xl font-medium hover:bg-warning hover:text-white transition-colors duration-200" data-category="security">
                    Keamanan
                </button>
            </div>

            <!-- FAQ Items -->
            <div class="max-w-4xl mx-auto space-y-4">
                <!-- General FAQ -->
                <div class="faq-item" data-category="general">
                    <div class="card">
                        <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900">Apa itu GOC TopUp?</h3>
                            <i class="fas fa-chevron-down text-warning transition-transform duration-300"></i>
                        </button>
                        <div class="hidden px-4 pb-4">
                            <p class="text-gray-600">GOC TopUp adalah platform top up diamond game terpercaya yang menyediakan layanan top up untuk berbagai game populer seperti Mobile Legends, PUBG Mobile, Free Fire, dan lainnya dengan proses yang cepat, aman, dan harga terbaik.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="general">
                    <div class="card">
                        <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900">Game apa saja yang didukung?</h3>
                            <i class="fas fa-chevron-down text-warning transition-transform duration-300"></i>
                        </button>
                        <div class="hidden px-4 pb-4">
                            <p class="text-gray-600">Kami mendukung berbagai game populer termasuk Mobile Legends, PUBG Mobile, Free Fire, Genshin Impact, Call of Duty Mobile, dan banyak lagi. Daftar game terus diperbarui sesuai dengan tren dan permintaan pengguna.</p>
                        </div>
                    </div>
                </div>

                <!-- Payment FAQ -->
                <div class="faq-item" data-category="payment">
                    <div class="card">
                        <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900">Metode pembayaran apa saja yang didukung?</h3>
                            <i class="fas fa-chevron-down text-warning transition-transform duration-300"></i>
                        </button>
                        <div class="hidden px-4 pb-4">
                            <p class="text-gray-600">Kami mendukung berbagai metode pembayaran termasuk transfer bank (BCA, Mandiri, BNI, BRI), e-wallet (OVO, DANA, GoPay, ShopeePay), QRIS, minimarket (Indomaret, Alfamart), dan kartu kredit/debit.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="payment">
                    <div class="card">
                        <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900">Berapa lama proses pembayaran?</h3>
                            <i class="fas fa-chevron-down text-warning transition-transform duration-300"></i>
                        </button>
                        <div class="hidden px-4 pb-4">
                            <p class="text-gray-600">Proses pembayaran biasanya selesai dalam waktu 1-5 menit setelah konfirmasi berhasil. Namun, untuk beberapa metode pembayaran seperti bank transfer, proses bisa memakan waktu hingga 15 menit tergantung pada bank yang digunakan.</p>
                        </div>
                    </div>
                </div>

                <!-- Technical FAQ -->
                <div class="faq-item" data-category="technical">
                    <div class="card">
                        <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900">Berapa lama diamond masuk ke akun game?</h3>
                            <i class="fas fa-chevron-down text-warning transition-transform duration-300"></i>
                        </button>
                        <div class="hidden px-4 pb-4">
                            <p class="text-gray-600">Diamond akan masuk ke akun game Anda dalam waktu 1-5 menit setelah pembayaran berhasil dikonfirmasi. Dalam beberapa kasus khusus, proses bisa memakan waktu hingga 15 menit.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="technical">
                    <div class="card">
                        <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900">Apa yang harus dilakukan jika diamond tidak masuk?</h3>
                            <i class="fas fa-chevron-down text-warning transition-transform duration-300"></i>
                        </button>
                        <div class="hidden px-4 pb-4">
                            <p class="text-gray-600">Jika diamond tidak masuk dalam waktu 15 menit, silakan hubungi tim support kami melalui WhatsApp, email, atau live chat. Pastikan untuk menyiapkan bukti pembayaran dan detail transaksi.</p>
                        </div>
                    </div>
                </div>

                <!-- Security FAQ -->
                <div class="faq-item" data-category="security">
                    <div class="card">
                        <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900">Apakah transaksi aman?</h3>
                            <i class="fas fa-chevron-down text-warning transition-transform duration-300"></i>
                        </button>
                        <div class="hidden px-4 pb-4">
                            <p class="text-gray-600">Ya, semua transaksi dilindungi dengan sistem keamanan berlapis, enkripsi SSL, dan monitoring 24/7. Kami juga bekerja sama dengan payment gateway terpercaya untuk memastikan keamanan setiap transaksi.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="security">
                    <div class="card">
                        <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900">Bagaimana jika top up gagal?</h3>
                            <i class="fas fa-chevron-down text-warning transition-transform duration-300"></i>
                        </button>
                        <div class="hidden px-4 pb-4">
                            <p class="text-gray-600">Jika top up gagal, dana akan dikembalikan ke akun Anda dalam waktu 1x24 jam. Hubungi support kami untuk bantuan lebih lanjut dan pastikan ID game yang dimasukkan sudah benar.</p>
                        </div>
                    </div>
                </div>

                <!-- Additional FAQ -->
                <div class="faq-item" data-category="general">
                    <div class="card">
                        <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900">Apakah ada minimum pembelian?</h3>
                            <i class="fas fa-chevron-down text-warning transition-transform duration-300"></i>
                        </button>
                        <div class="hidden px-4 pb-4">
                            <p class="text-gray-600">Ya, setiap game memiliki minimum pembelian yang berbeda. Biasanya mulai dari Rp 5.000 hingga Rp 10.000 tergantung pada game dan nominal diamond yang dipilih.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="general">
                    <div class="card">
                        <button class="w-full text-left flex items-center justify-between p-4" onclick="toggleFAQ(this)">
                            <h3 class="text-lg font-semibold text-gray-900">Bisakah top up untuk game yang tidak ada di daftar?</h3>
                            <i class="fas fa-chevron-down text-warning transition-transform duration-300"></i>
                        </button>
                        <div class="hidden px-4 pb-4">
                            <p class="text-gray-600">Saat ini kami hanya mendukung game yang ada di daftar. Jika ada game yang ingin ditambahkan, silakan hubungi support kami untuk permintaan khusus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Support Section -->
    <section class="py-16 bg-gradient-to-br from-slate-50 to-slate-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-headset text-warning mr-3"></i>
                    Masih Butuh Bantuan?
                </h2>
                <div class="w-16 h-1 bg-gradient-to-r from-warning to-orange-500 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Jika tidak menemukan jawaban yang Anda cari, tim support kami siap membantu
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- WhatsApp -->
                    <div class="card text-center group hover:shadow-glow transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fab fa-whatsapp text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">WhatsApp</h3>
                        <p class="text-gray-600 mb-4">Chat langsung dengan tim support</p>
                        <a href="https://wa.me/6281234567890" target="_blank" class="btn-primary">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Chat Sekarang
                        </a>
                    </div>
                    
                    <!-- Email -->
                    <div class="card text-center group hover:shadow-glow transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-envelope text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Email</h3>
                        <p class="text-gray-600 mb-4">Kirim email untuk bantuan</p>
                        <a href="mailto:support@goc.com" class="btn-primary">
                            <i class="fas fa-envelope mr-2"></i>
                            Kirim Email
                        </a>
                    </div>
                    
                    <!-- Live Chat -->
                    <div class="card text-center group hover:shadow-glow transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-comments text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Live Chat</h3>
                        <p class="text-gray-600 mb-4">Chat real-time di website</p>
                        <button onclick="startLiveChat()" class="btn-primary">
                            <i class="fas fa-comments mr-2"></i>
                            Mulai Chat
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-warning to-orange-500 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Siap untuk Top Up?
            </h2>
            <p class="text-xl text-orange-100 mb-8 max-w-2xl mx-auto">
                Sekarang Anda sudah tahu semua informasi penting. Mari mulai transaksi top up Anda!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('games.index') }}" class="btn-accent text-lg px-8 py-4">
                    <i class="fas fa-gamepad mr-2"></i>
                    Mulai Top Up
                </a>
                <a href="{{ route('home.index') }}" class="btn-outline text-lg px-8 py-4 border-white text-white hover:bg-white hover:text-warning">
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
// FAQ Toggle Function
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

// FAQ Category Filter
document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('.faq-category');
    const faqItems = document.querySelectorAll('.faq-item');
    
    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Update active button
            categoryButtons.forEach(btn => btn.classList.remove('active', 'bg-warning', 'text-white'));
            categoryButtons.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-700'));
            this.classList.add('active', 'bg-warning', 'text-white');
            this.classList.remove('bg-gray-100', 'text-gray-700');
            
            // Filter FAQ items
            faqItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // FAQ Search Function
    const searchInput = document.getElementById('faq-search');
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        faqItems.forEach(item => {
            const question = item.querySelector('h3').textContent.toLowerCase();
            const answer = item.querySelector('p').textContent.toLowerCase();
            
            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});

// Live Chat Function
function startLiveChat() {
    alert('Live chat akan segera tersedia! Untuk sementara, silakan gunakan WhatsApp atau Email.');
}
</script>
