<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{

    public function responseError(array $message, int $code): JsonResponse
    {
        return response()->json([
            'messages' => $message
        ], $code);
    }

    public function responseSuccess(array $message, int $code): JsonResponse
    {
        return response()->json([
            'messages' => $message
        ], $code);
    }
}