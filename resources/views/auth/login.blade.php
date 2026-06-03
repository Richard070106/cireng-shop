<x-guest-layout>

    <div class="w-full max-w-md mx-auto bg-white rounded-xl shadow-lg p-8">

        <div class="text-center mb-6">

            <img src="{{ asset('images/logo-cireng.png') }}"
                alt="Cireng Shop"
                class="w-24 mx-auto mb-3">

            <h1 class="text-3xl font-bold text-red-600">
                Cireng Shop
            </h1>

            <p class="text-gray-500">
                Login Customer
            </p>

        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-2 font-medium">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="w-full rounded-lg border-gray-300"
                    required
                    autofocus>
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-medium">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    class="w-full rounded-lg border-gray-300"
                    required>
            </div>

            <div class="mb-4">
                <label class="flex items-center">
                    <input type="checkbox" name="remember">
                    <span class="ml-2">Ingat Saya</span>
                </label>
            </div>

            <button
                type="submit"
                class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-lg">
                Masuk
            </button>

            <div class="text-center mt-4">
                Belum punya akun?

                <a href="{{ route('register') }}"
                   class="text-orange-500 font-semibold">
                    Daftar
                </a>
            </div>

        </form>

    </div>

</x-guest-layout>