<?php

use Illuminate\Support\Facades\Route;
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


//submit form
Route::get('/register', [TestFormController::class, 'index']);
Route::post('/register', [TestFormController::class, 'view_form']);

