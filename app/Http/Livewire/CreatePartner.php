<?php

namespace App\Http\Livewire;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePartner extends Component
{
    use WithFileUploads;
    
    public function render()
    {
        return view('livewire.create-partner');
    }

    public $image;

    public function create()
    {
        $this->validate([
            'image' => 'image|max:4500',
        ]);

        $nameFile = date("Ymdhis") . "." . $this->image->getClientOriginalExtension();
        $this->image->storeAs('public/partners', $nameFile);

        Partner::create([
            'image' => $nameFile,
        ]);

        session()->flash('msg', 'Parceiria adicionada com sucesso.');
    }
}
