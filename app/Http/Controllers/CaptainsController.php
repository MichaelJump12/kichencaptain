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

class CaptainsController extends Controller
{

    public function index() 
    {
        
        return view('captains.index', [
            'captains' => Captain::all(),
            'schedules' => Schedule::all()
        ]);
    }

  
    public function showCreatePage()
    {
        return view('captains.create');
    }

    public function store(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'colour' => 'required|unique:captains',
        ]);

        if ($validator->fails()) {
            return redirect('/captains')
                ->withErrors($validator,'captains')
                ->withInput();

        } else {
        Captain::create(request([
            'first_name',
            'last_name',
            'colour',
            'nickname'
        ]));
        return redirect('/captains');
        }

    }
}
    