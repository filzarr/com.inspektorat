<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporaninformasi;
use App\Models\Laporankeberatan;
use App\Models\Laporansaberpungli;
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
        $data = Laporansaberpungli::where('balasan', null)->get();
        $datasudah = Laporansaberpungli::select('id', 'nama', 'created_at', 'deskripsi', 'balasan')->where('balasan', '<>' , null)->get();
     
        return view('admin.laporan.saberpungli.index', compact('data','datasudah'));
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
    public function lsaberpungli($id){
        $data = Laporansaberpungli::findOrFail($id);
    
        return view('admin.laporan.saberpungli.tampil', compact('data'));
    }
    public function lihatsaberpungli($id){
    //   dd($id);
    
        return view('admin.laporan.saberpungli.balas', compact('id'));
    }
    public function storedsaberpungli(Request $request, $id){
    //   dd($id);
    $input = [
        'balasan' =>$request->balasan,];
        Laporansaberpungli::where('id', $id)->update($input);
        Alert::success('Berhasil', 'Berhasil Membalasa Laporan');
        return redirect('/admin/laporan/saberpungli');
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
