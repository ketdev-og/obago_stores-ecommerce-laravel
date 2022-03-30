<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as FacadesRoute;

class UserSignUpRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(FacadesRoute::current()->getName() == "user.register"){
            return true;
        }
        return false;
    }
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return  [
            'name'=>'required|string|max:255',
            'email'=>'required|email|string|max:255|unique:obagz_users,email',
            'password'=>'min:8|required|string|confirmed'
        ];
    }
}
