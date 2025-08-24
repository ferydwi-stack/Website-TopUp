<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'GOC TopUp - Platform Top Up Diamond Game Terpercaya')</title>
    
    <!-- Meta Tags -->
    <meta name="description" content="Platform top up diamond game terpercaya dengan berbagai metode pembayaran. Top up Mobile Legends, PUBG, Free Fire, dan game populer lainnya.">
    <meta name="keywords" content="top up diamond, mobile legends, pubg, free fire, game, pembayaran, indonesia">
    <meta name="author" content="GOC TopUp">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    @stack('styles')
</head>
<body class="font-sans bg-gray-50 text-gray-900 antialiased">
    <!-- Header Slot -->
    @yield('header')
    
    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>
    
    <!-- Footer Slot -->
    @yield('footer')
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
