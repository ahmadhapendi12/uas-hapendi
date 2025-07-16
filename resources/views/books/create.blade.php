@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold text-blue-700 mb-6">TAMBAH BUKU</h1>

    <form action="{{ route('books.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block font-semibold text-gray-700 dark:text-gray-300">Judul</label>
            <input type="text" name="title" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700 dark:text-gray-200" required>
        </div>

        <div>
            <label class="block font-semibold text-gray-700 dark:text-gray-300">Penulis</label>
            <input type="text" name="author" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700 dark:text-gray-200" required>
        </div>

        <div>
            <label class="block font-semibold text-gray-700 dark:text-gray-300">Tahun</label>
            <input type="number" name="year" class="w-full px-4 py-2 border rounded-lg dark:bg-gray-700 dark:text-gray-200" required>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-gradient-to-r from-green-400 to-blue-500 text-white px-5 py-2 rounded shadow hover:scale-105 transition">
                Simpan
            </button>
            <a href="{{ route('books.index') }}" class="bg-gray-300 text-gray-800 px-5 py-2 rounded shadow hover:bg-gray-400">Batal</a>
        </div>
    </form>

    {{-- Menu Kembali ke Beranda --}}
    <div class="mt-6">
        <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline">
        Beranda
        </a>
    </div>
</div>
@endsection