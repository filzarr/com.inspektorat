<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Laporaninformasi;
use App\Models\Laporankeberatan;
use App\Models\Pengunjung;
use App\Models\Laporansaberpungli;
use Carbon\Carbon;
use DB;
class AdminController extends Controller
{
    public function index(){
        $bulan =  Pengunjung::whereMonth('created_at', Carbon::now()->month)->count();
        $berita =  Berita::count();
        $total1 = Laporaninformasi::count();
        $total2 = Laporankeberatan::count();
        $total3 = Laporansaberpungli::count();
        $statistik = Pengunjung::whereYear('created_at', Carbon::now()->year)->selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
        ->groupBy('year', 'month')
        ->orderBy('year', 'desc')
        ->get();
        $saber = DB::table('laporansaberpunglis')->select('nama', 'deskripsi', 'created_at')->where('balasan', null);
        $saber = $saber->addSelect(DB::raw("'Saber Pungli' as Keterangan"));
 
        $keberatan =  DB::table('laporankeberatans')->select('nama', 'deskripsi', 'created_at')->where('balasan', null);
        $keberatan = $keberatan->addSelect(DB::raw("'Laporan Keberatan' as Keterangan"));
        
        $laporaninformasi = DB::table('laporaninformasis')->select('nama', 'deskripsi', 'created_at')->where('balasan', null);
        $laporaninformasi = $laporaninformasi->addSelect(DB::raw("'Permohonan Informasi' as Keterangan"));
        $a = $saber->unionAll($keberatan)->unionAll($laporaninformasi);
        $c = DB::table(DB::raw("({$a->toSql()}) AS a"))
        ->mergeBindings($a)->select('nama', 'deskripsi', 'created_at', 'keterangan')->orderBy('created_at', 'DESC')
        ->limit(2)->get();
        // dd($c);
        // dd($statistik);
        return view('admin.index', compact('bulan','berita','total1','total2', 'total3','statistik', 'c'));
    }
}
