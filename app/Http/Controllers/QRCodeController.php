<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QRCode;
use Illuminate\Support\Facades\ParallelTesting;
//use Validator;
use Illuminate\Support\Facades\Validator;


class QRCodeController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'card_id' => 'required',
            'qr_code' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        // Save the QR code data into the database
        QRCode::create([
            'card_id' => $request->input('card_id'),
            'qr_code' => $request->input('qr_code'),
        ]);

        return response()->json(['message' => 'QR code saved successfully'], 201);
    }

    public function show($cardId)
    {
        // Retrieve the QR code data for the specified card ID
        $qrCode = QRCode::where('card_id', $cardId)->first();

        // Check if the QR code data exists
        if (!$qrCode) {
            return response()->json(['error' => 'Card Not Found'], 404);
        }

        // Return the retrieved QR code data as a JSON response
        return response()->json(['qrCode' => $qrCode], 200);
    }
}

