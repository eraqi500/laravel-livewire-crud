<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LifeCycle extends Component
{
    public $hookProperty = [];
    public $name;
    public $name2;

    public function mount(){
        $this->hookProperty[] = "Iam from mount function";
    }

    public function hydrate(){
      $this->hookProperty[] = "I am from hydrate ";
    }

    public function updating(){
        $this->hookProperty[] = "I am from updating ";
    }

    public function updated(){
        $this->hookProperty[] = "I am from updated ";
    }

    public function updatingName(){
        $this->hookProperty[] = "I am from updating name function";
    }

    public function updatedName(){
        $this->hookProperty[] = "I am from updated name function ";
    }


    public function render()
    {
        return view('livewire.life-cycle');
    }
}
