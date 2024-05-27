<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteFood extends Model
{
    use HasFactory;
    protected $fillable=['user_id','food_id'];


    public function user(){

        return $this->belongsTo(User::class);
    }

    public function Food(){

        return $this->belongsTo(Food::class);
    }
}
