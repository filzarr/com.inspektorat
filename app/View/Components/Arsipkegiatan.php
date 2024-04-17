<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\popup;
use Carbon\Carbon;
class Arsipkegiatan extends Component
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
        $data = popup::whereDate('created_at', '<=', Carbon::today())->limit(5)->get();
        // dd($data);
        return view('components.arsipkegiatan', compact('data'));
    }
}
