# GOC TopUp - Platform Top Up Diamond Game

Platform top up diamond game terpercaya dengan berbagai metode pembayaran yang lengkap untuk bank dan e-wallet Indonesia.

## 🚀 Fitur Utama

- **Payment Methods Lengkap**: BCA, Mandiri, BNI, BRI, CIMB, Permata Bank, OVO, DANA, GoPay, ShopeePay, LinkAja, QRIS, dan banyak lagi
- **Responsive Design**: Mobile-first approach dengan Tailwind CSS
- **Component System**: Header, footer, dan payment methods yang reusable
- **Modern UI/UX**: Animasi smooth dan interaksi yang menarik
- **Laravel Backend**: Framework PHP yang powerful dan scalable

## 🛠️ Tech Stack

- **Frontend**: Tailwind CSS, Alpine.js, Font Awesome
- **Backend**: Laravel 10+
- **Database**: MySQL/PostgreSQL
- **Build Tool**: Vite
- **Styling**: CSS dengan utility classes

## 📦 Installation

### Prerequisites
- PHP 8.1+
- Composer
- Node.js 16+
- MySQL/PostgreSQL

### 1. Clone Repository
```bash
git clone <repository-url>
cd qr
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Dependencies
```bash
npm install
```

### 4. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Database Setup
```bash
php artisan migrate
php artisan db:seed
```

### 6. Build Assets
```bash
npm run build
```

### 7. Start Development Server
```bash
php artisan serve
npm run dev
```

## 🎨 Struktur Project

```
qr/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php          # Layout utama dengan slot
│   │   ├── components/
│   │   │   ├── header.blade.php       # Header reusable
│   │   │   ├── footer.blade.php       # Footer reusable
│   │   │   └── payment-methods.blade.php # Payment methods
│   │   ├── topup/
│   │   │   ├── create.blade.php       # Form top up
│   │   │   └── show.blade.php         # Detail transaksi
│   │   └── games/
│   │       ├── index.blade.php        # List games
│   │       └── show.blade.php         # Detail game
│   ├── css/
│   │   └── app.css                    # Custom CSS dengan utility classes
│   └── js/
│       └── app.js                     # Custom JavaScript
├── public/
│   ├── css/
│   │   └── app.css                    # Compiled CSS
│   └── js/
│       └── app.js                     # Compiled JavaScript
├── tailwind.config.js                 # Konfigurasi Tailwind
├── tailwind.colors                    # Custom color palette
├── vite.config.js                     # Konfigurasi Vite
└── package.json                       # Node dependencies
```

## 🎯 Komponen yang Tersedia

### 1. Layout System
- **Slot-based**: Header dan footer terpisah dan reusable
- **Consistent**: Design yang konsisten di semua halaman
- **Maintainable**: Mudah diedit tanpa mengganggu konten utama

### 2. Header Component
- Logo dengan hover effects
- Navigation menu responsive
- Search bar dengan suggestions
- Notifications dropdown
- User menu dengan profile info
- Mobile menu toggle

### 3. Footer Component
- Company information
- Quick links
- Support channels
- Payment methods overview
- Social media links

### 4. Payment Methods Component
- **Bank Transfer**: BCA, Mandiri, BNI, BRI, CIMB, Permata
- **E-Wallet**: OVO, DANA, GoPay, ShopeePay, LinkAja
- **QRIS**: Universal QR payment
- **Convenience Store**: Indomaret, Alfamart, Circle K, FamilyMart
- **Credit/Debit Cards**: Visa, Mastercard, JCB

## 🎨 CSS Utility Classes

### Button Classes
```css
.btn-primary      /* Primary button dengan gradient */
.btn-secondary    /* Secondary button */
.btn-accent       /* Accent button */
.btn-outline      /* Outline button */
```

### Card Classes
```css
.card            /* Basic card */
.card-hover      /* Card dengan hover effect */
.card-glass      /* Glass morphism effect */
```

### Form Classes
```css
.form-input      /* Input field */
.form-label      /* Form label */
.form-error      /* Error message */
```

### Animation Classes
```css
.animate-fade-in     /* Fade in animation */
.animate-slide-up    /* Slide up animation */
.animate-float       /* Float animation */
```

## 🔧 Konfigurasi

### Tailwind CSS
File `tailwind.config.js` berisi:
- Custom color palette
- Animation keyframes
- Box shadows
- Spacing utilities
- Plugin configurations

### Vite
File `vite.config.js` berisi:
- Laravel integration
- Asset compilation
- Build optimization
- Development server

### PostCSS
File `postcss.config.js` berisi:
- Tailwind CSS processing
- Autoprefixer

## 📱 Responsive Design

### Breakpoints
- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

### Mobile-First Approach
- Design dimulai dari mobile
- Progressive enhancement
- Touch-friendly interactions

## 🚀 Development

### Development Mode
```bash
npm run dev
```

### Build Production
```bash
npm run build
```

### Watch Mode
```bash
npm run dev -- --watch
```

## 🎨 Customization

### Menambah Payment Method
1. Edit `resources/views/components/payment-methods.blade.php`
2. Tambahkan method baru di kategori yang sesuai
3. Update mapping di `resources/js/app.js`

### Customisasi Header/Footer
1. Edit `resources/views/components/header.blade.php` atau `footer.blade.php`
2. Perubahan akan berlaku di semua halaman

### Menambah Halaman Baru
```php
@extends('layouts.app')

@section('title', 'Judul Halaman')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <!-- Konten halaman -->
@endsection

@section('footer')
    @include('components.footer')
@endsection
```

## 🔍 Troubleshooting

### Common Issues
1. **Assets tidak load**: Jalankan `npm run build`
2. **Tailwind classes tidak work**: Pastikan `tailwind.config.js` benar
3. **Vite error**: Cek `vite.config.js` dan dependencies

### Debug Tips
- Gunakan browser developer tools
- Check Laravel logs
- Verify file permissions
- Clear cache: `php artisan cache:clear`

## 📚 Dependencies

### PHP Dependencies
- Laravel 10+
- PHP 8.1+

### Node Dependencies
- Tailwind CSS 3.3+
- Vite 5.0+
- PostCSS
- Autoprefixer

## 🤝 Contributing

1. Fork repository
2. Create feature branch
3. Commit changes
4. Push to branch
5. Create Pull Request

## 📄 License

This project is licensed under the MIT License.

## 📞 Support

- **Email**: support@goc.com
- **WhatsApp**: +62 812-3456-7890
- **Documentation**: [docs.goc.com](https://docs.goc.com)

---

**GOC TopUp** - Platform top up diamond game terpercaya dan terlengkap di Indonesia! 🎮✨
