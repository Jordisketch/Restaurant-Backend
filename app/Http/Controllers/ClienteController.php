<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Psr\Http\Client\ClientExceptionInterface;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cliente::get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $fields = $request->validate([
                'nombre' =>'required|string'
            ]);
            $cliente = Cliente::create($fields);

            return response()->json($cliente)->getData();

        }catch(ClientExceptionInterface $exception){
            $mensaje [] = [$exception->getCode()];
            return response()->json($mensaje)->getData();
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        try{
         $fields = $request->validate([
            'nombre' => 'required|string'
            ]);
         $cliente = Cliente::update($fields);
         return response()->json($cliente)->getData();
        }catch (ClientException $exception){
            return response()->json($exception->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $mensaje = true;
        try {
            $cliente->delete();
            return response()->json($mensaje)->getData();
        }catch (\Exception $exception){
            $mensaje = false;
            return response()->json($exception->getMessage())->getData();
        }
    }
}
