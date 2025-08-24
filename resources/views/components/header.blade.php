<header class="bg-white/90 backdrop-blur-sm shadow-lg border-b border-slate-200 sticky top-0 z-50 transition-transform duration-300 transform" id="main-header">
    <div class="container mx-auto px-4 lg:px-6">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('home.index') }}" class="flex items-center space-x-3 group" aria-label="GOC TopUp Beranda">
                    <div class="w-11 h-11 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center shadow-md group-hover:shadow-lg transition-shadow duration-200 will-change-transform">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 3a1 1 0 011-1h5a1 1 0 011 1v5a1 1 0 01-1 1h-5a1 1 0 01-1-1v-5zM4 11a1 1 0 011-1h5a1 1 0 011 1v5a1 1 0 01-1 1h-5a1 1 0 01-1-1v-5zM11 11a1 1 0 011-1h5a1 1 0 011 1v5a1 1 0 01-1 1h-5a1 1 0 01-1-1v-5zM4 3a1 1 0 011-1h5a1 1 0 011 1v5a1 1 0 01-1 1h-5a1 1 0 01-1-1v-5z" clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-bold text-slate-800 group-hover:text-blue-600 transition-colors duration-200">GOC TopUp</span>
                        <span class="text-xs text-slate-500 hidden sm:block">Gaming On Cloud</span>
                    </div>
                </a>
            </div>

            <nav class="hidden lg:flex items-center space-x-1" aria-label="Main Navigation">
                <a href="{{ route('home.index') }}" class="nav-link"><i class="fas fa-home mr-2"></i>Beranda</a>
                <a href="{{ route('games.index') }}" class="nav-link"><i class="fas fa-gamepad mr-2"></i>Games</a>
                <a href="{{ route('promo.index') }}" class="nav-link relative"><i class="fas fa-gift mr-2"></i>Promo<span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full animate-pulse"></span></a>
                <a href="{{ route('history.index') }}" class="nav-link"><i class="fas fa-history mr-2"></i>Riwayat</a>
                <a href="{{ route('guide.index') }}" class="nav-link"><i class="fas fa-question-circle mr-2"></i>Panduan</a>
                
                <div class="relative group">
                    <button class="nav-link" aria-expanded="false" aria-controls="more-menu">
                        <i class="fas fa-ellipsis-h mr-2"></i>Lainnya<i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-200 group-hover:rotate-180 will-change-transform"></i>
                    </button>
                    <div id="more-menu" class="absolute top-full left-0 mt-2 w-44 bg-white rounded-lg shadow-xl border border-slate-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 origin-top will-change-transform transform scale-95 group-hover:scale-100">
                        <a href="{{ route('faq.index') }}" class="dropdown-item"><i class="fas fa-comments mr-3 w-4"></i>FAQ</a>
                        <a href="{{ route('support.index') }}" class="dropdown-item"><i class="fas fa-headset mr-3 w-4"></i>Bantuan</a>
                        <a href="#" class="dropdown-item"><i class="fas fa-shield-alt mr-3 w-4"></i>Keamanan</a>
                    </div>
                </div>
            </nav>

            <div class="flex items-center space-x-3">
                <div class="hidden md:block relative group">
                    <div class="relative">
                        <input type="text" placeholder="Cari game..." aria-label="Cari game" class="w-56 lg:w-64 pl-10 pr-4 py-2.5 border border-slate-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all duration-200 bg-slate-50 focus:bg-white text-sm">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400 group-focus-within:text-blue-500 transition-colors duration-200"></i>
                    </div>
                    
                    <div class="absolute top-full left-0 right-0 mt-2 bg-white rounded-lg shadow-xl border border-slate-100 py-2 hidden group-focus-within:block origin-top-left will-change-transform transform scale-95">
                        <div class="px-3 py-2 text-xs text-slate-500 font-medium border-b border-slate-100">Popular:</div>
                        <a href="{{ route('games.index') }}" class="search-item"><i class="fas fa-mobile-alt mr-3 text-blue-500"></i><span>Mobile Legends</span></a>
                        <a href="{{ route('games.index') }}" class="search-item"><i class="fas fa-gamepad mr-3 text-purple-500"></i><span>PUBG Mobile</span></a>
                        <a href="{{ route('games.index') }}" class="search-item"><i class="fas fa-fire mr-3 text-orange-500"></i><span>Free Fire</span></a>
                    </div>
                </div>

                <div class="relative group">
                    <button class="action-btn relative" aria-expanded="false" aria-controls="notifications-dropdown">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 text-white text-xs rounded-full flex items-center justify-center font-medium animate-bounce-once">3</span>
                    </button>
                    
                    <div id="notifications-dropdown" class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-xl border border-slate-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 origin-top-right will-change-transform transform scale-95 group-hover:scale-100">
                        <div class="px-4 py-3 border-b border-slate-100 flex items-center justify-between">
                            <h3 class="font-medium text-slate-800">Notifikasi</h3>
                            <button class="text-xs text-blue-600 hover:text-blue-700">Tandai Semua</button>
                        </div>
                        <div class="max-h-72 overflow-y-auto">
                            <div class="notification-item">
                                <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-slate-800">Top up berhasil!</p>
                                    <p class="text-xs text-slate-500">500 Diamond ML telah masuk ke akun</p>
                                    <p class="text-xs text-slate-400 mt-1">2 menit yang lalu</p>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 flex-shrink-0"></div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-slate-800">Promo weekend!</p>
                                    <p class="text-xs text-slate-500">Diskon 25% untuk semua top up ML</p>
                                    <p class="text-xs text-slate-400 mt-1">1 jam yang lalu</p>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="w-2 h-2 bg-orange-500 rounded-full mt-2 flex-shrink-0"></div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-slate-800">Double bonus event!</p>
                                    <p class="text-xs text-slate-500">Top up minimal Rp 50.000</p>
                                    <p class="text-xs text-slate-400 mt-1">3 jam yang lalu</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-2 border-t border-slate-100">
                            <button class="w-full text-center text-sm text-blue-600 hover:text-blue-700 py-1">Lihat Semua</button>
                        </div>
                    </div>
                </div>

                @guest
                    <div class="hidden md:flex items-center space-x-2">
                        <a href="{{ route('auth.login') }}" class="btn-outline"><i class="fas fa-sign-in-alt mr-1.5"></i>Masuk</a>
                        </div>
                @else
                    <div class="hidden md:block relative group">
                        <button class="flex items-center space-x-2 p-2 rounded-lg hover:bg-slate-50 transition-colors duration-200" aria-expanded="false" aria-controls="user-dropdown">
                            <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white text-sm font-medium">
                                {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}
                            </div>
                            <div class="text-left">
                                <div class="text-sm font-medium text-slate-800">{{ Auth::user()->name ?? 'User' }}</div>
                                <div class="text-xs text-slate-500">Rp {{ number_format(Auth::user()->balance ?? 125000) }}</div>
                            </div>
                            <i class="fas fa-chevron-down text-xs text-slate-400 transition-transform duration-200 group-hover:rotate-180"></i>
                        </button>
                        
                        <div id="user-dropdown" class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-xl border border-slate-100 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 origin-top-right will-change-transform transform scale-95 group-hover:scale-100">
                            <div class="px-4 py-3 border-b border-slate-100">
                                <div class="font-medium text-slate-800">{{ Auth::user()->name ?? 'User' }}</div>
                                <div class="text-sm text-slate-500">{{ Auth::user()->email ?? 'user@goc.com' }}</div>
                            </div>
                            <a href="#" class="dropdown-item"><i class="fas fa-user mr-3 w-4"></i>Profil</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-wallet mr-3 w-4"></i>Saldo</a>
                            <a href="{{ route('history.index') }}" class="dropdown-item"><i class="fas fa-history mr-3 w-4"></i>Riwayat</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog mr-3 w-4"></i>Pengaturan</a>
                            <hr class="my-2 border-slate-100">
                            <div class="px-2">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-2 py-2 text-red-600 hover:bg-red-50 rounded-md transition-colors duration-200 flex items-center">
                                        <i class="fas fa-sign-out-alt mr-3 w-4"></i>Keluar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endauth

                <button id="mobile-menu-btn" class="md:hidden action-btn" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">
                    <i class="fas fa-bars text-lg" id="menu-icon"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="md:hidden fixed inset-0 bg-black/40 z-50 opacity-0 invisible transition-all duration-300" id="mobile-overlay">
        <div class="absolute right-0 top-0 h-full w-72 bg-white shadow-xl transform translate-x-full transition-transform duration-300" id="mobile-menu" role="dialog" aria-modal="true" aria-labelledby="mobile-menu-label">
            <div class="p-4 border-b border-slate-200">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-br from-blue-600 to-blue-700 rounded-lg flex items-center justify-center">
                            <i class="fas fa-gamepad text-white"></i>
                        </div>
                        <div>
                            <div id="mobile-menu-label" class="font-medium text-slate-800">GOC TopUp</div>
                            <div class="text-xs text-slate-500">Gaming On Cloud</div>
                        </div>
                    </div>
                    <button id="mobile-close-btn" class="w-7 h-7 bg-slate-100 rounded-md flex items-center justify-center text-slate-600" aria-label="Close mobile menu">
                        <i class="fas fa-times text-sm"></i>
                    </button>
                </div>
            </div>

            <div class="p-4 border-b border-slate-200">
                <div class="relative">
                    <input type="text" placeholder="Cari game..." aria-label="Cari game" class="w-full pl-9 pr-4 py-2.5 border border-slate-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-100 transition-all duration-200 text-sm">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400"></i>
                </div>
            </div>

            @guest
                <div class="p-4 border-b border-slate-200">
                    <div class="space-y-2">
                        <a href="{{ route('auth.login') }}" class="w-full btn-primary justify-center"><i class="fas fa-sign-in-alt mr-2"></i>Masuk ke Akun</a>
                        <a href="{{ route('auth.register') }}" class="w-full btn-outline justify-center"><i class="fas fa-user-plus mr-2"></i>Daftar Sekarang</a>
                    </div>
                </div>
            @else
                <div class="p-4 border-b border-slate-200">
                    <div class="flex items-center space-x-3 p-3 bg-slate-50 rounded-lg">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white font-medium">
                            {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}
                        </div>
                        <div>
                            <div class="font-medium text-slate-800">{{ Auth::user()->name ?? 'User' }}</div>
                            <div class="text-sm text-slate-500">{{ Auth::user()->email ?? 'user@goc.com' }}</div>
                            <div class="text-xs text-green-600 font-medium">Saldo: Rp {{ number_format(Auth::user()->balance ?? 125000) }}</div>
                        </div>
                    </div>
                </div>
            @endauth

            <div class="py-2 flex-1 overflow-y-auto">
                <a href="{{ route('home.index') }}" class="mobile-nav-link"><i class="fas fa-home mr-3 w-4"></i>Beranda</a>
                <a href="{{ route('games.index') }}" class="mobile-nav-link"><i class="fas fa-gamepad mr-3 w-4"></i>Games</a>
                <a href="{{ route('promo.index') }}" class="mobile-nav-link"><i class="fas fa-gift mr-3 w-4"></i>Promo<span class="ml-auto w-2 h-2 bg-red-500 rounded-full"></span></a>
                <a href="{{ route('history.index') }}" class="mobile-nav-link"><i class="fas fa-history mr-3 w-4"></i>Riwayat</a>
                <a href="{{ route('guide.index') }}" class="mobile-nav-link"><i class="fas fa-question-circle mr-3 w-4"></i>Panduan</a>
                <a href="{{ route('faq.index') }}" class="mobile-nav-link"><i class="fas fa-comments mr-3 w-4"></i>FAQ</a>
                <a href="{{ route('support.index') }}" class="mobile-nav-link"><i class="fas fa-headset mr-3 w-4"></i>Bantuan</a>
                
                @auth
                    <hr class="my-3 mx-4 border-slate-200">
                    <a href="#" class="mobile-nav-link"><i class="fas fa-user mr-3 w-4"></i>Profil</a>
                    <a href="#" class="mobile-nav-link"><i class="fas fa-wallet mr-3 w-4"></i>Saldo</a>
                    <a href="#" class="mobile-nav-link"><i class="fas fa-cog mr-3 w-4"></i>Pengaturan</a>
                @endauth
            </div>

            @auth
                <div class="p-4 border-t border-slate-200">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center justify-center py-2.5 px-4 bg-red-500 hover:bg-red-600 text-white rounded-lg font-medium transition-colors duration-200">
                            <i class="fas fa-sign-out-alt mr-2"></i>Keluar
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</header>
<style>
/* Clean and optimized styles */.container {
    max-width: 1280px;
}

.nav-link {
    @apply px-3 py-2 text-slate-700 hover:text-blue-600 font-medium transition-colors duration-200 rounded-lg hover:bg-blue-50 flex items-center;
    will-change: transform;
}

.dropdown-item {
    @apply block px-3 py-2 text-slate-700 hover:bg-slate-50 hover:text-blue-600 flex items-center transition-colors duration-200;
}

.mobile-nav-link {
    @apply block px-4 py-3 text-slate-700 hover:text-blue-600 hover:bg-blue-50 font-medium transition-colors duration-200 flex items-center;
}

.action-btn {
    @apply w-9 h-9 bg-slate-100 rounded-lg flex items-center justify-center text-slate-600 hover:bg-slate-200 hover:text-blue-600 transition-all duration-200;
}

.btn-primary {
    @apply inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200;
}

.btn-outline {
    @apply inline-flex items-center px-4 py-2 border border-slate-300 hover:border-blue-500 text-slate-700 hover:text-blue-600 font-medium rounded-lg transition-colors duration-200 hover:bg-blue-50;
}

.search-item {
    @apply flex items-center px-3 py-2 hover:bg-slate-50 text-sm transition-colors duration-200;
}

.notification-item {
    @apply flex items-start px-4 py-3 hover:bg-slate-50 transition-colors duration-200;
}

/* Animations and Visual Effects */
@keyframes pulse {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: .5;
    }
}

@keyframes bounceOnce {
    0%, 100% {
        transform: translateY(0);
    }
    25% {
        transform: translateY(-5px);
    }
    50% {
        transform: translateY(0);
    }
}

.animate-pulse {
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

.animate-bounce-once {
    animation: bounceOnce 0.8s ease-in-out;
}

/* Mobile Menu Transitions */
#mobile-overlay {
    transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
}

#mobile-overlay.show {
    opacity: 1;
    visibility: visible;
}

#mobile-menu {
    transition: transform 0.3s ease-in-out;
}

#mobile-menu.show {
    transform: translateX(0);
}

/* Header Scroll Effect */
.header-hidden {
    transform: translateY(-100%);
}

/* Performance Optimizations */
#main-header,
#main-header .will-change-transform,
#main-header .group-hover\:rotate-180 {
    will-change: transform;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .container {
        padding-left: 1rem;
        padding-right: 1rem;
    }
}
</style>

<script>// Lightweight and optimized JavaScript
document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // --- DOM Elements ---
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileCloseBtn = document.getElementById('mobile-close-btn');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const header = document.getElementById('main-header');

    // --- State Management ---
    let lastScroll = 0;
    let ticking = false;

    // --- Functions ---
    /**
     * Toggles the mobile menu's visibility and accessibility attributes.
     * @param {boolean} show - True to show the menu, false to hide.
     */
    function toggleMobileMenu(show) {
        if (!mobileOverlay || !mobileMenu || !menuIcon) return;

        if (show) {
            mobileOverlay.classList.add('show');
            mobileMenu.classList.add('show');
            menuIcon.className = 'fas fa-times text-lg';
            document.body.style.overflow = 'hidden';
            if (mobileMenuBtn) mobileMenuBtn.setAttribute('aria-expanded', 'true');
        } else {
            mobileOverlay.classList.remove('show');
            mobileMenu.classList.remove('show');
            menuIcon.className = 'fas fa-bars text-lg';
            document.body.style.overflow = '';
            if (mobileMenuBtn) mobileMenuBtn.setAttribute('aria-expanded', 'false');
        }
    }

    /**
     * Handles the header's visibility based on scroll direction.
     * Uses requestAnimationFrame for performance.
     */
    function updateHeader() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            if (currentScroll > lastScroll && currentScroll > 200) {
                header?.classList.add('header-hidden');
            } else {
                header?.classList.remove('header-hidden');
            }
        } else {
            header?.classList.remove('header-hidden');
        }
        
        lastScroll = currentScroll;
        ticking = false;
    }

    /**
     * Highlights the active navigation link based on the current URL.
     */
    function highlightActiveLink() {
        const currentPath = window.location.pathname;
        document.querySelectorAll('.nav-link, .mobile-nav-link').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('text-blue-600', 'bg-blue-50');
            }
        });
    }

    // --- Event Listeners ---
    mobileMenuBtn?.addEventListener('click', () => {
        toggleMobileMenu(!mobileOverlay.classList.contains('show'));
    });
    
    mobileCloseBtn?.addEventListener('click', () => toggleMobileMenu(false));
    
    mobileOverlay?.addEventListener('click', (e) => {
        if (e.target === mobileOverlay) toggleMobileMenu(false);
    });
    
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') toggleMobileMenu(false);
    });

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            toggleMobileMenu(false);
        }
    });

    // --- Initial Call ---
    highlightActiveLink();
});
</script>