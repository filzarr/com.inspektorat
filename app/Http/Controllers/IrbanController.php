<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Irban;
use Redirect;
Use Alert;
class IrbanController extends Controller
{
    public function agenda(){
        return view('admin.irban.irban1.agenda');
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        Alert::success('Berhasil', 'Berhasil Mengupdate Berita');
        return redirect()->route('irban', ['irban' => $request->irban]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
