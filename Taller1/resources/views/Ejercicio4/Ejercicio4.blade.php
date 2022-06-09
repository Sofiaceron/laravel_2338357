@extends('Template.Template')
@section('plantillaweb')
    <h2> Digite los valores pedidos</h2>

    <form action="{{ route('resultadoej4') }}" method="post">
        <!--csrf_field es un metodo autenticacion token-->
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite los numeros a sumar: </label>
                    <input type="number" name="numero">
                </div>
            
            </div>
        </div>

        <input type="submit" name="" value="Presionar">

    </form>
@endsection
