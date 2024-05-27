<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;


    protected $fillable=['day_num','diet_category_id'];

    public function diet_category(){

        return $this->belongsTo(Diet_category::class);
    }

    public function recipe(){

        return $this->hasMany(Recipe::class);
    }
}
