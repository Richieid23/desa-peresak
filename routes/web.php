<?php

use App\Http\Controllers\HomeController;
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

Route::get('/profile/sejarah-desa', [ProfileController::class, 'sejarah'])->name('profile.sejarah');
Route::get('/profile/visi-misi-desa', [ProfileController::class, 'visi_misi'])->name('profile.visi-misi');
