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
        Schema::create('HIS_HISTORIAL_REGISTRO', function (Blueprint $table) {
            $table->id('HIS_ID');
            $table->integer('HIS_CONSECUTIVO');
            $table->foreignId('HIS_ID_DOCUMENTO')->constrained('DOC_DOCUMENTO', 'DOC_ID')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HIS_HISTORIAL_REGISTRO');
    }
};
