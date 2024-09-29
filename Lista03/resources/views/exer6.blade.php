<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 6</title>
</head>
<body>
<body>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer6" method="POST" class="p-4 border rounded w-50">
            @csrf 
            <div class="mb-3">
                <label for="celsius" class="form-label">Insira a temperatura em Celsius</label>
                <input type="number" class="form-control" id="celsius" name="celsius" placeholder="Digite a temperatura em celsius"/>
            </div>           
            <button type="submit" class="btn btn-primary">Converter para Fahrenheit</button>
        </form>
    </div>
</body>
</html>

