<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvailableCarRequest;
use App\Http\Resources\CarResource;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function available(AvailableCarRequest $request) {
       $employee = Employee::where("name", $request->validated("employee_name"))->first(); // В реальном проекте будет через Bearer Token

       $start = $request->validated("start_time");
       $end = $request->validated("end_time");

       $allowedCategories = $employee->position->comfortCategories()->pluck("comfort_categories.id")->toArray();

       $cars = Car::query()
            ->with(['model.comfortCategory', 'driver'])
            ->whereHas('model', function ($q) use ($allowedCategories) {
                $q->whereIn('comfort_category_id', $allowedCategories);
            })
            ->whereDoesntHave('trips', function ($q) use ($start, $end) {
                $q->where(function ($sub) use ($start, $end): void {
                   $sub->where('start_time', '<', $end)->where('end_time', '>', $start);
                });
            })
            ->when($request->category_id, function ($q) use ($request) {
                $q->whereHas('model', function ($sub) use ($request) {
                    $sub->where('comfort_category_id', $request->comfort_category_id);
                });
            })->get();

            return CarResource::collection($cars);
    }
}
