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
        Schema::create('DOC_DOCUMENTO', function (Blueprint $table) {
            $table->id('DOC_ID');
            $table->string('DOC_NOMBRE', 50);
            $table->integer('DOC_CODIGO');
            $table->string('DOC_CONTENIDO', 4000);
            $table->foreignId('DOC_ID_TIPO')->constrained('TIP_TIPO_DOC', 'TIP_ID')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('DOC_ID_PROCESO')->constrained('PRO_PROCESO', 'PRO_ID')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DOC_DOCUMENTO');
    }
};
