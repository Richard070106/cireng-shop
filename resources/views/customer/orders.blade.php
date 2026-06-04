@extends('layouts.customer')

@section('content')

<h1 class="text-4xl font-bold mb-8">
    📦 Pesanan Saya
</h1>

@if(session('success'))

<div class="bg-green-100 text-green-700 p-4 rounded-xl mb-6">
    {{ session('success') }}
</div>

@endif

@foreach($orders as $order)

<div class="bg-white rounded-3xl shadow-xl p-6 mb-6">

    <div class="flex items-center gap-6">

        <img
            src="{{ asset($order->image) }}"
            class="w-28 h-28 rounded-2xl object-cover">

        <div class="flex-1">

            <h2 class="text-2xl font-bold">
                {{ $order->product_name }}
            </h2>

            <p class="text-red-600 font-bold text-lg">
                Rp {{ number_format($order->price,0,',','.') }}
            </p>

            <div class="mt-3 flex items-center gap-4">

                <p class="text-gray-500">
                    Qty : {{ $order->qty }}
                </p>

                <span class="
                    bg-yellow-100
                    text-yellow-700
                    text-sm
                    font-semibold
                    px-4
                    py-1.5
                    rounded-full
                    shadow-sm
                ">
                    {{ $order->status }}
                </span>

            </div>

            <div class="flex flex-wrap gap-2 mt-4">

                {{-- Menunggu Konfirmasi --}}
                @if($order->status == 'Diproses')

                <form action="/orders/cancel/{{ $order->id }}"
                    method="POST">

                    @csrf

                    <button
                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">
                        ❌ Batalkan Pesanan
                    </button>

                </form>

                @endif

                {{-- Sedang Diantar --}}
                @if($order->status == 'Sedang Diantar')

                <form action="/orders/received/{{ $order->id }}"
                    method="POST">

                    @csrf

                    <button
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">
                        ✅ Pesanan Sampai
                    </button>

                </form>

                @endif

                {{-- Tombol selalu tampil --}}
                <a href="/products"
                   class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg">
                    🍢 Mau Pesan Lagi?
                </a>

            </div>

        </div>

    </div>

</div>

@endforeach

@endsection