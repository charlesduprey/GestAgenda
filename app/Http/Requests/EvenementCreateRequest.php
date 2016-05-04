<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EvenementCreateRequest extends Request
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
            'typeevent' => 'required|max:25',
            'description' => 'required|max:255',
            'date' => 'required|max:10',
            'horaireDeb' => 'required|max:10',
            'horaireFin' => 'required|max:10',
            'id_classe' => 'required'
        ];
    }
}