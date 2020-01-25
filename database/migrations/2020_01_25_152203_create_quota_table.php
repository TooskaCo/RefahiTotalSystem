<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Quota', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Period_Place_ID')->nullable();
            $table->string('FromDate')->nullable();
            $table->string('ToDate')->nullable();
            $table->smallInteger('Grade')->nullable();
            $table->smallInteger('QuotaType')->nullable();
            $table->integer('DeclaredCapacity')->nullable();
            $table->integer('DisposalCapacity')->nullable();
            $table->integer('Price')->nullable();
            $table->integer('ExtraCapacity')->nullable();
            $table->integer('ExtraPeopleCount')->nullable();
            $table->boolean('IsLotteryResultConfrm')->nullable();
            $table->string('ConfirmBy')->nullable();
            $table->string('ConfirmTime')->nullable();
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
        Schema::dropIfExists('quota');
    }
}
