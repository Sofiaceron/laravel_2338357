@extends('Template.Template')
@section('plantillaweb')
    <h2>Registro Empleado</h2>

    <form action="{{ route('employee.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>nombres</label>
            <input type="text" name="nombres">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>apellidos</label>
            <input type="text" name="apellidos">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>telefono</label>
            <input type="number" name="telefono">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>direccion</label>
            <input type="text" name="direccion">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>salario</label>
            <input type="number" name="salario">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>hora de inicio</label>
            <input type="time" name="hora_inicio">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>hora de salida</label>
            <input type="time" name="hora_salida">

            <div class="col">
                <input type="submit" name="btn_enviar" value="Registrar">
    </form>
@endsection
