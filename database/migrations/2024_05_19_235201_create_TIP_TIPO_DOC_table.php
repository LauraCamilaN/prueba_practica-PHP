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
        Schema::create('TIP_TIPO_DOC', function (Blueprint $table) {
            $table->id('TIP_ID');
            $table->string('TIP_NOMBRE', 60);
            $table->string('TIP_PREFIJO', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TIP_TIPO_DOC');
    }
};
