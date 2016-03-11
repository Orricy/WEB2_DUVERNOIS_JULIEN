<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StorePostRequest extends Request
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
            'user_id' => 'required',
            'title' => 'required|min:10',
            'description' => 'required|min:10',
        ];
    }
    public function messages()
    {
        return [
            'user_id.required' => 'Veuillez indiquez un auteur',
            'title.required' => 'Titre requis',
            'title.min' => 'Titre de 10 caractères au moins',
            'description.required' => 'Description requise',
            'description.min' => 'Description de 10 caractères au moins',
        ];
    }
}