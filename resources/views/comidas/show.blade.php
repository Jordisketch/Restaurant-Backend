@extends('layout')


@section('title', 'Informacion Comida')

@section('content')
        <div>
            <h1>Información sobre {{ $comida->nombre }}</h1>

            <div>
                <h2>Precio de {{ $comida->nombre }}: {{ $comida->precio }}</h2>
            </div>

            <div>
                <a href="{{ route('comidas.edit', $comida) }}">Editar</a>

                <form action="{{ route('comidas.destroy', $comida)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>

            </div>

        </div>



@endsection
