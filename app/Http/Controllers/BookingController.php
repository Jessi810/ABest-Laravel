<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;

use App\Mail\BookingEmail;
use Mail;

class BookingController extends Controller
{
    public function booking(BookingRequest $request, $id)
    {
        $package = Package::find($id);

        $book = new Booking();
        $book->name = $request->get('name');
        $book->email = $request->get('email');
        $book->message = $request->get('message');
        $book->date_inquired = Carbon::now();
        $book->package()->associate($package)->save();

        Mail::to('jessisibayan@gmail.com')->send(new BookingEmail($book));

        return 0;
    }
}
