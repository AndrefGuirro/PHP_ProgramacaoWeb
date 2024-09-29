<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 2</title>
</head>

<body>
    <div class="container mt-5 d-flex justify-content-center">
        <form action="/respostaexer2" method="POST" class="p-4 border rounded w-50">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">Valor 1</label>
                <input type="number" class="form-control" id="valor1" name="valor1"
                    placeholder="Digite o primeiro valor" />

                <label for="valor2" class="form-label">Valor 2</label>
                <input type="number" class="form-control" id="valor2" name="valor2"
                    placeholder="Digite o segundo valor" />


            </div>
            <button type="submit" class="btn btn-primary">Calcular a subtração</button>

        </form>
    </div>
</body>

</html>