<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galerifoto;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Services\SlugService;
class GalerifotoController extends Controller
{
    public function index()
    {
        $data = Galerifoto::paginate(15);
        $title = 'Hapus Foto!';
        $text = "Apakah Anda Yakin Ingin Menghapus Foto?";
        confirmDelete($title, $text);
     
        return view('admin.galerifoto.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galerifoto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Galerifoto::create($input);
        Alert::success('Berhasil', 'Berhasil Menambahkan Galeri Foto');
        return redirect('/admin/galerifoto');
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
        $data = Galerifoto::findOrFail($id);
        return view('admin.galerifoto.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = [
           'deskripsi' => $request->deskripsi,
     
        ];
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Galerifoto::where('id', $id)->update($input);
        Alert::success('Berhasil', 'Berhasil Mengupdate Galeri Foto');
        return redirect('/admin/galerifoto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Galerifoto::findOrFail($id);
        unlink("images/".$data->image);
        $data->delete();
        Alert::success('Berhasil', 'Berhasil Menghapus Galeri Foto');
        return redirect('/admin/galerifoto');
    }
}
