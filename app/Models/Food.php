<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable=['food_name','calories','component','category_id'];

    public function Food_category(){

        return $this->hasMany(Food_category::class);
    }

    public function Favourite(){

        return $this->hasMany(FavouriteFood::class);
    }
}
