@extends('Template.Template')
@section('plantillaweb')
    <h2>Registro Empleado</h2>

    <form action="{{ route('employee.store') }}" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label>nombres</label>
                    <input type="text" name="nombres">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label>apellidos</label>
                    <input type="text" name="apellidos">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label>telefono</label>
                    <input type="number" name="telefono">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label>direccion</label>
                    <input type="text" name="direccion">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label>fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label>salario</label>
                    <input type="number" name="salario">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label>hora de inicio</label>
                    <input type="time" name="hora_inicio">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label>hora de salida</label>
                    <input type="time" name="hora_salida">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 offset-md-3">
                    <input type="submit" name="btn_enviar" value="Registrar">
                </div>
            </div>

        </div>
    </form>
@endsection
