<?php

namespace App\Http\Livewire;

use App\Models\Partner;
use Livewire\Component;

class DeletePartner extends Component
{
    public function render()
    {
        return view('livewire.delete-partner');
    }


    public $partner;
    public $image;

    public function mount($id)
    {
        $this->partner = Partner::findOrFail($id);
        $this->image = $this->partner->image;
    }

    public function delete()
    {
        unlink(storage_path('app/public/partners/' . $this->partner->getRawOriginal('image')));

        $this->partner->delete();
        $this->emit('partnerDeleted', $this->partner->id);
        session()->flash('msg', 'Imagem deletada com sucesso.');
    }
}
