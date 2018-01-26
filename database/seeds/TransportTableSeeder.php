<?php

use Illuminate\Database\Seeder;

use App\Transport;

class TransportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transport = new Transport();
        $transport->name = 'CALGARY INTERNATIONAL AIRPORT to DRUMHELLER';
        $transport->source = 'CALGARY INTERNATIONAL AIRPORT';
        $transport->destination = 'DRUMHELLER';
        $transport->save();
    }
}
