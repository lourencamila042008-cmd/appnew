<?php

namespace App\Http\Controllers;

use App\Models\evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evento= evento::all();
        return view('evento.index', compact('evento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $evento= evento::all();
        return view('evento.create', compact('evento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evento->validate([
            'nombre|string|max:250',
            'descripcion|string|max:250',
            'fecha y hora inicio|datetime|max:250',
            'fecha y hora fin|datetime|max:250',
        ]);


        return redirect()->route('evento.index')->with('success', 'evento creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(evento $evento)
    {
        $evento= evento::all();
        return view('evento.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, evento $evento)
    {
        $evento->validate([
             'nombre|string|max:250',
            'descripcion|string|max:250',
            'fecha y hora inicio|datetime|max:250',
            'fecha y hora fin|datetime|max:250',
        ]);

        $evento= evento::findOrfail();
        $evento->update($request->all());
        return redirect()->route('evento.index')->with('success', 'evento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(evento $evento)
    {
        $evento->delete;
        $evento= evento::findOrfail();
        return redirect->route('evento.index')->with('success', 'eliminado correctamente' );
    }
}
