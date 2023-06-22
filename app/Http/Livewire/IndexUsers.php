<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class IndexUsers extends Component
{
    public function render()
    {
        return view('livewire.index-users');
    }

    public $users;
    public function mount()
    {
        $this->users = User::all();
    }
    
    protected $listeners = ['userDeleted' => 'refreshComponent'];

    public function refreshComponent()
    {
        $this->users = User::all();
    }
}
