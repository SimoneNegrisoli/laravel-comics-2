<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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
Route::get('/', function () {
    return redirect('/comics');
})->name('home');
Route::resource('comics', ComicController::class);

// Route::get('/', function () {
//     //$comics = config('db.comics');
//     //dd($comics);
//     return redirect('/comics');
// })->name('home');

// Route::get('comics', function () {
//     $comics = config('db.comics');
//     return view('comics.index', compact('comics'));
// });

// Route::get('/comics/{id}', function ($id) {
//     $comicsdb = config('db.comics');
//     //dd($comicsdb);

//     if ($id >= 0 && $id < count($comicsdb)) {
//         $comic = $comicsdb[$id];

//         return view('comics.show', compact('comic'));
//     } else {
//         abort(404);
//     }
// })->name('comics.show');
