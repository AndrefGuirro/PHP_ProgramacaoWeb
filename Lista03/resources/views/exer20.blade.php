<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 20</title>
</head>
<body>
<body>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer20" method="POST" class="p-4 border rounded w-50">
            @csrf 
            <div class="mb-3">
                <label for="distancia" class="form-label">Insira a distancia em km</label>
                <input type="number" class="form-control" id="distancia" name="distancia" placeholder="Digite a distancia km"/>
            </div>
            <div class="mb-3">
                <label for="tempo" class="form-label">Insira a tempo em horas</label>
                <input type="number" class="form-control" id="tempo" name="tempo" placeholder="Digite o tempo em horas"/>
            </div>              
            <button type="submit" class="btn btn-primary">Calcular a velocidade média</button>
        </form>
    </div>
</body>
</html>

