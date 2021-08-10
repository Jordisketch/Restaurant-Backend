@extends('layout')

@section('title', 'Comidas')


@section('content')

    <div>
        <h1>Comidas Existentes</h1>
        <a href="{{ route('comidas.create') }}">Crear Comida</a>
        <div>
           @forelse($comidas as $comida)
                <a href="{{ route('comidas.show', $comida) }}">{{ $comida->nombre }}</a>
            @empty
                <h1>No hay comidas</h1>
            @endforelse
        </div>


    </div>



@endsection
