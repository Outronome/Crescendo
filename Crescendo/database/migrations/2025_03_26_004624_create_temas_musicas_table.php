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
        Schema::create('temas_musicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('musica_id')->constrained('musicas');
            $table->foreignId('tema_id')->constrained('temas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temas_musicas');
    }
};
