<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use App\Models\Menu as M;
use RealRashid\SweetAlert\Facades\Alert;
use Redirect;
class Menu extends Component
{
    public $title;
    //public $body = '<p>rad<img src="https://www.rochesterfirst.com/wp-content/uploads/sites/66/2019/09/cat.jpg"></p>';
    public $body;
    public $gm;
    public $link;
    public $listeners = [
        Trix::EVENT_VALUE_UPDATED // trix_value_updated()
    ];

    public function trix_value_updated($value){
        $this->body = $value;
    }

    public function save(){
        $insert['judul'] = $this->title;
        $insert['link'] = $this->link;
        $insert['gm'] = $this->gm;
       M::create($insert);
       Alert::success('Berhasil', 'Berhasil Menambahkan Menu');
       return redirect('/admin/menu');
    }

    public function render()
    {
        return view('livewire.menu');
    }
}
