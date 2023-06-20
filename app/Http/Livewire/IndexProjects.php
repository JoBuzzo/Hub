<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class IndexProjects extends Component
{
    public $projects;
    public function render()
    {      
        return view('livewire.index-projects');
    }

    public function mount()
    {
        $this->projects = Project::all();
    }
    
    protected $listeners = ['projectUpdated' => 'refreshComponent', 'projectDeleted' => 'refreshComponent'];

    public function refreshComponent()
    {
        $this->projects = Project::all();
    }
}
