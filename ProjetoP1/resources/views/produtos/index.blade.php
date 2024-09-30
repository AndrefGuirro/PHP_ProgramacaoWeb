<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Lista de Produtos</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('produtos.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Produto</a>

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nome do Produto</th>
                    <th>Preço Custo</th>
                    <th>Preço Venda Tabela 1</th>
                    <th>Preço Venda Tabela 2</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome_produto }}</td>
                        <td>R$ {{ number_format($produto->preco_custo, 2, ',', '.') }}</td>
                        <td>R$ {{ number_format($produto->preco_venda_tabela_1, 2, ',', '.') }}</td>
                        <td>R$ {{ number_format($produto->preco_venda_tabela_2, 2, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('produtos.edit', $produto) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('produtos.destroy', $produto) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
