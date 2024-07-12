<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        // Mengambil semua data provinsi
        $list_provinsi = Provinsi::all();
        return view('provinsi.index', compact('list_provinsi'));
    }

    public function create()
    {
        // Return the view for creating a new provinsi
        return view('provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nama' => 'required|string',
            'ibukota' => 'required|string',
            'latitude' => 'required|double',
            'longitude' => 'required|double',
        ]);

        // Create a new Provinsi instance with the validated data
        Provinsi::create([
            'nama' => $request->nama,
            'ibukota' => $request->ibukota,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('provinsis.index')->with('success', 'Provinsi Berhasil dibuat ^.^');
    }

    public function show(Provinsi $provinsi)
    {
        // Pass the Provinsi instance to the view
        return view('provinsi.show', compact('provinsi'));
    }

    public function edit(Provinsi $provinsi)
    {
        // Pass the Provinsi instance to the view
        return view('provinsi.edit', compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provinsi $provinsi)
    {

        // Update the provinsi instance
        $provinsi->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('provinsis.index')->with('success', 'Provinsi Berhasil di Update ^.^');
    }

    public function destroy(Provinsi $provinsi)
    {
        // Delete the Pasien instance
        $provinsi->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('provinsis.index')->with('success', 'Provinsi deleted successfully');
    }
}