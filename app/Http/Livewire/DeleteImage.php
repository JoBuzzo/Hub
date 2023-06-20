<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class DeleteImage extends Component
{
    public function render()
    {
        return view('livewire.delete-image');
    }

    public $image;
    public $name;

    public function mount($id)
    {
        $this->image = Image::findOrFail($id);
        $this->name = $this->image->image;
    }

    public function delete()
    {
        unlink(storage_path('app/public/images/' . $this->image->getRawOriginal('image')));

        $this->image->delete();
        $this->emit('imageDeleted', $this->image->id);
        session()->flash('msg', 'Imagem deletada com sucesso.');
    }
}
