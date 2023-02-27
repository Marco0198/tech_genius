<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'employee_first_name'=>$this->employee_first_name,
            'employee_last_name'=>$this->employee_first_name,
            'employee_telephone_number'=> $this->employee_telephone_number,
            'employee_email'=> $this->employee_email,
            'manager_id'=> $this->manager_id,
            'department_id'=>  $this->department_id,
        ];
    }
}
