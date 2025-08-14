<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HoraryRequest extends FormRequest
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
            'expected_input' => 'required|date_format:H:i',
            'expected_exit' => 'required|date_format:H:i',
            'over_time' => 'nullable|time',

            'employee_id' => 'required|exists:employees,id',
            'departament_id' => 'required|exists:departaments,id',
        ];
    }

    public function messages(): array
    {
        return [
            'expected_input.required' => 'La hora de entrada esperada es obligatoria.',
            'expected_input.date_format' => 'La hora de entrada esperada debe tener el formato AM:PM.',

            'expected_exit.required' => 'La hora de salida esperada es obligatoria.',
            'expected_exit.date_format' => 'La hora de salida esperada debe tener el formato AM:PM.',

            'over_time.time' => 'El tiempo extra debe ser una hora válida.',

            'employee_id.required' => 'El empleado es obligatorio.',
            'employee_id.exists' => 'El empleado seleccionado no existe.',
        ];
    }
}
