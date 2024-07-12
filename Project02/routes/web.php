<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\JenisFaskesController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landingpage.index');

// Admin Page
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin.index');

// Authentication Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about-us', function () {
    return view('about-us.index');
})->name('about-us.index');

Route::resource('faskes', FaskesController::class);
Route::post('/search-faskes', [FaskesController::class, 'search'])->name('search-faskes');
Route::get('/faskes/kabkota/{kabkotaId}', [FaskesController::class, 'getFaskesByKabkota'])->name('faskes.byKabkota');
Route::get('/faskes', [FaskesController::class, 'index'])->name('faskes.index');
Route::get('/faskes/create', [FaskesController::class, 'create'])->name('faskes.create');
Route::post('/faskes', [FaskesController::class, 'store'])->name('faskes.store');
Route::get('/faskes/{faskes}/show', [FaskesController::class, 'show'])->name('faskes.show');
Route::get('/faskes/{faskes}/edit', [FaskesController::class, 'edit'])->name('faskes.edit');
Route::put('/faskes/{faskes}', [FaskesController::class, 'update'])->name('faskes.update');
Route::delete('/faskes/{faskes}', [FaskesController::class, 'destroy'])->name('faskes.destroy');

Route::get('/provinsi', [ProvinsiController::class, 'index'])->name('provinsis.index');
Route::get('/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsis.create');
Route::post('/provinsi/store', [ProvinsiController::class, 'store'])->name('provinsis.store');
Route::get('/provinsi/{provinsi}', [ProvinsiController::class, 'show'])->name('provinsis.show');
Route::get('/provinsi/{provinsi}/edit', [ProvinsiController::class, 'edit'])->name('provinsis.edit');
Route::put('/provinsi/{provinsi}', [ProvinsiController::class, 'update'])->name('provinsis.update');
Route::delete('/provinsi/{provinsi}', [ProvinsiController::class, 'destroy'])->name('provinsis.destroy');

Route::get('/jenisfaskes', [JenisFaskesController::class, 'index'])->name('jenisfaskes.index');
Route::get('/jenisfaskes/create', [JenisFaskesController::class, 'create'])->name('jenisfaskes.create');
Route::post('/jenisfaskes/store', [JenisFaskesController::class, 'store'])->name('jenisfaskes.store');
Route::get('/jenisfaskes/{jenisfaskes}', [JenisFaskesController::class, 'show'])->name('jenisfaskes.show');
Route::get('/jenisfaskes/{jenisfaskes}/edit', [JenisFaskesController::class, 'edit'])->name('jenisfaskes.edit');
Route::put('/jenisfaskes/{jenisfaskes}', [JenisFaskesController::class, 'update'])->name('jenisfaskes.update');
Route::delete('/jenisfaskes/{jenisfaskes}', [JenisFaskesController::class, 'destroy'])->name('jenisfaskes.destroy');

Route::get('/kategori', [kategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [kategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori/store', [kategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{kategori}', [kategoriController::class, 'show'])->name('kategori.show');
Route::get('/kategori/{kategori}/edit', [kategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{kategori}', [kategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{kategori}', [kategoriController::class, 'destroy'])->name('kategori.destroy');

Route::get('/kabkota', [KabkotaController::class, 'index'])->name('kabkota.index');
Route::get('/kabkota/create', [KabkotaController::class, 'create'])->name('kabkota.create');
Route::post('/kabkota/store', [KabkotaController::class, 'store'])->name('kabkota.store');
Route::get('/kabkota/{kabkota}', [KabkotaController::class, 'show'])->name('kabkota.show');
Route::get('/kabkota/{kabkota}/edit', [KabkotaController::class, 'edit'])->name('kabkota.edit');
Route::put('/kabkota/{kabkota}', [KabkotaController::class, 'update'])->name('kabkota.update');
Route::delete('/kabkota/{kabkota}', [KabkotaController::class, 'destroy'])->name('kabkota.destroy');

require __DIR__.'/auth.php';
