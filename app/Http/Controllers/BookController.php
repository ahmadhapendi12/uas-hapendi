<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Menampilkan semua buku
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Form tambah buku
    public function create()
    {
        return view('books.create');
        return redirect()->route('books.index')->with('success', '✅ Buku berhasil ditambahkan!');

    }

    // Simpan data buku baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|digits:4',
        ]);

        Book::create($request->only(['title', 'author', 'year']));

        // Flash message ke view
        return redirect()->route('books.index')
                         ->with('success', '✅ Buku berhasil ditambahkan!');
    }

    // Form edit buku
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    // Proses update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|digits:4',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->only(['title', 'author', 'year']));

        return redirect()->route('books.index')
                         ->with('success', '✏️ Buku berhasil diperbarui!');
    }

    // Proses hapus buku
    public function destroy($id)
    {
        Book::destroy($id);

        return redirect()->route('books.index')
                         ->with('success', '🗑️ Buku berhasil dihapus!');
    }
}
