<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function show(Message $message): Message
    {
        return $message;
    }
    public function store(Request $request): Message
    {
        $message = Message::create([
            'recipient_id' => $request->recipient_id,
            'message' => $request->message
        ]);

        return $message;
    }
}
