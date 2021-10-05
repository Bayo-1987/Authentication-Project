<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuniorResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('junior_results', function (Blueprint $table) {
            $table->id();
            $table->string('english');
            $table->string('mathematics');
            $table->string('basic_science');
            $table->string('home_economics');
            $table->string('french');
            $table->string('basic_tech');
            $table->string('computer');
            $table->string('social_studies');
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
        Schema::dropIfExists('junior_results');
    }
}
