<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\BladeOpsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//----------------------- ROUTES WITHOUT CONTROLLERS ------------------------------------------


// default laravel page

Route::get('/', function () {
    return view('welcome');
});

//-----------------------------------------------------------------

/*

Route::get('/hello', function () {
    return view('helloworld');
});

             OR

Route::view("/hello","helloworld");

*/

//-----------------------------------------------------------------

/*

// Passing Arguments outside view the route-get-function

Route::get('/hello/{name}', function ($name) {
    echo $name;
    return view('helloworld');
});

*/

//-----------------------------------------------------------------

/*

// Passing Arguments into view the route-get-function
Route::get('/hello/{name}', function ($name) {
    return view('helloworld',['name'=>$name]);
});

*/


//----- REDIRECTION TO ABOUT PAGE------------------

Route::redirect("/hello","about");


Route::get('/hello/{name}', function ($name) {
    return view('helloworld',['name'=>$name]);
});

Route::view("/about","about");
Route::view("/contact","contact");

//----------------------- ROUTES WITH CONTROLLERS ------------------------------------------

Route::get('dcrp',[DemoController::class,"show"]);

//------- Routing With Name Argument in URL to show it in the Page -------------
Route::get('dcrp/{name}',[DemoController::class,"showName"]);

// Calling View Using Controller-routed-function
Route::get('view1',[DemoController::class,"showView"]);

//Redirection of view2
Route::redirect('view2',"view1");

// Passing Arguments into View Using Controller-routed-function
Route::get('view2/{name}',[DemoController::class,"argsView"]);

//------------------------------------------------------------------------
//-------COMPONENTS------------------

Route::view("user","users");
Route::view("user1","users1");

//------------------------------------------------------------------------

//---------- Blade Template Opearations Routes -------------


Route::get('bladeop1',[BladeOpsController::class,"loadView"]);
Route::get('bladeop2',[BladeOpsController::class,"loadView1"]);
Route::get('bladeop2',[BladeOpsController::class,"getcount"]);



