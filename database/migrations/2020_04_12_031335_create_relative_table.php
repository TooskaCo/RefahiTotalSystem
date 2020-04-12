<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelativeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Relative', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Person_ID');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('NationalNumber')->nullable();
            $table->string('IdentificationNumber')->nullable();
            $table->smallInteger('RelativeType')->nullable();
            $table->string('BirthDate')->nullable();
            $table->boolean('IsDependent')->nullable();
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
        Schema::dropIfExists('Relative');
    }
}
