<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Bappunit', function (Blueprint $table) {
            $table->id();
            $table->date('hari_tanggal')->nullable();
            $table->string('no_quotation')->nullable();
            $table->string('no_code_unit')->nullable();
            $table->string('no_model')->nullable();
            $table->date('job_time_start_date')->nullable();
            $table->time('job_time_start_time')->nullable();
            $table->date('job_time_finish_date')->nullable();
            $table->time('job_time_finish_time')->nullable();
            $table->string('wo')->nullable();
            $table->integer('mhr_total')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Bappunits');
    }
};
