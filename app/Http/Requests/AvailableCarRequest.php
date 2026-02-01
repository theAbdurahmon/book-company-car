<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvailableCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'employee_name' => 'required|exists:employees,name',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'model_id' => 'nullable|exists:car_models,id',
            'comfort_category_id' => 'nullable|exists:comfort_categories,id',
        ];
    }
}
