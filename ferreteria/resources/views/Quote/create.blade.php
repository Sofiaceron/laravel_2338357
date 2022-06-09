@extends('Template.Template')
@section('plantillaweb')
    <h2>Citas</h2>

    <form action="{{ route('quote.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-4 col-sm-2  ">
            <label>Hora programada: </label>
            <input type="time" name="hora_programada">

        </div>
        <div class="col-lg-6 col-md-4 col-sm-2  ">
            <label>Hora inicio: </label>
            <input type="time" name="hora_inicio">

        </div>
        <div class="col-lg-6 col-md-4 col-sm-2  ">
            <label>Hora finalizacion: </label>
            <input type="time" name="hora_fin">

        </div>
        <div class="col-lg-6 col-md-4 col-sm-2 ">
            <label>Tiempo total: </label>
            <input type="time" name="tiempo_total">

        </div>
        <div class="col-lg-6 col-md-4 col-sm-2  ">
            <label>Total a pagar: </label>
            <input type="number" name="total_pago">

        </div>

        <div class="col-lg-6 col-md-4 col-sm-2  ">
            <label for="cars">Empleado No:</label>
            <select id="cars" name="employee_id">
                <option selected="true" disabled="disabled"> Empleado </option>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->nombres }} {{$employee->apellidos}}</option>
                @endforeach

            </select>
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2 ">
            <label for="cars">Forma de pago:</label>
            <select id="cars" name="waytopay_id">
                <option selected="true" disabled="disabled"> Forma de pago </option>

                @foreach ($waytopays as $waytopay)
                    <option value="{{ $waytopay->id }}">{{ $waytopay->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-8 ">
            <input type="submit" name="btn_enviar" value="Aceptar">
        </div>
    </form>
@endsection
