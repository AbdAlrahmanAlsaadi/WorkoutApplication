<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\FavouriteFood;
use App\Models\Food;
use App\Models\Recipe;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\IsEmpty;

use function PHPUnit\Framework\isEmpty;

class dietController extends Controller
{
   public function addrecipe(Request $request){
$request->validate([
'time'=>['required','string'],
'description'=>['required','string'],
//'component'=>['required','string'],
'day_id'=>['required'],
//'category_id'=>['required']
//'image'=>['required'|'file']
]);
$input=$request->all();
if($request->hasFile('image')){

    $destenation_path='public/image/recipes';
    $image=$request->file('image');
    $image_name=$image->getClientOriginalName();
    $path=$request->file('image')->storeAs($destenation_path,$image_name);
    $input['image']=$image_name;
}

$food=Recipe::create($input);


// if(!$food){

// return response()->json([
//     'message'=>$this-> message()->errors()
// ]);

 return response()->json([
'message'=>'add recipe succesfully',
'data'=>$food,
200
 ]);

}

public function deleterecipe(Request $request)
{
    $delete=Recipe::where('id',$request->id)
    ->where('day_id',$request->day_id)->delete();
  if(!$delete){

    return response()->json([

'message'=>'this recipe not found'
    ]);}

return response()->json([
'message'=>'recipe deleted succes'

]);
  }


public function getallrecipebyday(Request $request){
try{
$get=Recipe::where('day_id',$request->day_id)->where('category_id',$request->category_id)->get();


return response()->json([
'message'=>'this is all recipe for this day',
'data'=>$get
]);
}
catch(\Exception $ex){
    return response()->json([
          'message'=>$ex->getMessage()]);

      }
    }
public function searchrecipe(Request $request){
try{
$search=Recipe::where('description','like','%'.$request->description.'%')->get();




return response()->json([
'message'=>'search succesfully',
'data'=>$search
]);
}
catch(Exception $ex){
    return response()->json([
        'message'=>$ex->getMessage(),

        ]);
}
}

public function addfavrecipe(Request $request){

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

   public function showrecipedetal(Request $request){


  $show=Recipe::where('id',$request->id)->firstOrFail();
  $data=[];
  $data['recipe']=$show;
  $data['cat']=$show->day->diet_category->name;
 // $data['day']=$show->day;



//



  return response()->json([
 'data'=>$data,

 'message'=>'this is food detal'


]);
// if(!$show){
//      return response()->json([
//         'data'=>null,
//         'message'=>'recipe not found']);
//    }



       }



     public function showdayforcategory(Request $request){

try{
$show=Day::where('diet_category_id',$request->diet_category_id)->select('day_num')->get();
return response()->json([
    'message'=>'this is days',
    'data'=>$show
]);}
catch(Exception $ex){
return response()->json([
    'message'=>$ex->getMessage()
]);

}


}



     }














































