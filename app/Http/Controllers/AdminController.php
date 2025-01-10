<?php

namespace App\Http\Controllers;
use App\Models\Assesment;

use App\Models\AssesmentData;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.assessment.list');
    }

    public function view($uuid)
    {
        $assessment = Assesment::where('uuid', $uuid)->with('data','data.media')->first();
    //   dd($assessment);
        return view('admin.assessment.view',compact('assessment'));
    }

    public function update(Request $request)
    {
        AssesmentData::where('uuid', $request->uuid)->update($request->except('_token'));
        return back()->with("success","Updated Successfully");
    }

    public function assessments(){
        $assessments = Assesment::all();
        return view('admin.assessment.list',compact('assessments'));
    }

    public function update_status(Request $request){
        Assesment::where('id', $request->id)->update(['status' => $request->status]);
        return back()->with('success',"Status updated");
    }

}
