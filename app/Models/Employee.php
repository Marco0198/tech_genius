<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_first_name',
        'employee_last_name',
        'employee_telephone_number',
        'employee_email',
        'manager_id',
        'department_id',

    ];
}

