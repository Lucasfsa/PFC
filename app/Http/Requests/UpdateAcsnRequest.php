<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAcsnRequest extends FormRequest
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
        if($this->showAcsnCard == true) {
            $a = ['contrato' => 'required'];
        } else {
            $a = ['' => ''];
        }

        return $a;
    }

    public function messages()
    {
        return ['contrato.required' => 'O campo Contrato não pode ficar vazio.'];
    }
}
