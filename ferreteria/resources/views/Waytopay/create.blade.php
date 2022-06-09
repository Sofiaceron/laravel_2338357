@extends('Template.Template')
@section('plantillaweb')
    <h2>Formas de pago</h2>

    <form action="{{ route('waytopay.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Forma de pago</label>
            <input type="text" name="nombre">

        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 ">
            <label>Descripcion</label>
            <input type="text" name="descripcion">

        </div>

        <div class="col">
            <input type="submit" name="btn_enviar" value="Registrar">
        </div>
    </form>
@endsection
