<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DentitRequest extends FormRequest
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
			'record' => 'required|string|min:3|max:200',
			'address' => 'required|string|min:5|max:200',
			'gender' => 'required|string|min:4|max:10',
			'age' => 'required|string|min:1|max:3',
			'p_Birth' => 'required|string|min:4|max:200',
			'nationality' => 'required|string|min:4|max:100',
			'email' => 'required|string|min:5|max:150',
			'allergies' => 'required|string|min:5|max:200',
			'telephone' => 'required|string|min:8|max:18',
			'speciality' => 'required|string|min:4|max:100',
			'ethnicity' => 'required|string|min:4|max:100',
			'country' => 'required|string|min:4|max:100',
			'municipality' => 'required|string|min:4|max:100',
        ];
    }
public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.min' => 'El nombre debe tener al menos 3 caracteres.',
            'name.max' => 'El nombre no puede tener más de 200 caracteres.',

            'record.required' => 'El registro es obligatorio.',
            'record.string' => 'El registro debe ser una cadena de texto.',
            'record.min' => 'El registro debe tener al menos 3 caracteres.',
            'record.max' => 'El registro no puede tener más de 200 caracteres.',

            'address.required' => 'La dirección es obligatoria.',
            'address.string' => 'La dirección debe ser una cadena de texto.',
            'address.min' => 'La dirección debe tener al menos 5 caracteres.',
            'address.max' => 'La dirección no puede tener más de 200 caracteres.',

            'gender.required' => 'El género es obligatorio.',
            'gender.string' => 'El género debe ser una cadena de texto.',
            'gender.min' => 'El género debe tener al menos 4 caracteres.',
            'gender.max' => 'El género no puede tener más de 10 caracteres.',

            'age.required' => 'La edad es obligatoria.',
            'age.string' => 'La edad debe ser una cadena de texto.',
            'age.min' => 'La edad debe tener al menos 1 carácter.',
            'age.max' => 'La edad no puede tener más de 3 caracteres.',

            'p_Birth.required' => 'La fecha de nacimiento es obligatoria.',
            'p_Birth.string' => 'La fecha de nacimiento debe ser una cadena de texto.',
            'p_Birth.min' => 'La fecha de nacimiento debe tener al menos 4 caracteres.',
            'p_Birth.max' => 'La fecha de nacimiento no puede tener más de 200 caracteres.',

            'nationality.required' => 'La nacionalidad es obligatoria.',
            'nationality.string' => 'La nacionalidad debe ser una cadena de texto.',
            'nationality.min' => 'La nacionalidad debe tener al menos 4 caracteres.',
            'nationality.max' => 'La nacionalidad no puede tener más de 100 caracteres.',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.string' => 'El correo electrónico debe ser una cadena de texto.',
            'email.min' => 'El correo electrónico debe tener al menos 5 caracteres.',
            'email.max' => 'El correo electrónico no puede tener más de 150 caracteres.',

            'allergies.required' => 'Las alergias son obligatorias.',
            'allergies.string' => 'Las alergias deben ser una cadena de texto.',
            'allergies.min' => 'Las alergias deben tener al menos 5 caracteres.',
            'allergies.max' => 'Las alergias no pueden tener más de 200 caracteres.',

            'telephone.required' => 'El teléfono es obligatorio.',
            'telephone.string' => 'El teléfono debe ser una cadena de texto.',
            'telephone.min' => 'El teléfono debe tener al menos 8 caracteres.',
            'telephone.max' => 'El teléfono no puede tener más de 18 caracteres.',

            'speciality.required' => 'La especialidad es obligatoria.',
            'speciality.string' => 'La especialidad debe ser una cadena de texto.',
            'speciality.min' => 'La especialidad debe tener al menos 4 caracteres.',
            'speciality.max' => 'La especialidad no puede tener más de 100 caracteres.',

            'ethnicity.required' => 'La etnia es obligatoria.',
            'ethnicity.string' => 'La etnia debe ser una cadena de texto.',
            'ethnicity.min' => 'La etnia debe tener al menos 4 caracteres.',
            'ethnicity.max' => 'La etnia no puede tener más de 100 caracteres.',

            'country.required' => 'El país es obligatorio.',
            'country.string' => 'El país debe ser una cadena de texto.',
            'country.min' => 'El país debe tener al menos 4 caracteres.',
            'country.max' => 'El país no puede tener más de 100 caracteres.',

            'municipality.required' => 'La municipalidad es obligatoria.',
            'municipality.string' => 'La municipalidad debe ser una cadena de texto.',
            'municipality.min' => 'La municipalidad debe tener al menos 4 caracteres.',
            'municipality.max' => 'La municipalidad no puede tener más de 100 caracteres.',

        ];
    }
}