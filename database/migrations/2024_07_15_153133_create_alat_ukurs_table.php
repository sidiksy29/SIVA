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
        Schema::create('alat_ukurs', function (Blueprint $table) {
            $table->id();
            $table->string('assy_number');
            $table->string('assy_name');
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->string('registrasi_number')->unique();
            $table->date('release_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_ukurs');
    }
};
