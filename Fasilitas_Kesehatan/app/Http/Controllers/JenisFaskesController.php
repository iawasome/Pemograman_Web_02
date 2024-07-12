<?php

namespace App\Http\Controllers;

use App\Models\JenisFaskes;
use Illuminate\Http\Request;

class JenisFaskesController extends Controller
{
    // Menampilkan daftar semua jenis fasilitas kesehatan
    public function index()
    {
        $list_jenisfaskes = JenisFaskes::all();
        return view('jenisfaskes.index', compact('list_jenisfaskes'));
    }

    // Menampilkan form untuk membuat jenis fasilitas kesehatan baru
    public function create()
    {
        return view('jenisfaskes.create');
    }

    // Menyimpan data jenis fasilitas kesehatan yang baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        JenisFaskes::create($request->all());

        return redirect()->route('jenisfaskes.index')
                         ->with('success', 'Jenis Fasilitas Kesehatan berhasil ditambahkan.');
    }

    // Menampilkan detail jenis fasilitas kesehatan tertentu
    public function show(JenisFaskes $jenisfaskes)
    {
        return view('jenisfaskes.show', compact('jenisfaskes'));
    }

    // Menampilkan form untuk mengedit jenis fasilitas kesehatan
    public function edit(JenisFaskes $jenisfaskes)
    {
        return view('jenisfaskes.edit', compact('jenisfaskes'));
    }

    // Mengupdate data jenis fasilitas kesehatan yang sudah ada
    public function update(Request $request, JenisFaskes $jenisfaskes)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $jenisfaskes->update($request->all());

        return redirect()->route('jenisfaskes.index')
                         ->with('success', 'Jenis Fasilitas Kesehatan berhasil diperbarui.');
    }

    // Menghapus jenis fasilitas kesehatan
    public function destroy(JenisFaskes $jenisfaskes)
    {
        $jenisfaskes->delete();

        return redirect()->route('jenisfaskes.index')
                         ->with('success', 'Jenis Fasilitas Kesehatan berhasil dihapus.');
    }
}
