<x-app-layout>

<div class="flex min-h-screen bg-gray-100">

<div class="w-72 bg-red-600 text-white p-6">

<h1 class="text-3xl font-bold mb-10">
🍢 CirengShop
</h1>

<nav class="space-y-3">

<a href="/customer-dashboard" class="block p-3 rounded bg-red-700">
Dashboard
</a>

<a href="/products" class="block p-3 rounded hover:bg-red-700">
Produk
</a>

<a href="/cart" class="block p-3 rounded hover:bg-red-700">
Keranjang
</a>

<a href="/orders" class="block p-3 rounded hover:bg-red-700">
Pesanan
</a>

<a href="/wishlist" class="block p-3 rounded hover:bg-red-700">
Wishlist
</a>

<a href="/profile" class="block p-3 rounded hover:bg-red-700">
Profil
</a>

</nav>

</div>

<div class="flex-1 p-10">

<div class="bg-gradient-to-r from-red-500 to-orange-500 text-white rounded-2xl shadow-lg p-8 mb-8">

<h1 class="text-4xl font-bold">
Selamat Datang Customer {{ Auth::user()->name }}! 👋
</h1>

<p class="mt-4 text-lg">
Kelola pesanan, wishlist, dan nikmati promo cireng favoritmu.
</p>

<p class="mt-3">
Siap menikmati cireng favorit hari ini?
</p>

</div>

<div class="grid md:grid-cols-4 gap-6">

<div class="bg-white rounded-2xl shadow p-6">
<h2>Total Pesanan</h2>
<p class="text-4xl font-bold text-red-600 mt-3">12</p>
</div>

<div class="bg-white rounded-2xl shadow p-6">
<h2>Wishlist</h2>
<p class="text-4xl font-bold text-blue-600 mt-3">5</p>
</div>

<div class="bg-white rounded-2xl shadow p-6">
<h2>Diproses</h2>
<p class="text-4xl font-bold text-green-600 mt-3">2</p>
</div>

<div class="bg-white rounded-2xl shadow p-6">
<h2>Voucher</h2>
<p class="text-4xl font-bold text-purple-600 mt-3">3</p>
</div>

</div>

</div>

</div>

</x-app-layout>