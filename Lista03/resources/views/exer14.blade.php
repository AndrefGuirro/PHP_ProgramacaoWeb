<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 14</title>
</head>
<body>
<body>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer14" method="POST" class="p-4 border rounded w-50">
            @csrf 
            <div class="mb-3">
                <label for="medida" class="form-label">Insira a medida em quilômetros</label>
                <input type="number" class="form-control" id="medida" name="medida" step="0.01" required placeholder="Digite a medida em quilômetros"/>
            </div>
                          
            <button type="submit" class="btn btn-primary">Converter para milhas</button>
        </form>
    </div>
</body>
</html>

