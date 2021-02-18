<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transportation;
use App\Schedulle;
use App\Airport;
<<<<<<< HEAD
use App\Helpers\Calc;
=======
use App\Payment;
>>>>>>> 1600c8a8aaf9c3bc3c8e4919c35cfe35d608e2db

class AjaxController extends Controller
{
	// Transportation Data Ajax
	public function postTransportation() {
		$data = Transportation::get();
    	return json_encode($data);
	}

	// Airport Data Ajax
	public function postAirport() {
    	$data = Airport::orderBy('name', 'asc')->get();
    	return json_encode($data);
    }

    // Airport Data Select2 Ajax With Search
    public function postSelectAirport(Request $request) {
    	if (empty($request->searchTerm)) {
	    	$data = Airport::orderBy('name', 'asc')->get();
    	}else {
    		$data = Airport::where('city', 'like', '%'.$request->searchTerm.'%')->orWhere('name', 'like', '%'.$request->searchTerm.'%')->orWhere('country', 'like', '%'.$request->searchTerm.'%')->orderBy('name', 'asc')->get();
    	}
    	return json_encode($data);
    }

    // Schedulle Data Ajax
	public function postSchedulle() {
		$data = Schedulle::get();
    	return json_encode($data);
	}

<<<<<<< HEAD
	// Get Distance & Calculate Price
	public function postDistancePrice(Request $request) {
		$response = Calc::price([
						'idTransportation'	=> $request->idTransportation,
						'from'				=> $request->from,
						'destination'		=> $request->destination,
					]);
		return json_encode($response);
=======
    public function postPayment() {
		$data = Payment::get();

    	return response()->json($data);
>>>>>>> 1600c8a8aaf9c3bc3c8e4919c35cfe35d608e2db
	}
}
