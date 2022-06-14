@extends('Template.Template')
@section('plantillaweb')
    <h2>Perfil Doctor</h2>

    <table class="table">
        <thead>
            <tr> 
                <th scope="col">#</th>
                <th scope="col">Correo Electronico</th>
                <th scope="col">Password</th>
                <th scope="col">Especializacion</th>
                <th scope="col">whatsApp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perfil_doctors as $perfil_doctor)
                <tr>
                    <th scope="row">{{ $perfil_doctor->id }}</th>
                    <td>{{ $perfil_doctor->correo}}</td>
                    <td>{{ $perfil_doctor->password}}</td>
                    <td>{{ $perfil_doctor->especializacion}}</td>
                    <td>{{ $perfil_doctor->whatsapp}}</td>
                    
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('perfil_doctor.edit', $perfil_doctor) }}"
                            role="button">Editar</a>
                    </td>

                    <td>
                        <form action="{{ route('perfil_doctor.destroy', $perfil_doctor) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    {{ $perfil_doctors->links() }}
@endsection
