<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

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
        return [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255',  Rule::unique('users')->ignore(auth::user())],
            'address' => ['required', 'max:255'],
            'phone' => ['required', 'max:255'],
            'iban' => ['required', 'max:255'],
            'rib' => ['required', 'max:255'],
            'bic' => ['required', 'max:255'],
            'account_holder' => ['required', 'max:255'],
            'domiciliation' => ['required', 'max:255'],
            'mentions' => ['required', 'max:255'],
        ];
    }
}
