<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class CreateProject extends Component
{
    public $url, $name;

    public function render()
    {
        return view('livewire.create-project');
    }

    
    public function create()
    {
        $this->validate([
            'url' => 'required|string',
            'name' => 'required|string',
        ]);

        Project::create([
            'name' => $this->name,
            'url' => $this->url,
        ]);
        session()->flash('msg', 'Projeto adicionado com sucesso.');
    }


    public $validationAttributes = [
        'url' => 'Url  do Projeto',
        'name' => 'Nome do Projeto',
    ];

    public function updated($propertyName)
    {   
        $this->validateOnly($propertyName, [
            'url' => 'required|string',
            'name' => 'required|string',
        ]);
    }
}
