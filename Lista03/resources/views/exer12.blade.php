<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 12</title>
</head>
<body>
<body>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer12" method="POST" class="p-4 border rounded w-50">
            @csrf 
            <div class="mb-3">
                <label for="base" class="form-label">Insira a base</label>
                <input type="number" class="form-control" id="base" name="base" placeholder="Digite a base"/>
            </div>
            <div class="mb-3">
                <label for="expoente" class="form-label">Insira a expoente</label>
                <input type="number" class="form-control" id="expoente" name="expoente" placeholder="Digite o expoente"/>
            </div>              
            <button type="submit" class="btn btn-primary">Calcular a potência</button>
        </form>
    </div>
</body>
</html>

