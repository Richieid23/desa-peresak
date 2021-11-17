<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/profile/sejarah-desa', [ProfileController::class, 'sejarah'])->name('profile.sejarah');
Route::get('/profile/visi-misi-desa', [ProfileController::class, 'visi_misi'])->name('profile.visi-misi');
Route::get('/profile/perangkat-desa', [ProfileController::class, 'perangkat'])->name('profile.perangkat');
Route::get('/profile/potensi-desa', [ProfileController::class, 'potensi'])->name('profile.potensi');

Route::get('/berita', [NewsController::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [NewsController::class, 'details'])->name('berita.details');

Route::get('/data/apbdes', [DataController::class, 'apbdes'])->name('data.apbdes');
Route::get('/data/wilayah-administratif', [DataController::class, 'administratif'])->name('data.administratif');

Route::get('/lembaga-masyarakat/karang-taruna', [LembagaController::class, 'karang_taruna'])->name('lembaga.karang-taruna');

Route::get('/layanan-mandiri/login', function () {
    return view('pages.layanan-mandiri.login');
})->name('layanan-mandiri.login');
