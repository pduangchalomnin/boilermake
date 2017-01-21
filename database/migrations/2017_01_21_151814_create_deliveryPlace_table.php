<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryPlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveryPlaces', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE dines ADD pickup_lat POINT' );
        DB::statement('ALTER TABLE dines ADD pickup_lon POINT' );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
