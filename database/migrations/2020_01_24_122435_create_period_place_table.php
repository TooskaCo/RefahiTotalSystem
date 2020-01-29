<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodPlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PeriodPlace', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Period_ID')->nullable();
            $table->integer('Place_ID')->nullable();
            $table->integer('DeclaredCapacity')->nullable();
            $table->integer('DisposalCapacity')->nullable();
            $table->smallInteger('QuotaType')->nullable();
            $table->integer('Price')->nullable();
            $table->integer('QuotaDuration')->nullable();
            $table->integer('ExtraCapacity')->nullable();
            $table->integer('ExtraPeopleCount')->nullable();
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
        Schema::dropIfExists('period_place');
    }
}
