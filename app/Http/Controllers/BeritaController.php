<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::paginate(15);
        $title = 'Hapus Berita!';
        $text = "Apakah Anda Yakin Ingin Menghapus Berita?";
        confirmDelete($title, $text);
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'created_at' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
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
        Berita::create($input);
        Alert::success('Berhasil', 'Berhasil Menambahkan Berita');
        return redirect('/admin/berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $berita = Berita::where('slug',$slug)->limit(1)->get();
        return view('post',compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {    
        // dd($request);
        $input = [
            'judul' =>$request->judul,
            'deskripsi' => $request->deskripsi,
            'created_at' =>  \Carbon\Carbon::parse($request->created_at)->format('Y-m-d') ,
       
        ];
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Berita::where('id', $id)->update($input);
        Alert::success('Berhasil', 'Berhasil Mengupdate Berita');
        return redirect('/admin/berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);
        unlink("images/".$berita->image);
        $berita->delete();
        Alert::success('Berhasil', 'Berhasil Menghapus Berita');
        return redirect('/admin/berita');
    }
}