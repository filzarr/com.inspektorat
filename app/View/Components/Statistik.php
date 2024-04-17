<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Pengunjung;
use Carbon\Carbon;
class Statistik extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $pengunjung = Pengunjung::count();
        $tahun =  Pengunjung::whereYear('created_at', Carbon::now()->year)->count();
        $bulan =  Pengunjung::whereMonth('created_at', Carbon::now()->month)->count();
        $hari =  Pengunjung::whereDay('created_at', Carbon::now()->day)->count();
        return view('components.statistik', compact('tahun','bulan','hari','pengunjung'));
    }
}
