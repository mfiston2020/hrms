<?php

namespace App\Http\Controllers;

use App\Models\JobTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class JobTitleController extends Controller
{
    function getAllJobTitle(){
        // return JobTitle::all();
        return view('job-title',[
            'job_titles'=>JobTitle::all()
        ]);
    }

    function saveJobTitle(Request $request){

        JobTitle::create($request->all());

        // JobTitle::create([
        //     'job_title_name'=>$request->title,
        //     'description'=>$request->description,
        // ]);

        // $jobTitle   =   new JobTitle();

        // $jobTitle->job_title_name   =   $request->title;
        // $jobTitle->description      =   $request->description;
        // $jobTitle->save();

        // return $jobTitle->id;

        return redirect()->back();
    }

    function editJobTitle($id){
        return view('edit-job-title',[
            'job_title'=>JobTitle::findOrFail(Crypt::decrypt($id))
        ]);
    }

    function updateJobTitle(Request $request){
        JobTitle::where('id',Crypt::decrypt($request->job_title_id))->update([
                'job_title_name'    =>  $request->job_title_name,
                'description'       =>  $request->description,
            ]);
        return redirect('/jobTitle');
    }

    function deleteJobTitle($id){
        JobTitle::findOrFail(Crypt::decrypt($id))->delete();
        return redirect()->back();
    }
}
