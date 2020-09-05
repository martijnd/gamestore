<?php

namespace App\Http\Requests;

use App\Game;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $game = $this->route('game');

        return Gate::allows('update', $game);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|string',
            'genre_id' => 'sometimes|numeric|exists:genres,id',
            'company_id' => 'sometimes|numeric|exists:companies,id',
            'publisher_id' => 'sometimes|numeric|exists:publishers,id',
            'released_at' => 'sometimes|date',
            'rating' => 'sometimes|numeric|between:1,100',
        ];
    }
}
