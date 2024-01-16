<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light" style="background-image: linear-gradient(to right top, #1659bc, #3459c9, #4e57d4, #6854de, #824ee5);">
  <a class="navbar-brand" href="#">ALÊFLIX</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./view-filme.php">Filmes <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="https://www.youtube.com/watch?v=guFXSnmKxV4&ab_channel=DurableGlue">Series <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
    <div class="container text-light">
        <h1>Cadastro de Usuário</h1>
    </div> 

    <div class="container text-light ">
        <form action="cad-loginbd.php" method="POST" enctype="multipart/form-data">
            <div class="row-flex">
                <div class="col-1">                    
                    <div class="centralizar-h" style="cursor: pointer;">
                        <img src="./img/perfil.png" alt="">
                    </div>
                </div>
                
                <div class="col" style="margin-top: 15px;">                    
                    <label for="nome" >Nome</label>
                    <input type="text" name="nome" id="nome">
                </div>                
            </div>
            
            <div class="row-flex">
                <div class="col">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco" >
                </div>

                <div class="col">
                    <label for="fone">Fone</label>
                    <input type="tel" name="fone" id="fone">
                </div>
            </div>

            <div class="row-flex">
                <div class="col">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" >
                </div>                
            </div>

            <div class="row-flex">
                <div class="col">
                    <label for="senha1">Senha</label>
                    <input type="password" name="senha1" id="senha1" >
                </div>

                <div class="col">
                    <label for="senha2">Confirmação de Senha</label>
                    <input type="password" name="senha2" id="senha2">
                </div>

            </div>

            <div class="row-flex">
                <div class="col centralizar-h"  style="margin-top: 35px;">
                    <input type="reset" value="Voltar"
                        onclick="javascript:history.go(-1)">
                    <div class="espaco-h"></div>
                    <input type="submit" value=" S A L V A R ">
                </div>
            </div>
        </form>
    </div>
</body>
</html>