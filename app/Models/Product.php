<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'thumbnail'
    ];
    


    protected function boot() 
    {
        parrent::boot();

        static::creating(function (Brand $brand) {
            $brand->slug = $brand->slug ?? str($brand->title)->slug();
        });
    }


}
