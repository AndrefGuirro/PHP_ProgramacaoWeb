<?php require("cabecalho.php"); ?>
<h1>Exercício 6</h1>
<form action="exer6.php" method="post">
    <div class="row">
        <div class="col">
            <label for="horas_previstas" class="form-label">Horas previstas:</label>
            <input type="number" name="horas_previstas" id="horas_previstas" step="0.1" class="form-control"/>
        </div>
        <div class="col">
            <label for="taxa_hora" class="form-label">Taxa por hora (R$):</label>
            <input type="number" name="taxa_hora" id="taxa_hora" step="0.01" class="form-control"/>
        </div>
        <div class="col">
            <label for="custos_adicionais" class="form-label">Custos adicionais (R$):</label>
            <input type="number" name="custos_adicionais" id="custos_adicionais" step="0.01" class="form-control"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular Custo do Projeto</button>
        </div>
    </div>
</form>

<?php 
    if ($_POST) {
        $horas_previstas = floatval($_POST['horas_previstas']);
        $taxa_hora = floatval($_POST['taxa_hora']);
        $custos_adicionais = floatval($_POST['custos_adicionais']);
        
        
        $custo_mao_obra = $horas_previstas * $taxa_hora;
        
        
        $custo_total_projeto = $custo_mao_obra + $custos_adicionais;

        echo "<p>O custo de mão de obra é: R$ " . number_format($custo_mao_obra, 2, ',', '.') . "</p>";
        echo "<p>O custo total do projeto é: R$ " . number_format($custo_total_projeto, 2, ',', '.') . "</p>";
    }

    require("rodape.php"); 
?>
