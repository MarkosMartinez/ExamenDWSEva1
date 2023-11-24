<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ManzanaController;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/manzanas', [ManzanaController::class, 'index'])->middleware('auth')->name('vermanzanas');
Route::get('/addmanzana', [ManzanaController::class, 'create'])->middleware('auth')->name('addmanzana');
Route::post('/addmanzana', [ManzanaController::class, 'store'])->middleware('auth')->name('añadirmanzana');
Route::get('/modificarmanzana/{id?}', [ManzanaController::class, 'edit'])->middleware('auth')->name('getmodificarmanzana');
Route::post('/postmodmanzana', [ManzanaController::class, 'update'])->middleware('auth')->name('postmodmanzana');
Route::post('/eliminarmanzana', [ManzanaController::class, 'destroy'])->middleware('auth')->name('eliminarmanzana');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
