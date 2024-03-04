<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QRgetData;
//use Validator;
use Illuminate\Support\Facades\Validator;



class QRgetDataController extends Controller
{
    public function store(Request $request){
        $validation = Validator::make($request->all(),[
            'id' => 'required|min:1|max256',
            'qrcode' => 'required|min:12|max12',
        ]);

        if($validation->fails())
        {
            return response()->json([
                'status'=>422,
                'message'=>$validation->messages
            ], 422);
        }
        else{
            $qrgetdata = new QRgetData;
            $qrgetdata->id = $request->id;
            $qrgetdata->qrcode = $request->qrcode;
            $qrgetdata->save();

            return response()->json([
                'status'=>200,
                'message'=>'QR Data inserted successfully '
            ], 200);

        }
    }
}
