<?php

use App\Http\Controllers\AdviceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Category_adviceController;
use App\Http\Controllers\Category_dietController;
use App\Http\Controllers\Category_ExercisesController;
use App\Http\Controllers\Category_foodController;
use App\Http\Controllers\Day_exersisesController;
use App\Http\Controllers\DayExerciseController;
use App\Http\Controllers\dietController;
use App\Http\Controllers\ExeCatController;
use App\Http\Controllers\Exercises_CategoryController;
use App\Http\Controllers\ExercisesController;
use App\Http\Controllers\FoodController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('admin/register',[AuthController::class, 'adminRegister']);
Route::post('admin/login',[AuthController::class, 'adminLogin']);
Route::group( ['prefix' => 'admin','middleware' => ['auth:admin-api','scopes:admin'] ],function(){
    // authenticated staff routes here
    Route::post('logout',[AuthController::class, 'adminLogout']);
});
// for user
Route::get('numuser',[AuthController::class,'usercount']);
Route::get('userdetal',[AuthController::class,'getusredata']);
Route::post('deleteuser',[AuthController::class,'deleteuser']);


//diet routes
Route::post('addrecipe',[dietController::class,'addrecipe']);
Route::post('deleterecipe',[dietController::class,'deleterecipe']);
Route::post('addcategorydiet',[Category_dietController::class,'addcatediet']);
Route::post('deletecategorydiet',[Category_dietController::class,'deletecat']);

//advice routes
Route::post('addadvice',[AdviceController::class,'addadvice']);
Route::post('deleteadvice',[AdviceController::class,'deleteadvice']);
Route::post('addcategoryadvice',[Category_adviceController::class,'addcateadvice']);
Route::post('deletcategoryadvce',[Category_adviceController::class,'deletecat']);

//add_cat_exe
Route::post('add_cat',[Exercises_CategoryController::class,'create']);
Route::get('gatallcategory',[Exercises_CategoryController::class,'gatallcategory']);
Route::get('gatcategory',[Exercises_CategoryController::class,'getCategory']);

//add_exe
Route::post('add_exe',[ExercisesController::class,'create']);
Route::post('join1',[ExeCatController::class,'create']);
Route::post('add_day',[DayExerciseController::class,'create']);
Route::post('join2',[Day_exersisesController::class,'create']);
