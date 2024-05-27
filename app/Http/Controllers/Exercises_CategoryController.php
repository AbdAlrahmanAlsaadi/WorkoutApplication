<?php

namespace App\Http\Controllers;

use App\Models\Category_Exercise;
use App\Models\Day_exercise;
use App\Models\exe_cat;
use App\Models\Exercise;
use Database\Seeders\CategoryExerciseSeeder;
use Illuminate\Http\Request;

class Exercises_CategoryController extends Controller
{
     public function create(Request $request){
     $data= $request->validate([
     'category_name'=>'required|max:20|min:3',
    'images'=>'required|file']);
  $destination_path='public/images/photos';
            $image=$request->file('images');
            $image_name= $image->getClientOriginalName();
            $path=$request->file('images')->storeAs($destination_path,$image_name);
            $data['images']=$image_name;
            Category_Exercise::create($data);
       return response()->json([
       'message'=>'category added successfully']);
   }

    public function gatallcategory()
{

    $cat=Category_Exercise::all();


    return response()->json([
        'message'=>'this is all category',
        'data'=>$cat
    ]);
}

public function getCategory(Request $request)
{

       $cat=Category_Exercise::where('category_name',$request->category_name)->first()->exercise()->get();
       foreach($cat  as $value){
        $value->load('cats.exe_day.day');
       }
    return response()->json([
        'message'=>'this is all category',
        'data'=>$cat
    ]);
}}


