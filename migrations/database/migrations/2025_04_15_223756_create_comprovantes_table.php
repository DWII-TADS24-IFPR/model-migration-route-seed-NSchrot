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
        Schema::create('comprovantes', function (Blueprint $table) {
            $table->id();
            $table->integer('horas');
            $table->string('atividade');
            $table->integer('categoria_id')->nullable();
            $table->integer('aluno_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprovantes');
    }
};
