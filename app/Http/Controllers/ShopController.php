<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transport;

class ShopController extends Controller
{
    public function index()
    {
        $transports = Transport::with('packages', 'images')->get();
        
        return view('shop.index', compact([
            'transports'
        ]));
    }

    public function item($id)
    {
        $transport = Transport::with('packages', 'images')->find($id);

        return view('shop.item', compact([
            'transport'
        ]));
    }
}
