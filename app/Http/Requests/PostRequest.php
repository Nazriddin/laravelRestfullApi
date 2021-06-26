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
            'user_id' => 'required|numeric|digits_between:1,20',
            'title' => 'required|string|min:1|max:50',
            'exerpt' => 'required|string|min:1|max:255',
            'description' => 'required|string|min:1|max:255',
            'published_at' => 'required|date',
            'is_published' => 'required|min:1|max:1'
        ];
    }
}
