<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transport;

class ShopController extends Controller
{
    public function index()
    {
        $transports = Transport::with('packages')->get();

        return view('shop.index', compact([
            'transports'
        ]));
    }
}
