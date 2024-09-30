<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_produto',
        'volume',
        'estoque',
        'preco_custo',
        'preco_venda_tabela_1',
        'preco_venda_tabela_2',
    ];
}
