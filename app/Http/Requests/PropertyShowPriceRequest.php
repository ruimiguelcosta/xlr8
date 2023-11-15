<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyShowPriceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'hotelId' => ['required', 'exists:properties,id'],
            'checkin' => ['required', 'date'],
            'numberofrooms' => ['required', 'int'],
        ];
    }
}
