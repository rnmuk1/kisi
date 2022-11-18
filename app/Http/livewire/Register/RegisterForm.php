<?php

namespace App\Http\livewire\Register;

use App\Http\livewire\Component;

class RegisterForm extends Component
{
    public function render()
    {
        if ($this->phone_number >= 4) {
            $this->isValid1 = true;
        } else {
            $this->isValid1 = false;
        }
        return view('livewire.register.register-form');
    }
}
