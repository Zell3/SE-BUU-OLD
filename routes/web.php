<?php

use App\Http\Controllers\MultiplyController;
use Illuminate\Http\Request;
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
Route::get('/', function () {
    return view('welcome'); // welcome.blade.php
});

Route::get('/multiple', function(){
    return view('multiple');
});


Route::post('/multiple', function(Request $req){
    $data['myinput'] =  $req->input('myinput');
    return view('multiple', $data);
});

Route::post('/result', [MultiplyController::class, 'multiply']);
