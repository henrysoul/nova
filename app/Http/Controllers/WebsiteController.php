<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function about (){
        return view('website.about');
    }

    public function schedule(){
        return view('website.schedule');
    }

    public function saveSchedule(Request $request){
        dd($request->all());
    }
}
