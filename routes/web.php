<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ComicController;
use App\Models\Comic;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/comics/{comic}', function ($id) {
    $comic = Comic::finOrFail($id);
    return view('comics.show', compact('comics'));
})->name('comics.show');

Route::resource('comics', ComicController::class);
