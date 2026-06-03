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

@endsection