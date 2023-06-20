<?php

namespace App\Http\Livewire;

use App\Models\Partner;
use Livewire\Component;

class IndexPartners extends Component
{
    public function render()
    {
        return view('livewire.index-partners');
    }

    public $partners;
    public function mount()
    {
        $this->partners = Partner::all();
    }
    
    protected $listeners = ['partnerDeleted' => 'refreshComponent'];

    public function refreshComponent()
    {
        $this->partners = Partner::all();
    }
}
