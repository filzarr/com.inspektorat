<?php

namespace App\Http\Controllers;

use App\Models\Ppid;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PpidController extends Controller
{
    public function tampilan(){
        return view('admin.ppid.kelolatampilan');
    }
    public function vie(){
        return view('admin.ppid.index');
    }
    public function index()
    {
        $listppid = Ppid::paginate(10);
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
        $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
            'jenis' => 'required',
            'created_at' => 'required',
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}