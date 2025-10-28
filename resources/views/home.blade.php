<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I-Lab | Jadwal Hari Ini</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 h-screen overflow-hidden flex flex-col">

    {{-- Header --}}
    <header class="flex items-center justify-between px-8 py-3 bg-white shadow-sm flex-shrink-0">
        <h1 class="text-xl font-bold text-blue-600 tracking-wide">ElevOne-lab</h1>

        <div class="flex items-center">
            <img src="{{ asset('i-lab/Logo-RPL2.png') }}"
                 alt="Logo RPL"
                 class="h-10 w-auto">
        </div>
    </header>

    {{-- Main Layout --}}
    <main class="max-w-7xl mx-auto flex-1 grid grid-cols-2 grid-rows-6 gap-4 px-10 py-6 overflow-hidden">

        {{-- Kiri Atas - Foto Guru --}}
        <div class="bg-white rounded-3xl shadow-md border row-span-3 border-gray-200 flex items-center justify-center ">
            <img src="{{ asset('i-lab/Guru-Astronomi.jpg') }}"
                alt="Guru"
                class="w-72 h-52 rounded-2xl object-cover border-4 border-blue-500 shadow-md m-6">
        </div>

        {{-- Kanan Atas - Nama Guru (diperkecil) --}}
        <div class="bg-white rounded-2xl shadow-md p-6 border row-span-2 border-gray-200 flex flex-col justify-center">
            <h2 class="text-2xl font-semibold text-gray-800">Nazwha Amelia</h2>
            <p class="text-gray-500 text-base mt-1">Guru Astronomi</p>
            <p class="text-sm text-gray-400 mt-1">LABORATORIUM 2 - MULTIMEDIA</p>
        </div>

        {{-- 🔹 Kanan Bawah - Jadwal Hari Ini (2 kolom) 🔹 --}}
        <div class="bg-white rounded-3xl shadow-md p-8 border row-span-4 border-gray-200 flex flex-col items-start">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Jadwal Mata Pelajaran Hari Ini - Senin</h2>

            @php
                $jadwalHariIni = [
                    ['mapel' => 'Astronomi', 'jam' => '07.30 - 09.00'],
                    ['mapel' => 'istirahat', 'jam' => '09.00 - 09.15'],
                    ['mapel' => 'Basis Data', 'jam' => '09.15 - 12.00'],
                    ['mapel' => 'istirahat', 'jam' => '12.00 - 13.00'],
                    ['mapel' => 'Pemrograman Berbasis Teks', 'jam' => '13.00 - 14.00'],
                    ['mapel' => 'Bahasa Indonesia', 'jam' => '14.00 - 15.00'],
                ];
            @endphp

            <div class="grid grid-cols-2 grid-rows-1 gap-2">
                @foreach ($jadwalHariIni as $j)
                    <div class="bg-gray-100 p-4 rounded-2xl hover:bg-blue-100 transition">
                        <h3 class="font-semibold text-gray-800 text-sm">{{ $j['mapel'] }}</h3>
                        <p class="text-xs text-gray-500">{{ $j['jam'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- 🔹 Kiri Bawah - Pelajaran Sedang Berlangsung 🔹 --}}
        <div class="bg-white rounded-3xl shadow-md p-8 border row-span-3 border-gray-200 overflow-hidden">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Pelajaran Sedang Berlangsung</h2>
            <p class="text-gray-500 mb-2">Jadwal Pelajaran yang sedang berlangsung:</p>

            <div class="bg-blue-100 border-l-4 border-blue-500 p-5 rounded-2xl">
                <h3 class="text-xl font-semibold text-gray-800">Astronomi</h3>
                <p class="text-gray-600 text-sm">XII RPL 2 - Laboratorium 2</p>
                <p class="text-gray-500 text-sm mt-2">Pukul 07.30 - 09.00</p>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="bg-white border-t border-gray-200 py-4 text-center text-gray-600 text-sm flex-shrink-0">
        &copy; {{ date('Y') }} ElevOne-lab — Dikembangkan oleh <span class="font-semibold text-blue-600">Tim RPL</span>
    </footer>

</body>
</html>
