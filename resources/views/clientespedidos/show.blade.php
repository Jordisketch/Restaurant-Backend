@extends('layout')

@section('title', 'Pedidos')

@section('content')

    <div>
        <h1>Información del Pedido con el ID: {{ $clientePedido->id }}</h1>

        <div>
           <h4>ID cliente:<a href="{{ route('clientes.show', $clientePedido->idCliente) }}">{{ $clientePedido->idCliente }}</a></h4>
           <h4>ID comida:<a href="{{ route('comidas.show', $clientePedido->idComida) }}">{{ $clientePedido->idComida }}</a></h4>
        </div>
        <div>
            <a href="{{ route('clientespedidos.edit', $clientePedido)}}">Editar pedido</a>

            <form action="{{ route('clientespedidos.destroy', $clientePedido) }}" method="POST">
                @csrf
                @method('DELETE')

                <input type="submit" value="Eliminar pedido">
            </form>
        </div>


    </div>



@endsection
