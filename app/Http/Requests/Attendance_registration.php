<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Attendance_registration extends FormRequest
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
            'creation_date' => 'required|date',
            'time_in' => 'required|date_format:H:i',
            'time_exit' => 'required|date_format:H:i',
            'hours_worked' => 'required|numeric|min:0',
            'overtime' => 'nullable|numeric',
            'employee_id' => 'required|exists:employees,id',
            'charge_id' => 'required|exists:charges,id',
        ];
    }

    public function messages(): array
    {
        return [
            'creation_date.required' => 'La fecha de creación es obligatoria.',
            'creation_date.date' => 'La fecha de creación debe ser una fecha válida.',

            'time_in.required' => 'La hora de entrada es obligatoria.',
            'time_in.date_format' => 'La hora de entrada debe tener el formato AM:PM.',

            'time_exit.required' => 'La hora de salida es obligatoria.',
            'time_exit.date_format' => 'La hora de salida debe tener el formato AM:PM.',

            'hours_worked.required' => 'Ingresar las horas trabajadas es obligatorios.',
            'hours_worked.numeric' => 'Las horas trabajadas deben ser un número.',
            'hours_worked.min' => 'Las horas trabajadas no pueden ser negativas.',

            'overtime.numeric' => 'El tiempo extra debe ser un número.',
            'overtime.nullable' => 'El tiempo extra es opcional.',

            'employee_id.required' => 'El nombre del empleado es obligatorio.',
            'employee_id.exists' => 'El empleado seleccionado no existe.',

            'charge_id.required' => 'El cargo es obligatorio.',
            'charge_id.exists' => 'El cargo seleccionado no existe.',
        ];
    }
}
