<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\popup;
use Alert;
class VidioKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popup = popup::get();
        return view('admin.vidiokegiatan.index', compact('popup'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vidiokegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
          
            'created_at' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ],
        [
            'required' => ':attribute Belum Diisi.',
        ]
    );
        
        // $request->slug = \Str::slug($request->judul);
        // dd($request);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        popup::create($input);
        Alert::success('Berhasil', 'Berhasil Menambahkan Vidio Kegiatan');
        return redirect('/admin/vidiokegiatan');
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
        $popup = popup::findOrFail($id);
        return view('admin.vidiokegiatan.edit', compact('popup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = [
            'judul' =>$request->judul,
            'created_at' =>  \Carbon\Carbon::parse($request->created_at)->format('Y-m-d') ,
       
        ];
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        popup::where('id', $id)->update($input);
        Alert::success('Berhasil', 'Berhasil Mengupdate Vidio Kegiatan');
        return redirect('/admin/vidiokegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $popup = popup::findOrFail($id);
        unlink("images/".$popup->image);
        $popup->delete();
        Alert::success('Berhasil', 'Berhasil Menghapus Vidio Kegiatan');
        return redirect('/admin/vidiokegiatan');
    }
}
