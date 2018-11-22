<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required_with:confirm_password|min:6|same:confirm_password',
            'confirm_password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo Nome é obrigatório.',
            'email.required' => 'O campo E-mail é obrigatório.',
            'email.email' => 'Insira um formato válido de e-mail.',
            'email.unique' => 'Este e-mail já está registrado.',
            'password.required' => 'O campo Senha é obrigatório.',
            'password.min' => 'O senha deve possuir no mínimo 6 caracteres.',
            'password.confirmed' => 'As senhas não conferem.',
            'confirm_password.required' => 'O campo Confirmar Senha é obrigatório.',
            'confirm_password.min' => 'O senha deve possuir no mínimo 6 caracteres.',
        ];
    }
}
