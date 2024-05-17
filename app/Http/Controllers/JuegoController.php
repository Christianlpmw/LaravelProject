<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Carac;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juegos = Juego::all();
        return view ('juegoIndex',compact('juegos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $caracs = Carac::all();
        return view ('juegoCreate', compact('caracs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $juego = new Juego();
        $juego->Nombre = $request->Nombre;
        $juego->Genero = $request->Genero;
        $juego->Precio = $request->Precio;
        $juego->save();

        $juego->caracs()->attach($request->caracs);

        Session()->flash('success','Se ha guardado con exito');
        return redirect('/juego');
    }

    /**
     * Display the specified resource.
     */
    public function show(Juego $juego)
    {
        return view('/juegoShow', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Juego $juego)
    {
        $caracs=Carac::all();
        return view ('juegoEdit',compact('caracs','juego'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juego $juego)

    {
        $juego->Nombre = $request->Nombre;
        $juego->Genero = $request->Genero;
        $juego->Precio = $request->Precio;
        $juego->save();

        if($request->has('caracs')){
            $juego->caracs()->sync($request->caracs);
        } else {
            $juego-> caracs()->detach();
        }
    
        return redirect('/juego');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juego $juego)
    {
        $juego->delete();
        Session()->flash('success', 'Se ha eliminado con éxito');
        return redirect('/juego');
    }
}
