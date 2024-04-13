<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
            'first_name' => ['required', 'string', ],
            'last_name' => ['required', 'string', ],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email'],
            'tel' => ['required', 'max:5',],
            'address' =>['required'],
            'content' =>['required'],
            'detail' => ['required', 'max:120'],
            'building' => ['required', 'string'],
            'text' => ['required' ,'string'],
        ];
    }


    public function messages()
    {
        return [
            'first_name.required' => '性を入力してください',
            'last_name.required' => '名を入力してください',
            'gender' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスをメール形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.max' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'content' => 'お問い合わせの種類を選択してください',
            'detail' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください'
        ];
    }
}
