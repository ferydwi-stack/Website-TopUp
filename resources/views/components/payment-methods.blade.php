<!-- Payment Methods Component -->
<div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-8">
    <div class="text-center mb-8">
        <h3 class="text-3xl font-bold text-slate-800 mb-4">Pilih Metode Pembayaran</h3>
        <p class="text-slate-600 text-lg">Pilih metode pembayaran yang paling nyaman untuk Anda</p>
    </div>

    <!-- Payment Categories -->
    <div class="space-y-8">
        <!-- Bank Transfer -->
        <div class="payment-category">
            <h4 class="text-xl font-bold text-slate-800 mb-4 flex items-center">
                <i class="fas fa-university text-primary mr-3"></i>
                Transfer Bank
            </h4>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <!-- BCA -->
                <div class="payment-method bg-gradient-to-br from-blue-50 to-blue-100 border-2 border-blue-200 rounded-xl p-4 text-center hover:border-blue-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">BCA</span>
                    </div>
                    <p class="text-sm font-medium text-blue-800">Bank BCA</p>
                    <p class="text-xs text-blue-600">Transfer Manual</p>
                </div>

                <!-- Mandiri -->
                <div class="payment-method bg-gradient-to-br from-yellow-50 to-yellow-100 border-2 border-yellow-200 rounded-xl p-4 text-center hover:border-yellow-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-yellow-500 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">MDR</span>
                    </div>
                    <p class="text-sm font-medium text-yellow-800">Bank Mandiri</p>
                    <p class="text-xs text-yellow-600">Transfer Manual</p>
                </div>

                <!-- BNI -->
                <div class="payment-method bg-gradient-to-br from-orange-50 to-orange-100 border-2 border-orange-200 rounded-xl p-4 text-center hover:border-orange-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-orange-500 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">BNI</span>
                    </div>
                    <p class="text-sm font-medium text-orange-800">Bank BNI</p>
                    <p class="text-xs text-orange-600">Transfer Manual</p>
                </div>

                <!-- BRI -->
                <div class="payment-method bg-gradient-to-br from-green-50 to-green-100 border-2 border-green-200 rounded-xl p-4 text-center hover:border-green-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-green-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">BRI</span>
                    </div>
                    <p class="text-sm font-medium text-green-800">Bank BRI</p>
                    <p class="text-xs text-green-600">Transfer Manual</p>
                </div>

                <!-- CIMB Niaga -->
                <div class="payment-method bg-gradient-to-br from-red-50 to-red-100 border-2 border-red-200 rounded-xl p-4 text-center hover:border-red-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-red-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">CIMB</span>
                    </div>
                    <p class="text-sm font-medium text-red-800">CIMB Niaga</p>
                    <p class="text-xs text-red-600">Transfer Manual</p>
                </div>

                <!-- Permata Bank -->
                <div class="payment-method bg-gradient-to-br from-purple-50 to-purple-100 border-2 border-purple-200 rounded-xl p-4 text-center hover:border-purple-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-purple-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">PBT</span>
                    </div>
                    <p class="text-sm font-medium text-purple-800">Permata Bank</p>
                    <p class="text-xs text-purple-600">Transfer Manual</p>
                </div>
            </div>
        </div>

        <!-- E-Wallet -->
        <div class="payment-category">
            <h4 class="text-xl font-bold text-slate-800 mb-4 flex items-center">
                <i class="fas fa-wallet text-primary mr-3"></i>
                E-Wallet
            </h4>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <!-- OVO -->
                <div class="payment-method bg-gradient-to-br from-purple-50 to-purple-100 border-2 border-purple-200 rounded-xl p-4 text-center hover:border-purple-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-purple-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">OVO</span>
                    </div>
                    <p class="text-sm font-medium text-purple-800">OVO</p>
                    <p class="text-xs text-purple-600">Instant Payment</p>
                </div>

                <!-- DANA -->
                <div class="payment-method bg-gradient-to-br from-blue-50 to-blue-100 border-2 border-blue-200 rounded-xl p-4 text-center hover:border-blue-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">DANA</span>
                    </div>
                    <p class="text-sm font-medium text-blue-800">DANA</p>
                    <p class="text-xs text-blue-600">Instant Payment</p>
                </div>

                <!-- GoPay -->
                <div class="payment-method bg-gradient-to-br from-green-50 to-green-100 border-2 border-green-200 rounded-xl p-4 text-center hover:border-green-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-green-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">GP</span>
                    </div>
                    <p class="text-sm font-medium text-green-800">GoPay</p>
                    <p class="text-xs text-green-600">Instant Payment</p>
                </div>

                <!-- ShopeePay -->
                <div class="payment-method bg-gradient-to-br from-orange-50 to-orange-100 border-2 border-orange-200 rounded-xl p-4 text-center hover:border-orange-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-orange-500 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">SP</span>
                    </div>
                    <p class="text-sm font-medium text-orange-800">ShopeePay</p>
                    <p class="text-xs text-orange-600">Instant Payment</p>
                </div>

                <!-- LinkAja -->
                <div class="payment-method bg-gradient-to-br from-red-50 to-red-100 border-2 border-red-200 rounded-xl p-4 text-center hover:border-red-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-red-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">LA</span>
                    </div>
                    <p class="text-sm font-medium text-red-800">LinkAja</p>
                    <p class="text-xs text-red-600">Instant Payment</p>
                </div>

                <!-- QRIS -->
                <div class="payment-method bg-gradient-to-br from-yellow-50 to-yellow-100 border-2 border-yellow-200 rounded-xl p-4 text-center hover:border-yellow-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-yellow-500 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <i class="fas fa-qrcode text-white text-lg"></i>
                    </div>
                    <p class="text-sm font-medium text-yellow-800">QRIS</p>
                    <p class="text-xs text-yellow-600">Universal QR</p>
                </div>
            </div>
        </div>

        <!-- Convenience Store -->
        <div class="payment-category">
            <h4 class="text-xl font-bold text-slate-800 mb-4 flex items-center">
                <i class="fas fa-store text-primary mr-3"></i>
                Minimarket & Convenience Store
            </h4>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <!-- Indomaret -->
                <div class="payment-method bg-gradient-to-br from-blue-50 to-blue-100 border-2 border-blue-200 rounded-xl p-4 text-center hover:border-blue-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-xs">INDO</span>
                    </div>
                    <p class="text-sm font-medium text-blue-800">Indomaret</p>
                    <p class="text-xs text-blue-600">COD</p>
                </div>

                <!-- Alfamart -->
                <div class="payment-method bg-gradient-to-br from-green-50 to-green-100 border-2 border-green-200 rounded-xl p-4 text-center hover:border-green-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-green-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-xs">ALFA</span>
                    </div>
                    <p class="text-sm font-medium text-green-800">Alfamart</p>
                    <p class="text-xs text-green-600">COD</p>
                </div>

                <!-- Circle K -->
                <div class="payment-method bg-gradient-to-br from-red-50 to-red-100 border-2 border-red-200 rounded-xl p-4 text-center hover:border-red-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-red-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-xs">CIRC</span>
                    </div>
                    <p class="text-sm font-medium text-red-800">Circle K</p>
                    <p class="text-xs text-red-600">COD</p>
                </div>

                <!-- FamilyMart -->
                <div class="payment-method bg-gradient-to-br from-blue-50 to-blue-100 border-2 border-blue-200 rounded-xl p-4 text-center hover:border-blue-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-xs">FAM</span>
                    </div>
                    <p class="text-sm font-medium text-blue-800">FamilyMart</p>
                    <p class="text-xs text-blue-600">COD</p>
                </div>
            </div>
        </div>

        <!-- Credit Card -->
        <div class="payment-category">
            <h4 class="text-xl font-bold text-slate-800 mb-4 flex items-center">
                <i class="fas fa-credit-card text-primary mr-3"></i>
                Kartu Kredit & Debit
            </h4>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <!-- Visa -->
                <div class="payment-method bg-gradient-to-br from-blue-50 to-blue-100 border-2 border-blue-200 rounded-xl p-4 text-center hover:border-blue-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-cc-visa text-white text-lg"></i>
                    </div>
                    <p class="text-sm font-medium text-blue-800">Visa</p>
                    <p class="text-xs text-blue-600">Credit/Debit</p>
                </div>

                <!-- Mastercard -->
                <div class="payment-method bg-gradient-to-br from-red-50 to-red-100 border-2 border-red-200 rounded-xl p-4 text-center hover:border-red-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-red-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-cc-mastercard text-white text-lg"></i>
                    </div>
                    <p class="text-sm font-medium text-red-800">Mastercard</p>
                    <p class="text-xs text-red-600">Credit/Debit</p>
                </div>

                <!-- JCB -->
                <div class="payment-method bg-gradient-to-br from-purple-50 to-purple-100 border-2 border-purple-200 rounded-xl p-4 text-center hover:border-purple-400 hover:shadow-lg transition-all duration-200 cursor-pointer">
                    <div class="w-12 h-12 bg-purple-600 rounded-lg mx-auto mb-3 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">JCB</span>
                    </div>
                    <p class="text-sm font-medium text-purple-800">JCB</p>
                    <p class="text-xs text-purple-600">Credit Card</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Instructions -->
    <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl border border-blue-200">
        <h5 class="text-lg font-bold text-blue-800 mb-3 flex items-center">
            <i class="fas fa-info-circle mr-2"></i>
            Informasi Pembayaran
        </h5>
        <ul class="text-sm text-blue-700 space-y-2">
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                <span>Semua metode pembayaran aman dan terpercaya</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                <span>Pembayaran akan diproses dalam 1-5 menit</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                <span>Diamond akan langsung masuk ke akun game Anda</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-green-500 mr-2 mt-1"></i>
                <span>Support 24/7 untuk bantuan pembayaran</span>
            </li>
        </ul>
    </div>
</div>

<style>
.payment-method {
    transition: all 0.3s ease;
}

.payment-method:hover {
    transform: translateY(-2px);
}

.payment-method.selected {
    border-color: #3b82f6;
    background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
    box-shadow: 0 10px 25px rgba(59, 130, 246, 0.15);
}

.payment-category {
    padding: 1.5rem;
    background: #f8fafc;
    border-radius: 1rem;
    border: 1px solid #e2e8f0;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const paymentMethods = document.querySelectorAll('.payment-method');
    
    paymentMethods.forEach(method => {
        method.addEventListener('click', function() {
            // Remove selected class from all methods
            paymentMethods.forEach(m => m.classList.remove('selected'));
            
            // Add selected class to clicked method
            this.classList.add('selected');
            
            // You can add logic here to store the selected payment method
            const methodName = this.querySelector('p').textContent;
            console.log('Selected payment method:', methodName);
        });
    });
});
</script>
