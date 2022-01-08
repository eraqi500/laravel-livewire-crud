<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Actions extends Component
{
    public $sum;
    public $num;

    public function add($a , $b){
        $this->sum  =$a + $b ;
    }

    public function inc(){
        $this->num++ ;
    }

    public function dec(){
        $this->num --;
    }

    public function render()
    {
        return view('livewire.actions');
    }
}
