<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporaninformasi;
use App\Models\Laporankeberatan;
use Redirect;
Use Alert;
class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ppid(){
        $data = Laporaninformasi::select('id', 'nama', 'created_at', 'deskripsi', 'balasan')->where('balasan', null)->get();
        $datasudah = Laporaninformasi::select('id', 'nama', 'created_at', 'deskripsi', 'balasan')->where('balasan', '<>' , null)->get();
        $item = Laporankeberatan::select('id', 'nama', 'created_at', 'deskripsi', 'balasan')->where('balasan', null)->get();
        $itemsudah = Laporankeberatan::select('id', 'nama', 'created_at', 'deskripsi', 'balasan')->where('balasan', '<>' , null)->get();
        return view('admin.laporan.ppid.index', compact('data', 'item', 'datasudah', 'itemsudah'));
    }
    public function saberpungli(){
        return view('admin.laporan.saberpungli.index');
    }
    public function lihat(Request $request){
        if($request->jenis == 'permohonan-informasi'){
           $data = Laporaninformasi::findOrFail($request->id);
        }
        if($request->jenis == "pelaporan-informasi"){
            $data = Laporankeberatan::findOrFail($request->id);
        }
        $jenis = $request->jenis;
        // dd($request);
        return view('admin.laporan.ppid.tampil', compact('data', 'jenis'));
    }
    public function t(Request $request){
    //   dd($id);
    $id = $request->id;
    $jenis = $request->jenis;
        return view('admin.laporan.ppid.balas', compact('id', 'jenis'));
    }
    public function balas(Request $request){
        $input = [
            'balasan' =>$request->balasan,];
        if ($request->jenis == 'permohonan-informasi') {
            Laporaninformasi::where('id', $request->id)->update($input);
        }
        if($request->jenis == "pelaporan-informasi"){
            Laporankeberatan::where('id', $request->id)->update($input);
        }
        Alert::success('Berhasil', 'Berhasil Membalasa Laporan');
        return redirect('/admin/laporan/ppid');
    }
}
