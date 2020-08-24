<?php

use Illuminate\Database\Seeder;

class ParkingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parkings')->insert([
            [
            'parking_number' => 1, 
            'isempty' => 0,
            'car_number' => "5060",
            'car_name' => "カローラ",
            'start_date' => "2020/08/24 10:00:00",
            'end_date' => "2020/08/24 18:00:00",
            'contractor' => "山田太郎"
            ],
            [
            'parking_number' => 2,       
            'isempty' => 0,
            'car_number' => "2030",
            'car_name' => "マーチ",
            'start_date' => "2020/08/22 10:00:00",
            'end_date' => "2020/08/22 18:00:00",
            'contractor' => "岡本太郎"
            ],
            [
            'parking_number' => 3,       
            'isempty' => 1,
            'car_number' => "",
            'car_name' => "",
            'start_date' => "2000/01/01 00:00:00",
            'end_date' => "2000/01/01 00:00:00",
            'contractor' => ""
            ],
	]);
    }
}
