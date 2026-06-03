@extends('layouts.customer')

@section('content')

<h1 class="text-4xl font-bold mb-8">

Keranjang Saya

</h1>

<div class="bg-white rounded-3xl shadow-xl p-8">

<div class="flex justify-between">

<div>

<h2 class="font-bold text-2xl">

Cireng Pedas

</h2>

<p>Qty : 2</p>

</div>

<p class="text-red-600 font-bold text-2xl">

Rp30.000

</p>

</div>

<hr class="my-8">

<button class="bg-green-600 text-white px-8 py-4 rounded-2xl">

Checkout

</button>

</div>

@endsection