<?php

namespace App\Http\Controllers;

use App\Models\Guitars;
use App\Http\Requests\StoreGuitarsRequest;
use App\Http\Requests\UpdateGuitarsRequest;

class GuitarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuitarsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Guitars $guitars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guitars $guitars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuitarsRequest $request, Guitars $guitars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guitars $guitars)
    {
        //
    }
}
