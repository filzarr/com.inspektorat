<?php

namespace App\View\Components;

use Closure;
use App\Models\Menu;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

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
        $profile = Cache::remember('menu_profile', 60, function () {
            return Menu::where('gm', 'profile')->get();
        });
    
        $program = Cache::remember('menu_program', 60, function () {
            return Menu::where('gm', 'program')->get();
        });
    
        $laporan = Cache::remember('menu_laporan', 60, function () {
            return Menu::where('gm', 'laporan')->get();
        });
    
        $irban1 = Cache::remember('menu_irban1', 60, function () {
            return Menu::where('gm', 'irban1')->get();
        });
    
        $irban2 = Cache::remember('menu_irban2', 60, function () {
            return Menu::where('gm', 'irban2')->get();
        });
    
        $irban3 = Cache::remember('menu_irban3', 60, function () {
            return Menu::where('gm', 'irban3')->get();
        });
    
        $irban4 = Cache::remember('menu_irban4', 60, function () {
            return Menu::where('gm', 'irban4')->get();
        });
    
        $irbansus = Cache::remember('menu_irbansus', 60, function () {
            return Menu::where('gm', 'irbansus')->get();
        });
    
        $gratifikasi = Cache::remember('menu_gratifikasi', 60, function () {
            return Menu::where('gm', 'gratifikasi')->get();
        });
    
        $regulasi = Cache::remember('menu_regulasi', 60, function () {
            return Menu::where('gm', 'regulasi')->get();
        });
        return view('components.navbar', compact('profile', 'program','laporan','irban1','irban2','irban3','irban4','irbansus','gratifikasi','regulasi'));
    }
}
