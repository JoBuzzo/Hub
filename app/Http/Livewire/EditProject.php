<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class EditProject extends Component
{
    public function render()
    {
        return view('livewire.edit-project');
    }

    public $project;
    public $name;
    public $url;

    public function mount($id)
    {
        $this->project = Project::findOrFail($id);
        $this->name = $this->project->name;
        $this->url = $this->project->url;
    }

    public function edit()
    {
        $this->validate([
            'url' => 'required|string',
            'name' => 'required|string',
        ]);

        $this->project->update([
            'name' => $this->name,
            'url' => $this->url
        ]);
        $this->emit('projectUpdated', $this->project->id);
        session()->flash('msg', 'Projeto editado com sucesso.');
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
