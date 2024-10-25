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
            return '<h2> Deu ruim fii... </h2>';
        }

        $xmlParser = xml_parser_create();

        $inventarioXml = $request->file('inventario')->get();
        $inventarioArr = json_decode(json_encode(simplexml_load_string($inventarioXml)), true);

        return var_dump($inventarioArr);

        return '<h2> Deu boa! </h2>';
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
