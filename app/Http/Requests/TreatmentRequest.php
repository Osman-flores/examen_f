<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TreatmentRequest extends FormRequest
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
			'status' => 'required|string|min:5|max:25',
			'cost' => 'required|string|min:1|max:100',
			'payment_status' => 'required|string|min:5|max:25',
			'name_doctor' => 'required|string|min:3|max:200',
			'area' => 'required|string|min:5|max:100',
        ];
    }
public function messages()
    {
        return [
            'status.required' => 'El estado es obligatorio.',
            'status.string' => 'El estado debe ser una cadena de texto.',
            'status.min' => 'El estado debe tener al menos 5 caracteres.',
            'status.max' => 'El estado no puede tener más de 25 caracteres.',

            'cost.required' => 'El costo es obligatorio.',
            'cost.string' => 'El costo debe ser una cadena de texto.',
            'cost.min' => 'El costo debe tener al menos 1 carácter.',
            'cost.max' => 'El costo no puede tener más de 100 caracteres.',

            'payment_status.required' => 'El estado del pago es obligatorio.',
            'payment_status.string' => 'El estado del pago debe ser una cadena de texto.',
            'payment_status.min' => 'El estado del pago debe tener al menos 5 caracteres.',
            'payment_status.max' => 'El estado del pago no puede tener más de 25 caracteres.',

            'name_doctor.required' => 'El nombre del doctor es obligatorio.',
            'name_doctor.string' => 'El nombre del doctor debe ser una cadena de texto.',
            'name_doctor.min' => 'El nombre del doctor debe tener al menos 3 caracteres.',
            'name_doctor.max' => 'El nombre del doctor no puede tener más de 200 caracteres.',

            'area.required' => 'El área es obligatoria.',
            'area.string' => 'El área debe ser una cadena de texto.',
            'area.min' => 'El área debe tener al menos 5 caracteres.',
            'area.max' => 'El área no puede tener más de 100 caracteres.',
        ];
    }

}
