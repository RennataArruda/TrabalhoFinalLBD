<h1>Editar Cadastro</h1>
<?php
    $sql = "SELECT * FROM veiculo WHERE idveiculo=".$_REQUEST["idveiculo"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST"> 
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="idveiculo" value="<?php print $row->idveiculo; ?>">

    <div class="row">
        <div class="col-md-4 mb-3">
            <label style="color: #333;">Código:</label>
            <input type="text" name="cod_veiculo" disabled value="<?php print $row->cod_veiculo;?>" class="form-control">
        </div>

        <div class="col-md-4 mb-3">
            <label style="color: #333;">Marca:</label>
            <input type="text" name="marca" value="<?php print $row->marca;?>" class="form-control">
        </div>

        <div class="col-md-4 mb-3">
            <label style="color: #333;">Modelo:</label>
            <input type="text" name="modelo" value="<?php print $row->modelo;?>" class="form-control">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 mb-3">
            <label style="color: #333;">Ano:</label>
            <input type="text" name="ano" value="<?php print $row->ano;?>" class="form-control">
        </div>

        <div class="col-md-4 mb-3">
            <label style="color: #333;">Categoria:</label>
            <select name="idcategoria" class="custom-select d-block w-100">
                <?php
                    $sql = "SELECT * FROM categoria_veiculo";
                    $exibe = mysqli_query($conn, $sql);
                    while ($dados = mysqli_fetch_array($exibe)){
                        if ($row->idcategoria == $dados["idcategoria"]){
                            echo "<option value=".$dados["idcategoria"]." selected>".$dados["descricao"]."</option>";
                        } else {
                            echo "<option value=".$dados["idcategoria"].">".$dados["descricao"]."</option>";
                        }
                    }
                ?>
            </select>
        </div>

        <div class="col-md-4 mb-3">
            <label style="color: #333;">Tipo Combustão:</label>
            <select name="idcombustivel" class="custom-select d-block w-100">
                <?php
                    $sql = "SELECT * FROM combustivel_veiculo";
                    $exibe = mysqli_query($conn, $sql);
                    while ($dados = mysqli_fetch_array($exibe)){
                        if ($row->idcombustivel == $dados["idcombustivel"]){
                            echo "<option value=".$dados["idcombustivel"]." selected>".$dados["descricao"]."</option>";
                        } else {
                            echo "<option value=".$dados["idcombustivel"].">".$dados["descricao"]."</option>";
                        }
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <label style="color: #333;">Valor de Fábrica:</label>
            <input type="number" name="valorfabrica" value="<?php print $row->valorfabrica;?>" class="form-control">
        </div>

        <div class="col-md-4 mb-3">
            <label style="color: #333;">Valor de Venda:</label>
            <input type="number" name="valorvenda" value="<?php print $row->valorvenda;?>" class="form-control">
        </div>

        
        <div class="col-md-4 mb-3">
            <label style="color: #333;">Origem:</label>
            <select name="idorigem" class="custom-select d-block w-100">
                <?php
                    $sql = "SELECT * FROM origem_aquisicao";
                    $exibe = mysqli_query($conn, $sql);
                    while ($dados = mysqli_fetch_array($exibe)){
                        if ($row->idorigem == $dados["idorigem"]){
                            echo "<option value=".$dados["idorigem"]." selected>".$dados["descricao"]."</option>";
                        }else {
                            echo "<option value=".$dados["idorigem"].">".$dados["descricao"]."</option>";
                        }
                    }
                ?>
            </select>
        </div>
    </div>
    
    <div class="mb-3">
        <label style="color: #333;">Descricao:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3"><?php print $row->descricao;?></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" classe="btn btn-primary">Enviar</button>
    </div>

</form>