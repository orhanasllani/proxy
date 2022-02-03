<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Authenticate extends Service
{

    public function login(Request $request)
    {
        $request->validate([
            "username" => ["required"],
            "password" => ["required"]
        ]);

        if (!Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return response([
                "message" => "WRONG!!!"
                // Just in case somthing change in the future how the request is handled we are using Symfony Respose codes
            ], Response::HTTP_UNAUTHORIZED);
        }

        // If user is autheticated We generate token and return it as string
        // the end user need to save-it somehow and when the next request is made by we check if the token gets a mach
        $user = Auth::user();

        $token = $user->createToken("HELLOWORLD");

        return $token->plainTextToken;
    }
}
