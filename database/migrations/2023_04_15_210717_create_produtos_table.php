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
        Schema::create('Produtos', function (Blueprint $table) {
            $table->string('Nome');
            $table->decimal('Custo', 19, 2);
            $table->decimal('Preco', 19, 2);
            $table->integer('Quantidade');
            $table->id();
            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
    Schema::dropIfExists('produtos');
    }
};