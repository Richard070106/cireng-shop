@extends('layouts.customer')

@section('content')

<h1 class="text-4xl font-bold mb-8">
❤️ Wishlist Saya
</h1>

@if(session('success'))

<div class="bg-green-100 text-green-700 p-4 rounded-xl mb-6">
{{ session('success') }}
</div>

@endif

@if($wishlist->count()==0)

<div class="bg-white p-10 rounded-3xl shadow-xl text-center">

<h2 class="text-2xl font-bold text-gray-500">

Wishlist Masih Kosong

</h2>

</div>

@else

<div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">

@foreach($wishlist as $item)

<div class="bg-white rounded-3xl shadow-xl overflow-hidden">

<img
src="{{ asset($item->image) }}"
class="w-full h-56 object-cover">

<div class="p-6">

<h2 class="text-2xl font-bold">

{{ $item->product_name }}

</h2>

<p class="text-red-600 text-3xl font-bold mt-4">

Rp {{ number_format($item->price,0,',','.') }}

</p>

<form
action="/wishlist/remove/{{ $item->id }}"
method="POST">

@csrf

<button
class="w-full bg-red-600 text-white py-3 rounded-2xl mt-6">

Hapus Wishlist

</button>

</form>

</div>

</div>

@endforeach

</div>

@endif

@endsection