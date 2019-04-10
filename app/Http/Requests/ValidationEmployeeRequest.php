<?php

namespace LaraStart\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationEmployeeRequest extends FormRequest
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
            'name' => 'Required|max: 15',
            'last_name' => 'Required|max: 15',
            'email' => 'Required',
            'slug' => 'Required'
        ];
    }
}
