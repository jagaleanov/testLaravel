<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePromocodePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => 'required|string',
            'expire_date' => 'required|date_format:Y-m-d',
            'value' => 'required|numeric|gt:0',
            'type' => 'required|string',
            'uses_in' => 'required|numeric|gt:0',
            'status' => 'required|boolean',
        ];
    }
}
