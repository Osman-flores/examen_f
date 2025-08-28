<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
			'duration' => 'required|string|min:1|max:10',
			'date' => 'required|date',
			'treatment' => 'required|string|min:5|max:250',
			'reason' => 'required|string|min:5|max:155',
			'name_client' => 'required|string|min:3|max:255',
			'number_client' => 'required|string|min:7|max:8',
			'patients_id' => 'required',
			'dentits_id' => 'required',
        ];
    }

public function messages()
    {
        return [
            'duration.required' => 'La duración es obligatoria.',
            'duration.string' => 'La duración debe ser una cadena de texto.',
            'duration.min' => 'La duración debe tener al menos 1 carácter.',
            'duration.max' => 'La duración no puede tener más de 10 caracteres.',

            'date.required' => 'La fecha es obligatoria.',
            'date.date' => 'La fecha debe ser una fecha válida.',

            'treatment.required' => 'El tratamiento es obligatorio.',
            'treatment.string' => 'El tratamiento debe ser una cadena de texto.',
            'treatment.min' => 'El tratamiento debe tener al menos 5 caracteres.',
            'treatment.max' => 'El tratamiento no puede tener más de 250 caracteres.',

            'reason.required' => 'La razón es obligatoria.',
            'reason.string' => 'La razón debe ser una cadena de texto.',
            'reason.min' => 'La razón debe tener al menos 5 caracteres.',
            'reason.max' => 'La razón no puede tener más de 155 caracteres.',

            'name_client.required' => 'El nombre del cliente es obligatorio.',
            'name_client.string' => 'El nombre del cliente debe ser una cadena de texto.',
            'name_client.min' => 'El nombre del cliente debe tener al menos 3 caracteres.',
            'name_client.max' => 'El nombre del cliente no puede tener más de 255 caracteres.',

            'number_client.required' => 'El número del cliente es obligatorio.',
            'number_client.string' => 'El número del cliente debe ser una cadena de texto.',
            'number_client.min' => 'El número del cliente debe tener al menos 7 caracteres.',
            'number_client.max' => 'El número del cliente no puede tener más de 8 caracteres.',

            'patients_id.required' => 'El ID del paciente es obligatorio.',

            'dentits_id.required' => 'El ID del dentista es obligatorio.',
        ];
    }

}
