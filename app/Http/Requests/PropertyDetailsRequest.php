<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PropertyDetailsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => ['required', 'exists:properties,id'],
            'checkin' => ['sometimes', 'required', 'date'],
            'checkout' => ['sometimes', 'required', 'date'],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }

    public function messages(): array
    {
        return [
            'id.required' => 'The ID is missing',
            'id.exists' => 'The property does not exists',
            'checkin.required' => 'You must specify a chec in date!',
            'checkout.required' => 'You must specify a chec in date!',
            'checkin.date' => 'Specify a check in valid date!',
            'checkout.date' => 'Specify a check in valid date!',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge(['id' => $this->route('id')]);
    }
}
