<?php

use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$code=rand(100000,999999);
Mail::to('alsaadiabdalrahman5@gmail.com')->send(new MyTestEmail($code));
Route::get('/', function () {
    return view('welcome');
});
