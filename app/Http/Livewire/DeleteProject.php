<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class DeleteProject extends Component
{
    public function render()
    {
        return view('livewire.delete-project');
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

    public function delete()
    {
        $this->project->delete();
        $this->emit('projectDeleted', $this->project->id);
        session()->flash('msg', 'Projeto editado com sucesso.');
    }
}
