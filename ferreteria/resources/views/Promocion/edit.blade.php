@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario edicion de promociones</h2>

    <form action="{{ route('promocion.update', $promocion) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Nombres:</label>
            <input type="text" name="nombre" value="{{ $promocion->nombre }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Descripcion:</label>
            <input type="longtext" name="descripcion" value="{{ $promocion->descripcion }}">
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Precio:</label>
            <input type="float" name="precio" value="{{ $promocion->precio }}">
        </div>

        <div class="col">
            <input type="submit" name="btn_enviar" value="Aceptar">
        </div>
    </form>
@endsection
