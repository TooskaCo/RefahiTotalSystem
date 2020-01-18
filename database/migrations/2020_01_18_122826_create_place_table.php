<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Place', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title');
            $table->integer('StateCity_ID')->nullable();
            $table->string('Phone',50)->nullable();
            $table->string('Address')->nullable();
            $table->string('EntryTime',50)->nullable();
            $table->string('ExitTime',50)->nullable();
            $table->integer('NegativeEffectDuration')->nullable();
            $table->string('Description')->nullable();
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
        Schema::dropIfExists('place');
    }
}
