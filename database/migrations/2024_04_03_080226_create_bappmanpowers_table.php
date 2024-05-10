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
        Schema::create('Bappmanpower', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karyawan_id')->constrained('karyawans');
            // $table->string('nama_manpower')->nullable();
            $table->string('service_product')->nullable();
            $table->string('service_product_desc')->nullable();
            $table->integer('mhr')->nullable();
            $table->unsignedBigInteger('bappunit_id');
            $table->foreign('bappunit_id')->references('id')->on('Bappunit')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Bappmanpowers');
    }
};
