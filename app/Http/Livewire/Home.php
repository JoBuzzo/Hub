<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        auth()->login(User::first());
        
        return view('livewire.home');
    }
}
