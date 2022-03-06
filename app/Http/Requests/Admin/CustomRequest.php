<?php

namespace App\Http\Requests\Admin;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class CustomRequest extends FormRequest
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
                    'name_en' => 'required|min:2|unique:customs,name_en',
                    'name_ar' => 'required|min:2|unique:customs,name_ar',
                    'title_en' => 'required|min:2',
                    'title_ar' => 'required|min:2',
                    'photo'=>'nullable|image|mimes:jpeg,bmp,png|max:4096',
                    'slider'=>'nullable|array',
                    'slider.*'=>'nullable|image|mimes:jpeg,bmp,png|max:4096',
                    'gallery'=>'nullable|array',
                    'gallery.*'=>'nullable|image|mimes:jpeg,bmp,png',
                ];
            }
            case 'PATCH':
            case 'PUT':
            {
                return [
                    'name_en' => 'required|string|min:2|unique:customs,name_en,NULL,id,deleted_at,NULL'.$this->id,
                    'name_ar' => 'required|string|min:2|unique:customs,name_ar,NULL,id,deleted_at,NULL'.$this->id,
                    'title_en' => 'required|string|min:2',
                    'title_ar' => 'required|string|min:2',
                    'photo'=>'sometimes|image|mimes:jpeg,bmp,png|max:4096',
                    'gallery'=>'sometimes|array',
                    'gallery.*'=>'sometimes|image|mimes:jpeg,bmp,png',
                    'slider'=>'sometimes|array',
                    'slider.*'=>'sometimes|image|mimes:jpeg,bmp,png'
                ];
            }
            default:break;
        }
    }

    public function messages()
    {
        return [
            'name_en.required' => __('admin/app.name_en_required'),
            'name_ar.required' => __('admin/app.name_ar_required'),
            'title_en.required' => __('admin/app.title_en_required'),
            'title_ar.required' => __('admin/app.title_ar_required'),
            'photo.required' => __('admin/app.photo_required'),
            'photo.image' => __('admin/app.photo_should_be_image')
        ];
    }

}
