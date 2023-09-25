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
        Schema::create('obras', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo',['Livro','DVD']);
            $table->string('nome',255);
            $table->float('preco',6,2,true);
            $table->unsignedInteger('exemplares');
            $table->boolean('disponivel');
            $table->string('isbn',50)->nullable()->unique(); // Para Livro
            $table->text('descr')->nullable(); // Para Livro
            $table->unsignedInteger('duracao')->nullable(); // Para DVD
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obras');
    }
};
