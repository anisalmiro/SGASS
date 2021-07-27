<?php

namespace Gestao_Assistencias\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequisicaoRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'tabpro_partN' => 'required',
            'tabpro_tipoiten' => 'required',
            'tabpro_nomeiten' => 'required',
            'tabpro_quant' => 'required',
        ];
    }

}
