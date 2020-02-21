<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsers2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('UserName');
            $table->string('Password');
            $table->boolean('IsAdmin')->nullable();
            $table->boolean('IsExpert')->nullable();
            $table->boolean('IsGeneralUser')->nullable();
            $table->boolean('IsActive')->nullable();
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
        Schema::dropIfExists('users2');
    }
}
