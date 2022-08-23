@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario edicion de registro</h2>

    <form action="{{ route('servicio.update', $servicio) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ $servicio->nombre }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Descripcion:</label>
            <input type="longtext" name="descripcion" value="{{ $servicio->descripcion }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Tiempo maximo:</label>
            <input type="time" name="tiempo_max" value="{{ $servicio->tiempo_max }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>Costo extra:</label>
            <input type="float" name="costo_extra" value="{{ $servicio->costo_extra }}">
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12">
            <label>Clave:</label>
            <input type="password" name="clave" value="{{ $servicio->clave }}">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="cars">Servicio:</label>
            <select id="cars" name="promocion_id">
                <option selected="true" disabled="disabled"> -Seleccionar</option>
                @foreach ($promocions as $promocion)
                    <option value="{{ $promocion->id }}">{{ $promocion->nombre }}</option>
                @endforeach

            </select>
        </div>

        <div class="col">
            <input type="submit" name="btn_enviar" value="Aceptar">
        </div>
    </form>
@endsection
