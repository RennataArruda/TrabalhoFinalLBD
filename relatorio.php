<h1 style="color: #333;">Relatório por Categoria</h1>
<?php
    $sql = "SELECT * FROM aquisicao_categoria";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        echo "<table class='table table-hover table-striped table-bordered'>";
        
        echo "<tr>";
        echo "<th>Categoria</th>";
        echo "<th>Total Veículos</th>";
        echo "<th>Valor Fábrica Total</th>";
        echo "<th>Valor Venda Total</th>";
        echo "</tr>";

        while ($row = $res->fetch_object()) {
            echo "<tr>";
            echo "<td>".$row->categoriatermo."</td>";
            echo "<td>".$row->qtd_veiculo."</td>";
            echo "<td>".$row->valorfabricatotal."</td>";
            echo "<td>".$row->valorvendatotal."</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>

