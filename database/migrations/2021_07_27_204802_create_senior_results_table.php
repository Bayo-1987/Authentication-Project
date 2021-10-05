<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeniorResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senior_results', function (Blueprint $table) {
            $table->id();
            $table->string('english');
            $table->string('mathematics');
            $table->string('chemistry');
            $table->string('physics');
            $table->string('economics');
            $table->string('biology');
            $table->string('computer');
            $table->string('government');
            $table->string('literature');
            $table->string('civic_education');
            $table->string('admission_num');
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
        Schema::dropIfExists('senior_results');
    }
}
