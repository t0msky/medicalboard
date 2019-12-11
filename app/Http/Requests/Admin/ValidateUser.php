<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUser extends FormRequest
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
            'operid' => 'sometimes|required|string',
            'branchcode' => 'nullable',
            'name' => 'nullable',
            'password' => 'sometimes|required|string',
            'email' => 'email|nullable',
            'appind' => 'string|nullable',
            'lastsignondate' => 'nullable',
            'lastsignontime' => 'nullable',
            'dateofinvalidsignon' => 'nullable',
            'timeofinvalidsignon' => 'nullable',
            'inactivedatefrom' => 'nullable',
            'inactivedateto' => 'nullable',
            'pwd1' => 'sometimes|required|string',
            'pwd2' => 'sometimes|required|string',
            'pwd3' => 'sometimes|required|string',
            'pwd4' => 'sometimes|required|string',
            'pwd5' => 'sometimes|required|string',
            'pwd6' => 'sometimes|required|string',
            'ipaddress' => 'nullable',
            'activests' => 'nullable',
            'signonsts' => 'nullable',
            'invalidpwdsts' => 'nullable',
            'svisorid' => 'nullable',
            'officerid' => 'nullable',
            'mgrid' => 'nullable',
            'nextbr' => 'nullable',
            'nextbreffdate' => 'nullable',
            'prevbr' => 'nullable',
            'remember_token' => 'nullable',
        ];
    }
}
