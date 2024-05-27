<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dayexe extends Model
{
    use HasFactory;
      protected $fillable=['name'];
    public function day_exe(){
        return $this->hasMany(Day_exercise::class,'id','id');
    }
}
