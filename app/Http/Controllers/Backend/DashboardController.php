<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CallLog;
use App\Models\Payment;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $paymentCounts = Payment::count();
        // $userCounts = User::count();
        // $callLogsCount = CallLog::count();
        return view('backend.dashboard.index');
    }
}
