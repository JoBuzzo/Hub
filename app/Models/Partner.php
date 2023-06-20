<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;


    protected $fillable = [
        'image'
    ];


    public function getImageAttribute($image)
    {
        if($image) return asset("storage/partners/$image");
        else return null;
    }
}
