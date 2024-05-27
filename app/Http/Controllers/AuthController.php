<?php

namespace App\Http\Controllers;

use App\Mail\SendCodeResetPassword;
use App\Models\Admin;
use App\Models\ResetCodePassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Passport\Token;

class AuthController extends Controller
{
    public function userRegister(Request $request){

        $request->validate([
'name'=>['required'],
'email'=>['required','email','unique:users'],
'password'=>['required'],
'gender'=>['required'],
'tall'=>['required'],
'weight'=>['required'],
'age'=>['required'],
]);
$input=$request->all();
$input['password']=bcrypt($input['password']);
$user=User::query()->create($input);
$token=$user->createToken('API TOKEN',['user'])->accessToken;
$data=[];
$data['data']=$user;
$data['token']=$token;

return response()->json([
'data'=>$data,
'message'=>'تم تسجيل بنجاح'

]);
}


public function userLogin(Request $request)
{
    $request->validate( [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $input=$request->all();

    if(auth()->guard('user')->attempt($request->only('email','password'))){

        config(['auth.guards.api.provider' => 'user']);

        $user = User::select('users.*')->find(auth()->guard('user')->user()->id);
        $success =  $user;
        $success['token'] =  $user->createToken('MyApp',['user'])->accessToken;

        return response()->json(['data'=>$success,'message'=>'تم تسجيل الدخول بنجاح', 200]);}
    else{
        return response()->json(['error' => ['Email and Password are Wrong.']], 200);
    }
}

public function userLogout(){

 //   Auth::guard('user-api')->user()->token()->revoke();
    return response()->json(['logout succes', 200]);
}




public function adminRegister(Request $request){
    // $code=rand(100000,999999);
    $request->validate([
'name'=>['required'],
'email'=>['required','email','unique:admins'],
'password'=>['required']
]);
$input=$request->all();
$input['password']=bcrypt($input['password']);
$admin=Admin::query()->create($input);
$token=$admin->createToken('API TOKEN',['admin'])->accessToken;
$data=[];
$data['data']=$admin;
$data['token']=$token;

return response()->json([
'data'=>$data,
'message'=>'تم تسجيل بنجاح'

]);
}


public function adminLogin(Request $request)
{
$request->validate( [
    'email' => 'required|email',
    'password' => 'required',
]);

$input=$request->all();

if(auth()->guard('admin')->attempt($request->only('email','password'))){

    config(['auth.guards.api.provider' => 'admin']);

    $user = Admin::select('admins.*')->find(auth()->guard('admin')->user()->id);
    $success =  $user;
    $success['token'] =  $user->createToken('MyApp',['admin'])->accessToken;

    return response()->json($success, 200);
}else{
    return response()->json(['error' => ['Email and Password are Wrong.']], 200);
}
}

public function adminLogout(){

//Auth::guard('user-api')->user()->token()->revoke();
return response()->json(['logout succes', 200]);
}

public function userforgetpassword(Request $request){
$data=$request->validate([
'email'=>'required|email|exists:users'
]);
//delete all old code that was send
ResetCodePassword::query()->where('email',$request['email'])->delete();
//create new code
$data['code']=mt_rand(100000,999999);

$codeData=ResetCodePassword::query()->create($data);
//send email to user
Mail::to($request['email'])->send(new SendCodeResetPassword($codeData['code']));
return response()->json(['message'=>('password.sent')]);
}
public function usercheckpassword(Request $request){
$request->validate([
'code'=>'required|string'
]);
$passwordReset=ResetCodePassword::query()->firstWhere('code',$request['code']);

if($passwordReset['created_ar']> now()->addHour()){
    $passwordReset->delete();
return response()->json(['message'=>('code is expire')]);

}
    return response()->json([
        'code'=>$passwordReset['code'],
        'message'=>('code valid')
    ]);
}


public function userResetpassword(Request $request){

$input=$request->validate([
    'code'=>'required|string',
    'password'=>'required','confirmed'
]);
$passwordReset=ResetCodePassword::query()->firstWhere('code',$request['code']);
if($passwordReset['created_ar']> now()->addHour()){
    $passwordReset->delete();
    return response()->json([

        'message'=>('code is expire')
    ]);}
    $user=User::query()->firstWhere('email',$passwordReset['email']);

$input['password']=bcrypt($input['password']);

$user->update([
    'password'=>$input['password']
]);

$passwordReset->delete();

return response()->json(['message'=>'password reset succesfully']);


}






public function usercount(){

$user=User::count();
// if($user->isEmpty()){
//     return response()->json([

//         'message'=>'this is count']);

// }

return response()->json([

    'message'=>'this is count',
    'data'=>$user
]);}



public function getusredata(Request $request){

$user=User::where('id',$request->id)->get();


if(!$user){
    return response()->json([

        'message'=>'no user at this id',]);


}
return response()->json([

    'message'=>'this is detal',
    'data'=>$user
]);}

public function deleteuser(Request $request){
$delete=User::where('id',$request->id)->delete();

if(!$delete){
return response()->json([

    'message'=>'invalid user',
    'data'=>null
]);}
return response()->json([


    'message'=>'user deleted ok'
]);


}


}









