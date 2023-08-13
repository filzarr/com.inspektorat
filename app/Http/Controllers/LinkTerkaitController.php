<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Linkterkait;
use RealRashid\SweetAlert\Facades\Alert;
class LinkTerkaitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $linkterkait = Linkterkait::paginate(10);
        $title = 'Hapus Link Terkait!';
        $text = "Apakah Anda Yakin Ingin Menghapus Link Terkait?";
        confirmDelete($title, $text);
        return view('admin.linkterkait.index', compact('linkterkait'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.linkterkait.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'link' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ],
        [
            'required' => ':attribute Belum Diisi.',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Linkterkait::create($input);
        Alert::success('Berhasil', 'Berhasil Menambahkan Link Terkait!');
        return redirect('/admin/linkterkait');
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
        $linkterkait = Linkterkait::findOrFail($id);
        return view('admin.linkterkait.edit', compact('linkterkait'));
  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {       
        $input = [
            'link' =>$request->link,
        
        ];
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Linkterkait::where('id', $id)->update($input);
        Alert::success('Berhasil', 'Berhasil Mengupdate Link Terkait');
        return redirect('/admin/linkterkait');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Linkterkait::findOrFail($id);
        unlink("images/".$data->image);
        $data->delete();
        Alert::success('Berhasil', 'Berhasil Menghapus Link Terkait');
        return redirect('/admin/linkterkait');
    }
}
