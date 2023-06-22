<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{
    public function render()
    {
        return view('livewire.create-user');
    }

    public $name, $email, $password, $password_confirmation;
    
    public function create()
    {

        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'min:8'],
 
        ]);

         User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);


        $this->reset();
    }

    public $validationAttributes = [
        'name' => 'Nome',
        'password' => 'Senha',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'min:8'],
        ]);
    }
}
