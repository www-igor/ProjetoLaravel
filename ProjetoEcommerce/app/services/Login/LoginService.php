<?php

namespace App\services\Login;

use App\Exceptions\LoginAdm\ExceptionLoginAdmError;
use App\Repositories\LoginAdm\LoginAdmRepository;

class LoginService 
{

    public function __construct(public LoginAdmRepository $repository)
    {}

    public function loginAdm(array $userAdm): bool
    {
       $userAdmExists =  $this->repository->userAdmExists($userAdm);

       if (!$userAdmExists) {
            throw new ExceptionLoginAdmError();
       }

        return $userAdmExists;
    }
}