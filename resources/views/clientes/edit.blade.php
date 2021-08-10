@extends('layout')

@section('title', 'Insertar Nuevo Cliente')


@section('content')
    <div>
        <h1>Editar {{ $cliente->nombre }}</h1>

        <div>
            <form action="{{route('clientes.update', $cliente)}}"method="POST">
                @csrf
                @method('PATCH')
                <label for="nombre">Nombre:</label>

                <input type="text" name= 'nombre' value="{{ $cliente->nombre }}">

                <input type="submit" value="Editar" >
            </form>
        </div>
    </div>


@endsection
