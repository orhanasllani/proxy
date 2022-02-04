<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Token extends Service
{

    public function generate()
    {
        
        $user = Auth::user();

        $token = $user->createToken("HELLOWORLD");

        return $token->plainTextToken;
    }
}
