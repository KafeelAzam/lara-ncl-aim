<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SwapStationData;

class SwapStationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'field1' => 'required',
            'field2' => 'required',
            // Add more fields as necessary
        ]);

        // Create a new instance of SwapStationData model
        $swapStationData = new SwapStationData();
        $swapStationData->field1 = $validatedData['field1'];
        $swapStationData->field2 = $validatedData['field2'];
        // Set other fields accordingly

        // Save the data to the database
        $swapStationData->save();

        // Return a response
        return response()->json(['message' => 'Data inserted successfully'], 201);
    }
}
