<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable=['time','description','day_id','image'];

    public function day(){

        return $this->belongsTo(Day::class);
    }


    // public function category(){

    //     return $this->belongsTo(Diet_category::class);

    public function Favourite(){

            return $this->hasMany(FavouriteFood::class);
    }
}
