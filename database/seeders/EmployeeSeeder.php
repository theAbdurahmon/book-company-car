<?php

namespace Database\Seeders;

use App\Models\Employee;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("employees")->insert([
              [
                "name" => fake()->name,
                "position_id" => 2,
                "email" => fake()->email,
                "password" => Hash::make(fake()->password),
                "created_at" => now(),
                "updated_at" => now() 
              ],

              [
                "name" => fake()->name,
                "position_id" => 4,
                "email" => fake()->email,
                "password" => Hash::make(fake()->password),
                "created_at" => now(),
                "updated_at" => now() 
              ],

              [
                "name" => fake()->name,
                "position_id" => 3,
                "email" => fake()->email,
                "password" => Hash::make(fake()->password),
                "created_at" => now(),
                "updated_at" => now() 
              ],

              [
                "name" => fake()->name,
                "position_id" => 1,
                "email" => fake()->email,
                "password" => Hash::make(fake()->password),
                "created_at" => now(),
                "updated_at" => now() 
              ],

              [
                "name" => fake()->name,
                "position_id" => 4,
                "email" => fake()->email,
                "password" => Hash::make(fake()->password),
                "created_at" => now(),
                "updated_at" => now() 
              ]
        ]);
    }
}
