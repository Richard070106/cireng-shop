<x-app-layout>

<div class="flex min-h-screen bg-gray-100">

<div class="w-72 bg-red-600 text-white p-6">

<h1 class="text-3xl font-bold mb-10">
🍢 CirengShop
</h1>

<nav class="space-y-3">

<a href="/customer-dashboard" class="block p-3 rounded bg-red-700">
Dashboard
</a>

<a href="/products" class="block p-3 rounded hover:bg-red-700">
Produk
</a>

<a href="/cart" class="block p-3 rounded hover:bg-red-700">
Keranjang
</a>

<a href="/orders" class="block p-3 rounded hover:bg-red-700">
Pesanan
</a>

<a href="/wishlist" class="block p-3 rounded hover:bg-red-700">
Wishlist
</a>

<a href="/profile" class="block p-3 rounded hover:bg-red-700">
Profil
</a>

</nav>

</div>

<div class="flex-1 p-10">

<div class="bg-gradient-to-r from-red-500 to-orange-500 text-white rounded-2xl shadow-lg p-8 mb-8">

<h1 class="text-4xl font-bold">
Selamat Datang Customer {{ Auth::user()->name }}! 👋
</h1>

<p class="mt-4 text-lg">
Kelola pesanan, wishlist, dan nikmati promo cireng favoritmu.
</p>

<p class="mt-3">
Siap menikmati cireng favorit hari ini?
</p>

</div>

<div class="grid md:grid-cols-4 gap-6">

<div class="bg-white rounded-2xl shadow p-6">
<h2>Total Pesanan</h2>
<p class="text-4xl font-bold text-red-600 mt-3">{{ $totalOrder }}</p>
</div>

<div class="bg-white rounded-2xl shadow p-6">
<h2>Wishlist</h2>
<p class="text-4xl font-bold text-blue-600 mt-3">{{ $totalWishlist }}</p>
</div>

<div class="bg-white rounded-2xl shadow p-6">
<h2>Diproses</h2>
<p class="text-4xl font-bold text-green-600 mt-3">{{ $diproses }}</p>
</div>

<div class="bg-white rounded-2xl shadow p-6">
<h2>Voucher</h2>
<p class="text-4xl font-bold text-purple-600 mt-3">{{ $voucher }}</p>
</div>

</div> {{-- TUTUP GRID STATISTIK --}}

@if($latestOrder)

<div class="bg-white rounded-3xl shadow-xl p-8 mt-8">

    <h2 class="text-3xl font-bold mb-6">
        📦 Pesanan Terakhir
    </h2>

    <div class="flex items-center justify-between gap-8">

        {{-- FOTO PRODUK --}}
        <div class="flex items-center gap-6">

            <img
                src="{{ asset($latestOrder->image) }}"
                alt="{{ $latestOrder->product_name }}"
                class="w-36 h-36 rounded-2xl object-cover shadow-md">

            <div>

                <h3 class="text-2xl font-bold">
                    {{ $latestOrder->product_name }}
                </h3>

                <p class="text-gray-500 mt-2">
                    Qty : {{ $latestOrder->qty }}
                </p>

                <p class="text-red-600 font-bold text-xl mt-2">
                    Rp {{ number_format($latestOrder->price,0,',','.') }}
                </p>

                <span class="inline-block mt-3 bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full">
                    {{ $latestOrder->status }}
                </span>

            </div>

        </div>

        {{-- TOMBOL --}}
        <div class="flex gap-3">

            @if($latestOrder->status == 'Diproses')

            <form action="/orders/cancel/{{ $latestOrder->id }}"
                  method="POST">
                @csrf

                <button
                    class="bg-red-500 hover:bg-red-600 text-white px-5 py-3 rounded-xl">
                    ❌ Batalkan Pesanan
                </button>

            </form>

            @endif

            <a href="/products"
               class="bg-orange-500 hover:bg-orange-600 text-white px-5 py-3 rounded-xl">
                🍢 Mau Pesan Lagi
            </a>

        </div>

    </div>

</div>

@endif

</div>

</div>

</x-app-layout>