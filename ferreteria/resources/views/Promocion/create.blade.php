@extends('Template.Template')
@section('plantillaweb')
    <h2>Promociones</h2>

    <form action="{{ route('promocion.store') }}" method="post">
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
                    <label>Precio</label>
                    <input type="float" name="precio">
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
