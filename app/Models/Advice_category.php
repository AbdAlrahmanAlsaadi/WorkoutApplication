<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advice_category extends Model
{
    use HasFactory;
    protected $fillable=['category_name'];




    public function Advice(){

        return $this->hasMany(Advice_category::class);
    }
}
