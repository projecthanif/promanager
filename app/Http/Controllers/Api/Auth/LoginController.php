<?php

namespace App\Http\Controllers\Api\Auth;

use App\Helpers\JsonResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            "email" => ["required", "email", "exists:users,email"],
            "password" => ["required", "string"],
        ]);
        if (!auth()->attempt($validated)) {
            return JsonResponseHelper::errorResponse(
                message: "Login Failed due to incorrect password or email",
                statusCode: 400,
            );
        }

        $data = [];

        $user = auth()->user();
        $token = $user->createToken("user");
        $data["access_token"] = $token->plainTextToken;

        return JsonResponseHelper::successResponse("Login successfully", $data, 200);
    }
}
