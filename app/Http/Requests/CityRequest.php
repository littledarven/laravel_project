<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\City;

class CityRequest extends FormRequest
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
            'name' => 'required',
            'citizens' => 'required',
            'states' => 'required',
        ];
    }
    public function messages()
    {
        $messages = [            
            'name.required' => 'O campo novo é obrigatório',
            'citizens.required' => 'O campo número de habitantes é obrigatório',
        ];
        return $messages;
    }
}
