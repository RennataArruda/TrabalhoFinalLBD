<h1 style="color: #333;;">Lista de Cadastro</h1>

<?php
    $sql = "SELECT * FROM veiculo";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        echo "<table class='table table-hover table-striped table-bordered'>";
        
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Código</th>";
        echo "<th>Modelo</th>";
        echo "<th>Ano</th>";
        echo "<th>Descrição</th>";
        echo "<th>Ação</th>";
        echo "</tr>";

        while ($row = $res->fetch_object()) {
            echo "<tr>";
            echo "<td>".$row->idveiculo."</td>";
            echo "<td>".$row->cod_veiculo."</td>";
            echo "<td>".$row->modelo."</td>";
            echo "<td>".$row->ano."</td>";
            echo "<td>".$row->descricao."</td>";
            echo "<td>
                <button onclick=\"location.href='?page=editar&idveiculo=".$row->idveiculo."';\" class='btn btn-success'>Editar</button>
                <button onclick=\"location.href='?page=salvar&acao=excluir&idveiculo=".$row->idveiculo."';\" class='btn btn-danger'>Excluir</button>
            </td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>
