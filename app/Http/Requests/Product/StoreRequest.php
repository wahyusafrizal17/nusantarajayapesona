<?php

namespace App\Http\Requests\Product;

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
            'name_product'               => 'required',
            'category_id'                => 'required',
            'description'                => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_product.required'               => 'Nama product tidak boleh kosong',
            'category_id.required'                => 'Kategori tidak boleh kosong',
            'description.required'                => 'Deskripsi tidak boleh kosong'
        ];
    }
}
