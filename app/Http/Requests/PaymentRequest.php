<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
			'amountpaid' => 'required|string|min:1|max:200',
			'payment_date' => 'required|string|min:1|max:200',
			'payment_type' => 'required|string|min:5|max:25',
			'treatments_id' => 'required',
        ];
    }

public function messages()
    {
        return [
            'amountpaid.required' => 'El monto pagado es obligatorio.',
            'amountpaid.string' => 'El monto pagado debe ser una cadena de texto.',
            'amountpaid.min' => 'El monto pagado debe tener al menos 1 carácter.',
            'amountpaid.max' => 'El monto pagado no puede tener más de 200 caracteres.',

            'payment_date.required' => 'La fecha de pago es obligatoria.',
            'payment_date.string' => 'La fecha de pago debe ser una cadena de texto.',
            'payment_date.min' => 'La fecha de pago debe tener al menos 1 carácter.',
            'payment_date.max' => 'La fecha de pago no puede tener más de 200 caracteres.',

            'payment_type.required' => 'El tipo de pago es obligatorio.',
            'payment_type.string' => 'El tipo de pago debe ser una cadena de texto.',
            'payment_type.min' => 'El tipo de pago debe tener al menos 5 caracteres.',
            'payment_type.max' => 'El tipo de pago no puede tener más de 25 caracteres.',

            'treatments_id.required' => 'El ID del tratamiento es obligatorio.',
        ];
    }
} 
