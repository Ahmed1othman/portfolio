<?php

namespace App\Http\Requests\Admin;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class NavBarRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'title' => 'required|string|min:2|regex:/^[A-Za-z0-9-أ-ي-pL\s\-]+$/u',
                ];
            }
            case 'PATCH':
            case 'PUT':
            {
                return [
                    'title' => 'required|string|min:2|regex:/^[A-Za-z0-9-أ-ي-pL\s\-]+$/u'
                ];
            }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'title.required' => __('admin/app.title_required')
        ];
    }

}
