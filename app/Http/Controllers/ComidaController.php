<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;
use Psr\Http\Client\ClientExceptionInterface;

class ComidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comida::get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $fields = $request->validate([
                'nombre' => 'required|string',
                'precio' => 'required|numeric'
            ]);

            $comida = Comida::create($fields);
            return response()->json($comida)->getData();

        } catch (ClientExceptionInterface $exception) {
            return response()->json($exception->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function show(Comida $comida)
    {
        return $comida;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comida $comida)
    {
        $fields = $request->validate([
            'nombre' => 'required|string',
            'precio' => 'required|numeric'
        ]);
        $comida->update($fields);
        return redirect()->route('comidas.show', $comida);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comida  $comida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comida $comida)
    {
        $comida->delete();

        return redirect()->route('comidas.index');
    }
}
