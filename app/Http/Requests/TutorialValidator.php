<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TutorialValidator extends FormRequest
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
            'titulo' => 'required',
            'descricao' => 'required',
            'codigo' => 'required',
            'tipo' => 'required',
            'valor' => 'required_if:tipo,1',
            'categorias' => 'required',
            'postagem' => 'required',
            'postagem' => 'min:5',
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O título é obrigatório',
            'descricao.required' => 'A descrição do tutorial deve ser preenchida',
            'codigo.required' => 'O código do tutorial é obrigatório',
            'tipo.required' => 'Escolha o titpo do tutorial',
            'valor.required_if' => 'Informe o preço do tutorial',
            'categorias.required' => 'Escolha ao menos uma categoria para o tutorial',
            'postagem.required' => 'A postagem é obrigatória',
            'postagem.min' => 'A postagem deve ter pelo menos 5 caracteres',
        ];
    }
}
