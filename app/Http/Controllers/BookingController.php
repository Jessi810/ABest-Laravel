<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(Request $request, $id)
    {
        $package = Package::find($id);

        $book = new Booking();
        $book->name = $request->get('name');
        $book->email = $request->get('email');
        $book->message = $request->get('message');
        $book->date_inquired = Carbon::now();
        $book->package()->associate($package)->save();

        return 0;
    }
}
