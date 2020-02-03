<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'vehicle_type_id' => '1',
            'name' => 'Altas'
        ]);

        Brand::create([
            'vehicle_type_id' => '1',
            'name' => 'Bianchi'
        ]);

        Brand::create([
            'vehicle_type_id' => '1',
            'name' => 'Btwin'
        ]);

        Brand::create([
            'vehicle_type_id' => '1',
            'name' => 'Avon'
        ]);

        Brand::create([
            'vehicle_type_id' => '2',
            'name' => 'Honda'
        ]);

        Brand::create([
            'vehicle_type_id' => '2',
            'name' => 'Ducati'
        ]);

        Brand::create([
            'vehicle_type_id' => '2',
            'name' => 'Bajaj'
        ]);
    }
}
