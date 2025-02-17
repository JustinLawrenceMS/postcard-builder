<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Message;
use App\Models\Recipient;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function save(Request $request): JsonResponse
    { 
        $recipient = Recipient::create([
            'name' => $request->input('name'),
            'street_1'  => $request->input('street_1'), 
            'street_2'  => $request->input('street_2') ?? null,
            'city'  => $request->input('city'),
            'state'  => $request->input('state'),
            'zip_code'  => $request->input('zip_code')
        ]);

        $message = Message::create([
            'recipient_id' => $recipient->id,
            'message' => $request->message
        ]);

        return response()->json([
            'message'=> $message,
            'recipient'=> $recipient
        ]);
        
    }
}
