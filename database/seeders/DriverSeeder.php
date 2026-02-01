<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("drivers")->insert(
            [
               [
                "name" => "Vlad",
                "created_at" => now(),
                "updated_at"=> now(),
               ],
               [
                "name" => "Andrey",
                "created_at" => now(),
                "updated_at"=> now(),
               ],
               [
                "name" => "Bob",
                "created_at" => now(),
                "updated_at"=> now(),
               ],
               [
                "name" => "Maksim",
                "created_at" => now(),
                "updated_at"=> now(),
               ]
            ]
        );
    }
}
