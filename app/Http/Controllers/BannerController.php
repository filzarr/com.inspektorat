<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Services\SlugService;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::paginate(15);
        $title = 'Hapus Banner!';
        $text = "Apakah Anda Yakin Ingin Menghapus Banner?";
        confirmDelete($title, $text);
        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'created_at' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Banner::create($input);
        Alert::success('Berhasil', 'Berhasil Menambahkan Banner');
        return redirect('/admin/banner');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = [
            'judul' =>$request->judul,
            'deskripsi' => $request->deskripsi,
            'created_at' =>  \Carbon\Carbon::parse($request->created_at)->format('Y-m-d') ,
            'image' =>$request->image,
        ];
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Banner::where('id', $id)->update($input);
        Alert::success('Berhasil', 'Berhasil Mengupdate Banner');
        return redirect('/admin/banner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::findOrFail($id);
        unlink("images/".$banner->image);
        $banner->delete();
        Alert::success('Berhasil', 'Berhasil Menghapus Banner');
        return redirect('/admin/banner');
    }
}
