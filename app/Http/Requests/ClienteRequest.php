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
        
        if($this->software == null){
            $rules = ['software' => 'required'];
        }
        else if ($this->software == 1) {
            $rules = [
                'controle' => 'required',
                'versao' => 'required',
                'serie' => 'required'
            ];
        }
        else if($this->software == 2){
            $rules = ['contrato' => 'required'];
        }
        else if($this->software == 3){
            $rules = [
                'cod_rede' => 'required',
                'cod_loja' => 'required'
            ];
        }

        return [
            'nome_fantasia' => 'required',
            'razao_social' => 'required|unique:clientes',
            'cnpj' => 'required|min:18|unique:clientes',
            'email' => 'required|email',
            'telefone' => 'required|min:14',
        ]+$rules;
    }

    public function messages()
    {
        return [
            'nome_fantasia.required' => 'O campo Nome Fantasia é obrigatório.',
            'razao_social.required' => 'O campo Razão Social é obrigatório.',
            'razao_social.unique' => 'Esta Razão Social já está registrada.',
            'cnpj.required' => 'O campo CNPJ é obrigatório.',
            'cnpj.unique' => 'Este CNPJ já está registrado.',
            'cnpj.min' => 'O CNPJ tem 14 números.',
            'software.required' => 'Selecione um tipo de Software.',
            'email.required' => 'O campo E-mail é obrigatório.',
            'email.email' => 'O E-mail informado não é válido.',
            'telefone.required' => 'O campo Telefone é obrigatório.',
            'telefone.min' => 'O Telefone tem 11 digitos.',

            'controle.required' => 'O campo Controle é obrigatório.',
            'versao.required' => 'O campo Versão é obrigatório.',
            'serie.required' => 'O campo Série é obrigatório.',

            'contrato.required' => 'O campo Contrato é obrigatório.',

            'cod_rede.required' => 'O campo Código da Rede é obrigatório.',
            'cod_loja.required' => 'O campo Código da Loja é obrigatório.',
        ];
    }
}
