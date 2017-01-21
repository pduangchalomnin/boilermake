<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dines', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('uid')->index();
            $table->string('name')->index();
            $table->text('detail');
            $table->text('pic');
            $table->double('price')->index();
            $table->date('dineDate')->index();
            $table->time('timeStart')->index();
            $table->time('timeEnd')->index();
            $table->integer('seatMax')->index();
            $table->integer('seatAvailable');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE dines ADD location_lat POINT' );
        DB::statement('ALTER TABLE dines ADD location_lon POINT' );

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
