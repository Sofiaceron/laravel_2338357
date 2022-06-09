@extends('Template.Template')
@section('plantillaweb')
    <h2> Tabla de multiplicar</h2>

    <form action="{{ route('resultadoej1') }}" method="post">
        <!--csrf_field es un metodo autenticacion token-->
        {{ csrf_field() }}
        <label>Digite el numero de la tabla </label>
        <input type="number" name="numero1">

        <input type="submit" name="btn_enviar" value="Presionar">

    </form>
@endsection
