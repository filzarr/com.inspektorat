<?php

namespace App\Http\Controllers;

use App\Models\Ppid;
use App\Models\tampilanppid;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PpidController extends Controller
{
    public function tampilan(){
        $data = tampilanppid::get();
        return view('admin.ppid.kelolatampilan', compact('data'));
    }
    public function vie(){
        return view('admin.ppid.index');
    }
    public function edittampilan($id){
        $data = tampilanppid::findOrFail($id);
        return view('admin.ppid.edittampilan', compact('data'));
    }
    public function storetampilan(Request $request){
       
        if ($image = $request->file('image')) {
            $input = [
                'image' => $request->image,
            ];
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            tampilanppid::where('id', $request->id)->update($input);
        }
      
        else{
            $input = [
                'deskripsi' => $request->deskripsi,
            ];
            tampilanppid::where('id', $request->id)->update($input);
        }
        Alert::success('Berhasil', 'Berhasil Mengupdate Tampilan');
        return redirect('/admin/ppid/kelolatampilan');
    }
    public function index()
    {
        $listppid = Ppid::paginate(10);
        $title = 'Hapus Informasi!';
        $text = "Apakah Anda Yakin Ingin Menghapus Informasi?";
        confirmDelete($title, $text);
        return view('admin.ppid.informasi', compact('listppid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ppid.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['tanggal'] = \Carbon\Carbon::parse($request->tanggal)->format('Y-m-d');
        $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'link' => 'required',
            'jenis' => 'required',
        ]);
       

        $input = $request->all();
        Ppid::create($input);
        Alert::success('Berhasil', 'Berhasil Menambahkan Informasi');
        return redirect('/admin/ppid');
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
        $data = Ppid::findOrFail($id);
        return view('admin.ppid.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        $input = [
            'judul' =>$request->judul,
            'kategori' => $request->kategori,
            'link' =>$request->link,
            'jenis' =>$request->jenis,
            'tanggal'=>\Carbon\Carbon::parse($request->tanggal)->format('Y-m-d'),
        ];
        Ppid::where('id', $id)->update($input);
        Alert::success('Berhasil', 'Berhasil Mengupdate Informasi');
        return redirect('/admin/ppid');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Ppid::findOrFail($id);
        $data->delete();
        Alert::success('Berhasil', 'Berhasil Menghapus Informasi');
        return redirect('/admin/ppid/kelolainformasi');
    }
}