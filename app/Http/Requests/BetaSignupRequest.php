<?php

namespace IPayProvider\Http\Requests;

use IPayProvider\Http\Requests\Request;

class BetaSignupRequest extends Request
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
          'fname' => 'required',
          'lname' => 'required',
          'email' => 'required|unique:signups,email',
          'zip'   => 'required'
        ];
    }
}
