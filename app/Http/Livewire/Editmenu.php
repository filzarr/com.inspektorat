<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use App\Models\Menu as M;
use RealRashid\SweetAlert\Facades\Alert;
class Editmenu extends Component
{
    public $idt;
    public $title;
    //public $body = '<p>rad<img src="https://www.rochesterfirst.com/wp-content/uploads/sites/66/2019/09/cat.jpg"></p>';
    public $body;
    public $gm;
    public function mount($id)
    {
        $menu = M::find($id);
        $this->idt = $id;
        // dd($menu);
        if($menu) {
            $this->id   = $menu->id;
            $this->title    = $menu->judul;
            $this->body  = $menu->link;
            $this->gm  = $menu->gm;
        }
    }
    public function update(){
        // dd([
        //     $this->title,
        //     $this->body,
        //     $this->gm
        // ]);
        $insert['judul'] = $this->title;
        $insert['link'] = $this->body;
        $insert['gm'] = $this->gm;
        $data = M::find($this->idt);
        $data->update($insert);
        Alert::success('Berhasil', 'Berhasil Mengupdate Menu');
        return redirect('/admin/menu');
     }
    public $listeners = [
        Trix::EVENT_VALUE_UPDATED // trix_value_updated()
    ];

    public function trix_value_updated($value){
        $this->body = $value;
    }

    public function render()
    {
        return view('livewire.editmenu');
    }
}
