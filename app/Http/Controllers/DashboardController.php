<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Linkterkait;
use App\Models\Berita;
use App\Models\Banner;
use App\Models\Datapegawai;
use App\Models\Galerifoto;
use App\Models\Agenda;
class DashboardController extends Controller
{
    public function index(){
        $link = Linkterkait::get();
        $berita = Berita::limit(6)->get();
        $banner = Banner::get();
        $datapegawai = Datapegawai::get();
        $galerifoto = Galerifoto::get();
        $agenda = Agenda::get();
        // dd($berita);
        return view('welcome', compact('link','berita','banner', 'datapegawai','galerifoto','agenda'));
    }
    public function detailberita($slug){
         $berita = Berita::where('slug',$slug)->limit(1)->get();
         return view('post',compact('berita'));
    }
    public function berita(){
        $berita = Berita::paginate(6);
        return view('berita', compact('berita'));
    }
}
