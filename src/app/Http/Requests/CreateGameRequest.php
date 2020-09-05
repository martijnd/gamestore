<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGameRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'genre_id' => 'numeric|exists:genres,id',
            'company_id' => 'numeric|exists:companies,id',
            'publisher_id' => 'numeric|exists:publishers,id',
            'released_at' => 'required|date',
            'rating' => 'required|between:1,100',
        ];
    }
}
