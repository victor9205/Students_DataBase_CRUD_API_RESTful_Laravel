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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->unique();
            $table->string('course');
            $table->string('description');
            $table->float('total_value');
            $table->integer('installments_number');
            $table->dateTime('installments_expiration_date');
            $table->float('fine');
            $table->boolean('comp_interest');
            $table->float('percent_interest');
            $table->dateTime('contract_expiration_date');
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
        Schema::dropIfExists('contracts');
    }
};
