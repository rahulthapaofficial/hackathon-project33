<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
