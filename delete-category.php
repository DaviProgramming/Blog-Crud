<?php

include "connect.php";

$id = $_GET['id'];

if(isset($id)){

    $posts_id = $id;

    $sql = "DELETE FROM `posts` WHERE `id` = '$posts_id' ";

    $result = $conn->query($sql);

    if($result == true){
        $_SESSION['Delete_sucess'] = "Removido com Sucesso";
        header("Location: manage-categorys.php");
        exit;
       
        
    }

    else{
        $_SESSION['Delete_erro'] = "Não foi possivel remover";
        header("Location: manage-categorys.php");
        exit;
       
    }
}

else{
    $_SESSION['Delete_erro'] = "Não foi possivel remover";
    echo "Não foi possivel remover";
    header("Location: manage-categorys.php");
        exit;
    
    
}


