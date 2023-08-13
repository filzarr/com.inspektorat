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
        $video = GaleriVideo::paginate(15);
        return view('admin.galerivideo.index', compact('video'));
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
        $request->validate([
            'links' => 'required',
        ]);
        $input = $request->all();
        GaleriVideo::create($input);
        Alert::success('Berhasil', 'Berhasil Menambahkan Berita');
        return redirect('/admin/galerivideo');
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
        $video = GaleriVideo::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
 
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
