<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */

    //  function index() -> legge i dati e li passa, ritornandoli, alla view comics.index
    // passo a $data il model Comic
    public function index()
    {
        $data = Comic::all();

        return view('comics.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // la function create() ritorna la view di comcis.create con il form
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newComic = new Comic();
        $newComic->fill($request->validate([
            'title'=> 'required|min:5|max:200',
            'thumb'=> 'required|url',
            'price'=> 'required|numeric',
            'series'=> 'required|min:5|max:50',
            'description' => 'required|min:10',
            'sale_date' => 'required|date',
        ]));
        
        // alternativa senza fill 
        // $newComic->title = $data['title'];
        // $newComic->price = $data['price'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);  // alternativa al find -> findOrFail che rimanda un errore se non trova il dato

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // l'update fa il fill e il save contemporaneamente
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // richiamo il dato che voglio eliminare ($comic), la funzione delete lo eliminerà, poi ritorno la view
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
        // ritorna la view della mia home comics
        
    }
}
