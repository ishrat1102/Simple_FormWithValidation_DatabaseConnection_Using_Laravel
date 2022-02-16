<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SingleAction;
use App\Http\Controllers\ResourcePhoto;
use App\Http\Controllers\TestFormController;


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

//Route::get('/', function () {
//   return view('welcome');
//});
/*Route::get('/{name?}', function ($name = null) {
    $demo = "<h2>will execute and not print html only in between text of tags</h2>";
    $data = compact('name', 'demo');

    return view('learnB')->with($data);
});*/

/*Route::get('/', function () {

    return view('home');
});
Route::get('/about', function () {

    return view('about');
});*/
/*Route::get('/test/{name}/{id?}', function ($name, $id = null) {
    //echo $name;
    //echo $id;
    $data = compact('name', 'id');
    //print_r($data);
    return view('test')->with($data);
});*/
//using controller to return view'home'
Route::get('/', [TestController::class, 'home']);
//Route::get('/about', [TestController::class, 'about']);
Route::get('/about', 'App\Http\Controllers\TestController@about'); //not good approach using this way
//use of single action
Route::get('/course', SingleAction::class);
//use of resource
Route::resource('/photo', ResourcePhoto::class);
//submit form
Route::get('/register', [TestFormController::class, 'index']);
Route::post('/register', [TestFormController::class, 'view_form']);
//to see errors use $errors variable
