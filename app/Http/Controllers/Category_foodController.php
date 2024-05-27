<?php

namespace App\Http\Controllers;

use App\Models\Food_category;
use Illuminate\Http\Request;

class Category_foodController extends Controller
{


public function gatallcategory()
{

    $cat=Food_category::all();


    return response()->json([
        'message'=>'this is all category',
        'data'=>$cat
    ]);
}

public function addcatefood(Request $request){

    $request->validate([
'category_name'=>'required'
    ]);

$addcat=Food_category::create([
    'category_name'=>$request->category_name
]);

return response()->json([
    'message'=>'category added ok',
    'data'=>$addcat
]);
}


public function deletecat(Request $request){

$delete=Food_category::where('id',$request->id)->delete();

if($delete){

return response()->json([
'message'=>'category deleted ok'

]);}
else{
return response()->json([
    'message'=>' this not found',

]);}
}






}
