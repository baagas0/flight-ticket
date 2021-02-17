<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CallbackController extends Controller
{
    public function callback(Request $request)
	{
		$data = file_get_contents("php://input");
		$callbackSignature = $request->header('X-Callback-Signature') ?? '';
		$signature = hash_hmac('sha256', $data, config('services.tripay.private'));

		if( $callbackSignature !== $signature ) {
			exit("Invalid Signature");
		}

		$event = $request->header('X_CALLBACK_EVENT');

		if( $event == 'payment_status' )
		{
			if( $request->status == 'PAID' )
			{
				PaymentService::callback($request->merchant_ref);
			}
		}

		return response()->json(['success' => true]);

	}
}
