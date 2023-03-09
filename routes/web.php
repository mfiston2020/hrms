<?php

// use App\Http\Controllers\UserController;

use App\Http\Controllers\JobTitleController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class,'getAllData']);
Route::get('/jobTitle', [JobTitleController::class,'getAllJobTitle']);
Route::post('/jobTitle/save', [JobTitleController::class,'saveJobTitle']);
Route::post('/jobTitle/update', [JobTitleController::class,'updateJobTitle']);
Route::get('/jobTitle/edit/{id}', [JobTitleController::class,'editJobTitle']);
Route::delete('/jobTitle/delete/{id}', [JobTitleController::class,'deleteJobTitle']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/user', function () {
    return view('user');
});
