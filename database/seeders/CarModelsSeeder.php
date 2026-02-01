<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("car_models")->insert(
            [
                [
                    "name" => "Toyota-camry",
                    "comfort_category_id" => 2,
                    "created_at" => now(),
                    "updated_at" => now(),
                ],
                [
                    "name" => "Mercedes S-class",
                    "comfort_category_id" => 3,
                    "created_at" => now(),
                    "updated_at" => now(),
                ],
                [
                    "name" => "Kia",
                    "comfort_category_id" => 1,
                    "created_at" => now(),
                    "updated_at" => now(),
                ],
                [
                    "name" => "Hyundai sonata",
                    "comfort_category_id" => 1,
                    "created_at" => now(),
                    "updated_at" => now(),
                ]
            ]
        );
    }
}
