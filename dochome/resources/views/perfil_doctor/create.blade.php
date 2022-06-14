@extends('Template.Template')
@section('plantillaweb')
    <h2>Registro Empleado</h2>

    <form action="{{ route('perfil_doctor.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Correo Electronico:</label>
            <input type="text" name="correo">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Password:</label>
            <input type="password" name="password">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Especializacion:</label>
            <input type="text" name="especializacion">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>whatsApp:</label>
            <input type="text" name="whatsapp">
        </div>
        <div class="col">
            <input type="submit" name="btn_enviar" value="Registrar">
        </div>
    </form>
@endsection
