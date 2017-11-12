<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterEmployeeRequest;
use App\Transformers\RegisterEmployeeResponse;
use App\Employee;

class EmployeeController extends Controller
{
    public function register(RegisterEmployeeRequest $request)
    {
      $employee = new Employee();
      $employee->name = $request->name;
      $employee->created_by = $request->created_by;
      $employee->identity_no = $request->identity_no;
      $employee->phone_no = $request->phone_no;
      $employee->address = $request->address;
      $employee->email = $request->email;
      $employee->status = "ACTIVE";

      $employee->save();

      return fractal()->item($employee)->transformWith(new RegisterEmployeeResponse)->toArray();
    }
}
