<?php

namespace App\Http\Controllers;

use App\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(Request $request)
    {
        $book = new Booking();
        $book->name = $request->get('name');
        $book->email = $request->get('name');
        $book->message = $request->get('name');
        $book->date_inquired = Carbon::now();
        $book->save();

        return 0;
    }
}
