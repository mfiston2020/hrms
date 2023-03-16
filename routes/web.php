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

Route::get('/', [UserController::class,'getAllData'])->middleware('auth');
Route::get('/jobTitle', [JobTitleController::class,'getAllJobTitle'])->middleware('auth');
Route::post('/jobTitle/save', [JobTitleController::class,'saveJobTitle'])->middleware('auth');
Route::post('/jobTitle/update', [JobTitleController::class,'updateJobTitle'])->middleware('auth');
Route::get('/jobTitle/edit/{id}', [JobTitleController::class,'editJobTitle'])->middleware('auth');
Route::delete('/jobTitle/delete/{id}', [JobTitleController::class,'deleteJobTitle'])->middleware('auth');

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/user', function () {
    return view('user');
})->middleware('auth');
