<?php require("cabecalho.php"); ?>
<h1>Exercício 7</h1>
<form action="exer7.php" method="post">
    <div class="row">
        <div class="col">
            <label for="prazo_projeto" class="form-label">Prazo para finalização do projeto (em dias):</label>
            <input type="number" name="prazo_projeto" id="prazo_projeto" class="form-control"/>
        </div>
        <div class="col">
            <label for="atividades_total" class="form-label">Total de atividades do projeto:</label>
            <input type="number" name="atividades_total" id="atividades_total" class="form-control"/>
        </div>
        <div class="col">
            <label for="atividades_concluidas" class="form-label">Atividades já desenvolvidas:</label>
            <input type="number" name="atividades_concluidas" id="atividades_concluidas" class="form-control"/>
        </div>
        <div class="col">
            <label for="produtividade_diaria" class="form-label">Atividades que a equipe desenvolve por dia:</label>
            <input type="number" name="produtividade_diaria" id="produtividade_diaria" class="form-control"/>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Avaliar Desempenho</button>
        </div>
    </div>
</form>

<?php 
    if ($_POST) {
        $prazo_projeto = intval($_POST['prazo_projeto']);
        $atividades_total = intval($_POST['atividades_total']);
        $atividades_concluidas = intval($_POST['atividades_concluidas']);
        $produtividade_diaria = intval($_POST['produtividade_diaria']);

        
        $atividades_restantes = $atividades_total - $atividades_concluidas;

       
        $dias_restantes = ceil($atividades_restantes / $produtividade_diaria);

        
        if ($dias_restantes <= $prazo_projeto) {
            echo "<p>O projeto está dentro do prazo. Estimativa de conclusão em $dias_restantes dias.</p>";
        } else {
            echo "<p>O projeto está atrasado. Serão necessários $dias_restantes dias para concluir.</p>";
        }
    }

    require("rodape.php"); 
?>
