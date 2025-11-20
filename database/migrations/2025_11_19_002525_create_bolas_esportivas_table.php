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
        Schema::create('bolas_esportivas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('marca',50);
            $table->string('esporte',50);
            $table->integer('pressao_psi');
            $table->decimal('diametro',total:10,places:2);
            $table->boolean('padrao_campeonato');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bolas_esportivas');
    }
};
