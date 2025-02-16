<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Throwable;
use App\Http\Requests\LoginRequest;
use App\services\Login\LoginService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class LoginAdmController extends Controller{

    public function __invoke(LoginRequest $request, LoginService $service): JsonResponse
    {   
        try{
            $service->loginAdm($request->all());
            
            return $this->responseSuccess(
                [
                    __('userAdm.login.success')
                ], Response::HTTP_OK
            );

        } catch(Throwable $e) {
            return $this->responseError(
                [$e->getMessage()], $e->getCode()
            );
        }
    }
};
