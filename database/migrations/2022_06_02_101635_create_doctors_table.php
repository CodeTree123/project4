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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->string('BMDC')->nullable();
            $table->string('nid')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('bDegree')->nullable();
            $table->string('mCollege')->nullable();
            $table->string('batch')->nullable();
            $table->string('session')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('professional_degree')->nullable();
            $table->string('speciality')->nullable();
            $table->boolean('role')->default(0);
            $table->boolean('status')->default(0);
            $table->boolean('verification')->default(0);
            $table->text('p_image')->nullable();
            $table->text('bmdc_image')->nullable();
            $table->text('postG_image')->nullable();
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
        Schema::dropIfExists('doctors');
    }
};
