<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Redirect;
Use Alert;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::get();
        $title = 'Hapus Menu!';
        $text = "Apakah Anda Yakin Ingin Menghapus Menu?";
        confirmDelete($title, $text);
        return view('admin.menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'link' => 'required',
            'gm' => 'required',
        ]);
        $input = $request->all();
        Menu::create($input);
        Alert::success('Berhasil Menambahkan Menu', 'Berhasil Menambahkan Menu');
        return redirect('/admin/menu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $menu = Menu::findOrFail($id);
        return view('admin.menu.edit', compact('id'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = [
            'judul' =>$request->judul,
            'link' => $request->link,
            'gm' => $request->gm,
        ];
        Menu::where('id', $id)->update($input);
        Alert::success('Berhasil', 'Berhasil Mengupdate Menu');
        return redirect('/admin/menu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        Alert::success('Berhasil', 'Berhasil Menghapus Menu');
        return redirect('/admin/menu');
    }
}
