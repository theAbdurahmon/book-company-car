<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    public function comfortCategory() {
        return $this->belongsTo(ComfortCategory::class);
    }
}
