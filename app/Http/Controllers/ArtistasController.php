<?php

namespace App\Http\Controllers;

use App\Models\artistas;
use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistas= artistas::all();
        return view('artistas.index', compact('artistas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $artistas= artistas::all();
        return view('artistas.create', compact('artistas'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $artistas->validate([
            'nombre|string|max:250',
            'apellido|string|max:250',
            'genero musical|string|max:250',
            'ciudad|string|max:250',

        ]);

         return redirect()->route('artistas.index')->with('success', 'artista creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(artistas $artistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(artistas $artistas)
    {
         $artistas= artistas::all();
        return view('artistas.edit', compact('artistas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, artistas $artistas)
    {
        $artistas->validate([
             'nombre|string|max:250',
            'apellido|string|max:250',
            'genero musical|string|max:250',
            'ciudad|string|max:250',

        ]);

        $artistas=artista::findOrfail();
        $artistas->update($request->all());

         return redirect()->route('artistas.index')->with('success', 'artista actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artistas $artistas)
    {
       $artistas->delete;
        $artistas=artistas::findOrfail();
        return redirect()->route('artistas.index')->with('success', 'eliminado correctamente');
    }
}
