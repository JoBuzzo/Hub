<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class NavProjects extends Component
{
    public function render()
    {
        $projects = Project::all();

        return view('livewire.nav-projects',[
            'projects' => $projects
        ]);
    }
}
