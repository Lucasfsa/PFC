<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEcleticaRequest extends FormRequest
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
        if($this->showEcleticaCard == true) {
            $e = [
                'cod_rede' => 'required',
                'cod_loja' => 'required',
            ];
        } else {
            $e = ['' => ''];
        }

        return $e;
    }

    public function messages()
    {
        return [
            'cod_rede.required' => 'O campo Código da Rede não pode ficar vazio.',
            'cod_loja.required' => 'O campo Código da Loja não pode ficar vazio.'
        ];
    }
}
