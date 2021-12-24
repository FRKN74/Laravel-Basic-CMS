<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'title' =>'required|min:3',
            'slug' =>'unique',
            'content' =>'required|min:10',
        ];
    }
    public function attributes()
    {
        return [

            'title' => 'Başlık',
            'content' => 'Açıklama',
            'slug' => 'başlık',

        ];
        

    }
}
