@extends('layout')

@section('title', 'Editar Pedido')

@section('content')

    <div>
        <h1>Editar el pedido con el ID: {{$clientePedido->id}}</h1>

        <div>
            <form action="{{route('clientespedidos.update',$clientePedido)}}">
                @csrf
                @method('PATCH')

                <label for="idcliente">ID Cliente:</label>
                <input type="number" min="1" required name="idcliente">

                <label for="idcomida">ID Comida:</label>
                <input type="number" min="1" required name="idcomida">

                <input type="submit" value="Editar">

            </form>
        </div>
    </div>

@endsection
