@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario edicion de registro</h2>

    <form action="{{ route('employee.update', $perfil_doctor) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Correo Electronico:</label>
            <input type="text" name="correo" value="{{ $perfil_doctor->correo }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Password:</label>
            <input type="password" name="password" value="{{ $perfil_doctor->password }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Especializacion:</label>
            <input type="text" name="especializacion" value="{{ $perfil_doctor->especializacion }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>whatsApp:</label>
            <input type="text" name="whatsapp" value="{{ $perfil_doctor->whatsapp }}">
        </div>
        <div class="col">
            <input type="submit" name="btn_enviar" value="Aceptar">
        </div>
    </form>
@endsection
