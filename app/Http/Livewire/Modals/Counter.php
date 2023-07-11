<?php

namespace App\Http\Livewire\Modals;

use LivewireUI\Modal\ModalComponent;

class Counter extends ModalComponent
{

    public function render()
    {
        return view('livewire.modals.counter');
    }
}
