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
        Schema::create('schedule_validasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alat_ukur_id')->constrained('alat_ukurs')->onDelete('cascade');
            $table->date('validation_date');
            $table->date('revalidation_date')->nullabble()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schedule_validasis', function (Blueprint $table) {
            $table->dropColumn('revalidation_date');
        });
    }
};
