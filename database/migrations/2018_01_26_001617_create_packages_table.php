<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('transport_id')->unsigned()->index()->nullable();
            $table->foreign('transport_id')->references('id')->on('transports')->onDelete('cascade');

            $table->integer('size')->default(0);
            $table->decimal('price_1')->default(0.0);
            $table->decimal('price_2')->default(0.0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
