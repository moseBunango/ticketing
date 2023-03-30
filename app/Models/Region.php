<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'reagions';
    protected $fillable = ['region_name,region_code,status'];
    protected $primarykey = 'region_id';
}
