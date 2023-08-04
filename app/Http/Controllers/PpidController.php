<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpidController extends Controller
{
    public function tampilan(){
        return view('admin.ppid.kelolatampilan');
    }
    public function vie(){
        return view('admin.ppid.index');
    }
    public function index()
    {
        return view('admin.ppid.informasi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ppid.create');
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
