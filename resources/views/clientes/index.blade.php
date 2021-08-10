@extends('layout')
@section('title', 'Clientes')

@section('content')

    <div>
        <h1 class="font-bold white">Clientes Existentes</h1>
        <a href="{{ route('clientes.create') }}">Crear Nuevo Cliente</a>

        <div>
            @forelse($clientes as $cliente)

                <a href="{{route('clientes.show', $cliente)}}">{{ $cliente->nombre }}</a>


            @empty
            <h2>No hay Clientes por mostrar</h2>
            @endforelse
        </div>


    </div>




@endsection
