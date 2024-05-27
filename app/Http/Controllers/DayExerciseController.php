<?php

namespace App\Http\Controllers;

use App\Models\Day_exercise;
use App\Models\Dayexe;
use Illuminate\Http\Request;

class DayExerciseController extends Controller
{
    //
     public function create(Request $request){
        $data=$request->validate([
            'name'=>'required|min:3|max:20'
        ]);
        Dayexe::create($data);
          return response()->json([
       'message'=>'day added successfully']);
    }
}
