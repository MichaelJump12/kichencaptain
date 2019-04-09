<?php

namespace App\Http\Controllers;
use App\Schedule;
use App\Captain;
use Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class SchedulesController extends Controller
{
    public function schedule() 
    {
        return view('captains.schedule',[
            'captains' => Captain::all(),
            'schedules' => Schedule::all()
          
        ]);
    }
    public function store(Request $request)
    {
        $todaysdate = date("d/m/Y");

        $date = \Carbon\Carbon::createFromFormat('Y-m-d', $request->week_start);
        $date2 = \Carbon\Carbon::createFromFormat('Y-m-d', $request->week_start);


        $startOfWeek = $date->startOfWeek();
        $endOfWeek = $date2->endOfWeek();
        
        Schedule::create([
            'captain_id' => $request->captain_id,
            'week_start' => $startOfWeek,
        ]);


        return redirect('/schedule');
    }
}

