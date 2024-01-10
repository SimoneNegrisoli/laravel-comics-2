<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

//use Illuminate\View\View;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *@return \Illuminate\View\View;
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View;
     */
    public function create()
    {
        //per inserire nuovo fumetto nel db
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {

        $formData = $request->all();
        $newComic = new Comic();
        $newComic->title = $formData['title'];
        $newComic->description = $formData['description'];
        $newComic->price = $formData['price'];
        $newComic->sale_date = '2024-08-01';
        $newComic->series = 'random';
        $newComic->type = $formData['type'];
        $newComic->thumb = $formData['thumb'];

        $newComic->save();
        return to_route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\View\View;
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     *
     */
    public function update(Request $request, Comic $comic)
    {
        $formData = $request->all();
        $comic->title = $formData['title'];
        $comic->description = $formData['description'];
        $comic->price = $formData['price'];
        $comic->sale_date = '2024-08-01';
        $comic->series = 'random';
        $comic->type = $formData['type'];
        $comic->thumb = $formData['thumb'];
        $comic->update();
        return to_route('comics.show', $comic->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     *
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');

    }
}
