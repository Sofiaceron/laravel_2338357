<?php

namespace App\Http\Controllers;

use App\Models\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promocions = Promocion::simplePaginate(2);
        return view('Promocion.index', compact('promocions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Promocion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promocion = new Promocion;
        $promocion->nombre = $request->nombre;
        $promocion->descripcion = $request->descripcion;
        $promocion->precio = $request->precio;
        $promocion->save();
        return redirect()->route('promocion.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function show(Promocion $promocion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promocion $promocion)
    {
        return view('Promocion.edit', compact('promocion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promocion $promocion)
    {
        $promocion->nombre = $request->nombre;
        $promocion->descripcion = $request->descripcion;
        $promocion->precio = $request->precio;
        $promocion->save();
        return redirect()->route('promocion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promocion  $promocion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promocion $promocion)
    {
        $promocion->delete();
        return redirect()->route('promocion.index');
    }
}
