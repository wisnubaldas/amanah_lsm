<?php

namespace App\Http\Controllers;

use App\Models\GaleryFoto;
use App\Models\GroupMedia;
use App\Http\Requests\StoreGaleryFotoRequest;
use App\Http\Requests\UpdateGaleryFotoRequest;
use App\DataTables\GaleryFotoDataTable;
class GaleryFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GaleryFotoDataTable $datatable)
    {
        $group = GroupMedia::all();
        return $datatable->render('back.galery-foto',compact('group'));
        // return view('back.galery-foto',compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGaleryFotoRequest $request)
    {
        // $validated = $request->validated()->safe();
        if (isset($request->validator) && $request->validator->fails()) {
            $err = $request->validator->errors()->messages();
            return redirect()->back()->withErrors($err)->withInput();
        }
        $image_path = $request->file('link_img')->store('image', 'public');
        $data = GaleryFoto::create([
            'link_img' => $image_path,
            'link_tumb' => $image_path,
            'name'=>$request->name,
            'group_media_id'=>$request->group_media_id,
        ]);

        session()->flash('success', 'Image Upload successfully');
        return back();
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
