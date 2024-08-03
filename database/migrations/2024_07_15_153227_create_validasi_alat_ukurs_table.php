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
        Schema::create('validasi_alat_ukurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alat_ukur_id')->constrained('alat_ukurs')->onDelete('cascade');
            $table->date('validation_date');
            $table->string('upload_file_validation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validasi_alat_ukurs');
    }
};
