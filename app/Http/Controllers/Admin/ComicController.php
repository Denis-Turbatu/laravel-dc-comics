<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaComics = Comic::all();
        return view('comics.index', compact('listaComics'));
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
    public function store(StoreComicRequest $request)
    {
        // $validated = $request->validate([
        //     'title' => ['required', 'min:10'],
        //     'price' => ['required'],
        //     'series' => ['required', 'min:5'],
        //     'sale_date' => ['required'],
        //     'type' => ['required', 'min:5'],
        // ], [
        //     // titolo
        //     'title.required' => 'Il titolo deve essere inserito',
        //     // prezzo
        //     'price.required' => 'Il prezzo deve essere inserito',
        //     // serie
        //     'series.required' => 'La serie deve essere inserita',
        //     // data pub.
        //     'sale_date.required' => 'La data di pubblicazione  deve essere inserita',
        //     // tipo
        //     'type.required' => 'Il tipo deve essere inserito',
        // ]);

        // ottengo i data dalla request
        $data = $request->all();
        
        // creo una nuova istanza
        $comic = new Comic();

        // uso fill() per poter inserire i dati contenuti in $data
        $comic->fill($data);
        
        // salvo i data nel DB
        $comic->save();

        // reindirizzo l'utente
        return redirect()->route("comics.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
