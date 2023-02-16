<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function sendResponse($result, $message, $httpCode = JsonResponse::HTTP_OK): JsonResponse
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message
        ];

        return response()->json($response, $httpCode);
    }

    public function sendError($error, $errorMessage, $httpCode = JsonResponse::HTTP_FORBIDDEN): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (isset($errorMessage))
            $response['data'] = $errorMessage;

        return response()->json($response, $httpCode);
    }



}
