<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Linkterkait;
use App\Models\Berita;
use App\Models\Banner;
use App\Models\Datapegawai;
use App\Models\Galerifoto;
use App\Models\GaleriVideo;
use App\Models\Irban;
use App\Models\Ppid;
use App\Models\tampilansaberpungli;
use App\Models\tampilanppid;
use App\Models\Laporaninformasi;
use App\Models\Laporankeberatan;
use App\Models\Agendairban;
use App\Models\Agenda;
use App\Models\Comments;
use Redirect;
Use Alert;
use App\Models\Pengunjung;
use Illuminate\Pagination\CursorPaginator;
class DashboardController extends Controller
{
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
       
        $berita = Berita::limit(6)->get();
        $banner = Banner::get();
        $datapegawai = Datapegawai::get();
        $galerifoto = Galerifoto::get();
        $agenda = Agenda::get();
        Pengunjung::create();
        $video = GaleriVideo::get();
        // dd($berita);
        return view('welcome', compact('berita','banner', 'datapegawai','galerifoto','agenda','video'));
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
            $berita = Berita::paginate(6);
        }
       
        return view('berita', compact('berita'));
    }
    public function agend(Request $request){
   
       
            $berita = Agenda::paginate(6);
        
       
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
        return view('ppid', compact('profile', 'visi', 'misi', 'tugas', 'informasi', 'permohonan','keberatan','permohonanselesai','keberatanselesai'));
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
        $profile = Irban::where('irban', $irban)->where('jenis','profile')->first();
        $visi = Irban::where('irban', $irban)->where('jenis','visi')->first();
        $misi = Irban::where('irban', $irban)->where('jenis','misi')->first();
        $agenda = Agendairban::where('irban', $irban)->paginate(6);
        // dd($agenda);
        return view('irban', compact('profile','visi','misi','agenda'));
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
