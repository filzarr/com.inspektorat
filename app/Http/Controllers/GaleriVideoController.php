<?php

namespace App\Http\Controllers;

use App\Models\GaleriVideo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Services\SlugService;

class GaleriVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.galerivideo.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galerivideo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GaleriVideo $galeriVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GaleriVideo $galeriVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GaleriVideo $galeriVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GaleriVideo $galeriVideo)
    {
        //
    }
}
