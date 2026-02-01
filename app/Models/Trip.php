<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
       protected $dates = ['start_time', "end_time"];
       
       protected $fillable = ["car_id", "employee_id", "start_time", "end_time"];

       public function car() {
           return $this->belongsTo(Car::class);
       }
}
