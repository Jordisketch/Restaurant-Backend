@extends('layout')

@section('title', 'Pedidos De Clientes')


@section('content')

    <div class="text-center ">
        <h1 class="text-3xl font-mono">Pedidos de Clientes existentes</h1>
        <br>
        <a class="text-1xl font-mono p-0.5 bg-gray-400 border-2 " href="{{ route('clientespedidos.create') }}">Crear Nuevo Pedido</a>
        <div>
        <div class="mt-4 xl:max-w-2xl text-center m-auto">
                <ul>
                    @forelse($clientepedidos as $clientePedido)
                        <li class="border-b-2 black mb-1 w-full ">
                            <a class="no-underline pb-0 pl-80 pr-80 bg-green-200 w-full text-center " href="{{ route('clientespedidos.show', $clientePedido) }}"> {{ $clientePedido->id }} </a>
                        </li>
                    @empty
                    <h1>No hay pedidos por mostrar</h1>

                    @endforelse
                </ul>
        </div>
    </div>


@endsection
