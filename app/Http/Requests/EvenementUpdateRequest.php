<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EvenementUpdateRequest extends Request
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
        $id = $this->segment(2);
        return [
            'typeevent' => 'required|max:25',
            'description' => 'required|max:255,' . $id,
            'date' => 'required|max:10,' . $id,
            'horaireDeb' => 'required|max:10,' . $id,
            'horaireFin' => 'required|max:10,' . $id
        ];
    }
}