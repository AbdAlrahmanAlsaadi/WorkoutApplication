<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exe_cat extends Model
{
    use HasFactory;
    protected $fillable=['id_exercise','id_cat'];
    public function cats(){
        return $this->belongsTo(Exercise::class,'id_exercise','id');
    }
    public function exe_cat(){
        return $this->belongsTo(Category_Exercise::class,'id_cat','id');
    }
}
