<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Period', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title');
            $table->string('StartDate')->nullable();
            $table->string('EndDate')->nullable();
            $table->string('ReserveStartDate')->nullable();
            $table->string('ReserveEndDate')->nullable();
            $table->string('LotteryDate')->nullable();
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
        Schema::dropIfExists('period');
    }
}
