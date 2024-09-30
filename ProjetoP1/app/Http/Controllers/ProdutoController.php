<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Lista todos os produtos
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    // Exibe o formulário para criar um novo produto
    public function create()
    {
        return view('produtos.create');
    }

    // Armazena um novo produto
    public function store(Request $request)
    {
        $request->validate([
            'nome_produto' => 'required|string|max:255',
            'volume' => 'required|numeric',
            'estoque' => 'required|integer',
            'preco_custo' => 'required|numeric',
            'preco_venda_tabela_1' => 'required|numeric',
            'preco_venda_tabela_2' => 'required|numeric',
        ]);

        Produto::create($request->all());

        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso.');
    }

    // Exibe o formulário para editar um produto
    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    // Atualiza um produto
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome_produto' => 'required|string|max:255',
            'volume' => 'required|numeric',
            'estoque' => 'required|integer',
            'preco_custo' => 'required|numeric',
            'preco_venda_tabela_1' => 'required|numeric',
            'preco_venda_tabela_2' => 'required|numeric',
        ]);

        $produto->update($request->all());

        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso.');
    }

    // Remove um produto
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso.');
    }
}
