<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Comic::all());
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
        // return view('comics.index', ['comics' => Comic::orderByDesc('title')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val_data = $request->validate([
            'title' => 'required|min:3'

        ]);

        // creo la nuova risorsa con i dati validati forniti dal form inserito in create
        $comic = Comic::create($val_data);

        // reindirizzo alla rotta
        return to_route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // dd($comic);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        // dd($comic);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // dd($request->all(), $comic);
        $comic->update($request->all());
        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        // dd('comic');
        $comic->delete();
        return to_route('comics.index');
    }
}
