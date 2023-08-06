<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ppid(){
        return view('admin.laporan.ppid.index');
    }
    public function saberpungli(){
        return view('admin.laporan.saberpungli.index');
    }
}
