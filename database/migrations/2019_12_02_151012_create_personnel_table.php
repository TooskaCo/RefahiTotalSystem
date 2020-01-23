<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personnel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('NationalNumber')->nullable();
            $table->string('PersonnelNumber')->nullable();
            $table->integer('GenderType')->nullable();
            $table->integer('MaritalStatus')->nullable();
            $table->string('IdentificationNumber')->nullable();
            $table->string('BirthDate')->nullable();
            $table->integer('EmploymentType')->nullable();
            $table->string('CooperationStartDate')->nullable();
            $table->string('CooperationEndDate')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->string('Password')->nullable();
            $table->boolean('IsActive')->nullable();
            $table->boolean('IsLogicalDeleted')->nullable();
            $table->timestamps();
        });

        /*Schema::table('Personnel', function($table)
        {
            $table->string('FirstName', 470)->nullable(false)->change();
            $table->string('MaritalStatus')->nullable(false)->change();
        });**/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Personnel');
    }
}
