<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_category extends Model
{
    use HasFactory;
    protected $fillable=['category_name'];



    public function Food(){

        return $this->belongsTo(Food::class);
    }
}
