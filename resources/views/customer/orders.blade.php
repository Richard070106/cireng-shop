@extends('layouts.customer')

@section('content')

<h1 class="text-4xl font-bold mb-8">
📦 Pesanan Saya
</h1>

@foreach($orders as $order)

<div class="bg-white rounded-3xl shadow-xl p-6 mb-6">

<div class="flex items-center gap-6">

<img
src="{{ asset($order->image) }}"
class="w-28 h-28 rounded-2xl object-cover">

<div>

<h2 class="text-2xl font-bold">
{{ $order->product_name }}
</h2>

<p class="text-red-600 font-bold">
Rp {{ number_format($order->price,0,',','.') }}
</p>

<p>
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

</div>

</div>

</div>

@endforeach

@endsection