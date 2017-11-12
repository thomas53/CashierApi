<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

use App\User;

class RegisterUserResponse extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            "username" => $user->username,
            "createdDate" => $user->created_at
        ];
    }
}
  
