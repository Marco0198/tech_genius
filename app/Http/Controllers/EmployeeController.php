<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{

    public int $successStatus = 200;
    /**
     * Display a listing of the resource.
     */

    public function index(): EmployeeCollection
    {
        $query = Employee::join('managers', 'managers.id', '=', 'employees.manager_id')
                ->join('departments', 'departments.manager_id', '=', 'managers.id')
                ->get();
        return new EmployeeCollection($query);

    }


    public function createEmployee(StoreEmployeeRequest $request): EmployeeResource
    {

        $employee = Employee::create($request->all());
         return new EmployeeResource($employee);

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function getEmployeeById($id): Response
    {
        return Employee::where('id', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return EmployeeResource
     */
    public function updateEmployee(StoreEmployeeRequest $request, Employee $employee)
    {

        $employee->update($request->all());
        return new EmployeeResource($employee);
    }


}
