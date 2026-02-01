<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComfortCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("comfort_categories")->insert(
            [
                [
                    "name" => "Standart",
                    "created_at" => now(),
                    "updated_at"=> now(),
                ],
                [
                    "name"=> "Business",
                    "created_at" => now(),
                    "updated_at"=> now(),
                ],
                [
                    "name"=> "Vip",
                    "created_at" => now(),
                    "updated_at"=> now(),
                ],
            ]
        );
    }
}
