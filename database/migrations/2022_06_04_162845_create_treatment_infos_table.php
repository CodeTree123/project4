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
        Schema::create('treatment_infos', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable();
            $table->string('tooth_type')->nullable();
            $table->string('tooth_no')->nullable();
            $table->string('tooth_side')->nullable();
            $table->string('chife_complaints')->nullable();
            $table->string('clinical_findings')->nullable();
            $table->string('treatment_plans')->nullable();
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
        Schema::dropIfExists('treatment_infos');
    }
};
