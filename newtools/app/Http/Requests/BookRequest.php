<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'price' => 'required|string|max:255',
            'author' => 'nullable|string|max:50',
        ];
    }
}
