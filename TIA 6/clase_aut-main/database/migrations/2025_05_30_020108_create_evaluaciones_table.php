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
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->id();
        $table->foreignId('proyecto_id')->constrained('proyectos')->onDelete('cascade');
        $table->foreignId('evaluador_id')->constrained('evaluadores')->onDelete('cascade');
        $table->date('fecha');
        $table->integer('criterio1')->nullable();
        $table->integer('criterio2')->nullable();
        $table->integer('criterio3')->nullable();
        $table->text('observaciones')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluaciones');
    }
};
