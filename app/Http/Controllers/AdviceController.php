<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use Exception;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;
use function PHPUnit\Framework\isEmpty;

class AdviceController extends Controller
{

    public function addadvice(Request $request){

        $request->validate([
         'description'=>['required','string'],
         'category_id'=>['required']
        ]);


        $advice=Advice::create([
'description'=>$request->description,
'category_id'=>$request->category_id
        ]);

if(!$advice){

return response()->json([
    'message'=>'error',
]);

}

return response()->json([
'message'=>'advice added succesfully',
'data'=>$advice
]);
    }

    public function deleteadvice(Request $request){
        try{
return Advice::where('id',$request->id)->delete();





    ;}
catch(Exception $ex){
    return response()->json([
        'message'=>$ex,
        200
            ]);}
        }
public function getalladvicebycategory(Request $request){

    $get=Advice::where('category_id',$request->category_id)->get();

if(isEmpty($get)){
    return response()->json([
        'message'=>'no advice avilable',

        ]);

}


    return response()->json([
        'message'=>'this is all advice for this category',
        'data'=>$get
        ]);
        }


        public function searchadvice(Request $request){

            $search=Advice::where('description','like','%'.$request->description)->get();


            if(!$search){
            return response()->json([
              'message'=>$this-> errors()->message(),
             ]);

            }
            return response()->json([
                'message'=>'search succesfully',
                'data'=>$search
            ]);
        }

         public function showadvice($id){


       $show=Advice::query()->find($id);

       if(!$show){

        return response()->json([
            'data'=>null,
            'message'=>'advice noot found']);

       }

       return response()->json([
      'data'=>$show,
      'message'=>'this is advice detal'


]);

        }


            }

















