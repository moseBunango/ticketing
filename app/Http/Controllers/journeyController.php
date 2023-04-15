<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\BusSchedule;
use App\Models\Buses;
use App\Models\Operator;
use App\Models\Region;
use App\Models\Sub_Region;

class journeyController extends Controller
{
    public function index(Request $request){
         $from_region = $request->input('from');
         $to_region = $request->input('to');
         $journey_date = $request->input('date');
        
        //  $schedule = BusSchedule::all();
        $busschedule = BusSchedule::get();
        $buses = Buses::get();
        $operators = Operator::get();
        $region = Region::get();
        $sub_region = Sub_Region::get();

        
         $scheduleData = DB::table('operators')
         ->join('bus_schedules', 'operators.operator_id', '=', 'bus_schedules.operator_id')
         ->join('buses', 'buses.bus_id', '=', 'bus_schedules.bus_id')
         ->join('regions', 'regions.region_id', '=', 'bus_schedules.region_id')
         ->select('operators.operator_name', 'buses.bus_name', 'regions.region_name',
          'bus_schedules.depart_time', 'bus_schedules.to_region')
         ->get();

         return view('bus-selection', compact('from_region', 'to_region', 'scheduleData'));

    }

    public function seat(){
        return view('seat');
    }

    
}
