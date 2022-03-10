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
        Schema::create('gifted_students', function (Blueprint $table) {
            $table->id();
			$table->string('name');
            $table->string('course');
            $table->string('contract');
            $table->boolean('gender');
            $table->string('RG');
            $table->string('CPF');
            $table->dateTime('b_date');
            $table->string('shift');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('tel');
            $table->string('cel');
            $table->string('CEP');
            $table->string('adress');
            $table->string('adress_comp');
            $table->string('expertice');
            $table->string('Test_level_result');
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
        Schema::dropIfExists('gifted_students');
    }
};
