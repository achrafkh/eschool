<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideosRequest extends FormRequest
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
            'title' => 'required|min:3',
            'desc' => 'required|min:3',
            'file' => 'required|mimes:mp4',
            'picture' => 'required|mimes:png,jpg,jpeg,JPG,JPEG',
        ];
    }
}