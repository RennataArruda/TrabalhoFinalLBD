<!doctype html>
<html lang="PT-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Veículos</title>
    
    <style>
      body {
        background-color: #f8f9f;
      }

      h1 {
        color: #333;
        text-align: center;
        margin-top: 50px;
      }

      .navbar {
        background-color: #fff;
        border-bottom: 1px solid #ddd;
      }

      .nav-link {
        color: #333;
        font-weight: bold;
      }

      .container {
        margin-top: 50px;
      }
    </style>
  </head>
  <body> 

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6959CD;">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="?page=novo">Novo Cadastro</a>
      <a class="nav-item nav-link" href="?page=listar">Listagem de Cadastro</a>
      <a class="nav-item nav-link" href="?page=relatorio">Relatório por Categoria</a>
    </div>
  </div>
</nav>


    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
            include("config.php");

            switch(@$_REQUEST["page"]) {
              case "novo":
                include("novocadastro.php");
                break;

              case "listar":
                include("lista.php");
                break;

              case "salvar":
                include("salvar.php");
                break;

              case "editar":
                include("editar.php");
                break;

              case "relatorio":
                include("relatorio.php");
                break;

              default:
                echo "<h1> Bem vindo ao Sistema!</h1>";
            }
          ?>
        </div>
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
