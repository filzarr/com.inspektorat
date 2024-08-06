<?php

namespace App\Http\Controllers;

use Redirect;
use Carbon\Carbon;
use App\Models\Menu;
use App\Models\Ppid;
use App\Models\Irban;
use App\Models\popup;
use App\Models\Agenda;
use App\Models\Banner;
use App\Models\Berita;
use App\Models\Comments;
use App\Models\Galerifoto;
use App\Models\Pengunjung;
use App\Models\Agendairban;
use App\Models\Datapegawai;
use App\Models\GaleriVideo;
use App\Models\Linkterkait;
use Jenssegers\Agent\Agent;
use App\Models\tampilanppid;
use Illuminate\Http\Request;
use App\Models\Laporaninformasi;
use App\Models\Laporankeberatan;
Use Alert;
use App\Models\tampilansaberpungli;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\CursorPaginator;

class DashboardController extends Controller
{
    public function menu($slug){
        $menu = Menu::where('slug', $slug)->first();
        return view('menu', compact('menu'));
    }
    public function comment(Request $request,string $idberita){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
            
        ]);
        $input = $request->all();
        $input['berita_id'] = $idberita;
        // dd($input);
        Comments::create($input);
        Alert::success('Berhasil Menambahkan Comment', '');
     
        return redirect()->back();
    }
    public function index(){
        $berita = Cache::remember('berita', 60, function () {
            return Berita::orderBy('created_at', 'desc')->limit(6)->get();
        });
    
        $popup = Cache::remember('popup', 60, function () {
            return Popup::first();
        });
    
        $datapegawai = Cache::remember('datapegawai', 60, function () {
            return Datapegawai::all();
        });
    
        $galerifoto = Cache::remember('galerifoto', 60, function () {
            return Galerifoto::orderBy('created_at', 'desc')->get();
        });
    
        $agenda = Cache::remember('agenda', 60, function () {
            return Agenda::orderBy('created_at', 'desc')->get();
        });
    
        $video = Cache::remember('video', 60, function () {
            return GaleriVideo::all();
        });
    
        $agent = new Agent();
        // dd($agent->isMobile());
        return view('welcome', compact('berita',  'datapegawai','galerifoto','agenda','video','agent','popup'));
    }
    public function detailberita($slug){
         $berita = Berita::where('slug',$slug)->with('comments')->limit(1)->get();
         Berita::where('slug',$slug)->increment('views');
        //  dd($berita);
         return view('post',compact('berita'));
    }
    public function berita(Request $request){
   
        if ($request->query('cari')) {
            $cari = $request->query('cari');
            $berita = Berita::where('judul','like',"%".$cari."%")->paginate(6);
        }
        else{
            $berita = Berita::Orderby('created_at', 'desc')->paginate(6);
        }
       
        return view('berita', compact('berita'));
    }
    public function agend(Request $request){
   
       
            $berita = Agenda::Orderby('created_at', 'desc')->paginate(6);
        
       
        return view('berita', compact('berita'));
    }
   
    public function ppid(){
        $profile = tampilanppid::where('jenis','profile')->first();
        $visi = tampilanppid::where('jenis','visi')->first();
        $misi = tampilanppid::where('jenis','misi')->first();
        $tugas = tampilanppid::where('jenis','tugas dan fungsi')->first();
        $informasi = Ppid::count();
        $permohonan = Laporaninformasi::count();
        $keberatan = Laporankeberatan::count();
        $permohonanselesai = Laporaninformasi::where('balasan', '<>', null)->count();
        $keberatanselesai = Laporankeberatan::where('balasan', '<>', null)->count();
        $ppid = Menu::where('gm', 'ppid')->get();
        return view('ppid', compact('profile', 'visi', 'misi', 'tugas', 'informasi', 'permohonan','keberatan','permohonanselesai','keberatanselesai','ppid'));
    }
    public function informasi($jenis){
        if ($jenis == "informasi-berkala") {
            $data = Ppid::where('jenis','informasiberkala')->paginate(10);
        }
        if ($jenis == "informasi-publik") {
            $data = Ppid::where('jenis','informasipublik')->paginate(10);
        }
   
        return view('informasi', compact('data', 'jenis'));
    }
    public function saberpungli(){
        $profile = tampilansaberpungli::where('jenis','profile')->first();
        $visi = tampilansaberpungli::where('jenis','visi dan misi')->first();
        $tugas = tampilansaberpungli::where('jenis','tugas dan fungsi')->first();
        $wewenang = tampilansaberpungli::where('jenis','wewenang')->first();

        return view('saberpungli', compact('profile','tugas','wewenang','visi'));
    }
    public function irban($irban){
        $data = Irban::where('irban', $irban)->where('jenis', '<>', 'struktur')->get();
        $struktur = Irban::where('irban', $irban)->where('jenis','struktur')->first();
        $agenda = Agendairban::where('irban', $irban)->paginate(6);
        
        // dd($agenda);
        return view('irban', compact('data','agenda','struktur','irban'));
    }
    public function banner($slug){
        $berita = Banner::where('slug',$slug)->limit(1)->get();
        return view('post',compact('berita'));
    }
    public function agenda($slug){
        $berita = Agenda::where('slug',$slug)->limit(1)->get();
        Agenda::where('slug',$slug)->increment('views');
        // dd($berita);
        return view('post',compact('berita'));
    }
}
