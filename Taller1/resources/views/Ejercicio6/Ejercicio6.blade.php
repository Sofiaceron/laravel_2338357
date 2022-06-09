@extends('Template.Template')
@section('plantillaweb')
    <h2>Diligencie el Formulario</h2>

    <form action="{{ route('resultadoej6') }}" method="POST">
        <!--csrf_field es un metodo autenticacion token-->
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Nombre y Apellido:</label>
                    <input type="tex" name="nombre">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Calificación primer parcial:</label>
                    <input type="number" name="numero1" step="0.001">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Calificación examen final:</label>
                    <input type="number" name="numero2" step="0.001">

                </div>
            </div>
        </div>

        <input type="submit" name="" value="Presionar">
    </form>
@endsection
