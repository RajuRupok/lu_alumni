<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            // 'title'         =>  'required|string|max:191',
            // 'cat_id'        =>  'required|integer',
            // 'body'          =>  'required|string',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'title.required' => 'title is required!',
            // 'cat_id.required' => 'category name is required!',
            // 'body.required' => 'body is required!'
        ];
    }
}
