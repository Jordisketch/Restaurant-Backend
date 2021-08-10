@extends('layout')

@section('title', 'Insertar Cliente')


@section('content')

    <div>
        <h1>Insertar Nuevo Cliente</h1>


        <div>
            <form action='{{ route('clientes.store') }}' method="post" >
                @csrf

                <label for='nombre'>Nombre:</label>
                <input type="text" required name="nombre">

                <input type="submit" value="Insertar">
            </form>
        </div>



    </div>



@endsection
