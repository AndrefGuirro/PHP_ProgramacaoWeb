<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 8</title>
</head>
<body>
<body>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer8" method="POST" class="p-4 border rounded w-50">
            @csrf 
            <div class="mb-3">
                <label for="altura" class="form-label">Insira a altura</label>
                <input type="number" class="form-control" id="altura" name="altura" placeholder="Digite a altura"/>
            </div>
            <div class="mb-3">
                <label for="largura" class="form-label">Insira a largura</label>
                <input type="number" class="form-control" id="largura" name="largura" placeholder="Digite a largura"/>
            </div>              
            <button type="submit" class="btn btn-primary">Calcular a área do retângulo</button>
        </form>
    </div>
</body>
</html>

