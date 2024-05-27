<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day_exercise extends Model
{
    use HasFactory;
    protected $fillable=['id_exercise','id_day'];
    public function exe_day(){
        return $this->belongsTo(Exercise::class,'id','id');
    }
    public function day(){
        return $this->belongsTo(Dayexe::class,'id','id');
    }
}
