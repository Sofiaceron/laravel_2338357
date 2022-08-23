@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario edicion de citas</h2>

    <form action="{{ route('quote.update', $quote) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora programada: </label>
            <input type="time" name="hora_programada">
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora de inicio: </label>
            <input type="time" name="hora_inicio" onkeyup="operacion()">
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Hora de finalización: </label>
            <input type="time" name="hora_fin" onkeyup="operacion()">
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Tiempo total: </label>
            <input type="text" name="tiempo_total" onkeyup="operacion()">
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Total a pagar: </label>
            <input type="number" name="total_pago">
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="cars">Empleado No:</label>
            <select id="cars" name="employee_id">
                <option selected="true" disabled="disabled">-Seleccionar </option>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->nombres }} {{ $employee->apellidos }}</option>
                @endforeach

            </select>
        </div>

        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="cars">Forma de pago:</label>
            <select id="cars" name="waytopay_id">
                <option selected="true" disabled="disabled">-Seleccionar</option>
                @foreach ($waytopays as $waytopay)
                    <option value="{{ $waytopay->id }}">{{ $waytopay->nombre }}</option>
                @endforeach

            </select>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="cars">Servicios:</label>
            <select id="cars" name="servicio_id">
                <option selected="true" disabled="disabled">-Seleccionar</option>
                @foreach ($servicios as $servicio)
                    <option value="{{ $servicio->id }}">{{ $servicio->nombre }} {{ $servicio->descripcion }}
                    </option>
                @endforeach

            </select>
        </div>
        <div class="col">
            <input type="submit" name="btn_enviar" value="Aceptar">
        </div>
    </form>
@endsection
