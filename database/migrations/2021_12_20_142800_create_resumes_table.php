<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('experience_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('skill_id')->nullable();
            $table->string('name');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('phone');
            $table->string('postal');
            $table->string('summary');
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
        Schema::dropIfExists('resumes');
    }
}
