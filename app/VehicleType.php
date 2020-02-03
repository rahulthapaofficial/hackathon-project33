<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    protected $guarded = [];
    
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
