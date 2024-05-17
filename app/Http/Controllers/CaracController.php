<?php

namespace App\Http\Controllers;

use App\Models\Carac;
use Illuminate\Http\Request;

class CaracController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caracs = Carac::all();
        return view ('caracIndex',compact('caracs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('caracCreate');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Carac::create($request->all());
        return redirect('/carac');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carac $carac)
    {
        return view('/caracShow', compact('carac'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carac $carac)
    {
        return view ('/caracEdit',compact('carac'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carac $carac)
    {
        Carac:: where('id',$carac->id)->update($request->except('_token','_method','action'));
        return redirect('/carac');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carac $carac)
    {
        $carac->delete();
        Session()->flash('success', 'Se ha eliminado con éxito');
        return redirect('/carac');
    }
}
