<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentStoreRequest extends FormRequest
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
            'file'          => 'nullable|mimes:png,jpeg|max:3000|dimensions:max_width=3000,max_height=3000',
            'position'      => 'integer',
            'section_id'    => 'required|integer',
            'status'        => 'required|in:ACTIVE,INACTIVE'
        ];
    }
}
