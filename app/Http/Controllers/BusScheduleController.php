<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusSchedule;
use App\Models\Buses;
use App\Models\Operator;
use App\Models\Region;
use App\Models\Sub_Region;
use Session;
use DB;

class BusScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    // return view('admin.bus-schedule.bus-schedule-list', ['operatorName' => $operatorName]);
    return view('admin.bus-schedule.bus-schedule-list',compact('busschedule','buses',
    'operators','region','sub_region', 'scheduleData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->bus_schedule_validation($request);
        $operator_id = $request->get('operator_id');
        $bus_id = $request->get('bus_id');
        $region_id = $request->get('region_id');
        $to_region = $request->get('to_region');
        // $depart_date = $request->get('depart_date');
        // $return_date = $request->get('return_date');
        $depart_time = $request->get('depart_time');
        // $status = $request->get('status');
            
        $insertBusSchedules = [
            'bus_id' => $bus_id,
            'operator_id' => $operator_id,
            'region_id' => $region_id,
            'to_region' => $to_region,
            'depart_time' => $depart_time,
          
            // 'status' => $status,
            'created_at' => \Carbon\carbon::now(),
            'updated_at' => \Carbon\carbon::now(),
        ];
        // dd($insertBus); // we will check okay if we are having all the data okay
        DB::table('bus_schedules')->insert(  $insertBusSchedules);
        Session::flash('msg', 'Bus Schedule Successfully!');

       

        return redirect()->back();
        
       
       
        return view('admin.bus-schedule.bus-schedule-list', ['operatorName' => $operatorName]);
    }
    public function bus_schedule_validation(){
        $rules = [  // this array okay to validate our buses input before insertation to our database
            'bus_id' => 'required',
            'region_id' => 'required',
            'to_region' => 'required',
            'operator_id' => 'required',
        ];}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusSchedule $schedule)
    {
        //
        $schedule->delete();
        return redirect()->route('bus-schedule.index')->with('success','items deleted succesfully');
    }
}
