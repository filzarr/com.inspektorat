<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Berita;
class beritalainnya extends Component
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
       $data = Berita::orderBy('views', 'DESC')->paginate(5); 
        return view('components.beritalainnya', compact('data'));
    }
}
