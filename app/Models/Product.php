<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'group',
        'producer',
        'is_new',
        'name',
        'variant',
        'pcs',
        'description',
        'short_description',
        'variant',
        'size',
        'ingredients',
        'price_1'

    ];

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
