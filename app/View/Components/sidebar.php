<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Laporaninformasi;
use App\Models\Laporankeberatan;
use App\Models\Laporansaberpungli;
class sidebar extends Component
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
        $laporan = Laporaninformasi::where('balasan', null)->count();
        $lapor = Laporankeberatan::where('balasan', null)->count();
        $laporsaber = Laporansaberpungli::where('balasan', null)->count();
        return view('components.sidebar', compact('laporan','lapor','laporsaber'));
    }
}
