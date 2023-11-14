<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jobseeker;
class jobseekerfrontController extends Controller
{
    function personaldata(){
        $jobseeker = jobseeker::all();
        return view('jd.profile.jobseeker', compact('jobseeker'));
    }

    function updatepersonaldata(Request $request){
        $jobseeker = jobseeker::find($request->id);
        $jobseeker->update($request->all());
        return redirect()->route('jd.profile.jobseeker')->with('success','Successfully update');
    }
}
