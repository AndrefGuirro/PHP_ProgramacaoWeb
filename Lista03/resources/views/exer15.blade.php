<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 15</title>
</head>
<body>
<body>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer15" method="POST" class="p-4 border rounded w-50">
            @csrf 
            <div class="mb-3">
                <label for="altura" class="form-label">Insira a altura</label>
                <input type="number" class="form-control" id="altura" name="altura" step="0.01" required placeholder="Digite a altura"/>
            </div>
            <div class="mb-3">
                <label for="peso" class="form-label">Insira a peso</label>
                <input type="number" class="form-control" id="peso" name="peso" step="0.01" required placeholder="Digite o peso"/>
            </div>              
            <button type="submit" class="btn btn-primary">Calcular o IMC</button>
        </form>
    </div>
</body>
</html>

