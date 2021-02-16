<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transportation;

class TransportationController extends Controller
{
    public function getIndex() {
    	$data['data'] = Transportation::get();
        return view('admin.transportation.main', $data);
    }
    public function getDistance() {
        // from Jakarta
        $latitudefrom = '-6.125567';

        $longitudefrom = '106.655897';


        // to surabaya
        $latitudeto = '-7.379831';

        $longitudeto = '112.786858';



        $theta = $longitudefrom - $longitudeto;

        $dist = sin(deg2rad($latitudefrom)) * sin(deg2rad($latitudeto)) + cos(deg2rad($latitudefrom)) * cos(deg2rad($latitudeto)) * cos(deg2rad($theta));

        $dist = acos($dist);

        $dist = rad2deg($dist);

        $miles = $dist * 60 * 1.1515;
        $distance = ($miles * 1.609344)." km";


        return $distance;
        // return 0;
    }

    public function postUpdate($id, Request $request) {
    	$data = Transportation::findOrFail($id);
	    	if (!empty($request->name)) {
	    		$data->name = $request->name;
	    	}
	    	if (!empty($request->economy_chair)) {
	    		$data->economy_chair = $request->economy_chair;
	    	}
            if (!empty($request->bussiness_chair)) {
                $data->bussiness_chair = $request->bussiness_chair;
            }
            if (!empty($request->first_chair)) {
                $data->first_chair = $request->first_chair;
            }
    	$save = $data->update();
    	if ($save) {
    		return 'Data Successfully Saved';
    	}else {
    		return 'Data Failed Saved';
    	}
    }

    public function postDestroy($id) {
    	$data = Transportation::findOrFail($id);
    	$delete = $data->delete();

    	if ($delete) {
    		return 'Data Successfully Deleted';
    	}else {
    		return 'Data Failed Deleted';
    	}
    }
}
