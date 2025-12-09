<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class JsonResponseHelper
{
    public static function successResponse(
        string $message,
        mixed $body,
        int $statusCode = 200,
    ): JsonResponse {
        $data = [];

        if (!blank($message)) {
            $data["message"] = $message;
        }

        if (!blank($body)) {
            $data["body"] = $body;
        }

        $data["statusCode"] = $statusCode;

        return response()->json($data, $statusCode);
    }

    public static function errorResponse(
        string $message,
        mixed $body = null,
        int $statusCode = 500,
    ): JsonResponse {
        $data = [];

        if (!blank($message)) {
            $data["message"] = $message;
        }

        if (!blank($body)) {
            $data["body"] = $body;
        }

        $data["statusCode"] = $statusCode;

        return response()->json($data, $statusCode);
    }
}
