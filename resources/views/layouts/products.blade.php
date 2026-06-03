@extends('layouts.customer')

@section('content')

<h1 class="text-4xl font-bold mb-8">

Katalog Cireng

</h1>

<div class="grid md:grid-cols-3 gap-8">

<div class="bg-white rounded-3xl shadow-xl overflow-hidden hover:scale-105 transition">

<img src="https://picsum.photos/400/250">

<div class="p-6">

<h2 class="font-bold text-2xl">
Cireng Keju
</h2>

<p class="text-gray-500 mt-3">
Gurih dan lumer.
</p>

<p class="text-red-600 text-3xl font-bold mt-5">
Rp15.000
</p>

<button class="bg-red-600 text-white px-5 py-3 rounded-xl mt-6 w-full">

Tambah Keranjang

</button>

</div>

</div>

</div>

@endsection