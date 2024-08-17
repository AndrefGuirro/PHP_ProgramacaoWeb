<?php require("cabecalho.php"); ?>
<h1>Exercício 3</h1>
<form action="exer3.php" method="post">
    <div class="row">
        <div class="col">
            <label for="lucros" class="form-label">
                Informe o valor dos lucros a serem distribuídos:
            </label>
            <input type="number" name="lucros" id="lucros" step="0.01" class="form-control"/>
        </div>
        <div class="col">
            <label for="nome_funcionario" class="form-label">
                Informe o nome do funcionário:
            </label>
            <input type="text" name="nome_funcionario" id="nome_funcionario" class="form-control"/>
        </div>
        <div class="col">
            <label for="desempenho" class="form-label">
                Informe o desempenho do funcionário (1 a 5):
            </label>
            <input type="number" name="desempenho" id="desempenho" min="1" max="5" class="form-control"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular Bônus</button>
        </div>
    </div>
</form>

<?php 
    if ($_POST) {
        $lucros = floatval($_POST['lucros']);
        $nome_funcionario = htmlspecialchars($_POST['nome_funcionario']);
        $desempenho = intval($_POST['desempenho']);
        
        // Definir a porcentagem de bônus com base no desempenho
        $porcentagem_bonus = 0.0;
        switch ($desempenho) {
            case 1:
                $porcentagem_bonus = 0.001; // 0,1%
                break;
            case 2:
                $porcentagem_bonus = 0.002; // 0,2%
                break;
            case 3:
                $porcentagem_bonus = 0.003; // 0,3%
                break;
            case 4:
                $porcentagem_bonus = 0.005; // 0,4%
                break;
            case 5:
                $porcentagem_bonus = 0.007; // 0,5%
                break;
            default:
                echo "<p>Desempenho inválido. Insira um valor de 1 a 5.</p>";
                exit;
        }
        
        // Calcular o bônus
        $bonus = $lucros * $porcentagem_bonus;

        echo "<p>O funcionário <strong>$nome_funcionario</strong> receberá um bônus de: R$ " . number_format($bonus, 2, ',', '.') . "</p>";
    }

    require("rodape.php"); 
?>