<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Employee;

class RegisterEmployeeResponse extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Employee $employee)
    {
        return [
            "id" => $employee->id,
            "name" => $employee->name,
            "email" => $employee->email,
        ];
    }
}
