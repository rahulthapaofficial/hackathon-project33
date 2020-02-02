<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Head Office',
            'email' => 'company@gmail.com',
            'reg_no' => '231260076077',
            'pan_vat_no' => '60960187',
            'phone_no' => '9802665801',
            'mobile_no' => '9802665801',
            'address' => 'Butwal-10, Kalikanagar',
            'latitude' => '27.673827458081757',
            'longitude' => '83.46533562247045',
            'status' => 1
        ]);

        Company::create([
            'name' => 'Butwal Company',
            'email' => 'praveenghimire2412@gmail.com',
            'reg_no' => '231260076077',
            'pan_vat_no' => '609690187',
            'phone_no' => '980266580',
            'mobile_no' => '9802665802',
            'address' => 'Butwal ,Hospital line',
            'latitude' => '27.69786207822602',
            'longitude' => '83.46600923273621',
            'status' => 1
        ]);

        Company::create([
            'name' => 'Baneshowr Company',
            'email' => 'jagadishacharya1992@gmail.com',
            'reg_no' => '9802665801',
            'pan_vat_no' => '609690187',
            'phone_no' => '9841116397',
            'mobile_no' => '0000000000',
            'address' => 'banwshowar',
            'latitude' => '27.690053268158227',
            'longitude' => '85.34157070849',
            'status' => 1
        ]);

        Company::create([
            'name' => 'Bhairawha Company',
            'email' => 'ganeshpokhrel2@gmail.com',
            'reg_no' => '231260',
            'pan_vat_no' => '609690187',
            'phone_no' => '9844783437',
            'mobile_no' => '9844783437',
            'address' => 'Bhairawha',
            'latitude' => '27.516824268281727',
            'longitude' => '83.45469031069337',
            'status' => 1
        ]);

        Company::create([
            'name' => 'Dharan Company',
            'email' => 'sagarkarki@gmaiil.com',
            'reg_no' => '231260',
            'pan_vat_no' => '609690187',
            'phone_no' => '9804064201',
            'mobile_no' => '9804064201',
            'address' => 'Dharan',
            'latitude' => '26.817429551705704',
            'longitude' => '87.28429874540521',
            'status' => 1
        ]);
    }
}
