<?php
/*
    echo("<pre>");

        print_r($_POST);
        print_r($_SERVER["REQUEST_METHOD"]);

    echo("</pre>");
*/

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        

        $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_SPECIAL_CHARS);
        $endereco = filter_input(INPUT_POST,"endereco",FILTER_SANITIZE_SPECIAL_CHARS);
        $fone = filter_input(INPUT_POST,"fone",FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        $senha1 = filter_input(INPUT_POST,"senha1",FILTER_SANITIZE_SPECIAL_CHARS);
        
       

        try {
            require_once("./_conexao/conexao.php");
            
            $comandoSQL = $conexao->prepare("            
                INSERT INTO `usuario` (
                    `nomeLogin`,
                    `enderecoLogin`,
                    `emailLogin`,
                    `telefoneLogin`,
                    `senhaLogin`)
                VALUES (
                    :nome,
                    :endereco,
                    :email,
                    :fone,
                    :senha
                )
            ");
                      
            $comandoSQL->bindParam(":nome", $nome, PDO::PARAM_STR);
            $comandoSQL->bindParam(":endereco", $endereco, PDO::PARAM_STR);
            $comandoSQL->bindParam(":email", $email, PDO::PARAM_STR);
            $comandoSQL->bindParam(":fone", $fone, PDO::PARAM_STR);
            $comandoSQL->bindParam(":senha", $senha1, PDO::PARAM_STR);

            $comandoSQL->execute(array(
                ':nome'     => $nome,
                ':endereco' => $endereco,
                ':email'    => $email,
                ':fone'     => $fone,
                ':senha'    => password_hash($senha1, PASSWORD_DEFAULT),
    
            ));

            if($comandoSQL->rowcount() > 0){
                echo("Usuário registrado com sucesso!");
                // echo("<pre>");
                //     $comandoSQL->debugDumpParams();
                // echo("</pre>");
            }else{
                echo("Erro no registro.");
            }

            $conexao = null; // fechando a conexao com o banco

        } catch (PDOException $erro) {
            echo ("Entre em contato com o Administrador.");
        }

    }else{
        echo("Entre em contado com Administrador!");
    }