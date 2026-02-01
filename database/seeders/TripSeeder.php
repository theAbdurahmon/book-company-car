<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("trips")->insert([
            [
                "car_id" => 2,
                "employee_id" => 5,
                "start_time" => Carbon::parse('2026-02-01 11:00:00'),
                "end_time" => Carbon::parse('2026-02-01 13:00:00'),
                "created_at" => now(),
                "updated_at"=> now(),
            ],

            [
                "car_id" => 2,
                "employee_id" => 5,
                "start_time" => Carbon::parse('2026-02-01 18:00:00'),
                "end_time" => Carbon::parse('2026-02-01 20:00:00'),
                "created_at" => now(),
                "updated_at"=> now(),
            ],

            [
                "car_id" => 3,
                "employee_id" => 4,
                "start_time" => Carbon::parse('2026-02-01 08:00:00'),
                "end_time" => Carbon::parse('2026-02-01 09:00:00'),
                "created_at" => now(),
                "updated_at"=> now(),
            ]
        ]);
    }
}
