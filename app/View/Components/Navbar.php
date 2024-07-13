<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Menu;
class navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        $profile = Menu::where('gm', 'profile')->get();
        $program = Menu::where('gm', 'program')->get();
        $laporan = Menu::where('gm', 'laporan')->get();
        $irban1 = Menu::where('gm', 'irban1')->get();
        $irban2 = Menu::where('gm', 'irban2')->get();
        $irban3 = Menu::where('gm', 'irban3')->get();
        $irban4 = Menu::where('gm', 'irban4')->get();
        $irbansus = Menu::where('gm', 'irbansus')->get();
        $gratifikasi = Menu::where('gm', 'gratifikasi')->get();
        return view('components.navbar', compact('profile', 'program','laporan','irban1','irban2','irban3','irban4','irbansus','gratifikasi'));
    }
}
