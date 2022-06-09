@extends('Template.Template')
@section('plantillaweb')
    <h2> Lista de numeros {{ $numero1 }}</h2>
    
    @for ($i = 1; $i <= $numero1; $i++)
        {{ $i }}
        @endfor
    @endsection
