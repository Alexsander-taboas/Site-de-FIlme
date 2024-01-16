<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de Filmes</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWv" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Visualização Filmes</h1>
        <?php include("./_menu.php"); ?>
    </div> 


    <div class="container">
        <table>
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th widht="50">NOME DO FILME</th>
                    <th widht="50">Sinopse do filme</th>
                    <th width="100">Categoria do filme</th>
                    <th width="100">Diretor do filme</th>
                    <th width="90">ATUALIZAR</th>
                    <th width="90">EXCLUIR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once("./view-filmebd.php");
                    if($totalRegistros > 0){
                        foreach($dados as $linha){

                ?>
                <tr>
                    <td><?= $linha["idFilme"];?></td>
                    <td><?=$linha["nomeFilme"];?></td>
                    <td><?= $linha["sinopseFilme"];?></td>
                    <td><?= $linha["categoriaFilme"];?></td>
                    <td><?= $linha["diretorFilme"];?></td>

                    <td align="center">
                        <a href="alt-filme.php?id=<?= $linha['idFilme'];?>">
                            <img src="./img/folder.png" alt="Excluir" width="30">
                        </a>
                    </td>            
                    <td align="center">
                        <a href="exc-filme.php?id=<?= $linha['idFilme'];?>">
                            <img src="./img/delete.png" alt="Excluir" width="30">
                        </a>
                    </td>
                </tr>
                <?php
                        }
                    }
                    else{
                        echo("
                            <tr>
                                <td colspan=6>
                                    NÃO HÁ REGISTROS GRAVADOS.
                                </td>
                            </tr>
                        ");
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>