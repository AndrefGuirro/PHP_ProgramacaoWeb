<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 16</title>
</head>
<body>
<body>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer16" method="POST" class="p-4 border rounded w-50">
            @csrf 
            <div class="mb-3">
                <label for="preco" class="form-label">Insira o preço</label>
                <input type="number" class="form-control" id="preco" name="preco" step="0.01" required placeholder="Digite o preço"/>
            </div>
            <div class="mb-3">
                <label for="desconto" class="form-label">Insira a desconto</label>
                <input type="number" class="form-control" id="desconto" name="desconto" step="0.01" required placeholder="Digite o desconto"/>
            </div>              
            <button type="submit" class="btn btn-primary">Calcular valor com desconto</button>
        </form>
    </div>
</body>
</html>

