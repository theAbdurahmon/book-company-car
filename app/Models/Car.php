<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function model() {
        return $this->belongsTo(CarModel::class, "car_model_id");
    }

    public function driver() {
        return $this->belongsTo(Driver::class);
    }

    public function trips() {
        return $this->hasMany(Trip::class);
    }
}
