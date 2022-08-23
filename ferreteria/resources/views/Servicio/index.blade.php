@extends('Template.Template')
@section('plantillaweb')
    <h2>Lista de Servicios</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Tiempo maximo</th>
                <th scope="col">Costo extra</th>
                <th scope="col">Clave</th>
                <th scope="col">Promocion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)
                <tr>
                    <th scope="row">{{ $servicio->id }}</th>
                    <td>{{ $servicio->nombre }}</td>
                    <td>{{ $servicio->descripcion }}</td>
                    <td>{{ $servicio->tiempo_max }}</td>
                    <td>{{ $servicio->costo_extra }}</td>
                    <td>{{ $servicio->clave }}</td>
                    <td>{{ $servicio->promocion_id }}</td>

                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $servicios->links() }}
@endsection
