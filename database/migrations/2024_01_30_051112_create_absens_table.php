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
            $table->date('tanggal');
            $table->enum('status', ['d', 'n', 's', 'i', 'cs', 'ct', 'cb', 'ce', 'o', 't', 'a'])->default('a');
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
