<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
			'name' => 'required|string|min:3|max:200',
			'identification' => 'required|string|min:8|max:18',
			'p_Birth' => 'required|string|min:4|max:200',
			'age' => 'required|integer|min:1|max:3',
			'addres' => 'required|string|min:5|max:200',
			'sex' => 'required|string|min:4|max:10',
			'nationality' => 'required|string|min:4|max:100',
			'ethnicity' => 'required|string|min:4|max:100',
			'telephone' => 'required|string|min:8|max:18',
			'departament' => 'required|string|min:4|max:100',
			'responsible' => 'required|string|min:3|max:200',
			'country' => 'required|string|min:4|max:100',
			'mail' => 'required|string|min:5|max:150',
			'municipality' => 'required|string|min:4|max:100',
			'marital_status' => 'required|string|min:5|max:20',
        ];
    }
public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'name.max' => 'El nombre no puede tener más de 200 caracteres.',

            'identification.required' => 'La identificación es obligatoria.',
            'identification.string' => 'La identificación debe ser una cadena de texto.',
            'identification.min' => 'La identificación debe tener al menos 8 caracteres.',
            'identification.max' => 'La identificación no puede tener más de 18 caracteres.',

            'p_Birth.required' => 'La fecha de nacimiento es obligatoria.',
            'p_Birth.string' => 'La fecha de nacimiento debe ser una cadena de texto.',
            'p_Birth.min' => 'La fecha de nacimiento debe tener al menos 4 caracteres.',
            'p_Birth.max' => 'La fecha de nacimiento no puede tener más de 200 caracteres.',

            'age.required' => 'La edad es obligatoria.',
            'age.integer' => 'La edad debe ser un número entero.',
            'age.min' => 'La edad debe ser al menos 1.',
            'age.max' => 'La edad no puede tener más de 3 dígitos.',

            'addres.required' => 'La dirección es obligatoria.',
            'addres.string' => 'La dirección debe ser una cadena de texto.',
            'addres.min' => 'La dirección debe tener al menos 5 caracteres.',
            'addres.max' => 'La dirección no puede tener más de 200 caracteres.',

        ];
    }

}
