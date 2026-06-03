<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@vite(['resources/css/app.css','resources/js/app.js'])

<title>CirengShop</title>

</head>

<body class="bg-gray-100">

<div class="flex">

<!-- SIDEBAR -->

<div class="w-72 bg-gradient-to-b from-red-600 to-orange-500 text-white min-h-screen p-8 shadow-2xl">

<h1 class="text-4xl font-bold mb-10">
🍢 CirengShop
</h1>

<nav class="space-y-3">

<a href="/customer-dashboard"
class="block p-4 rounded-xl hover:bg-white hover:text-red-600 transition">

🏠 Dashboard

</a>

<a href="/products"
class="block p-4 rounded-xl hover:bg-white hover:text-red-600 transition">

🍢 Produk

</a>

<a href="/cart"
class="block p-4 rounded-xl hover:bg-white hover:text-red-600 transition">

🛒 Keranjang

</a>

<a href="/orders"
class="block p-4 rounded-xl hover:bg-white hover:text-red-600 transition">

📦 Pesanan

</a>

<a href="/wishlist"
class="block p-4 rounded-xl hover:bg-white hover:text-red-600 transition">

❤️ Wishlist

</a>

<a href="/customer-profile"
class="block p-4 rounded-xl hover:bg-white hover:text-red-600 transition">

👤 Profil

</a>

</nav>

</div>

<!-- CONTENT -->

<div class="flex-1">

<!-- NAVBAR -->

<div class="bg-white shadow-md p-6 flex justify-between">

<h2 class="font-bold text-2xl">
Proudct Wishlist
</h2>

<div class="flex items-center gap-4">

<div class="text-right">

<p class="font-bold">
{{ Auth::user()->name }}
</p>

<p class="text-gray-500 text-sm">
Customer
</p>

</div>

<div class="w-12 h-12 rounded-full bg-red-500 text-white flex items-center justify-center text-xl">

{{ substr(Auth::user()->name,0,1) }}

</div>

</div>

</div>

<div class="p-10">

@yield('content')

</div>

</div>

</div>

</body>
</html>