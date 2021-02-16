<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Schedulle;
use App\Transportation;
use Carbon\Carbon;

class SchedulleController extends Controller
{
    public function getIndex() {
    	$data['data'] = Schedulle::orderBy('date', 'DESC')->get();
    	
    	return view('admin.schedulle.main', $data);
    }

    public function getAdd() {
    	return view('admin.schedulle.form');
    }
}
