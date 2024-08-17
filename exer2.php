<?php require("cabecalho.php"); ?>
<h1>Atividade 2</h1>
<form action="exercicio2.php" method="post">
    <div class="linha">
        <div class="coluna">
            <label for="horas" class="form-label">
                Total de horas trabalhadas no mês:
            </label>
            <input type="number" name="horas" id="horas" class="form-control"/>
        </div>
        <div class="coluna">
            <label for="valor" class="form-label">
                Valor por hora trabalhada:
            </label>
            <input type="number" name="valor" id="valor" step="0.01" class="form-control"/>
        </div>
    </div>
    <div class="linha">
        <div class="coluna">
            <button type="submit" class="btn btn-primary">Calcular Salário</button>
        </div>
    </div>
</form>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $horas = floatval($_POST['horas']);
        $valor = floatval($_POST['valor']);

        $salario_mensal = ($horas / 4) * $valor;

        echo "<p>O salário semanal é: R$ " . number_format($salario_mensal, 2, ',', '.') . "</p>";
    }

    require("rodape.php"); 
?>
