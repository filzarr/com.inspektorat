<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datapegawai;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Services\SlugService;
class DatapegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPegawai = Datapegawai::paginate(10);
        return view('admin.datapegawai.index', compact('dataPegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.datapegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'jumlah' => 'required',
        ]);
        $input = $request->all();
        Datapegawai::create($input);
        Alert::success('Berhasil', 'Berhasil Menambahkan Data Pegawai');
        return redirect('/admin/datapegawai');
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
        $dataPegawai = Datapegawai::findOrFail($id);
        $dataPegawai->delete();
        Alert::success('Berhasil', 'Berhasil Menghapus Data Pegawai');
        return redirect('/admin/datapegawai');
    }
}
