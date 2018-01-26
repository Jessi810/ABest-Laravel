<?php

use Illuminate\Database\Seeder;

use App\Image;
use App\Transport;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = new Image();
        $image->filename = 'seed.jpg';
        $image->path = 'img/transport/seed';
        $image->transport()->associate(Transport::find(1))->save();

        $image = new Image();
        $image->filename = 'seed.jpg';
        $image->path = 'img/transport/seed';
        $image->transport()->associate(Transport::find(2))->save();

        $image = new Image();
        $image->filename = 'seed.jpg';
        $image->path = 'img/transport/seed';
        $image->transport()->associate(Transport::find(3))->save();
    }
}
