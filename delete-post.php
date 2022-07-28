<?php
require('connect.php');

$id = $_GET['id'];

if(isset($_SESSION['connect']) && isset($_SESSION['Lvl_acess'])){

if(isset($id)){

    $users_id = $_GET['id'];

    $sql = "DELETE FROM `posts` WHERE `id` = '$users_id' ";

    $result = $conn->query($sql);

    if($result == true){
        $_SESSION['Delete_sucess'] = "Removido com Sucesso";
        header("Location: dashboard.php");
        exit;
       
        
    }

    else{
        $_SESSION['Delete_erro'] = "Não foi possivel remover";
        header("Location: dashboard.php");
        exit;
       
    }
}

else{
    $_SESSION['Delete_erro'] = "Não foi possivel remover";
    echo "Não foi possivel remover";
    header("Location: dashboard.php");
        exit;
    
    
}

}else{
    header("Location: index.php");
}

?>