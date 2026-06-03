@extends('layouts.customer')

@section('content')

<div class="flex justify-between items-center mb-10">

<h1 class="text-4xl font-bold">
🍢 Katalog Cireng
</h1>

<form method="GET" action="/products" class="flex gap-3">

<input
type="text"
name="search"
placeholder="Cari cireng..."
value="{{ request('search') }}"
class="bg-white shadow rounded-xl px-5 py-3 w-80"
/>

<button
type="submit"
class="bg-red-600 text-white px-6 rounded-xl">

Cari

</button>

</form>

</div>

<div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">

@php

$products = [

[
'name'=>'Cireng Original',
'price'=>10000,
'image'=>'images/products/cireng-original.jpg',
'desc'=>'Gurih, renyah, dan nikmat.'
],

[
'name'=>'Cireng Keju',
'price'=>15000,
'image'=>'images/products/cireng-keju.jpg',
'desc'=>'Keju lumer & creamy.'
],

[
'name'=>'Cireng Ayam Suwir',
'price'=>18000,
'image'=>'images/products/cireng-ayam-suwir.jpg',
'desc'=>'Isi ayam pedas gurih.'
],

[
'name'=>'Cireng Pedas',
'price'=>12000,
'image'=>'images/products/cireng-pedas.jpg',
'desc'=>'Extra pedas bikin nagih.'
],

[
'name'=>'Cireng Mozarella',
'price'=>20000,
'image'=>'images/products/cireng-mozarella.jpg',
'desc'=>'Mozarella premium lumer.'
],

[
'name'=>'Cireng BBQ',
'price'=>16000,
'image'=>'images/products/cireng-bbq.jpg',
'desc'=>'Rasa BBQ manis gurih.'
]

];

@endphp

@foreach($products as $item)

<div class="bg-white rounded-3xl shadow-xl overflow-hidden relative hover:scale-105 transition duration-300">

<!-- WISHLIST -->

<form
action="/wishlist/add"
method="POST"
class="absolute top-4 right-4 z-10">

@csrf

<input type="hidden" name="product_name" value="{{ $item['name'] }}">
<input type="hidden" name="price" value="{{ $item['price'] }}">
<input type="hidden" name="image" value="{{ $item['image'] }}">

<button
type="submit"
class="bg-white shadow-lg w-12 h-12 rounded-full
text-pink-500 text-2xl
hover:bg-pink-500 hover:text-white
transition">

❤

</button>

</form>

<img
src="{{ asset($item['image']) }}"
class="w-full h-56 object-cover">

<div class="p-6">

<h2 class="text-2xl font-bold">

{{ $item['name'] }}

</h2>

<p class="text-gray-500 mt-3">

{{ $item['desc'] }}

</p>

<p class="text-red-600 text-3xl font-bold mt-5">

Rp {{ number_format($item['price'],0,',','.') }}

</p>

<!-- CART -->

<form action="/cart/add" method="POST">

@csrf

<input type="hidden" name="product_name" value="{{ $item['name'] }}">
<input type="hidden" name="price" value="{{ $item['price'] }}">
<input type="hidden" name="image" value="{{ $item['image'] }}">

<button
type="submit"
class="w-full bg-red-600 text-white py-3 rounded-2xl mt-6 hover:bg-red-700">

Tambah Keranjang

</button>

</form>

</div>

</div>

@endforeach

</div>

@endsection