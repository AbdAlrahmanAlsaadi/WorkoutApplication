<?php

namespace App\Http\Controllers;

use App\Models\exe_cat;
use Illuminate\Http\Request;

class ExeCatController extends Controller
{
    //
    public function create(Request $request){
    $data=$request->validate([
        'id_exercise'=>'required',
        'id_cat'=>'required'
    ]);
    exe_cat::create($data);
      return response()->json([
       'message'=>'join added successfully']);
    }
}
