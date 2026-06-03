@extends('layouts.customer')

@section('content')

<div class="bg-white rounded-3xl shadow-xl p-10">

@if(session('success'))
<div class="bg-green-100 text-green-700 p-4 rounded-xl mb-6">
    {{ session('success') }}
</div>
@endif

<form
action="/customer-profile/update"
method="POST"
enctype="multipart/form-data">

@csrf

<div class="flex items-center gap-8">

@if(Auth::user()->photo)

<img
src="{{ asset('storage/'.Auth::user()->photo) }}"
class="w-28 h-28 rounded-full object-cover border-4 border-red-500">

@else

<div class="w-28 h-28 rounded-full bg-gradient-to-r
from-red-500 to-orange-500 text-white
flex items-center justify-center text-5xl">

{{ substr(Auth::user()->name,0,1) }}

</div>

@endif

<div>

<h1 class="text-4xl font-bold">
{{ Auth::user()->name }}
</h1>

<p class="text-gray-500 mt-3">
{{ Auth::user()->email }}
</p>

<p class="text-red-600 mt-2">
Customer CirengShop 🍢
</p>

</div>

</div>

<hr class="my-10">

<div class="mb-8">

<label class="font-bold">
Upload Foto Profil
</label>

<input
type="file"
name="photo"
class="w-full border mt-3 rounded-2xl p-4">

</div>

<div class="grid md:grid-cols-2 gap-8">

<div>

<label class="font-bold">
Nama Lengkap
</label>

<input
type="text"
name="name"
value="{{ Auth::user()->name }}"
class="w-full border mt-3 rounded-2xl p-4">

</div>

<div>

<label class="font-bold">
Email
</label>

<input
type="email"
name="email"
value="{{ Auth::user()->email }}"
class="w-full border mt-3 rounded-2xl p-4">

</div>

</div>

<button
type="submit"
class="bg-red-600 text-white px-8 py-4 rounded-2xl mt-10 hover:bg-red-700">

Update Profil

</button>

</form>

</div>

@endsection