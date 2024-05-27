<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
   use HasFactory;
   protected $fillable=['name','json','time','description'];
     protected function data(): Attribute{
        return Attribute::make(
       get: fn($value)=>json_decode($value,true),
       set: fn($value)=>json_decode($value)
        );
    }



    public function Category_Exercise(){

        return $this->hasMany(exe_cat::class);
    }


public function exe_day(){
        return $this->hasMany(Day_exercise::class,'id_exercise','id');
    }
}

