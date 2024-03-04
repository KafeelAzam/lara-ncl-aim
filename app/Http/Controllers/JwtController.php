<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Config;

class JwtController extends Controller
{
    public function generateToken()
    {
        $userId = 1; // Example user ID
        $token = JWT::encode(['user_id' => $userId], Config::get('jwt.secret'));
        return response()->json(['token' => $token]);
    }

    // Add verifyToken method for token verification

//     public function verifyToken(Request $request)
// {
//     $token = $request->input('token');

//     try {
//         $decoded = JWT::decode($token, Config::get('jwt.secret'), ['HS256']);
//         $userId = $decoded->user_id;
//         return response()->json(['user_id' => $userId]);
//     } catch (\Exception $e) {
//         return response()->json(['error' => 'Invalid token'], 401);
//     }
    
// } 



}
