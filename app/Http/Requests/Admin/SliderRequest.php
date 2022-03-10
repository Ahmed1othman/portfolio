<?php

namespace App\Http\Requests\Admin;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class SliderRequest extends FormRequest
{

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
                    'title' => 'nullable|string|min:2',
                    'title_ar' => 'nullable|string|min:2',
                    'text' => 'nullable|string|min:2',
                    'text_ar' => 'nullable|string|min:2',
                    'photo'=>'required|image|mimes:jpeg,bmp,png|max:4096'
                ];
            }
            case 'PATCH':
            case 'PUT':
            {
                return [
                    'title' => 'nullable|string|min:2|max:150',
                    'text' => 'nullable|string|min:2',
                    'title_ar' => 'nullable|string|min:2|max:150',
                    'text_ar' => 'nullable|string|min:2',
                    'photo'=>'sometimes|image|mimes:jpeg,bmp,png|max:4096'
                ];
            }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'title.required' => __('admin/app.title_required'),
            'text.required' => __('admin/app.text_required'),
            'title.required_ar' => __('admin/app.title_required'),
            'text.required_ar' => __('admin/app.text_required'),
            'photo.required' => __('admin/app.photo_required'),
            'photo.image' => __('admin/app.photo_should_be_image')
        ];
    }

}
