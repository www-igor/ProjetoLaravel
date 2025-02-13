<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Throwable;
use App\Http\Requests\LoginRequest;
use App\services\Login\LoginService;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller{

    public function __invoke(LoginRequest $request, LoginService $service): JsonResponse
    {
        try{
            $service->login($request->all());
            
            return $this->responseSuccess(
                ['entrou no adm'], 200
            );

        } catch(Throwable $e) {
            return $this->responseError(
                [$e->getMessage()], $e->getCode()
            );
        }
    }
};
