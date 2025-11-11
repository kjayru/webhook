<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function verify()
    {
        return response()->json(['status' => 'ok'], 200);
    }

    public function handle(Request $request)
    {
        Log::info('Webhook recibido', ['payload' => $request->all()]);

        return response()->json(['received' => true], 200);
    }
}
