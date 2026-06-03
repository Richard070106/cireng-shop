@extends('layouts.customer')

@section('content')

<div class="flex justify-between items-center mb-8">

<h1 class="text-4xl font-bold">
🛒 Keranjang Saya
</h1>

@if($cart->count()>0)

<form action="/cart/clear"
method="POST">

@csrf

<button
onclick="return confirm('Hapus semua produk?')"
class="bg-red-600 text-white px-6 py-3 rounded-2xl hover:bg-red-700">

🗑 Hapus Semua

</button>

</form>

@endif

</div>

@if(session('success'))
<div class="bg-green-100 text-green-700 p-4 rounded-xl mb-6">
    {{ session('success') }}
</div>
@endif

@if($cart->count()==0)

<div class="bg-white p-10 rounded-3xl shadow-xl text-center">
    <h2 class="text-2xl font-bold text-gray-600">
        Keranjang Masih Kosong
    </h2>

    <p class="text-gray-400 mt-3">
        Yuk tambah cireng favoritmu 🍢
    </p>
</div>

@else

<div class="space-y-6">

@foreach($cart as $item)

<div class="bg-white rounded-3xl shadow-xl p-6">

<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">

<div class="flex items-center gap-5">

<img
src="{{ asset($item->image) }}"
class="w-28 h-28 rounded-2xl object-cover">

<div>

<h2 class="text-2xl font-bold">
{{ $item->product_name }}
</h2>

<p class="text-red-600 font-bold mt-2">
Rp {{ number_format($item->price,0,',','.') }}
</p>

<p class="text-gray-500 mt-2">
Qty : {{ $item->qty }}
</p>

</div>

</div>

<div class="flex flex-wrap gap-3">

<form action="/cart/decrease/{{ $item->id }}" method="POST">
@csrf
<button class="bg-gray-200 px-4 py-2 rounded-xl">
−
</button>
</form>

<form action="/cart/increase/{{ $item->id }}" method="POST">
@csrf
<button class="bg-green-500 text-white px-4 py-2 rounded-xl">
+
</button>
</form>

<form action="/cart/remove/{{ $item->id }}" method="POST">
@csrf
<button class="bg-red-600 text-white px-5 py-2 rounded-xl">
Hapus
</button>
</form>

<form action="/checkout/{{ $item->id }}" method="POST">
@csrf
<button class="bg-orange-500 text-white px-5 py-2 rounded-xl">
Beli Sekarang
</button>
</form>

</div>

</div>

</div>

@endforeach

</div>

@endif

@endsection