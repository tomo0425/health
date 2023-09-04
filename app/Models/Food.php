<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;


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
    
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
