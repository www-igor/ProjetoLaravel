<?php

namespace App\Repositories\LoginAdm;

use App\Models\User;
use App\Repositories\Repository;

interface LoginAdmRepository extends Repository 
{
    public function userAdmExists(array $userAdm): bool;
}