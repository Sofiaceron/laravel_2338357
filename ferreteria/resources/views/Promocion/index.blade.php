@extends('Template.Template')
@section('plantillaweb')
    <h2>Lista de Promociones</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promocions as $promocion)
                <tr>
                    <th scope="row">{{ $promocion->id }}</th>
                    <td>{{ $promocion->nombre }}</td>
                    <td>{{ $promocion->descripcion}}</td>
                    <td>{{ $promocion->precio }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('promocion.edit', $promocion) }}"
                            role="button">Editar</a>
                    </td>

                    <td>
                        <form action="{{ route('promocion.destroy', $promocion) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $promocions->links() }}
@endsection
