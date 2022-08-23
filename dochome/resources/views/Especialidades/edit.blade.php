@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario edicion de registro</h2>

    <form action="{{ route('employee.update',$employee) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Nombres:</label>
            <input type="text" name="nombres" value="{{ $employee->nombres }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Apellidos:</label>
            <input type="text" name="apellidos" value="{{ $employee->apellidos }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Telefono:</label>
            <input type="number" name="telefono" value="{{ $employee->telefono }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>Direccion:</label>
            <input type="text" name="direccion" value="{{ $employee->direccion }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>Fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento"
                value="{{ $employee->fecha_nacimiento }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>Salario:</label>
            <input type="number" name="salario" value="{{ $employee->salario }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>Hora de inicio:</label>
            <input type="time" name="hora_inicio" value="{{ $employee->hora_inicio }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>Hora de salida:</label>
            <input type="time" name="hora_salida" value="{{ $employee->hora_salida }}">

            <div class="col">
                <input type="submit" name="btn_enviar" value="Aceptar">
    </form>
@endsection
