@extends('Template.Template')
@section('plantillaweb')
    <h2> Digite los valores pedidos</h2>

    <form action="{{ route('resultadoej5') }}" method="post">
        <!--csrf_field es un metodo autenticacion token-->
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite el radio del cilindro : </label>
                    <input type="number" name="radio"  step="0.001">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite la altura del cilindro: </label>
                    <input type="number" name="altura" step="0.001">
                </div>
            
            </div>
        </div>

        <input type="submit" name="" value="Presionar">

    </form>
@endsection
