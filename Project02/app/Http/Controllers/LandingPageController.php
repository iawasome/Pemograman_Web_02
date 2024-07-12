<?php

// app/Http/Controllers/LandingPageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kabkota;
use App\Models\Faskes;
use App\Models\JenisFaskes;
use App\Models\Kategori;

class LandingPageController extends Controller
{
    public function index()
    {
        $kabkota = Kabkota::all();
        $faskes = collect(); // Initialize an empty collection for faskes
        return view('landingpage.index', compact('kabkota', 'faskes'));
    }

    public function getFaskesByKabkota($kabkotaId)
    {
        $faskes = Faskes::where('kabkota_id', $kabkotaId)->get();
        return response()->json($faskes);
    }
}
