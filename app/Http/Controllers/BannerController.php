<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\DataTables\BannerDataTable;
use Image;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BannerDataTable $datatable)
    {
        return $datatable->render('back.banner');
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
    public function store(StoreBannerRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            $err = $request->validator->errors()->messages();
            return redirect()->back()->withErrors($err)->withInput();
        }
        $image_name = 'banner-'.Str::ulid(). '.' . $request->file('image')->getClientOriginalExtension();
        $image_path = '/assets/img/banner/' . $image_name;
        Image::make($request->file('image'))->fit(2440,1578)->save(public_path($image_path));

        Banner::create([
            'image' => $image_path,
            'title'=>$request->title,
            'content'=>$request->content,
            'link'=>$request->link,
        ]);

        session()->flash('success', 'Image Upload successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
