@extends('layout')

@section('title', 'Crear Pedido')

@section('content')

    <div>
        <h1>Crear Nuevo Pedido</h1>

        <div>
            <form action="{{ route('clientespedidos.store') }}"  method="POST">
                @csrf
                <label for="idCliente">ID Del Cliente:</label>
                <input type="number" required min="1" name="idCliente">

                <label for="idComida">ID De La Comida:</label>
                <input type="number" required min="1" name="idComida">

                <input type="submit" value="Insertar">
            </form>
        </div>

    </div>

@endsection
