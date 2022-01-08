<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SimpleCalc extends Component
{
    public $num1;
    public $num2;
    public $sum = 0;

    public function calc(){
      $this->sum = $this->num1 + $this->num2 ;
    }

    public function render()
    {
        return view('livewire.simple-calc');
    }
}
