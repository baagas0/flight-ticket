<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transportation;
use App\Schedulle;
use App\Airport;
use App\Payment;

class AjaxController extends Controller
{
	public function postTransportation() {
		$data = Transportation::get();
    	return json_encode($data);
	}

	public function postAirport() {
    	$data = Airport::orderBy('name', 'desc')->get();
    	return json_encode($data);
    }

	public function postSchedulle() {
		$data = Schedulle::get();
    	return json_encode($data);
	}

    public function postPayment() {
		$data = Payment::get();

    	return response()->json($data);
	}
}
