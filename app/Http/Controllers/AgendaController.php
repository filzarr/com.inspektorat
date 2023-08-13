<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Services\SlugService;
class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agenda = Agenda::paginate(15);
        $title = 'Hapus Agenda!';
        $text = "Apakah Anda Yakin Ingin Menghapus Agenda?";
        confirmDelete($title, $text);
        return view('admin.agenda.index', compact('agenda'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'created_at' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ],
        [
            'required' => ':attribute Belum Diisi.',
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Agenda::create($input);
        Alert::success('Berhasil', 'Berhasil Menambahkan Agenda');
        return redirect('/admin/agenda');
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
        $berita = Agenda::findOrFail($id);
        return view('admin.agenda.edit', compact('berita'));
  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $input = [
            'judul' =>$request->judul,
            'deskripsi' => $request->deskripsi,
            'created_at' =>  \Carbon\Carbon::parse($request->created_at)->format('Y-m-d') ,
          
        ];
        
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Agenda::where('id', $id)->update($input);
        Alert::success('Berhasil', 'Berhasil Mengupdate Agenda');
        return redirect('/admin/agenda');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $agenda = Agenda::findOrFail($id);
        unlink("images/".$agenda->image);
        $agenda->delete();
        Alert::success('Berhasil', 'Berhasil Menghapus agenda');
        return redirect('/admin/agenda');
    }
}
