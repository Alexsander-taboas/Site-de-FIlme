<?php
/*
    echo("<pre>");

        print_r($_POST);
        print_r($_SERVER["REQUEST_METHOD"]);

    echo("</pre>");
*/

    if($_SERVER["REQUEST_METHOD"]=="POST"){

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
        else
        {
            $foto = "perfil.png";
        }
        

        $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_SPECIAL_CHARS);
        $sinopse = filter_input(INPUT_POST,"sinopse",FILTER_SANITIZE_SPECIAL_CHARS);
        $diretor = filter_input(INPUT_POST,"diretor",FILTER_SANITIZE_SPECIAL_CHARS);
        $categoria = filter_input(INPUT_POST,"categoria",FILTER_SANITIZE_EMAIL);
       


        try {
            require_once("./_conexao/conexao.php");
            
            $comandoSQL = $conexao->prepare
            (" INSERT INTO `filme` ( `nomeFilme`, `sinopseFilme`, `diretorFilme`, `categoriaFilme`, `fotoFilme` ) VALUES ( :nome, :sinopse, :diretor, :categoria, :foto)");
                      
            $comandoSQL->bindParam(":nome", $nome, PDO::PARAM_STR);
            $comandoSQL->bindParam(":sinopse", $sinopse, PDO::PARAM_STR);
            $comandoSQL->bindParam(":diretor", $diretor, PDO::PARAM_STR);
            $comandoSQL->bindParam(":categoria", $categoria, PDO::PARAM_STR);
            $comandoSQL->bindParam(":foto", $foto, PDO::PARAM_STR);
            
            $comandoSQL->execute(array(
                ':nome'          => $nome,
                ':sinopse'       => $sinopse,
                ':diretor'       => $diretor,
                ':categoria'     => $categoria,
                ':foto'          => $foto,
                
            ));

            if($comandoSQL->rowcount() > 0){
                if(isset($flag)){
                    move_uploaded_file($_FILES["foto"]["tmp_name"], $nome_final);
                }                

                // echo("Usuário registrado com sucesso!");
                header("Location: ../index.php");
                exit();
                 //echo("<pre>");
                   // $comandoSQL->debugDumpParams();
                 //echo("</pre>");
            }else{
                echo("Erro no registro.");
            }

            $conexao = null; // fechando a conexao com o banco

        } catch (PDOException $erro) {
            echo ("Entre em contato com o Administrador.");
            $comandoSQL->debugDumpParams();
        }

    }else{
        echo("Entre em contado com Administrador!");
    }