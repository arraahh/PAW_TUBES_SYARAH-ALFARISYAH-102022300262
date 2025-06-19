<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::with('kategori')->get();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        $kategori = KategoriBuku::all();
        return view('buku.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'kategori_buku_id' => 'required|exists:kategori_buku,id'
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $kategori = KategoriBuku::all();
        return view('buku.edit', compact('buku', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'kategori_buku_id' => 'required|exists:kategori_buku,id'
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diupdate.');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
