<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class lnkterkait extends Component
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
        $link = Cache::remember('link_terkait', 60, function () {
            return Linkterkait::get();
        }); 
        return view('components.linkterkait', compact('link'));
    }
}
