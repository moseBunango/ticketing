<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    //
   
    public function getSchedules(Request $request){
    
        $date = $request->input('date');
        $destination = $request->input('destination');

        $schedules = BusSchedule::where('depart_date', $date)
                             ->where('reagion_id', $destination)
                             ->get();

        return view('customer.schedules', ['schedules' => $schedules]);
    }

}