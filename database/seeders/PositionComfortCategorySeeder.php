<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionComfortCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("position_comfort_categories")->insert(
            [
                [
                    "position_id" => 1,
                    "comfort_category_id" => 1,
                ],

                [
                    "position_id" => 1,
                    "comfort_category_id" => 2,
                ],
                
                [
                    "position_id" => 1,
                    "comfort_category_id" => 3,
                ],

                [
                    "position_id" => 2,
                    "comfort_category_id" => 1,
                ],

                [
                    "position_id" => 2,
                    "comfort_category_id" => 2,
                ],
                
                [
                    "position_id" => 3,
                    "comfort_category_id" => 1,
                ],

                [
                    "position_id" => 4,
                    "comfort_category_id" => 1,
                ],

                [
                    "position_id" => 4,
                    "comfort_category_id" => 2,
                ],

                [
                    "position_id" => 4,
                    "comfort_category_id" => 3,
                ]
            ]
        );
    }
}
