@extends('layout');

@section('title', 'Editar Comida')

@section('content')

    <div>
        <h1>Editar Información sobre {{ $comida->nombre }}</h1>

        <div>
            <form action="{{ route('comidas.update', $comida) }}" method="POST">
                @csrf
                @method('PATCH')
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="{{$comida->nombre}}">

                <label for="precio">Precio:</label>
                <input type="number" name="precio" value="{{$comida->precio}}">

                <input type="submit" value="Editar">
            </form>
        </div>
    </div>



@endsection
