<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id= filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
        $fotobd = filter_input(INPUT_POST,"fotobd",FILTER_SANITIZE_SPECIAL_CHARS);
        $dir_fotos = "./fotos/";

        require_once("./_conexao/conexao.php");

        $sql = "DELETE FROM `filme` 
                    WHERE `idFilme` = :id";

        $comandoSQL = $conexao->prepare($sql);

        $comandoSQL->bindParam(':id', $id, PDO::PARAM_STR);

        $comandoSQL->execute();

        if($comandoSQL->rowCount() == 1){
            //echo "Usuário EXCLUÍDO com sucesso!";

            unlink($dir_fotos.$fotobd);
            header("Location: ../index.php");
            exit();

        }else{
            echo "Erro na EXCLUSÃO.";

             echo("<pre>");
                 $comandoSQL->debugDumpParams();
             echo("</pre>");
        }

    }else{
        echo("Entre em contado com Administrador!");
    }
        
    $conexao=null;