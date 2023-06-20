<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class CreateImage extends Component
{

    use WithFileUploads;

    public function render()
    {
        return view('livewire.create-image');
    }

    public $image;

    public function create()
    {
        $this->validate([
            'image' => 'image|max:4500',
        ]);

        $nameFile = date("Ymdhis") . "." . $this->image->getClientOriginalExtension();
        $this->image->storeAs('public/images', $nameFile);

        Image::create([
            'image' => $nameFile,
        ]);

        session()->flash('msg', 'Imagem adicionada com sucesso.');
    }
}
