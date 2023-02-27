<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartementRequest;
use App\Http\Resources\DepartmentCollection;
use App\Http\Resources\DepartmentResource;
use App\Models\Department;
use Validator;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): DepartmentCollection
    {
        $query =Department::all();
//        ('managers', 'managers.id', '=', 'departments.manager_id')->get();
        // return response()->json(['success' =>  $query]);
        return new DepartmentCollection($query);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createDepartment(StoreDepartementRequest $request): DepartmentResource
    {
        $department = Department::create($request->all());
        return new DepartmentResource($department);
    }




    /**
     * Update the specified resource in storage.
     */
    public function updateDepartment(StoreDepartementRequest $request, Department $department): DepartmentResource
    {
        $department->update($request->all());
        return new DepartmentResource($department);

    }

}
