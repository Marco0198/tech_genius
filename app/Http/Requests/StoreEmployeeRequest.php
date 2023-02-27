<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            //

            'employee_first_name'=> 'required|string|min:1',
            'employee_last_name'=> 'required|string|max:255',
            'employee_telephone_number'=> 'required|numeric|numeric|digits:9',
            'employee_email'=> 'required|email|unique:employees',
            'manager_id'=> 'required|numeric|exists:managers,id',
            'department_id'=> 'required|numeric|exists:departments,id',
        ];
    }
}
