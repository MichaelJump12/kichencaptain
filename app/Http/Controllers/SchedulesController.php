<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Captain;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class SchedulesController extends Controller{
    public function schedule() 
    {
        return view('captains.schedule',[
            'captains' => Captain::all(),
            'schedules' => Schedule::all(),
        ]);
    }

    public function store(Request $request)
    {
        $todaysdate = date("d/m/Y");

        $date = Carbon::createFromFormat('Y-m-d', $request->week_start);
        $date2 = Carbon::createFromFormat('Y-m-d', $request->week_start);


        $startOfWeek = $date->startOfWeek();
        $endOfWeek = $date2->endOfWeek();

        $currentDate = date('Y-m-d');

        if($startOfWeek <= $currentDate){
            return back()->withErrors('The selected week has already started');
        }

        $validator = Validator::make($request->all(), [
            'week_start' => [
                'required',
                
                function($attributes, $value, $fail) {

                    $date = \Carbon\Carbon::createFromFormat('Y-m-d', $value);
                    $date2 = \Carbon\Carbon::createFromFormat('Y-m-d', $value);
            
                    $startOfWeek = $date->startOfWeek();
                    $endOfWeek = $date2->endOfWeek();

                    $currentDate = date('m/d/Y h:i:s a');
                    
                    $scheduleBooked = Schedule::where('week_start', $startOfWeek)->get();
                    
                    if($startOfWeek <= $currentDate){
                        die;
                        return back()->withErrors('your error message');
                    }
            
                    if ($scheduleBooked->isNotEmpty()) {
                       
                        $fail('Schedule already booked for ' . $scheduleBooked->first()->captain->fullName());
                        return back()->withErrors('This week has already been taken.');
                    }

                }
            ]
        ]);
        

        if ($validator->fails()) {
            return redirect('/schedule')
                ->withErrors($validator,'schedules')
                ->withInput();

        } else {
        Schedule::create([
            'captain_id' => $request->captain_id,
            'week_start' => $startOfWeek,
        ]);


        return redirect('/schedule');
    }
}

}
