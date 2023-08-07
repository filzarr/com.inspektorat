<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporaninformasi;
use App\Models\Laporankeberatan;
use Redirect;
Use Alert;
use Illuminate\Support\Str;
class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function forminformasi(){
        return view('forminformasi');
    }
    public function formkeberatan(){
        return view('formkeberatan');
    }
    public function saberpungli(){
        return view('formkeberatan');
    }
    public function storedinformasi(Request $request){
        // dd($request);
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'alamat' => 'required',
            'identitas' => 'required',
            'nohp' => 'required',
            'email' => 'required',
            'metode' => 'required',
        ]);
       $request->id = Str::uuid();
       $a = $request->id;
        $input = $request->all();
        Laporaninformasi::create($input);
        Alert::success('Berhasil Menambahkan Laporan', 'Silahkan Cek Berkala Informasi Anda Pada Link Yang Sudah Disediakan Menggunakan Kode yang Diberikan');
        return view('setelah', compact('a'));
     
    }
    public function storedkeberatan(Request $request){
        // dd($request);
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'alamat' => 'required',
            'identitas' => 'required',
            'nohp' => 'required',
            'email' => 'required',
            'metode' => 'required',
        ]);
       $request->id = Str::uuid();
       $a = $request->id;
        $input = $request->all();
        Laporankeberatan::create($input);
        Alert::success('Berhasil Menambahkan Laporan', 'Silahkan Cek Berkala Informasi Anda Pada Link Yang Sudah Disediakan Menggunakan Kode yang Diberikan');
        return view('setelah', compact('a'));
     
    }
    public function ceklaporan(){
        return view('ceklaporan');
    }
    public function carilaporan(Request $request){
        return redirect()->route('balasan', ['id' => $request->kode,'jenis' => $request->jenis]);
    }
    public function balasan(Request $request){
        if($request->jenis == "permohonan"){
            $data = Laporaninformasi::where('id', $request->id)->first();
        }
        if($request->jenis == "pelaporan"){
            $data = Laporankeberatan::where('id', $request->id)->first();
        }
        if($request->jenis == "pungli"){
            $data =  Laporanpungli::where('id', $request->id)->first();
        }
        $jenis = $request->jenis ;
        // dd($data);
        if (is_null($data)) {
            Alert::error('Data Tidak Ditemukan', 'Mohon Periksa Kembali Kode yang Anda Masukkan');
            return redirect()->back();
        }
        return view('balasan', compact('data','jenis'));
    }
}
