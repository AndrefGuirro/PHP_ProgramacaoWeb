<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 5</title>
</head>
<body>
<body>
<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer5" method="POST" class="p-4 border rounded w-50">
            @csrf 
            <div class="mb-3">
                <label for="valor1" class="form-label">Nota 1</label>
                <input type="number" class="form-control" id="valor1" name="valor1" placeholder="Digite a primeira nota"/>
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Nota 2</label>
                <input type="number" class="form-control" id="valor2" name="valor2" placeholder="Digite a segunda nota"/>
            </div>
            <div class="mb-3">
                <label for="valor3" class="form-label">Nota 3</label>
                <input type="number" class="form-control" id="valor3" name="valor3" placeholder="Digite a terceira nota"/>
            </div>
            <button type="submit" class="btn btn-primary">Calcular a média</button>
        </form>
    </div>
</body>
</html>

