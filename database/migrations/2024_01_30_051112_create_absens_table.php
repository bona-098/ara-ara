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
        Schema::create('absens', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('karyawan_id');
            $table->foreignId('karyawan_id')->constrained('karyawans');
            $table->foreignId('cuti_id')->nullable()->constrained('cutis')->onDelete('set null');
            $table->date('tanggal');
            $table->enum('day', ['hadir', 'sakit', 'izin', 'off', 'training', 'alpha'])->default('alpha');
            $table->enum('night', ['hadir', 'sakit', 'izin', 'off', 'training', 'alpha'])->default('alpha');
            $table->timestamps();
            // $table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absens');
    }
};
