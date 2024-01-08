<?php

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

Route::get('/', function () {
    $comics = config('db.comics');
    //dd($comics);
    return view('home', compact('comics'));
})->name('home');


Route::get('/comics/{id}', function ($id) {
    $comicsdb = config('db.comics');
    //dd($comicsdb);

    if ($id >= 0 && $id < count($comicsdb)) {
        $comic = $comicsdb[$id];

        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }
})->name('comics.show');
