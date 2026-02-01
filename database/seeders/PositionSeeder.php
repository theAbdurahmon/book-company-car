<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("positions")->insert([
            [
                "name" => "lawyer",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "accountant",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "cashier",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "manager",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
