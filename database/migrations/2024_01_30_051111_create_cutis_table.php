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
        Schema::create('cutis', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('karyawan_id');
            $table->foreignId('karyawan_id')->constrained('karyawans');
            $table->string('keperluan');
            $table->date('awal_cuti');
            $table->date('akhir_cuti');
            $table->integer('total_cuti')->default(10); // Default 10 cuti
            $table->string('sisa_cuti');
            $table->enum('status', ['site', 'tahunan', 'besar', 'emergency'])->default('tahunan');
            $table->enum('periode_cuti', ['3bulanan', 'tahunan'])->default('tahunan');
            $table->timestamps();
            // $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutis');
    }
};
