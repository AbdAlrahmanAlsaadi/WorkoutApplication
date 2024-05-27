<?php

namespace App\Http\Controllers;

use App\Models\FavouriteFood;
use App\Models\Food;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
   public function addfoood(Request $request){
$request->validate([
'food_name'=>['required','string'],
'calories'=>['required','string'],
'component'=>['required','string'],
'category_id'=>['required']
]);
$food=Food::create([
    'food_name'=>$request->food_name,
    'calories'=>$request->calories,
    'component'=>$request->component,
    'category_id'=>$request->category_id,

]);


// if(!$food){

// return response()->json([
//     'message'=>$this-> message()->errors()
// ]);

 return response()->json([
'message'=>'add food succesfully',
'data'=>$food,
200
 ]);

}

public function deletefood(Request $request)
{
 $delete=Food::where('id',$request->id)->delete();
  if(!$delete){

    return response()->json([

'message'=>'this food not found'
    ]);}

return response()->json([
'message'=>'food deleted succes'

]);
  }


public function getallfoodbycategory(Request $request){

$get=Food::where('category_id',$request->category_id)->get();


return response()->json([
'message'=>'this is all food for this category',
'data'=>$get
]);
}

public function searchfood(Request $request){

$search=Food::where('food_name','like','%'.$request->food_name.'%')->get();


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


public function addfavfood(Request $request){

$request->validate([
    'user_id'=>'required',
    'food_id'=>'required'

]);
try{
$favo=FavouriteFood::create([
     'user_id'=>$request->user_id,
   'food_id'=>$request->food_id
 ]);
 return response()->json([
      'message'=>'favourite added ok',
    'data'=>$favo
  ]);
}
  catch(\Exception $ex){
return response()->json([
      'message'=>$ex->getMessage()]);

  }
}

public function deletefav(Request $request,$food){

try{

$user=User::find($request->id);
$user->Favourites->delete();


return response()->json([
    'message'=>'favourite adeleted ok',

]);
}
catch(\Exception $ex){
return response()->json([
    'message'=>$ex->getMessage()]);

}


}


   public function getuserfavourite(Request $request){

    try{
$user=User::find($request->id);
// if($user->id!=$request->user_id){
//     return response()->json([
//         'message'=>'there is an error'
//     ]);
// }

$list=$user->Favourites->toArray();
return response()->json([
    'message'=>'this is all favourite',
    'data'=>$list
]);
    }
    catch(Exception $ex){
        return response()->json([
            'message'=>$ex->getMessage(),]);


    }
   }
//$listfavings = ::findOrFail($id)->favorites;
// $user=User::find($id);
// $fav=$user->FavouriteFoods;






// return response()->json([
//         'message'=>'this is all favourite',
//                'data'=>$fav]);

   public function showfooddetal($id){


  $show=Food::query()->find($id);



  if(!$show){
    return response()->json([
        'data'=>null,
        'message'=>'food not found']);



  return response()->json([
 'data'=>$show,
 'message'=>'this is food detal'


]);

   }



       }



    }



































