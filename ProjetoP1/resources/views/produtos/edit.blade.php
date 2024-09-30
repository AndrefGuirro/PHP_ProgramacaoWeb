<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Produto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome_produto" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="nome_produto" name="nome_produto" value="{{ $produto->nome_produto }}" required>
            </div>

            <div class="mb-3">
                <label for="volume" class="form-label">Volume</label>
                <input type="number" class="form-control" id="volume" name="volume" step="0.01" value="{{ $produto->volume }}" required>
            </div>

            <div class="mb-3">
                <label for="estoque" class="form-label">Estoque</label>
                <input type="number" class="form-control" id="estoque" name="estoque" value="{{ $produto->estoque }}" required>
            </div>

            <div class="mb-3">
                <label for="preco_custo" class="form-label">Preço de Custo</label>
                <input type="number" class="form-control" id="preco_custo" name="preco_custo" step="0.01" value="{{ $produto->preco_custo }}" required>
            </div>

            <div class="mb-3">
                <label for="preco_venda_tabela_1" class="form-label">Preço de Venda Tabela 1</label>
                <input type="number" class="form-control" id="preco_venda_tabela_1" name="preco_venda_tabela_1" step="0.01" value="{{ $produto->preco_venda_tabela_1 }}" required>
            </div>

            <div class="mb-3">
                <label for="preco_venda_tabela_2" class="form-label">Preço de Venda Tabela 2</label>
                <input type="number" class="form-control" id="preco_venda_tabela_2" name="preco_venda_tabela_2" step="0.01" value="{{ $produto->preco_venda_tabela_2 }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>

        <a href="{{ route('produtos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
