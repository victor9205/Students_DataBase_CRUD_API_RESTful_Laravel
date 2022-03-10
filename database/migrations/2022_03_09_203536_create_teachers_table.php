<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('course');
            $table->string('contract_id');
            $table->string('position');
            $table->string('academic_level');
            $table->string('gender');
            $table->string('RG');
            $table->string('CPF');
            $table->dateTime('b_date');
            $table->string('fathers_name');        
            $table->string('mothers_name');
            $table->float('salary');
            $table->string('tel');
            $table->string('cel');
            $table->string('CEP');
            $table->string('adress');
            $table->string('adress_comp');
            $table->dateTime('addmission_date');
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
        Schema::dropIfExists('teachers');
    }
};
