<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    protected $table = 'bus_schedules';
    protected $fillable = ['schedule_id','bus_id','operator_id','region_id','to_region','depart_time'];
    protected $primarykey = 'schedule_id';
}
