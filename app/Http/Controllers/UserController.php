<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Transformers\RegisterUserResponse;
use App\User;

class UserController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->created_by = $request->created_by;
        $user->employee_id = $request->employee_id;

        $user->save();

        return fractal()->item($user)->transformWith(new RegisterUserResponse)->toArray();
    }
}
