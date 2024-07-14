<?php

namespace App\View\Components;

use Closure;
use App\Models\Banner;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Carousel extends Component
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
        $banner = Banner::Orderby('created_at', 'desc')->get();
        return view('components.carousel', compact('banner'));
    }
}
