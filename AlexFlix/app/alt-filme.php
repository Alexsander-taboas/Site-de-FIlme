<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Filmes Cadastrados</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWv" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Atualização de Filmes Cadastrados</h1>
        <?php include("./_menu.php"); ?>
    </div> 

    <div class="container">
        <?php
            $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
            require_once("./alt-filme-view.php");
        ?>

        <form action="alt-filmebd.php" method="POST" enctype="multipart/form-data">
            
            <input type="hidden" name="id" value="<?=$id;?>">
            <input type="hidden" name="fotobd" value="<?=$resultado['fotoFilme'];?>">
            
            <div class="row-flex">
                <div class="col-1">                    
                    <div class="centralizar-h" style="cursor: pointer;">
                       <input type="file" name="foto" id="foto" onchange="preview();">
                    <?php
                       $imagem = $resultado['fotoFilme']; 
                       if(strlen($imagem) > 0){
                    ?>
                        <label for="foto">
                            <img id="imagem" src="./fotos/<?=$resultado['fotoFilme'];?>" alt="" style="max-width: 100px;">
                        </label>
                    <?php
                       }else{
                    ?>                    
                        <label for="foto"><img id="imagem" src="./img/perfil.png" alt="" style="max-width: 100px;"></label>
                    <?php
                       }
                    ?>
                    </div>
                </div>
                
                <div class="col" style="margin-top: 15px;">                    
                    <label for="nome" >Nome</label>
                    <input type="text" name="nome" id="nome" 
                        placeholder="Nome completo" value="<?=$resultado['nomeFilme'];?>">
                </div>                
            </div>
            
            <div class="row-flex">
                <div class="col">
                    <label for="sinopse">Sinopse do Filme</label>
                    <input type="text" name="sinopse" id="sinopse" 
                        placeholder="sinopse do filme"  value="<?=$resultado['sinopseFilme'];?>">
                </div>

                <div class="col">
                    <label for="fone">Gênero do Filme</label>
                    <input type="text" name="categoria" id="categoria" 
                        placeholder="Gênero do Filme"  value="<?=$resultado['categoriaFilme'];?>">
                </div>
            </div>

            <div class="row-flex">
                <div class="col">
                    <label for="diretor">Diretor Do Filme</label>
                    <input type="text" name="diretor" id="diretor" 
                        placeholder="Diretor do filme" 
                        value="<?=$resultado['diretorFilme'];?>">
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

    <script>
        function preview(){
            let file_foto = document.querySelector('#foto').files[0];
            let img_imagem = document.querySelector('#imagem');

            
            // faz a leitura da imagem
            let visualizacao = new FileReader();
            
            if(file_foto){
                // esse comando dispara o evento load da 
                // imagem quando ela for lida completamente            
                visualizacao.readAsDataURL(file_foto);
            }else{                
                img_imagem.src = "";
            }

            // evento de load quando disparada carrega a imagem da variável visualizacao
            visualizacao.onloadend = function(){
                img_imagem.src = visualizacao.result;
            }
        }
        // FIM FOTO -------------------
        
    </script>
</body>
</html>