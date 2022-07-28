


<?php
session_start();
if (isset($_SESSION['connect'])) {

    unset($_SESSION['Lvl_acess'], $_SESSION['usuario'], $_SESSION['connect'],$_SESSION['avatar']);
    $_SESSION['disconnect'] = 1;
    header('Location: index.php');
    exit();
}
else{
    header('Location: index.php');
    exit();
}

?>