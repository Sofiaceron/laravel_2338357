@extends('Template.Template')
@section('plantillaweb')
    <h2>Perfil Doctor</h2>

    <form action="{{ route('perfildoc.store') }}" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label>Especialidades</label>
                    <input type="text" name="especialidad">
                </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 offset-md-3">
                    <input type="submit" name="btn_enviar" value="Editar">
                </div>
            </div>

        </div>
    </form>
@endsection
