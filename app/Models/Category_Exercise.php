<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Exercise extends Model
{
    use HasFactory;
    protected $fillable=['category_name','images'];

    public function exercise(){

        return $this->hasMany(exe_cat::class,'id_cat','id');
    }
}
