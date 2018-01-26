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
        $package->price_1 = 150;
        $package->price_2 = 450;
        $package->transport()->associate(Transport::find(1))->save();

        $package = new Package();
        $package->size = 4;
        $package->price_1 = 100;
        $package->price_2 = 175;
        $package->transport()->associate(Transport::find(2))->save();

        $package = new Package();
        $package->size = 6;
        $package->price_1 = 150;
        $package->price_2 = 250;
        $package->transport()->associate(Transport::find(2))->save();

        $package = new Package();
        $package->size = 4;
        $package->price_1 = 200;
        $package->price_2 = 350;
        $package->transport()->associate(Transport::find(3))->save();

        $package = new Package();
        $package->size = 6;
        $package->price_1 = 319;
        $package->price_2 = 500;
        $package->transport()->associate(Transport::find(3))->save();
    }
}
