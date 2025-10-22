<?php

namespace App\Http\Controllers;

use App\Models\boletas;
use Illuminate\Http\Request;

class BoletasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boletas = boletas::all();
        return view('boletas.index', compact('boletas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $boletas = boletas::all();
        return view('boletas.create', compact('boletas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $boletas->validate([
            'evento|string|max:250',
            'localidad|string|max:250',
            'valor boleta|string|max:250',
            'cantidad boletas|string|max:250',

        ]);
         
        return redirect()->route('boletas.index')->with('success', 'boletas creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(boletas $boletas)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(boletas $boletas)
    {
        $boletas= boletas::all();
        return view('boletas.edit', compact('boletas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, boletas $boletas)
    {
        $boletas->validate([
             'evento|string|max:250',
            'localidad|string|max:250',
            'valor boleta|string|max:250',
            'cantidad boletas|string|max:250',

        ]);

        $boletas= boletas::findOrfail();
        $boletas->update($request->all());

        return redirect()->route('boletas.index')->with('success', 'boletas actualizadas correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(boletas $boletas)
    {
        $boletas->delete();
        $boletas = boletas::findOrfail();
        return redirect()->route('boletas.index')->with('success', 'eliminado correctamente');
    }
}
