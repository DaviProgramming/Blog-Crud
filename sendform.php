<?php


require_once('connect.php');

if (isset($_POST['btn_signUp'])) {

    $SignUpFirstName = $_POST['singupFname'];
    $SignUpLastName = $_POST['singup_Lname'];
    $SignUpUsername = $_POST['singup_Username'];
    $SignUpEmail = $_POST['singup_Email'];
    $SignUpPassword = $_POST['singup_password'];
    $SignUpConfirmPassword = $_POST['singup_ConfirmPassowrd'];
    $SignUpAd = $_POST['choice'];

    $_SESSION['SFname'] = $SignUpFirstName;
    $_SESSION['SLname'] = $SignUpLastName;
    $_SESSION['SUname'] = $SignUpUsername;
    $_SESSION['SignUpPassword'] = $SignUpPassword;
    $_SESSION['SignUpConfirmPassword'] = $SignUpConfirmPassword;


    //Validação Primeiro nome formulario

    if (strlen($SignUpFirstName) <= 2 || strstr($SignUpFirstName, " ")) {
        $_SESSION['Fname_erro'] = "*Preencha o nome com no mínimo 2 caracteres e sem espaços em Branco";
        header("Location: signup.php");
        exit;
    } else if (!strlen($SignUpFirstName) <= 2 || strstr($SignUpFirstName, " ")) {
        $Confirm_SFname = $SignUpFirstName;
    }





    //------------------------------------------------------------------------------------------


    //Validação Segundo nome Formulario 
    if (strlen($SignUpLastName) <= 2 || strstr($SignUpLastName, " ")) {
        $_SESSION['Lname_erro'] = "*Preencha o nome com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: signup.php");
        exit;
    } else if (!strlen($SignUpLastName) <= 2 || strstr($SignUpLastName, " ")) {
        $Confirm_SLname = $SignUpLastName;
    }

    //------------------------------------------------------------------------------------------

    //Validação Username 

    if (strlen($SignUpUsername) <= 2) {
        $_SESSION['Uname_erro'] = "*Preencha o nome com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: signup.php");
        exit;
    } else if (!strlen($SignUpUsername) <= 2) {
        $Confirm_SUname = $SignUpUsername;
    }

    //---------------------------------------------------------------------------------------------

    //Validação senha
    if (strlen($SignUpPassword) <= 2 || strstr($SignUpPassword, " ")) {
        $_SESSION['Password_erro'] = "*Preencha a Senha com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: signup.php");
        exit;
    } else if (!strlen($SignUpPassword) <= 2 || strstr($SignUpPassword, " ")) {
        $_SESSION['Confirm_SignUpPassword'] = $SignUpPassword;
    }
    //----------------------------------------------------------------------------------------------

    //validação da confirmação da senha

    if (strcmp($SignUpConfirmPassword, $SignUpPassword) == 0) {
        $Confirm_SignUpConfirmPassword = $SignUpConfirmPassword;
        
    } else if (!strcmp($SignUpConfirmPassword, $SignUpPassword) == 0) {
        $_SESSION['Confirm_CPassword_erro'] = "*As Senhas não batem";
        echo strcmp($SignUpConfirmPassword, $SignUpPassword);
        header("Location: signup.php");
        exit;
    }

    if($SignUpAd== 0){
    $Confirm_SignUpAd = "Author";
    }
    else if($SignUpAd == 1){
    $Confirm_SignUpAd = "Admin";
    }

    $sql = "INSERT INTO users(first_name,last_name,email,password,username,author)
            VALUES ( '$Confirm_SFname' , '$Confirm_SLname','$SignUpEmail', '$Confirm_SignUpConfirmPassword', '$Confirm_SUname', '$Confirm_SignUpAd')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['Confirm_Send'] = "Registrado Com Sucesso";
        unset($_SESSION['SFname'],$_SESSION['SLname'], $_SESSION['SUname'], $_SESSION['SignUpPassword'], $_SESSION['SignUpConfirmPassword'] );
        header("Location: signup.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}










//Validação Form edit-users--------------------------------------------
$id = $_POST['id'];



if (isset($_POST['btn_EditUser'])) {

    
    $EditFirstName = $_POST['EditFirstName'];
    $EditLastName = $_POST['EditLastName'];
    $EditUserName = $_POST['EditUserName'];
    $EditEmail = $_POST['EditEmail'];
    $EditPassword = $_POST['EditPassword'];
    $SignUpConfirmPassword = $_POST['singup_ConfirmPassowrd'];
    $EditAuthor = $_POST['EditAuthor'];


    //Validação Primeiro nome formulario

    if (strlen($EditFirstName) <= 2 || strstr($EditFirstName, " ")) {
        $_SESSION['Fname_erro'] = "*Preencha o nome com no mínimo 2 caracteres e sem espaços em Branco";
        header("Location: edit-user.php?id="  . $id);
        exit;
    } else if (!strlen($EditFirstName) <= 2 || strstr($EditFirstName, " ")) {
        $Confirm_SFname = $EditFirstName;
    }





    //------------------------------------------------------------------------------------------


    //Validação Segundo nome Formulario 
    if (strlen($EditLastName) <= 2 || strstr($EditLastName, " ")) {
        $_SESSION['Lname_erro'] = "*Preencha o nome com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: edit-user.php?id="  . $id);
        exit;
    } else if (!strlen($EditLastName) <= 2 || strstr($EditLastName, " ")) {
        $Confirm_SLname = $EditLastName;
    }

    //------------------------------------------------------------------------------------------

    //Validação Username 

    if (strlen($EditUserName) <= 2) {
        $_SESSION['Uname_erro'] = "*Preencha o nome com no mínimo 2 caracteres e sem espaços em Branco";
        $Redirect = "edit-users.php?";
        header("Location: edit-user.php?id="  . $id);
        exit;
    } else if (!strlen($EditUserName) <= 2) {
        $Confirm_SUname = $EditUserName;
    }

    //---------------------------------------------------------------------------------------------

    //Validação senha
    if (strlen($EditPassword) <= 2 || strstr($EditPassword, " ")) {
        $_SESSION['Password_erro'] = "*Preencha a Senha com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: edit-user.php?id="  . $id);
        exit;
    } else if (!strlen($EditPassword) <= 2 || strstr($EditPassword, " ")) {
        $_SESSION['Confirm_SignUpPassword'] = $EditPassword;
    }
    //----------------------------------------------------------------------------------------------

    //validação da confirmação da senha

    if (strcmp($EditPassword, $EditPassword) == 0) {
        $Confirm_SignUpConfirmPassword = $SignUpConfirmPassword;
        
    } else if (!strcmp($SignUpConfirmPassword, $EditPassword) == 0) {
        $_SESSION['Confirm_CPassword_erro'] = "*As Senhas não batem";
        
        header("Location: edit-user.php?id="  . $id);
        exit;
    }

    if($EditAuthor== 0){
    $Confirm_SignUpAd = "Author";
    }
    else if($EditAuthor == 1){
    $Confirm_SignUpAd = "Admin";
    }

    $sql = "UPDATE `users` SET `first_name` = '$Confirm_SFname', `last_name` = '$Confirm_SLname', `email` = '$EditEmail', `password` = '$Confirm_SignUpConfirmPassword', `author` = '$EditAuthor', `username` = '$Confirm_SUname'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['Confirm_Send'] = "Registrado Com Sucesso";
        unset($_SESSION['SFname'],$_SESSION['SLname'], $_SESSION['SUname'], $_SESSION['SignUpPassword'], $_SESSION['SignUpConfirmPassword'] );
        header("Location: edit-user.php?id="  . $id);
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}







//Validação Add - users


if (isset($_POST['btn_Add-user'])) {

    $SignUpFirstName = $_POST['singupFname'];
    $SignUpLastName = $_POST['singup_Lname'];
    $SignUpUsername = $_POST['singup_Username'];
    $SignUpEmail = $_POST['singup_Email'];
    $SignUpPassword = $_POST['singup_password'];
    $SignUpConfirmPassword = $_POST['singup_ConfirmPassowrd'];
    $SignUpAd = $_POST['choice'];

    $_SESSION['SFname'] = $SignUpFirstName;
    $_SESSION['SLname'] = $SignUpLastName;
    $_SESSION['SUname'] = $SignUpUsername;
    $_SESSION['SignUpPassword'] = $SignUpPassword;
    $_SESSION['SignUpConfirmPassword'] = $SignUpConfirmPassword;


    //Validação Primeiro nome formulario

    if (strlen($SignUpFirstName) <= 2 || strstr($SignUpFirstName, " ")) {
        $_SESSION['Fname_erro'] = "*Preencha o nome com no mínimo 2 caracteres e sem espaços em Branco";
        header("Location: add-user.php");
        exit;
    } else if (!strlen($SignUpFirstName) <= 2 || strstr($SignUpFirstName, " ")) {
        $Confirm_SFname = $SignUpFirstName;
    }





    //------------------------------------------------------------------------------------------


    //Validação Segundo nome Formulario 
    if (strlen($SignUpLastName) <= 2 || strstr($SignUpLastName, " ")) {
        $_SESSION['Lname_erro'] = "*Preencha o nome com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: add-user.php");
        exit;
    } else if (!strlen($SignUpLastName) <= 2 || strstr($SignUpLastName, " ")) {
        $Confirm_SLname = $SignUpLastName;
    }

    //------------------------------------------------------------------------------------------

    //Validação Username 

    if (strlen($SignUpUsername) <= 2) {
        $_SESSION['Uname_erro'] = "*Preencha o nome com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: add-user.php");
        exit;
    } else if (!strlen($SignUpUsername) <= 2) {
        $Confirm_SUname = $SignUpUsername;
    }

    //---------------------------------------------------------------------------------------------

    //Validação senha
    if (strlen($SignUpPassword) <= 2 || strstr($SignUpPassword, " ")) {
        $_SESSION['Password_erro'] = "*Preencha a Senha com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: add-user.php");
        exit;
    } else if (!strlen($SignUpPassword) <= 2 || strstr($SignUpPassword, " ")) {
        $_SESSION['Confirm_SignUpPassword'] = $SignUpPassword;
    }
    //----------------------------------------------------------------------------------------------

    //validação da confirmação da senha

    if (strcmp($SignUpConfirmPassword, $SignUpPassword) == 0) {
        $Confirm_SignUpConfirmPassword = $SignUpConfirmPassword;
        
    } else if (!strcmp($SignUpConfirmPassword, $SignUpPassword) == 0) {
        $_SESSION['Confirm_CPassword_erro'] = "*As Senhas não batem";
        echo strcmp($SignUpConfirmPassword, $SignUpPassword);
        header("Location: add-user.php");
        exit;
    }

    if($SignUpAd == 0){
    $Confirm_SignUpAd = "Author";
    }
    else if($SignUpAd == 1){
    $Confirm_SignUpAd = "Admin";
    }

    $sql = "INSERT INTO users(first_name,last_name,email,password,username,author)
            VALUES ( '$Confirm_SFname' , '$Confirm_SLname','$SignUpEmail', '$Confirm_SignUpConfirmPassword', '$Confirm_SUname', '$Confirm_SignUpAd')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['Confirm_Send'] = "Registrado Com Sucesso";
        unset($_SESSION['SFname'],$_SESSION['SLname'], $_SESSION['SUname'], $_SESSION['SignUpPassword'], $_SESSION['SignUpConfirmPassword'] );
        header("Location: add-user.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
