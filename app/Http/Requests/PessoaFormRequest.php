<?php

namespace sistemaLaravel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use sistemaLaravel\Http\Requests\Request;

class PessoaFormRequest extends FormRequest
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

            'nome'=>'required|max:100',
            'tipo_documento'=>'max:20',
            'num_doc'=>'required|max:20',
            'endereco'=>'required|min:6|max:100',
            'telefone'=>'required|numeric|min:5',
            'email'=>'required|email',
        ];
    }
    public function messagens(){

        return[
          'email.required' => 'O campo :attribute é obrigatório',
         

        ];
    }

}
