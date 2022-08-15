<?php

namespace App\Http\Requests\Laravel6BasicShoda;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->path() == 'laravel6basicshoda' ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'email',
            'age' => 'numeric|between:0, 150',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力して下さい',
            'email.email' => 'メールアドレスが必要です',
            'age.numeric' => '年齢を整数で記入して下さい',
            'age.between' => '年齢は0〜150の間で入力して下さい',
        ];
    }
}
