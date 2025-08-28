<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DentalRecordRequest extends FormRequest
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
			'date' => 'required|string|min:8|max:10',
			'treatment' => 'required|string|min:5|max:100',
			'progress' => 'required|string|min:5|max:100',
			'allergiances' => 'required|string|min:5|max:200',
			'patient_id' => 'required',
			'treatment_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'date.required' => 'La fecha de ingreso es obligatoria.',
            'date.string' => 'La fecha de ingreso debe ser una cadena de texto.',
            'date.min' => 'La fecha de ingreso debe tener al menos 8 caracteres.',
            'date.max' => 'La fecha de ingreso no puede tener más de 10 caracteres.',

            'treatment.required' => 'El tratamiento es obligatorio.',
            'treatment.string' => 'El tratamiento debe ser una cadena de texto.',
            'treatment.min' => 'El tratamiento debe tener al menos 5 caracteres.',
            'treatment.max' => 'El tratamiento no puede tener más de 100 caracteres.',

            'progress.required' => 'El progreso es obligatorio.',
            'progress.string' => 'El progreso debe ser una cadena de texto.',
            'progress.min' => 'El progreso debe tener al menos 5 caracteres.',
            'progress.max' => 'El progreso no puede tener más de 100 caracteres.',

            'allergiances.required' => 'Las alergias son obligatorias.',
            'allergiances.string' => 'Las alergias deben ser una cadena de texto.',
            'allergiances.min' => 'Las alergias deben tener al menos 5 caracteres.',
            'allergiances.max' => 'Las alergias no pueden tener más de 200 caracteres.',

            'patient_id.required' => 'El paciente es obligatorio.',
            
            'treatment_id.required' => 'El tratamiento es obligatorio.',
        ];
    }
}