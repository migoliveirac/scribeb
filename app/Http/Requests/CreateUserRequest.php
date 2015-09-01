<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;
use \App\User;

class CreateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (User::isManager())
            return true;
        else
            return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'username' => 'required|unique:users|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ];
    }
}
