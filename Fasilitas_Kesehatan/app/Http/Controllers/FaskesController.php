<?php

namespace App\Http\Controllers;

use App\Models\Faskes;
use App\Models\JenisFaskes;
use App\Models\Kategori;
use App\Models\Kabkota;
use Illuminate\Http\Request;

class FaskesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_faskes = Faskes::with(['jenis_faskes', 'Kategori'])->get();
        return view('faskes.index', compact('list_faskes'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_jenisfaskes = JenisFaskes::all(); // Fetch all Jenis Faskes
        $list_kategori = Kategori::all(); // Fetch all Kategori
        $list_kabkota = Kabkota::all();
        
        // Assuming you have a model for Faskes, create a new instance
        $faskes = new Faskes();
    
        return view('faskes.create', compact('faskes', 'list_jenisfaskes', 'list_kategori', 'list_kabkota'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nama_pengelola' => 'required',
            'alamat' => 'required',
            'website' => 'required|url',
            'email' => 'required|email',
            'kabkota_id' => 'required|integer',
            'rating' => 'required|integer',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'jenis_faskes_id' => 'required|integer',
            'kategori_id' => 'required|integer',
        ]);

        Faskes::create($request->all());

        return redirect()->route('faskes.index')
                         ->with('success', 'Faskes created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $list_jenisfaskes = JenisFaskes::all(); // Fetch all Jenis Faskes
    $list_kategori = Kategori::all(); // Fetch all Kategori
    $list_kabkota = Kabkota::all();
    
    // Fetch the specific Faskes by id
    $faskes = Faskes::findOrFail($id);

    return view('faskes.show', compact('faskes', 'list_jenisfaskes', 'list_kategori','list_kabkota'));
}
    

    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit($id)
    {
        $faskes = Faskes::findOrFail($id);
        $list_jenisfaskes = JenisFaskes::all(); // Fetch all Jenis Faskes
        $list_kategori = Kategori::all(); // Fetch all Kategori
        $list_kabkota = Kabkota::all();
    
        return view('faskes.edit', compact('faskes', 'list_jenisfaskes', 'list_kategori', 'list_kabkota'));
    }

    public function update(Request $request, Faskes $faskes)
    {
        $faskes->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('faskes.index')->with('success', 'Faskes updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faskes $faskes)
    {
        $faskes->delete();

        return redirect()->route('faskes.index')->with('success', 'Faskes deleted successfully');
    }

    public function getFaskesByKabkota($kabkotaId)
    {
        $faskes = Faskes::where('kabkota_id', $kabkotaId)->get();
        return response()->json($faskes);
    }
}
