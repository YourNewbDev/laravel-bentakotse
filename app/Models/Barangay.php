<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    //

    public $timestamps = false;

     protected $fillable = ['name', 'city_id', 'municipality_id'];
}
