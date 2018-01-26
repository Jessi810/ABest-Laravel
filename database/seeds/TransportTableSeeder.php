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
        $transport->name = 'Calgary International Airport to Drumheller';
        $transport->source = 'Calgary International Airport';
        $transport->destination = 'Drumheller';
        $transport->save();

        $transport = new Transport();
        $transport->name = 'Calgary International Airport to Downtown';
        $transport->source = 'Calgary International Airport';
        $transport->destination = 'Downtown';
        $transport->save();

        $transport = new Transport();
        $transport->name = 'Calgary International Airport to Banff National Park';
        $transport->source = 'Calgary International Airport';
        $transport->destination = 'Banff National Park';
        $transport->save();
    }
}
