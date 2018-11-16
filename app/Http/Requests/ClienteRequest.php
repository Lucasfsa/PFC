<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nomeFantasia' => 'required',
            'razaoSocial' => 'required|unique:clientes',
            'cnpj' => 'required|min:14|unique:clientes',
            'software' => 'required',
            'email' => 'required|email',
            'telefone' => 'required|min:11',
        ];
    }

    public function messages()
    {
        return [
            'nomeFantasia.required' => 'O campo Nome Fantasia é obrigatório.',
            'razaoSocial.required' => 'O campo Razão Social é obrigatório.',
            'razaoSocial.unique' => 'Esta Razão Social já está registrada.',
            'cnpj.required' => 'O campo CNPJ é obrigatório.',
            'cnpj.unique' => 'Este CNPJ já está registrado.',
            'cnpj.min' => 'O CNPJ tem 14 números.',
            'software.required' => 'Selecione um tipo de Software.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O E-mail informado não é válido.',
            'telefone.required' => 'O campo Telefone é obrigatório.',
            'telefone.min' => 'O telefone tem 11 digitos.',
        ];
    }
}
