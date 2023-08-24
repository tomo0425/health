<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $fillable = [
    'name',
    'price',
    'shop',
    'image',
    'calories',
    'proteins',
    'carbohydrates',
    'fats',
    'sugar',
    'fiber',
    'salt',
    ];
}
