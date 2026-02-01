<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillables = ["name"];

    public function cars() {
        return $this->hasMany(Car::class);
    }
}
