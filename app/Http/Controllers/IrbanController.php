<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('admin.irban.irban1.index',compact('irban'));
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
    public function edit(string $id)
    {
        //
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
