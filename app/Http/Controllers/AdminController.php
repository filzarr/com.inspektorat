<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Laporaninformasi;
use App\Models\Laporankeberatan;
use App\Models\Pengunjung;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function index(){
        $bulan =  Pengunjung::whereMonth('created_at', Carbon::now()->month)->count();
        $berita =  Berita::count();
        $total1 = Laporaninformasi::count();
        $total2 = Laporankeberatan::count();
        $statistik = Pengunjung::whereYear('created_at', Carbon::now()->year)->selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
        ->groupBy('year', 'month')
        ->orderBy('year', 'desc')
        ->get();
         
        // dd($statistik);
        return view('admin.index', compact('bulan','berita','total1','total2','statistik'));
    }
}
