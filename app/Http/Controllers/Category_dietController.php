<?php

namespace App\Http\Controllers;

use App\Models\Diet_category;
use App\Models\Food_category;
use Illuminate\Http\Request;

class Category_dietController extends Controller
{


public function gatallcategory()
{

    $cat=Diet_category::all();


    return response()->json([
        'message'=>'this is all category',
        'data'=>$cat
    ]);
}

public function addcatediet(Request $request){

    $request->validate([
'name'=>'required'
    ]);

$addcat=Diet_category::create([
    'name'=>$request->name
]);

return response()->json([
    'message'=>'category added ok',
    'data'=>$addcat
]);
}


public function deletecat(Request $request){

$delete=Diet_category::where('id',$request->id)->delete();

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
