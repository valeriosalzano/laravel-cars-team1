<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand' => 'required|max:200',
            'model' => 'required|max:100',
            'price' => 'required|numeric|between:0,99999',
            'cc' => 'required|numeric|between:0,99999',
            'year_release' => 'required',
        ];
    }
}
