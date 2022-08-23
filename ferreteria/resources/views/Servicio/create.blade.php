@extends('Template.Template')
@section('plantillaweb')
    <h2>Servicios</h2>

    <form action="{{ route('servicio.store') }}" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label>Nombre</label>
                    <input type="text" name="nombre">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label>Descripcion</label>
                    <input type="longtext" name="descripcion">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label>Tiempo maximo</label>
                    <input type="time" name="tiempo_max">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label>Costo extra</label>
                    <input type="float" name="costo_extra">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label>Clave</label>
                    <input type="password" name="clave">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="cars">Promocion:</label>
                    <select id="cars" name="promocion_id">
                        <option selected="true" disabled="disabled"> -Seleccionar</option>
                        @foreach ($promocions as $promocion)
                            <option value="{{ $promocion->id }}">{{ $promocion->nombre }}</option>
                        @endforeach

                    </select>
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
