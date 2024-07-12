<?php

// app/Http/Controllers/KabkotaController.php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class KabkotaController extends Controller
{
    public function index()
    {
        $list_kabkota = Kabkota::with('provinsi')->get();
        return view('kabkota.index', compact('list_kabkota'));
    }

    public function create()
    {
        $provinsis = Provinsi::all();
        return view('kabkota.create', compact('provinsis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'provinsi_id' => 'required|exists:provinsis,id',
        ]);

        Kabkota::create($request->all());
        return redirect()->route('kabkota.index')->with('success', 'Kabkota created successfully.');
    }

    public function show(Kabkota $kabkota)
    {
        // Pass the Provinsi instance to the view
        return view('kabkota.show', compact('kabkota'));
    }

    public function edit(Kabkota $kabkota)
    {
        $provinsis = Provinsi::all();
        return view('kabkota.edit', compact('kabkota', 'provinsis'));
    }

    public function update(Request $request, Kabkota $kabkota)
    {
        $request->validate([
            'nama' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'provinsi_id' => 'required|exists:provinsis,id',
        ]);

        $kabkota->update($request->all());
        return redirect()->route('kabkota.index')->with('success', 'Kabkota updated successfully.');
    }

    public function destroy(Kabkota $kabkota)
    {
        $kabkota->delete();
        return redirect()->route('kabkota.index')->with('success', 'Kabkota deleted successfully.');
    }
}
