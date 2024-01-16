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
    <link rel="stylesheet" href="./app/css/estilo.css">
    <title>ALÊFLIX</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light" style="background-image: linear-gradient(to right top, #1659bc, #3459c9, #4e57d4, #6854de, #824ee5);">
  <a class="navbar-brand" href="https://www.youtube.com/watch?v=guFXSnmKxV4&ab_channel=DurableGlue">ALÊFLIX</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./app/view-filme.php">Filmes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Oções
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#series">Series</a>
          <a class="dropdown-item" href="#anime">Animes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#terror">Terror</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="./app/cad-filme.php">Cadastro de filmes</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
    </form>
  </div>
</nav>

<div class="container text-light text-center">
         <h2>Filmes e Séries Populares</h2> 
    </div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="Active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>


  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./app/img/Ryusui.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./app/img/WorldsMission.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./app/img/Jhon.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./app/img/Riot.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./app/img/bannertlou.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./app/img/BreakingBadBanner.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./app/img/cap.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
    <div class="container text-light">
         <h2>Filmes em destaque</h2> 
    </div>
    <br>
    <div class="container text-light">
        <div class="row">
            <div class="col-md-3">
                <img src="./app/img/Aranhaverso.png" class="img-fluid" alt="Homem-Aranha no Aranhaverso">
                <h4>Homem-Aranha no Aranhaverso</h4>
            </div>
            <div class="col-md-3">
                <img src="./app/img/Mario.png" class="img-fluid" alt="Mario">
                <h4>Mario o Filme</h4>
            </div>
            <div class="col-md-3">
                <img src="./app/img/SpiderMan3.png" class="img-fluid" alt="Homem-Aranha: Sem Volta Pra Casa">
                <h4>Homem-Aranha: Sem Volta Pra Casa</h4>
            </div>
            <div class="col-md-3">
                <img src="./app/img/GatoDeBotas2.png" class="img-fluid" alt="Gato de Botas 2: O ultimo pedido">
                <h4>Gato de Botas 2: O Ultimo Pedido</h4>
            </div>
        </div>
        
    </div>
<br>
    <div class="container text-light" id="anime">
         <h2>Filmes de Anime</h2> 
    </div>
    <div class="container text-light">
                <div class="row">
                    <div class="col-md-3">
                        <img src="./app/img/Jks0.png" class="img-fluid" alt="Jujutsu Kaisen 0">
                        <h4>Jujutsu Kaisen 0 </h4>
                    </div>
                    <div class="col-md-3">
                        <img src="./app/img/bnhDoisHerois.png" class="img-fluid" alt="My hero academia: Dois Hérois">
                        <h4>My hero Academia: Missão Mundial de Hérois</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="./app/img/OpRed.png" class="img-fluid" alt="One Piece: Red">
                        <h4>One Piece: Red</h4>
                    </div>
                    <div class="col-md-3">
                        <img src="./app/img/dbsSuperHero.png" class="img-fluid" alt="Dragon Ball Super: Super Hero">
                        <h4>Dragon Ball Super: Super Hero</h4>
                    </div>
                </div>
        </div>
    </div>
    <br>
    <div class="container text-light" id="terror">
         <h2>Terror</h2> 
    </div>
    <div class="container text-light">
        <div class="row">
            <div class="col-md-3">
                <img src="./app/img/Sorria.png" class="img-fluid" alt="Sorria">
                <h4>Sorria</h4>
            </div>
            <div class="col-md-3"> 
                <img src="./app/img/Pooh.png" class="img-fluid" alt="Pooh">
                <h4>Ursinho Pooh</h4>
            </div>
            <div class="col-md-3"> 
                <img src="./app/img/it2.png" class="img-fluid" alt="It a coisa chapter two">
                <h4>It a coisa Chapter Two</h4>
            </div>
            <div class="col-md-3"> 
                <img src="./app/img/ExorcistaPapa.png" class="img-fluid" alt="O Exorcista do Papa">
                <h4>O Exorcista do Papa</h4>
            </div>
        </div>
    </div>

    <div class="container text-light" id="series">
         <h2>Series</h2> 
    </div>
    <div class="container text-light">
        <div class="row">
            <div class="col-md-3">
                <img src="./app/img/Kimetsu.png" class="img-fluid" alt="Sorria">
                <h4>Demon Slayer</h4>
            </div>
            <div class="col-md-3"> 
                <img src="./app/img/Tlou.png" class="img-fluid" alt="Pooh">
                <h4>The Last Of Us</h4>
            </div>
            <div class="col-md-3"> 
                <img src="./app/img/Arcane.png" class="img-fluid" alt="It a coisa chapter two">
                <h4>Arcane</h4>
            </div>
            <div class="col-md-3"> 
                <img src="./app/img/BreakingBad.png" class="img-fluid" alt="O Exorcista do Papa">
                <h4>Breaking Bad</h4>
            </div>
        </div>
    </div>
    <br> <br>
    <footer>
  <div class="container text-light">
    <div class="row">
      <div class="col-md-4">
        <h4>Páginas</h4>
        <ul>
          <li><a href="./index.php">Home</a></li>
          <li><a href="#anime">Filmes</a></li>
          <li><a href="https://www.youtube.com/watch?v=guFXSnmKxV4&ab_channel=DurableGlue">Sobre nós</a></li>
          <li><a href="https://www.youtube.com/watch?v=ns_15sFOLoQ&ab_channel=Douglas">Contato</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Redes Sociais</h4>
        <ul>
          <li><a href="https://www.facebook.com">Facebook</a></li>
          <li><a href="https://twitter.com">Twitter</a></li>
          <li><a href="https://www.instagram.com">Instagram</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Fontes de Dados</h4>
        <ul>
          <li><a href="https://www.imdb.com/">IMDb</a></li>
          <li><a href="https://www.themoviedb.org/">TheMovieDB</a></li>
          <li><a href="https://www.rottentomatoes.com/">Rotten Tomatoes</a></li>
        </ul>
      </div>
</footer>
</body>
</html>