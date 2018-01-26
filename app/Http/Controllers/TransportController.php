<?php

namespace App\Http\Controllers;

use App\Transport;
use Illuminate\Http\Request;

use App\Http\Requests\TransportRequest;

use App\Image;
use App\Package;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransportRequest $request)
    {
        $transport = Transport::create($request->all());

        if ($request->has('images'))
        {
            foreach ($request->images as $image)
            {
                $filename = $image->store('img/transport/'.$transport->id, 'transport');
                Image::create([
                    'transport_id' => $transport->id,
                    'filename' => str_replace('img/transport/'.$transport->id.'/', '', $filename),
                    'path' => 'img/transport/'.$transport->id
                ]);
            }
        }

        $package = new Package();
        $package->size = $request->size[0];
        $package->price_1 = $request->price_1[0];
        $package->price_2 = $request->price_2[0];
        $package->transport()->associate($transport)->save();

        $package = new Package();
        $package->size = $request->size[1];
        $package->price_1 = $request->price_1[1];
        $package->price_2 = $request->price_2[1];
        $package->transport()->associate($transport)->save();

        return 'Upload successful!';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function show(Transport $transport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function edit(Transport $transport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transport $transport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transport $transport)
    {
        //
    }
}
