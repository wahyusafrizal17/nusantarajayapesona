<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'images'                      => 'required|mimes:jpeg,jpg,png',
        ];
    }

    public function messages()
    {
        return [
            'images.required'                      => 'Gambar tidak boleh kosong',
            'images.mimes'                         => 'Format gambar harus jpeg, jpg atau png',
        ];
    }
}
