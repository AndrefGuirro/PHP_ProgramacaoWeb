<?php require("cabecalho.php"); ?>
<h1>Exercício 5</h1>
<form action="exer5.php" method="post">
    <div class="row">
        <div class="col">
            <label for="dias_trabalhados" class="form-label">Informe o total de dias trabalhados:</label>
            <input type="number" name="dias_trabalhados" id="dias_trabalhados" class="form-control"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular Dias de Férias</button>
        </div>
    </div>
</form>

<?php 
    if ($_POST) {
        $dias_trabalhados = intval($_POST['dias_trabalhados']);
        
        
        $dias_ferias = floor($dias_trabalhados / 30);
        
       
        if ($dias_ferias > 30) {
            $dias_ferias = 30;
        }

        echo "<p>O funcionário tem direito a <strong>$dias_ferias</strong> dias de férias.</p>";
    }

    require("rodape.php"); 
?>
