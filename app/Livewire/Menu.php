<?php

namespace App\Livewire;

use Livewire\Component;
use DB;

class Menu extends Component
{
    public $title;
    //public $body = '<p>rad<img src="https://www.rochesterfirst.com/wp-content/uploads/sites/66/2019/09/cat.jpg"></p>';
    public $body;

    public $listeners = [
        Trix::EVENT_VALUE_UPDATED // trix_value_updated()
    ];

    public function trix_value_updated($value){
        $this->body = $value;
    }

    public function save(){
        echo"oke";
     
    }
    public function store(){

    }

   
    public function render()
    {
        return view('livewire.menu');
    }
}
