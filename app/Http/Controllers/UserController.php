<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getAllUsers(){
         return view('welcome',[
            'users'=>User::all(),
            'user_count'=>User::count()
         ]);
        // return User::count();
        // return User::where('email','email@email.com')->get();
        // return User::where('email','email@email.com')->first();
    }
}

//  php artisan make:controller UserController
