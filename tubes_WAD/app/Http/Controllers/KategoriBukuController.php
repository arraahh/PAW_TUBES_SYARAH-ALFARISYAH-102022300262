<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KategoriBuku;

class KategoriBukuController extends Controller
{
    public function index()
    {
        $kategori = KategoriBuku::all();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        KategoriBuku::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kategori = KategoriBuku::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $kategori = KategoriBuku::findOrFail($id);
        $kategori->update([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()->route('kategori.index')->with('Success', 'Kategori Berhasil diupdate');
    }

    public function destroy($id)
    {
        $kategori = KategoriBuku::findOrFail($id);
        $kategori -> delete();
        
        return redirect()->route('kategori.index')->with('Success','Kategori Berhasil Dihapus');
    }
}
