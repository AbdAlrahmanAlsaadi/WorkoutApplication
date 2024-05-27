<?php

namespace App\Http\Controllers;

use App\Models\Advice_category;
use Illuminate\Http\Request;

class Category_adviceController extends Controller
{
    public function gatallcategory()
{

    $cat=Advice_category::all();


    return response()->json([
        'message'=>'this is all category',
        'data'=>$cat
    ]);
}

public function addcateadvice(Request $request){

    $request->validate([
'category_name'=>'required'
    ]);

$addcat=Advice_category::create([
    'category_name'=>$request->category_name
]);

return response()->json([
    'message'=>'category added ok',
    'data'=>$addcat
]);
}


public function deletecat(Request $request){

$delete=Advice_category::where('id',$request->id)->delete();

if($delete){
return response()->json([
    'message'=>'category deleted ok',

]);
}

else{
    return response()->json([
        'message'=>'no cat',]);

}
}



}
