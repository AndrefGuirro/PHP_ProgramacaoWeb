<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 19</title>
</head>
<body>
<body>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer19" method="POST" class="p-4 border rounded w-50">
            @csrf 
            <div class="mb-3">
                <label for="dias" class="form-label">Insira a dias</label>
                <input type="number" class="form-control" id="dias" name="dias" placeholder="Digite a quantidade de dias"/>
            </div>
                        
            <button type="submit" class="btn btn-primary">Calcular horas, minutos e segundos</button>
        </form>
    </div>
</body>
</html>

