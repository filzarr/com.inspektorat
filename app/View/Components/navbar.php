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
        $regulasi = Menu::where('gm', 'regulasi')->get();
        $pedoman = Menu::where('gm', 'pedoman standar')->get();
        return view('components.navbar', compact('profile', 'regulasi','pedoman'));
    }
}
