<?php

namespace App\Http\Requests\Admin;
use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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


    public function rules()
    {

        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'option' => 'required|string|min:2|unique:infos,option,NULL,id,deleted_at,NULL',
                    'value' => 'sometimes|min:1',
                    ];
            }
            case 'PATCH':
            case 'PUT':
            {
                return [
                    'option' => 'required|string|min:2|unique:infos,option,NULL,id,deleted_at,NULL'.$this->id,
                    'value' => 'sometimes|min:1',

                ];
            }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'option.required' => 'Option is required!',
            'option.unique' => 'Option is unique!',
            'value.required' => 'Value is required!'

        ];
    }

}


