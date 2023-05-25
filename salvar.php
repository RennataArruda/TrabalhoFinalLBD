<?php
require_once 'config.php';

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $codigo = $_POST["cod_veiculo"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $ano = $_POST["ano"];
        $idcategoria = $_POST["idcategoria"];
        $idcombustivel = $_POST["idcombustivel"];
        $valorfabrica = $_POST["valorfabrica"];
        $valorvenda = $_POST["valorvenda"];
        $idorigem = $_POST["idorigem"];
        $descricao = $_POST["descricao"];

        $sql = "INSERT INTO veiculo (cod_veiculo, marca, modelo, 
                                    ano, idcategoria, idcombustivel,
                                     valorfabrica, valorvenda, idorigem, descricao) VALUES (
                            '{$codigo}', '{$marca}', '{$modelo}', 
                            '{$ano}', '{$idcategoria}', '{$idcombustivel}', 
                            '{$valorfabrica}', '{$valorvenda}', '{$idorigem}', '{$descricao}')";

        $res = $conn->query($sql);
        if ($res==true) {
            print "<script>alert('Cadastro efetuado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Erro no cadastro.');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
          
        break;

    case 'editar':
        $codigo = $_POST["cod_veiculo"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $ano = $_POST["ano"];
        $idcategoria = $_POST["idcategoria"];
        $idcombustivel = $_POST["idcombustivel"];
        $valorfabrica = $_POST["valorfabrica"];
        $valorvenda = $_POST["valorvenda"];
        $idorigem = $_POST["idorigem"];
        $descricao = $_POST["descricao"];

        $sql = "UPDATE veiculo SET 
                    cod_veiculo='{$codigo}', marca='{$marca}', modelo='{$modelo}', ano='{$ano}',
                    idcategoria='{$idcategoria}', idcombustivel='{$idcombustivel}', valorfabrica='{$valorfabrica}', 
                    valorvenda='{$valorvenda}', idorigem='{$idorigem}', descricao='{$descricao}'   
                    WHERE idveiculo=".$_REQUEST["idveiculo"];

        $res = $conn->query($sql);
        if ($res==true) {
            print "<script>alert('Edição realizada com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Erro no cadastro.');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;

    case 'excluir':
        $confirmacao = "<script>if(!!confirm('Tem certeza que deseja excluir este cadastro?'))
            {window.location.href='?page=salvar&acao=excluirConfirmado&idveiculo=" . $_REQUEST["idveiculo"] . "';}</script>";
        echo $confirmacao;
        break;
    case 'excluirConfirmado':
        $sql = "DELETE FROM veiculo WHERE idveiculo=".$_REQUEST["idveiculo"];
        $res = $conn->query($sql);
        if ($res==true) {
            print "<script>alert('Cadastro excluído com sucesso!.');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Erro no cadastro.');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    
}

    
    