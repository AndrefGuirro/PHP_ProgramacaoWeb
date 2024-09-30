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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto'); // Nome do produto
            $table->decimal('volume', 8, 2); // Volume (ml ou litros)
            $table->integer('estoque'); // Quantidade em estoque
            $table->decimal('preco_custo', 10, 2); // Preço de custo
            $table->decimal('preco_venda_tabela_1', 10, 2); // Preço de venda Tabela 1
            $table->decimal('preco_venda_tabela_2', 10, 2); // Preço de venda Tabela 2
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
