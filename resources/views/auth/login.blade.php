<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ElevOne-lab</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 flex flex-col min-h-screen justify-center items-center">

    {{-- Header kecil --}}
    <header class="absolute top-0 left-0 right-0 flex justify-between items-center px-8 py-3 bg-white shadow-sm">
        <h1 class="text-xl font-bold text-blue-600 tracking-wide">ElevOne-lab</h1>
        <img src="{{ asset('i-lab/Logo-RPL2.png') }}" alt="Logo RPL" class="h-10 w-auto">
    </header>

    {{-- Container utama --}}
    <main class="bg-white shadow-md border border-gray-200 rounded-3xl p-10 w-full max-w-md mt-16">

        {{-- Judul --}}
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-1">Selamat Datang 👋</h2>
            <p class="text-gray-500 text-sm">Silakan masuk untuk mengakses laboratorium digital</p>
        </div>

        {{-- Form login --}}
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            {{-- Email --}}
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">Alamat Email</label>
                <input type="email" id="email" name="email" required autofocus
                       class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none placeholder-gray-400"
                       placeholder="contoh@email.com">
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block text-gray-700 font-medium mb-1">Kata Sandi</label>
                <input type="password" id="password" name="password" required
                       class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none placeholder-gray-400"
                       placeholder="••••••••">
            </div>

            {{-- Tombol --}}
            <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-xl hover:bg-blue-700 transition font-semibold shadow-md">
                Masuk
            </button>

            {{-- Link tambahan --}}
            <div class="text-center mt-4">
                <a href="#" class="text-sm text-blue-600 hover:underline">Lupa kata sandi?</a>
            </div>
        </form>
    </main>
</body>
</html>
