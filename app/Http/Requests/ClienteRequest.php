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

        if($this->opt == "cpf") {
            $doc = ['cpf' => 'required|min:14|unique:pessoa_f'];
        } else {
            $doc = ['cnpj' => 'required|min:18|unique:pessoa_j'];
        }

        if ($this->syspdv == true) {
            $s = [
                'controle' => 'required',
                'versao' => 'required',
                'serie' => 'required'
            ];
        } else {
            $s = [];
        }

        if($this->acsn == true){
            $a = ['contrato' => 'required'];
        } else {
            $a = [];
        }

        if($this->ecletica == true){
            $e = [
                'cod_rede' => 'required',
                'cod_loja' => 'required'
            ];
        } else {
            $e = [];
        }

        if ($this->syspdv == false && $this->acsn == false && $this->ecletica == false) {
            $s = ['sistema' => 'required'];
            $a = ['sistema' => 'required'];
            $e = ['sistema' => 'required'];
        }

        return $doc+[
            'razao_social' => 'required|unique:clientes',
            'nome_fantasia' => 'required',
            'email' => 'required|email',
            'telefone' => 'required|min:14',
        ]+$s+$a+$e;
    }

    public function messages()
    {
        return [
            'razao_social.required' => 'O campo Razão Social é obrigatório.',
            'razao_social.unique' => 'Esta Razão Social já está registrada.',
            'nome_fantasia.required' => 'O campo Nome Fantasia é obrigatório.',
            'email.required' => 'O campo E-mail é obrigatório.',
            'email.email' => 'O E-mail informado não é válido.',
            'telefone.required' => 'O campo Telefone é obrigatório.',
            'telefone.min' => 'O Telefone tem 11 digitos.',

            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.unique' => 'Este CPF já está registrado.',
            'cpf.min' => 'O CPF tem 11 números.',

            'cnpj.required' => 'O campo CNPJ é obrigatório.',
            'cnpj.unique' => 'Este CNPJ já está registrado.',
            'cnpj.min' => 'O CNPJ tem 14 números.',

            'sistema.required' => 'Selecione ao menos um Sistema.',

            'controle.required' => 'O campo Controle é obrigatório.',
            'versao.required' => 'O campo Versão é obrigatório.',
            'serie.required' => 'O campo Série é obrigatório.',

            'contrato.required' => 'O campo Contrato é obrigatório.',

            'cod_rede.required' => 'O campo Código da Rede é obrigatório.',
            'cod_loja.required' => 'O campo Código da Loja é obrigatório.',
        ];
    }
}
