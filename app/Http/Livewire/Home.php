<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\Partner;
use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        auth()->login(User::first());

        $partners = Partner::all();
        $images = Image::all();

        return view('livewire.home', [
            'partners' => $partners,
            'images' => $images
        ]);
    }
}
