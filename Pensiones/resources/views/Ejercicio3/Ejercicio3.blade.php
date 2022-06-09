@extends('Template.Template')
@section('plantillaweb')
    <h2> Ordenar 3 numeros</h2>

    <form action="{{ route('resultadoej3') }}" method="post">
        <!--csrf_field es un metodo autenticacion token-->
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Nombres completos: </label>
                    <input type="text" name="nombres" placeholder="nombres y apellidos">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite fecha de nacimiento </label>
                    <input type="date" name="fecha">
                </div>
                
            </div>
        </div>

        <input type="submit" name="btn_enviar" value="Presionar">

    </form>
@endsection
