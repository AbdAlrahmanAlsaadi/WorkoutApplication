<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    use HasFactory;
    protected $fillable=['description','category_id'];


    public function Advice_category(){


        return $this->belongsTo(Advice_category::class);
    }
}
