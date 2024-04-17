<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/photo-detail', function () {
    return view('photo-detail');
});

Route::get('/category', function () {
    return view('category');
});


Route::get('/dashboardAdmin', function () {
    return view('admin.admin');
});

Route::get('/dataFoto', function () {
    return view('admin.dataFoto');
});

Route::get('/tambahFoto', function () {
    return view('admin.tambahFoto');
});

Route::get('/albumAdmin', function () {
    return view('admin.albumAdmin');
});

Route::get('/tambahAlbum', function () {
    return view('admin.tambahAlbum');
});
require __DIR__.'/auth.php'; 



