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
        Schema::create('motos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mr');
            $table->integer('kmat');
            $table->integer('kmoleo');
            $table->integer('kmfiltro');
            $table->string('manutencao');
            $table->boolean('revitalizacao');
            $table->string('data_revitalizacao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motos');
    }
};
