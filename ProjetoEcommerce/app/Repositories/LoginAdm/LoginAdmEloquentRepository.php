<?php

namespace App\Repositories\LoginAdm;

use App\Models\User;
use App\Repositories\EloquentRepository;
use Illuminate\Support\Facades\Hash;

class LoginAdmEloquentRepository extends EloquentRepository implements LoginAdmRepository
{
    public function userAdmExists(array $userAdm): bool
    {
        $user =  $this->query()->whereEmail($userAdm['email'])->first();

        if (!$user) {
            return false;
        }

        return Hash::check($userAdm['password'], $user->password);
    }
}