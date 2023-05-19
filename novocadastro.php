<h1 style="color: #333;">Novo Cadastro</h1>

<form action="?page=salvar" method="POST"> 
    <input type="hidden" name="acao" value="cadastrar">

    <div class="row">
        <div class="col-md-4 mb-3">
            <label style="color: #333;">Código:</label>
            <input type="text" required name="cod_veiculo" class="form-control">
        </div>

        <div class="col-md-4 mb-3">
            <label style="color: #333;">Marca:</label>
            <input type="text" required name="marca" class="form-control">
        </div>

        <div class="col-md-4 mb-3">
            <label style="color: #333;">Modelo:</label>
            <input type="text" required name="modelo" class="form-control">
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 mb-3">
            <label style="color: #333;">Ano:</label>
            <input type="text" name="ano" class="form-control">
        </div>

        <div class="col-md-4 mb-3">
            <label style="color: #333;">Categoria:</label>
            <select name="idcategoria" required class="custom-select d-block w-100">
                <?php
                    $sql = "SELECT * FROM categoria_veiculo";
                    $exibe = mysqli_query($conn, $sql);
                    while ($dados = mysqli_fetch_array($exibe)){
                        echo "<option value=".$dados["idcategoria"].">".$dados["descricao"]."</option>";
                    }
                ?>
            </select>
        </div>

        <div class="col-md-4 mb-3">
            <label style="color: #333;">Tipo Combustão:</label>
            <select name="idcombustivel" required class="custom-select d-block w-100">
                <?php
                    $sql = "SELECT * FROM combustivel_veiculo";
                    $exibe = mysqli_query($conn, $sql);
                    while ($dados = mysqli_fetch_array($exibe)){
                        echo "<option value=".$dados["idcombustivel"].">".$dados["descricao"]."</option>";
                    }
                ?>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <label style="color: #333;">Valor de Fábrica:</label>
            <input type="number" required name="valorfabrica" class="form-control">
        </div>

        <div class="col-md-4 mb-3">
            <label style="color: #333;">Valor de Venda:</label>
            <input type="number" required name="valorvenda" class="form-control">
        </div>

        
        <div class="col-md-4 mb-3">
            <label style="color: #333;">Origem:</label>
            <select name="idorigem" required class="custom-select d-block w-100">
                <?php
                    $sql = "SELECT * FROM origem_aquisicao";
                    $exibe = mysqli_query($conn, $sql);
                    while ($dados = mysqli_fetch_array($exibe)){
                        echo "<option value=".$dados["idorigem"].">".$dados["descricao"]."</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    
    <div class="mb-3">
        <label style="color: #333;">Descricao:</label>
        <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary" style="background-color: #333; color: #fff;">Enviar</button>
    </div>
</form>


