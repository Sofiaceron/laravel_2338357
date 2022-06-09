@extends('Template.Template')
@section('plantillaweb')
    <h2> Ordenar 3 numeros</h2>

    <form action="{{ route('resultadoej2') }}" method="post">
        <!--csrf_field es un metodo autenticacion token-->
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite el numero 1: </label>
                    <input type="number" name="numero1">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite el numero 2: </label>
                    <input type="number" name="numero2">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite el numero 3: </label>
                    <input type="number" name="numero3">
                </div>
            </div>
        </div>

        <input type="submit" name="" value="Presionar">

    </form>
@endsection
