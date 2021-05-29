<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadImgRequest extends FormRequest
{
    public function authorize()
    {
        return $this->headers->get('upload-key') == config('app.upload_key');
    }

    public function rules()
    {
        return [
            'img' => ['required', 'image']
        ];
    }
}
