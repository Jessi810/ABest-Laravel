<?php

use Illuminate\Database\Seeder;

use App\Transport;
use App\Package;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package = new Package();
        $package->size = 4;
        $package->price_1 = 150;
        $package->price_2 = 300;
        $package->transport()->associate(Transport::find(1))->save();

        $package = new Package();
        $package->size = 6;
        $package->price_1 = 100;
        $package->price_2 = 450;
        $package->transport()->associate(Transport::find(1))->save();
    }
}
