<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\TripRequest;
use App\Models\Car;
use App\Models\Trip;

class TripController extends Controller
{
    public function store(TripRequest $request) {
        $employee = Employee::where("name", $request->validated("employee_name"))->first(); // В реальном проекте будет через Bearer Token
        $start = $request->validated("start_time");
        $end   = $request->validated("end_time");

        return DB::transaction(function () use ($request, $employee, $start, $end) {

        $car = Car::where('id', $request->car_id)
            ->lockForUpdate()
            ->with('model.comfortCategory')
            ->first();

        $allowed = $employee->position
            ->comfortCategories()
            ->where('comfort_categories.id', $car->model->comfort_category_id)
            ->exists();

        if (!$allowed) {
            abort(403, 'Категория недоступна');
        }

        $busy = Trip::where('car_id', $car->id)
            ->where('start_time', '<', $end)
            ->where('end_time', '>', $start)
            ->lockForUpdate()
            ->exists();

        if ($busy) {
            abort(409, 'Машина уже занята');
        }

          return Trip::create([
            'car_id' => $car->id,
            'employee_id' => $employee->id,
            'start_time' => $start,
            'end_time' => $end,
        ]);
      });
    }

    public function cancel(Request $request, Trip $trip) {
        $request->validate([
             "employee_name" => "required|exists:employees,name"
        ]);
        
        $employee = Employee::where("name", $request->input("employee_name"))->first(); // В реальном проекте будет через Bearer Token

        if($trip->employee_id != $employee->id) {
            return response()->json([
               "message" => "Нельзя отменить чужую поездку"
            ], 403);
        }

        $trip->delete();

        return response()->json(['message' => 'Бронирование отменено']);
    }
}
