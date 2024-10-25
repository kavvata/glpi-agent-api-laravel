<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use Illuminate\Http\Request;

class AtivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Ativo::orderBy('hostname')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!$request->file('inventario')) {
            return response(status: 422, content: 'Arquivo inválido');
        }

        $inventarioArr = json_decode(
            json_encode(simplexml_load_string($request->file('inventario')->get())),
            true
        );

        // return var_dump($inventarioArr);

        return response(status: 200, content: 'Inventario realizado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ativo $ativo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ativo $ativo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ativo $ativo)
    {
        //
    }
}
