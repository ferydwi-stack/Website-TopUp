@extends('layouts.app')

@section('title', 'Lupa Password - GOC TopUp')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <!-- Forgot Password Form Section -->
    <section class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50 py-16 flex items-center">
        <div class="container mx-auto px-4">
            <div class="max-w-md mx-auto">
                <!-- Logo and Title -->
                <div class="text-center mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-warning to-orange-500 rounded-3xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="fas fa-key text-white text-3xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-900 mb-2">Lupa Password?</h1>
                    <p class="text-gray-600">Masukkan email Anda untuk reset password</p>
                </div>

                <!-- Forgot Password Form -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-8">
                    <form action="{{ route('auth.forgot-password') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email Address
                            </label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all duration-300 @error('email') border-red-500 focus:border-red-500 focus:ring-red-500/10 @enderror"
                                   placeholder="Masukkan email Anda"
                                   value="{{ old('email') }}">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" 
  class="w-full bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold py-3 px-6 rounded-xl hover:shadow-lg hover:shadow-orange-500/30 transition-all duration-300 transform hover:-translate-y-1">
  <i class="fas fa-paper-plane mr-2"></i>
  Kirim Link Reset
</button>

                    </form>

                    <!-- Alternative Options -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <div class="text-center">
                            <p class="text-sm text-gray-600 mb-4">Atau hubungi support kami:</p>
                            <div class="space-y-3">
                                <a href="https://wa.me/6281234567890" class="block w-full bg-green-500 text-white px-4 py-3 rounded-xl font-medium hover:bg-green-600 transition-colors duration-200 flex items-center justify-center">
                                    <i class="fab fa-whatsapp mr-2"></i>
                                    WhatsApp Support
                                </a>
                                <a href="mailto:support@goc.com" class="block w-full bg-primary text-white px-4 py-3 rounded-xl font-medium hover:bg-primary-dark transition-colors duration-200 flex items-center justify-center">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Email Support
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Back to Login -->
                    <div class="text-center mt-8">
                        <a href="{{ route('auth.login') }}" class="text-primary hover:text-primary-dark font-medium">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Kembali ke Login
                        </a>
                    </div>
                </div>

                <!-- Back to Home -->
                <div class="text-center mt-6">
                    <a href="{{ route('home.index') }}" class="text-gray-500 hover:text-gray-700 transition-colors duration-200">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection
