<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    function getAllDepartments(){
        return view('welcome');
    }
}
