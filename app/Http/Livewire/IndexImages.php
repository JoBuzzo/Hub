<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class IndexImages extends Component
{
    public function render()
    {
        return view('livewire.index-images');
    }

    public $images;
    public function mount()
    {
        $this->images = Image::all();
    }
    
    protected $listeners = ['imageDeleted' => 'refreshComponent'];

    public function refreshComponent()
    {
        $this->images = Image::all();
    }
}
