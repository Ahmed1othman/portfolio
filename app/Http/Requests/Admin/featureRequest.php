<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class featureRequest extends FormRequest
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
                        'title' => 'required|string|min:2|max:150|unique:features,title->en'. $this->id,
                        'title_ar' => 'required|string|min:2|max:150|unique:features,title->ar'. $this->id,
                        'notes' => 'required|string|min:2|unique:features,notes->en' . $this->id,
                        'notes_ar' => 'required|string|min:2|unique:features,notes->ar' . $this->id,
                        'photo' => 'required|image|mimes:jpeg,bmp,png,jpg|max:4096'
                    ];
                }
            case 'PATCH':
            case 'PUT': {
                    return [
                        'title' => 'required|string|min:2|max:150|unique:features,title->en' . $this->id,
                        'title_ar' => 'required|string|min:2|max:150|unique:features,title->ar' . $this->id,
                        'notes' => 'required|string|min:2|unique:features,notes->en' .$this->id,
                        'notes_ar' => 'required|string|min:2|unique:features,notes->ar' . $this->id,
                        'photo' => 'sometimes|image|mimes:jpeg,bmp,png,jpg|max:4096'
                    ];
                }
            default:
                break;
        }
    }

    public function messages()
    {
        return [


            'title.required' => __('validation.required'),
            'title.string' => __('validation.string'),
            'title.min' => __('validation.min'),
            'title.max' => __('validation.max'),
            'title.regex' => __('validation.regex'),
            'title.unique' => __('validation.unique'),


            'title_ar.required' => __('validation.required'),
            'title_ar.string' => __('validation.string'),
            'title_ar.min' => __('validation.min'),
            'title_ar.max' => __('validation.max'),
            'title_ar.regex' => __('validation.regex'),
            'title_ar.unique' => __('validation.unique'),


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
