<?php

namespace App\Http\Controllers;

use App\Models\Assesment;
use App\Models\AssesmentData;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function about()
    {
        return view('website.about');
    }

    public function schedule()
    {
        return view('website.schedule');
    }

    public function saveSchedule(Request $request)
    {
        // $table->string('uuid');
        // $table->foreignId('user_id');
        // $table->string('fullname');
        // $table->string('email');
        // $table->enum('type',["individual","group"]);
        // $table->integer('no_of_athletes');
        // $table->string('location');
        // $table->string('phone');
        // $table->string('date');
        // $table->enum('status',["inprogress","completed","received"]);
        try {
            $ass = Assesment::create([
                'uuid' => \Str::uuid()->toString(),
                'user_id' => \Auth::user()->id,
                'fullname' => $request->name,
                'email' => $request->email,
                'type' => $request->type == 0 ? "individual" : 'group',
                'no_of_athletes' => $request->no_of_athletes ?? 1,
                'location' => $request->location,
                'phone' => $request->phone,
                'date' => $request->date,
                'status' => "received",
            ]);

            for ($i = $request->no_of_athletes ?? 1; $i >0; $i--) {
                AssesmentData::create([
                    'assesment_id' => $ass->id,
                    'uuid' => \Str::uuid()->toString(),
                ]);
            }
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['error' => true, 'msg' => $e->getMessage()], 500);
        }
    }
}
