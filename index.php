<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Long</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
<section class="navbar">
  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Long</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre nós</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Outras opções
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=listar">Lista dos Fornecedores</a></li>
            <li><a class="dropdown-item" href="?page=listar"></a></li>
            <li><a class="dropdown-item" href="?page=novo-cliente">Cadastro como Cliente</a></li>
            <li><a class="dropdown-item" href="?page=novo-fornecedor">Cadastro como Fornecedor</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>

</div>


    <div class="container">
        <div class = "row">
            <div class = "col mt-5" >
            <?php 

            include("config.php");
         switch(@$_REQUEST["page"]) {
        case "novo-cliente":
            include("novocliente.php");
            break;
        case "novo-fornecedor":
           include("novofornecedor.php");
        case "listar":
            include("MeusFornecedores.php");
            break;
        case "salvar-cliente":
            include("salvarCliente.php");
            break;
        case "salvar-fornecedor":
              include("salvarFornecedor.php");
              break;
            default:
            
                  
    }
?>
            </div>
        </div>
    </div>






      
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>