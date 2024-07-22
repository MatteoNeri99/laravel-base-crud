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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nome_comune');
            $table->string('nome_scientifico');
            $table->string('specie');
            $table->date('data_di_nascita')->nullable();
            $table->decimal('peso', 8, 2)->nullable();
            $table->decimal('altezza', 8, 2)->nullable();
            $table->enum('sesso', ['maschio', 'femmina', 'altro'])->nullable();
            $table->string('colore')->nullable();
            $table->string('habitat')->nullable();
            $table->string('dieta')->nullable();
            $table->string('stato_di_conservazione')->nullable();
            $table->string('provenienza')->nullable();
            $table->string('microchip_id')->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
