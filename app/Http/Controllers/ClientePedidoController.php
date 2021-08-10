<?php

namespace App\Http\Controllers;

use App\Models\clientePedido;
use Illuminate\Http\Request;

class ClientePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientespedidos.index', ['clientepedidos' => clientePedido::get()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'idCliente' => 'required|integer',
            'idComida' => 'required|integer'
        ]);
        clientePedido::create($fields);
        return redirect()->route('clientespedidos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientePedido  $clientePedido
     * @return \Illuminate\Http\Response
     */
    public function show(clientePedido $clientePedido)
    {
        return view('clientespedidos.show', ['clientePedido' => $clientePedido]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientePedido  $clientePedido
     * @return \Illuminate\Http\Response
     */
    public function edit(clientePedido $clientePedido)
    {
        return view('clientespedidos.edit', ['clientePedido' => $clientePedido]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientePedido  $clientePedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clientePedido $clientePedido)
    {
        $fields = $request->validate([
            'idCliente' => 'required|integer',
            'idComida' => 'required|integer'
        ]);
        $clientePedido->update($fields);
        return redirect()->route('clientespedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientePedido  $clientePedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(clientePedido $clientePedido)
    {
        $clientePedido->delete();
        return redirect()->route('clientespedidos.index');
    }
}
