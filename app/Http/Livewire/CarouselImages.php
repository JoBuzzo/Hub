<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class CarouselImages extends Component
{
    public function render()
    {
        $images = Image::all();
        return view('livewire.carousel-images',[
            'images' => $images
        ]);
    }
}
