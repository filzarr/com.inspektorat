<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Irban;
use Redirect;
Use Alert;
use App\Models\Agendairban;
class IrbanController extends Controller
{
    public function agenda($irban){
        $agenda = Agendairban::where('irban',$irban)->get();
        return view('admin.irban.agenda.index',compact('agenda', 'irban'));
    }
    public function agendacreate($irban){
      
        return view('admin.irban.agenda.create',compact( 'irban'));
    }
    public function agendastore(Request $request){
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'created_at' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Agendairban::create($input);
        Alert::success('Berhasil', 'Berhasil Menambahkan Agenda');
        return redirect()->route('irb', ['irban' => $request->irban]);
    }
    public function capaiankinerja(){
        return view('admin.irban.irban1.capaian');
    }
  public function irban(){
   
    return view('admin.irban.index');
  }
    public function index($irban)
    {
        $data = Irban::where('irban', $irban)->get();
        // dd($data);
        return view('admin.irban.irban1.index', compact('data', 'irban'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($irban)
    {
        return view('admin.irban.irban1.create', compact('irban'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $irban)
    {
        $input = [
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'irban' => $irban,
        ];
        Irban::create($input);
        Alert::success('Berhasil', 'Berhasil Menambahkan Tampilan');
        $url = '/admin/irban/'.$irban;
        return redirect($url);
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
    public function edit(Request $request)
    {
        $data = Irban::where('jenis', $request->jenis)->where('irban', $request->irban)->first();
        $irban = $request->irban;
        $jenis = $request->jenis;
        // dd($data);
        return view('admin.irban.editampilan', compact('data','irban','jenis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if ($image = $request->file('image')) {
            $input = [
                'image' => $request->image,
            ];
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            Irban::where('jenis', $request->jenis)->where('irban',$request->irban)->update($input);
        }
        else{
            $input = [
                'deskripsi' => $request->deskripsi,
            ];
            Irban::where('jenis', $request->jenis)->where('irban',$request->irban)->update($input);
        }
        Alert::success('Berhasil', 'Berhasil Mengupdate Tampilan');
        return redirect()->route('irban', ['irban' => $request->irban]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $irban = Irban::findOrFail($request->id);
        $irban->delete();
        $url = "/admin/irban/".$request->irban;
        Alert::success('Berhasil', 'Berhasil Menghapus Berita');
        return redirect($url);
    }
}
