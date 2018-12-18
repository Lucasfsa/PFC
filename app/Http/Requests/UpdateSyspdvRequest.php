<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSyspdvRequest extends FormRequest
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
        if($this->showSyspdvCard == true) {
            $s = [
                'controle' => 'required',
                'versao' => 'required',
                'serie' => 'required',
            ];
        } else {
            $s = ['' => ''];
        }

        return $s;
    }

    public function messages()
    {
        return [
            'controle.required' => 'O campo Controle não pode ficar vazio.',
            'versao.required' => 'O campo Versão não pode ficar vazio.',
            'serie.required' => 'O campo Série não pode ficar vazio.'
        ];
    }
}
