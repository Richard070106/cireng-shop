@extends('layouts.customer')

@section('content')

<div class="bg-gradient-to-r from-red-600 to-orange-500 text-white p-10 rounded-3xl shadow-xl mb-10">

<h1 class="text-5xl font-bold">

Halo {{ Auth::user()->name }} 👋

</h1>

<p class="mt-4 text-lg">

Selamat datang di CirengShop.

</p>

</div>

<div class="grid md:grid-cols-4 gap-8">

<div class="bg-white p-8 rounded-3xl shadow-lg">

<h2>Total Order</h2>

<p class="text-5xl text-red-600 font-bold mt-4">
12
</p>

</div>

<div class="bg-white p-8 rounded-3xl shadow-lg">

<h2>Wishlist</h2>

<p class="text-5xl text-blue-500 font-bold mt-4">
6
</p>

</div>

<div class="bg-white p-8 rounded-3xl shadow-lg">

<h2>Diproses</h2>

<p class="text-5xl text-green-500 font-bold mt-4">
2
</p>

</div>

<div class="bg-white p-8 rounded-3xl shadow-lg">

<h2>Voucher</h2>

<p class="text-5xl text-purple-500 font-bold mt-4">
3
</p>

</div>

</div>

</div>

@if($latestOrder)

<div class="bg-white rounded-3xl shadow-xl p-8 mt-8">

    <h2 class="text-2xl font-bold mb-6">
        📦 Pesanan Terakhir
    </h2>

    <div class="flex items-center justify-between">

        <div>

            <h3 class="text-xl font-bold">
                {{ $latestOrder->product_name }}
            </h3>

            <p class="text-gray-500 mt-2">
                Qty : {{ $latestOrder->qty }}
            </p>

            <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full text-sm font-semibold inline-block mt-3">
                {{ $latestOrder->status }}
            </span>

        </div>

        <div class="flex gap-3">

            @if($latestOrder->status == 'Menunggu Konfirmasi')

            <button class="bg-red-500 hover:bg-red-600 text-white px-5 py-3 rounded-xl">
                ❌ Batalkan Pesanan
            </button>

            @endif

            @if($latestOrder->status == 'Sedang Diantar')

            <button class="bg-green-500 hover:bg-green-600 text-white px-5 py-3 rounded-xl">
                ✅ Pesanan Sampai
            </button>

            @endif

            <a href="/products"
               class="bg-orange-500 hover:bg-orange-600 text-white px-5 py-3 rounded-xl">
                🍢 Mau Pesan Lagi?
            </a>

        </div>

    </div>

</div>

@endif

@endsection