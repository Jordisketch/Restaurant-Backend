@extends('layout')

@section('title', 'Crear Comida')

@section('content')

    <div>
        <h1>Crear Nueva Comida</h1>
        <form action="{{ route('comidas.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="precio">Precio:</label>
            <input type="text" name="precio" required>

            <input type="submit" value="Insertar">


        </form>
    </div>


@endsection
