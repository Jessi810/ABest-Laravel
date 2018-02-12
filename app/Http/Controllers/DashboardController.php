<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $count_transports = DB::table('transports')->count();
        $count_users = DB::table('users')->count();
        $count_recent_bookings = DB::table('bookings')->where('created_at', '>=', Carbon::now()->subDays(7))->count();
        $count_total_bookings = DB::table('bookings')->count();

        return view('admin.dashboard', compact(['count_transports', 'count_users', 'count_total_bookings', 'count_recent_bookings']));
    }
}
