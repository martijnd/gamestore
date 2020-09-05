<?php

namespace App\Http\Requests;

use App\Game;
use Gate;
use Illuminate\Foundation\Http\FormRequest;

class DeleteGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $game = $this->route('game');

        return Gate::allows('delete', $game);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
