<?php

namespace App\Http\Controllers;

use App\Models\JobTitle;
use Illuminate\Http\Request;

class JobTitleController extends Controller
{
    function getAllJobTitle(){
        return view('job-title');
    }

    function saveJobTitle(Request $request){
        JobTitle::create([
            'job_title_name'=>$request->title,
            'description'=>$request->description,
        ]);
        return redirect('/');
    }
}
