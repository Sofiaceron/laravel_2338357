<?php

namespace App\Http\Controllers;

use App\Models\perfil_doctor;
use Illuminate\Http\Request;

class PerfilDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfil_doctors = perfil_doctor::simplePaginate(2);
        return view('perfil_doctors.index', compact('perfil_doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfil_doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfil_doctor = new perfil_doctor;
        $perfil_doctor->correo= $request->correo;
        $perfil_doctor->password = $request->password;
        $perfil_doctor->especializacion = $request->especializacion;
        $perfil_doctor->whatsapp= $request->whatsapp;
        $perfil_doctor->save();
        return redirect()->route('perfil_doctor.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perfil_doctor  $perfil_doctor
     * @return \Illuminate\Http\Response
     */
    public function show(perfil_doctor $perfil_doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perfil_doctor  $perfil_doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(perfil_doctor $perfil_doctor)
    {
        return view('perfil_doctor.edit', compact('perfil_doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perfil_doctor  $perfil_doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perfil_doctor $perfil_doctor)
    {
        $perfil_doctor->correo= $request->correo;
        $perfil_doctor->password = $request->password;
        $perfil_doctor->especializacion = $request->especializacion;
        $perfil_doctor->whatsapp= $request->whatsapp;
        $perfil_doctor->save();
        return redirect()->route('perfil_doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perfil_doctor  $perfil_doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(perfil_doctor $perfil_doctor)
    {
        $perfil_doctor->delete();
        return redirect()->route('perfil_doctor.index');  
    }
}
