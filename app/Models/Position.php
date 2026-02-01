<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function comfortCategories() {
        return $this->belongsToMany(
          ComfortCategory::class,
          'position_comfort_categories'
          );
    }
}
