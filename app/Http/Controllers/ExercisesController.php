<?php

namespace App\Http\Controllers;

use App\Models\Category_Exercise;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ExercisesController extends Controller
{
    public function create(Request $request, Category_Exercise $category_Exercise){

        $data=$request->validate([
            'name'=>'required|max:75|min:3',
            'json'=>'required|file',
            'time'=>'required',
            'description'=>'required|max:500|min:3',
        ]);

        if($request->hasFile('json')){
            $json=Storage::disk('public')->put('/',$request->file('json'));
        }

        $exercise=Exercise::create([
            'name'=>$request->name,
            'json'=>$json ??=null,
            'time'=>$request->time,
            'description'=>$request->description,
           // 'Category_id'=>$request->Category_id,
           // 'id_day'=>$request->id_day
        ]);
      return response()->json([
       'message'=>'exercise added successfully']);
    }
}
