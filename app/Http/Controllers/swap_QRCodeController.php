<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SwapCard;
use Firebase\JWT\JWT;


class swap_QRCodeController extends Controller
{
    public function receiveQRCode(Request $request)
    {
        // Validate incoming request (if necessary)

        // Extract QR code from the request
        $qrCode = $request->input('qr_code');

        // Save QR code in the database
        SwapCard::create(['qr_code' => $qrCode]);

        // Return success response
        return response()->json(['message' => 'QR code saved successfully'], 200);
    }

    public function makeSession(Request $request)
    {
        // Extract QR code from the request
        $qrCode = $request->input('qr_code');

        // Check if QR code exists in the database
        $swapCard = SwapCard::where('qr_code', $qrCode)->first();

        // If QR code not found, return error
        if (!$swapCard) {
            return response()->json(['error' => 'Doesn’t Exist'], 404);
        }

        // Generate JWT token against card number
        $token = JWT::encode(['card_number' => $swapCard->card_number], env('JWT_SECRET'));

        // Return JWT token
        return response()->json(['token' => $token]);
    }
}
