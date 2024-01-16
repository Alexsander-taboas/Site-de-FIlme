<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(!empty($_FILES['foto']['name'])){
            // diretório que seja salvos as fotos do perfil do user
            $dir_fotos = "./fotos/";

            // retirando os espaços em branco do arquivo
            $nome_original = str_replace(" ","_",basename($_FILES["foto"]["name"]));

            // criando um token para ser adicionado ao nome do arquivo
            $token = md5(uniqid(rand(), true));

            // nome que será usado para UPLOAD do arquivo
            $nome_final = $dir_fotos.$token.$nome_original;

            $flag = true; 
            
            //verifica se o arquivo tem tamanho maior que 2mb
            if(!getimagesize($_FILES["foto"]["tmp_name"]) > 2000000){
                $flag = false;
            }

            // pegando somente a extensão do arquivo
            $extensao = strtolower(pathinfo($nome_original, PATHINFO_EXTENSION));

            // verificando se a extensão é válida
            if( ($extensao != "jpg") && ($extensao != "gif") &&
                ($extensao != "bmp") && ($extensao != "jpeg") &&
                ($extensao != "png") && ($extensao != "webp")){
                    $flag = false;
            }

            if($flag){
                // nome que será gravado no banco de dados
                $foto = $token.$nome_original;
            }
        }

        $id= filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);

        $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_SPECIAL_CHARS);
        $sinopse = filter_input(INPUT_POST,"sinopse",FILTER_SANITIZE_SPECIAL_CHARS);
        $diretor = filter_input(INPUT_POST,"diretor",FILTER_SANITIZE_SPECIAL_CHARS);
        $categoria = filter_input(INPUT_POST,"categoria",FILTER_SANITIZE_SPECIAL_CHARS);     
           

        require_once("./_conexao/conexao.php");

        $sql = "UPDATE `filme` SET 
                    `nomeFilme` = :nome,
                    `sinopseFilme` = :sinopse,
                    `diretorFilme` = :diretor,
                    `categoriaFilme` = :categoria,
                    `fotoFilme` = :foto                                 
                WHERE `idFilme` = :id";

        $comandoSQL = $conexao->prepare($sql);

        $comandoSQL->bindParam(':id', $id, PDO::PARAM_STR);
        $comandoSQL->bindParam(':nome', $nome, PDO::PARAM_STR);
        $comandoSQL->bindParam(':sinopse', $sinopse, PDO::PARAM_STR);
        $comandoSQL->bindParam(':diretor', $diretor, PDO::PARAM_STR);
        $comandoSQL->bindParam(':categoria', $categoria, PDO::PARAM_STR);
        $comandoSQL->bindParam(':foto', $foto, PDO::PARAM_STR);
    
        $comandoSQL->execute();

        if($comandoSQL->rowCount() == 1){
            if(isset($flag)){
                // move um arquivo para uma pasta
                move_uploaded_file($_FILES["foto"]["tmp_name"], $nome_final);
                
                // exclui um arquivo do disco
                unlink($dir_fotos.$fotobd);
            }
            header("Location: ../index.php");
                exit();
        }else{
            echo "Erro na atualização.";

            echo("<pre>");
                $comandoSQL->debugDumpParams();
            echo("</pre>");
        }

    }else{
        echo("Entre em contado com Administrador!");
    }
        
    $conexao=null;