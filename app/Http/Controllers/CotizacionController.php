<?php

namespace App\Http\Controllers;

use App\Models\cotizacion;
use App\Http\Requests\StorecotizacionRequest;
use App\Http\Requests\UpdatecotizacionRequest;

class CotizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorecotizacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecotizacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function show(cotizacion $cotizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(cotizacion $cotizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecotizacionRequest  $request
     * @param  \App\Models\cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecotizacionRequest $request, cotizacion $cotizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cotizacion  $cotizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(cotizacion $cotizacion)
    {
        //
    }
}
