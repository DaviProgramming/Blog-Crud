<?php

include "connect.php";

$id = $_GET['id'];

if(isset($id)){

    $users_id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE `id` = '$users_id' ";

    $result = $conn->query($sql);

    if($result == true){
        $_SESSION['Delete_sucess'] = "Removido com Sucesso";
        header("Location: manage-users.php");
        exit;
       
        
    }

    else{
        $_SESSION['Delete_erro'] = "Não foi possivel remover";
        header("Location: manage-users.php");
        exit;
       
    }
}

else{
    $_SESSION['Delete_erro'] = "Não foi possivel remover";
    echo "Não foi possivel remover";
    header("Location: manage-users.php");
        exit;
    
    
}


