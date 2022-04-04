<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                    return [
                        'name' => 'required|string|min:2',
                        'email' => 'nullable|email',
                        'phone' => 'required|string|max:15',
                    ];
                }
            case 'PATCH':
            case 'PUT': {
                    return [
                        'name' => 'required|string|min:2',
                        'email' => 'nullable|email',
                        'phone' => 'required|string|max:15'
                    ];
                }
            default:
                break;
        }
    }

    public function messages()
    {
        return [


            '*.required' => __('validation.required'),
            '*.string' => __('validation.string'),
            '*.max' => __('validation.max'),
            '*.email' => __('validation.email'),





            'notes.required' => __('validation.required'),
            'notes.string' => __('validation.string'),
            'notes.min' => __('validation.min'),
            'notes.regex' => __('validation.regex'),
            'notes.unique' => __('validation.unique'),


            'notes_ar.required' => __('validation.required'),
            'notes_ar.string' => __('validation.string'),
            'notes_ar.min' => __('validation.min'),
            'notes_ar.regex' => __('validation.regex'),
            'notes_ar.unique' => __('validation.unique'),


            'photo.required' => __('validation.required'),
            'photo.image' => __('validation.image'),
            'photo.mimes' => __('validation.mimes'),
            'photo.max' => __('validation.max'),


        ];
    }
}
