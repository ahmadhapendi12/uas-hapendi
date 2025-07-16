@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h1 class="text-2xl font-bold text-blue-700 mb-6">EDIT BUKU</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold text-gray-700">Judul</label>
            <input type="text" name="title" value="{{ $book->title }}" class="w-full px-4 py-2 border rounded-lg" required>
        </div>

        <div>
            <label class="block font-semibold text-gray-700">Penulis</label>
            <input type="text" name="author" value="{{ $book->author }}" class="w-full px-4 py-2 border rounded-lg" required>
        </div>

        <div>
            <label class="block font-semibold text-gray-700">Tahun</label>
            <input type="number" name="year" value="{{ $book->year }}" class="w-full px-4 py-2 border rounded-lg" required>
        </div>

        <div class="flex space-x-2">
            <button type="submit" class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-white px-5 py-2 rounded shadow hover:scale-105 transition">
                Perbarui
            </button>
            <a href="{{ route('books.index') }}" class="bg-gray-300 text-gray-800 px-5 py-2 rounded shadow hover:bg-gray-400">Batal</a>
        </div>
    </form>
@endsection
