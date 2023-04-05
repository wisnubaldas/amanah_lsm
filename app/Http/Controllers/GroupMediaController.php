<?php

namespace App\Http\Controllers;

use App\Models\GroupMedia;
use App\Http\Requests\StoreGroupMediaRequest;
use App\Http\Requests\UpdateGroupMediaRequest;
use App\DataTables\GroupMediaDataTable;
class GroupMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GroupMediaDataTable $dataTable)
    {
        return $dataTable->render('back.group-media');
        
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
    public function store(StoreGroupMediaRequest $request)
    {
        $validated = $request->validated();
        $validated = $request->safe()->only(['name']);
        GroupMedia::create($validated);
        return redirect('/master/media-group');
    }

    /**
     * Display the specified resource.
     */
    public function show(GroupMedia $groupMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GroupMedia $groupMedia,$id)
    {
        $media = $groupMedia->find($id);
        return view('back.group-media',compact('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupMediaRequest $request, GroupMedia $groupMedia)
    {
        $data = $groupMedia->find($request->id);
        $data->name = $request->name;
        $data->save();
        return redirect()->route('group-media');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GroupMedia $groupMedia,$id)
    {
        $groupMedia->find($id)->delete();
        return back();
    }
}
