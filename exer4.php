<?php require("cabecalho.php"); ?>
<h1>Exercício 4</h1>
<form action="exer4.php" method="post">
    <div class="row">
        <div class="col">
            <h3>Dados da Tarefa</h3>
            <label for="nome_tarefa" class="form-label">Nome da Tarefa:</label>
            <input type="text" name="nome_tarefa" id="nome_tarefa" class="form-control"/>
            
            <label for="horas_tarefa" class="form-label">Total de Horas da Tarefa:</label>
            <input type="number" name="horas_tarefa" id="horas_tarefa" class="form-control"/>
            
            <label for="complexidade" class="form-label">Complexidade da Tarefa:</label>
            <select name="complexidade" id="complexidade" class="form-control">
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
        </div>
        <div class="col">
            <h3>Dados do Funcionário</h3>
            <label for="nome_funcionario" class="form-label">Nome do Funcionário:</label>
            <input type="text" name="nome_funcionario" id="nome_funcionario" class="form-control"/>
            
            <label for="horas_disponiveis" class="form-label">Horas Disponíveis de Trabalho:</label>
            <input type="number" name="horas_disponiveis" id="horas_disponiveis" class="form-control"/>
            
            <label for="experiencia" class="form-label">Nível de Experiência:</label>
            <select name="experiencia" id="experiencia" class="form-control">
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Verificar Possibilidade</button>
        </div>
    </div>
</form>

<?php 
    if ($_POST) {
        $nome_tarefa = htmlspecialchars($_POST['nome_tarefa']);
        $horas_tarefa = floatval($_POST['horas_tarefa']);
        $complexidade = $_POST['complexidade'];

        $nome_funcionario = htmlspecialchars($_POST['nome_funcionario']);
        $horas_disponiveis = floatval($_POST['horas_disponiveis']);
        $experiencia = $_POST['experiencia'];
     
       
        $tempo_suficiente = $horas_disponiveis >= $horas_tarefa * 1.1;

        $pode_realizar = false;
        if ($experiencia == 'junior' && $complexidade == 'baixa') {
            $pode_realizar = true;
        } elseif ($experiencia == 'pleno' && ($complexidade == 'baixa' || $complexidade == 'media')) {
            $pode_realizar = true;
        } elseif ($experiencia == 'senior' && ($complexidade == 'media' || $complexidade == 'alta')) {
            $pode_realizar = true;
        }
       
        if ($tempo_suficiente && $pode_realizar) {
            echo "<p>O funcionário <strong>$nome_funcionario</strong> pode realizar a tarefa <strong>$nome_tarefa</strong>.</p>";
        } else {
            echo "<p>O funcionário <strong>$nome_funcionario</strong> <strong>não pode</strong> realizar a tarefa <strong>$nome_tarefa</strong>.</p>";
        }
    }

    require("rodape.php"); 
?>
