<?php

namespace App\Http\Controllers;

use App\Models\Day_exercise;
use App\Models\Dayexe;
use Illuminate\Http\Request;

class Day_exersisesController extends Controller
{
    //
    public function create(Request $request){
    $data=$request->validate([
        'id_exercise'=>'required',
        'id_day'=>'required'
    ]);
    Day_exercise::create($data);
      return response()->json([
       'message'=>'join added successfully']);
    }
}
