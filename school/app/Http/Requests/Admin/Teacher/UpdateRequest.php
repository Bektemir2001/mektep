<?php

namespace App\Http\Requests\Admin\Teacher;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;


class UpdateRequest extends FormRequest
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
        $users = User::class;
        return [
            'name' => 'required|string',
            'surename' => 'required|string',
            'email' => 'email:rfc,dns',
            'lesson_id' => 'required|integer'
        ];
    }
}
