<?php

use App\VehicleType;
use Illuminate\Database\Seeder;

class VehicleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleType::create([
            'name' => 'Cycle'
        ]);

        VehicleType::create([
            'name' => 'Motor Bike'
        ]);

        VehicleType::create([
            'name' => 'Auto Ricksaw'
        ]);

        VehicleType::create([
            'name' => 'Taxi'
        ]);

        VehicleType::create([
            'name' => 'Car'
        ]);

        VehicleType::create([
            'name' => 'Jeep'
        ]);

        VehicleType::create([
            'name' => 'Winger'
        ]);

        VehicleType::create([
            'name' => 'Hice'
        ]);

        VehicleType::create([
            'name' => 'Bus'
        ]);
    }
}
