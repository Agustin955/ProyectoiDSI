<?php

namespace App\Http\Controllers;

use App\InventarioZona;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventarioZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarioZonas = InventarioZona::orderBy('id', 'desc')->get();

        return view('admin.inventarioZona.index',['inventarioZonas' => $inventarioZonas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InventarioZona  $inventarioZona
     * @return \Illuminate\Http\Response
     */
    public function show(InventarioZona $inventarioZona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InventarioZona  $inventarioZona
     * @return \Illuminate\Http\Response
     */
    public function edit(InventarioZona $inventarioZona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InventarioZona  $inventarioZona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventarioZona $inventarioZona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InventarioZona  $inventarioZona
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventarioZona $inventarioZona)
    {
        //
    }
}
