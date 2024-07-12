<?php

// app/Http/Controllers/AboutUsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('about-us.index'); // Memuat view 'about-us.index'
    }
}
