@extends('Template.Template')
@section('plantillaweb')
    <h2> Digite los valores pedidos</h2>

    <form action="{{ route('resultadoej3') }}" method="post">
        <!--csrf_field es un metodo autenticacion token-->
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite las horas trabajadas: </label>
                    <input type="number" name="ht">
                </div>
        
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite tarifa por hora trabajada: </label>
                    <input type="number" name="t">
                </div>
            
            </div>
        </div>

        <input type="submit" name="" value="Presionar">

    </form>
@endsection
