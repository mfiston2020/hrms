<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\JobTitle;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getAllData(){
         return view('welcome',[
            'users'=>User::count(),
            'job_titles'=>JobTitle::count(),
            'employees'=>Employee::count(),
            'departments'=>Department::count(),
            'user_count'=>User::count()
         ]);
        // return User::count();
        // return User::where('email','email@email.com')->get();
        // return User::where('email','email@email.com')->first();
    }
}

//  php artisan make:controller UserController
