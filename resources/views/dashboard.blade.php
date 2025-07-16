@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl shadow-lg p-10 space-y-10 transition-colors duration-300">

        {{-- Header --}}
        <div class="flex justify-between items-start flex-wrap gap-4">
            <div>
                <h1 class="text-4xl font-extrabold text-blue-900 dark:text-blue-400">DASHBOARD</h1>
                <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">Selamat datang di Aplikasi Manajemen Buku Sederhana.</p>
            </div>
            <div class="text-sm text-gray-600 dark:text-gray-300 text-right">
                <div>{{ now()->translatedFormat('l, d F Y') }}</div>
                <div>{{ now()->format('H:i') }} WIB</div>
            </div>
        </div>

        {{-- Tentang Aplikasi --}}
        <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-300 dark:border-blue-700 rounded-xl p-6 shadow-md transition-all duration-300 hover:scale-[1.02]">
            <h2 class="text-lg font-semibold text-blue-800 dark:text-blue-300 mb-2">TENTANG APLIKASI</h2>
            <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">
                Aplikasi ini dirancang untuk membantu Anda mengelola data buku dengan cara yang mudah dan efisien.
                Anda dapat menambahkan, mengedit, atau menghapus data buku yang tersimpan dalam sistem.
                Sangat cocok digunakan oleh perpustakaan kecil, kolektor buku, maupun instansi pendidikan.
            </p>
        </div>

        {{-- Statistik --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-r from-blue-100 to-blue-200 dark:from-blue-900/30 dark:to-blue-800/30 border border-blue-300 dark:border-blue-600 rounded-xl p-6 shadow-md transition-all duration-300 hover:scale-[1.02]">
                <div class="text-sm text-blue-700 dark:text-blue-300">Total Buku</div>
                <div class="text-4xl font-bold text-blue-900 dark:text-blue-200 mt-2">{{ $totalBooks }}</div>
            </div>
            <div class="bg-gradient-to-r from-green-100 to-green-200 dark:from-green-900/30 dark:to-green-800/30 border border-green-300 dark:border-green-600 rounded-xl p-6 shadow-md transition-all duration-300 hover:scale-[1.02]">
                <div class="text-sm text-green-700 dark:text-green-300">Kategori Aktif</div>
                <div class="text-4xl font-bold text-green-900 dark:text-green-200 mt-2">3</div>
            </div>
            <div class="bg-gradient-to-r from-purple-100 to-purple-200 dark:from-purple-900/30 dark:to-purple-800/30 border border-purple-300 dark:border-purple-600 rounded-xl p-6 shadow-md transition-all duration-300 hover:scale-[1.02]">
                <div class="text-sm text-purple-700 dark:text-purple-300">Pengguna Online</div>
                <div class="text-4xl font-bold text-purple-900 dark:text-purple-200 mt-2">1</div>
            </div>
        </div>

        {{-- Menu Cepat --}}
        <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 shadow-md">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">MENU</h2>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('books.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg shadow transition duration-200 ease-in-out transform hover:scale-105">
                    ➕ Tambah Buku
                </a>
                <a href="{{ route('books.index') }}"
                   class="bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-800 dark:text-gray-200 px-5 py-2.5 rounded-lg border transition duration-200 ease-in-out transform hover:scale-105">
                    📚 Lihat Daftar Buku
                </a>
                <button disabled
                   class="bg-gray-100 dark:bg-gray-700 text-gray-400 dark:text-gray-500 px-5 py-2.5 rounded-lg border cursor-not-allowed">
                    🔍 Fitur Pencarian
                </button>
            </div>
        </div>

        {{-- Fitur Utama --}}
        <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 shadow-md">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-3">🛠️ Fitur Utama</h3>
            <ul class="list-disc list-inside text-sm text-gray-700 dark:text-gray-300 space-y-1">
                <li>Menampilkan daftar buku secara tabel</li>
                <li>Tambah data buku baru melalui form</li>
                <li>Edit data buku yang sudah ada</li>
                <li>Hapus buku dari sistem dengan aman</li>
                <li>Notifikasi berhasil menggunakan SweetAlert</li>
            </ul>
        </div>

        {{-- Aktivitas Terakhir --}}
        <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl p-6 shadow-md">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-3">🕒 Aktivitas Terakhir</h3>
            <ul class="space-y-2 text-sm text-gray-700 dark:text-gray-300">
                <li>✅ Buku <strong class="text-gray-900 dark:text-gray-100">"Garis Cinta"</strong> ditambahkan</li>
                <li>📝 Buku <strong class="text-gray-900 dark:text-gray-100">"Ayat-Ayat Cinta"</strong> diperbarui</li>
                <li>🗑️ Buku <strong class="text-gray-900 dark:text-gray-100">"Sikancil"</strong> dihapus</li>
                <li>👤 Login sebagai <strong class="text-gray-900 dark:text-gray-100">"Admin"</strong></li>
            </ul>
        </div>

        {{-- Footer --}}
        <div class="text-center text-xs text-gray-400 dark:text-gray-500 pt-6 border-t border-gray-200 dark:border-gray-700">
            HAPENDI <span class="font-semibold text-gray-600 dark:text-gray-400">1101221160</span> &copy; {{ now()->year }}
        </div>
    </div>
</div>

<script>
    // Tambahkan class 'dark' ke html element jika preferensi sistem dark mode
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.classList.add('dark');
    }

    // Listen for changes in the color scheme preference
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
        if (event.matches) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    });
</script>
@endsection