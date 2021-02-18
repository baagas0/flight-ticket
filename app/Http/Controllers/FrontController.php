<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedulle;
use Illuminate\Console\Scheduling\Schedule;

class FrontController extends Controller
{
    public function index()
    {
        return view('user.home');
    }

    public function schedules()
    {
        $schedules = Schedulle::paginate(9);

        return view('user.schedules', compact('schedules'));
    }

    public function schedule($id)
    {
        $schedule = Schedulle::findOrFail($id);

        return view('user.schedule', compact('schedule'));
    }
}
