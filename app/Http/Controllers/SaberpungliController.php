<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tampilansaberpungli;
use RealRashid\SweetAlert\Facades\Alert;
class SaberpungliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = tampilansaberpungli::get();
        return view('admin.saberpungli.index', compact('data'));
    }
    public function storetampilan(Request $request){
       
        if ($image = $request->file('image')) {
            $input = [
                'image' => $request->image,
            ];
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            tampilansaberpungli::where('id', $request->id)->update($input);
        }
      
        else{
            $input = [
                'deskripsi' => $request->deskripsi,
            ];
            tampilansaberpungli::where('id', $request->id)->update($input);
        }
        Alert::success('Berhasil', 'Berhasil Mengupdate Tampilan');
        return redirect('/admin/saberpungli');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
    public function edit(string $id)
    {
         $data = tampilansaberpungli::findOrFail($id);
        return view('admin.saberpungli.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
