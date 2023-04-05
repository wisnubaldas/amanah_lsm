<?php

namespace App\Http\Controllers;

use App\Models\GaleryFoto;
use App\Http\Requests\StoreGaleryFotoRequest;
use App\Http\Requests\UpdateGaleryFotoRequest;

class GaleryFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.galery-foto');
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
    public function store(StoreGaleryFotoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GaleryFoto $galeryFoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GaleryFoto $galeryFoto,$id)
    {
        $data = $galeryFoto->find($id);
        dd($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGaleryFotoRequest $request, GaleryFoto $galeryFoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GaleryFoto $galeryFoto,$id)
    {
        
    }
}
