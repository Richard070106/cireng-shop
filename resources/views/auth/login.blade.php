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

                <div class="relative">
                    <input
                        id="password"
                        type="password"
                        name="password"
                        class="w-full rounded-lg border-gray-300 pr-10"
                        required>

                    <span
                        class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer text-black"
                        onmousedown="showPassword()"
                        onmouseup="hidePassword()"
                        onmouseleave="hidePassword()"
                        ontouchstart="showPassword()"
                        ontouchend="hidePassword()">

                        <!-- Mata tertutup -->
                        <svg id="eye-closed"
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13.875 18.825A10.05 10.05 0 0112 19c-5.523 0-10-4.477-10-7 0-1.338 1.16-2.95 3.06-4.243M9.88 9.88A3 3 0 0014.12 14.12M6.1 6.1L17.9 17.9M21 21L3 3" />
                        </svg>

                        <!-- Mata terbuka -->
                        <svg id="eye-open"
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 hidden"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z" />
                        </svg>

                    </span>

                </div>
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

        <script>
            function showPassword() {
                document.getElementById('password').type = 'text';

                document.getElementById('eye-open').classList.remove('hidden');
                document.getElementById('eye-closed').classList.add('hidden');
            }

            function hidePassword() {
                document.getElementById('password').type = 'password';

                document.getElementById('eye-open').classList.add('hidden');
                document.getElementById('eye-closed').classList.remove('hidden');
            }
        </script>

    </div>

</x-guest-layout>