<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("cars")->insert(
            [
                [
                    "license_plate" => "c 723 ym",
                    "car_model_id" => 3,
                    "driver_id" => 4,
                    "created_at" => now(),
                    "updated_at"=> now(),
                ],

                [
                    "license_plate" => "H 456 BK",
                    "car_model_id" => 4,
                    "driver_id" => 2,
                    "created_at" => now(),
                    "updated_at"=> now(),
                ],

                [
                    "license_plate" => "C 500 YP",
                    "car_model_id" => 2,
                    "driver_id" => 1,
                    "created_at" => now(),
                    "updated_at"=> now(),
                ],

                [
                    "license_plate" => "A 667 TT",
                    "car_model_id" => 1,
                    "driver_id" => 3,
                    "created_at" => now(),
                    "updated_at"=> now(),
                ]
            ]
        );
    }
}
