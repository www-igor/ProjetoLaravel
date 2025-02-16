<?php

namespace App\Exceptions\LoginAdm;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class ExceptionLoginAdmError extends Exception
{
    public function __construct()
    {
        parent::__construct(
            __('userAdm.login.fail'), Response::HTTP_NOT_FOUND
        );
    }
}