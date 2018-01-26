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
        for($i = 1; $i < 4; $i++)
        {
            $image = new Image();
            $image->filename = 'drumheller'.$i.'.jpg';
            $image->path = 'img/transport/1';
            $image->transport()->associate(Transport::find(1))->save();
        }

        for($i = 1; $i < 6; $i++)
        {
            $image = new Image();
            $image->filename = 'banff'.$i.'.jpg';
            $image->path = 'img/transport/3';
            $image->transport()->associate(Transport::find(3))->save();
        }

        for($i = 1; $i < 6; $i++)
        {
            $image = new Image();
            $image->filename = 'downtown'.$i.'.jpg';
            $image->path = 'img/transport/2';
            $image->transport()->associate(Transport::find(2))->save();
        }
    }
}
