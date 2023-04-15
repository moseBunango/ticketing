<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    protected $table = 'bus_schedules';
    protected $fillable = ['schedule_id','bus_id','operator_id','reagion_id','sub_reagion_id','depart_date','return_date','depart_time'];
    protected $primarykey = 'schedule_id';
}
