<?php


require_once('connect.php');

if (isset($_POST['btn_signUp'])) {

    $SignUpFirstName = $_POST['singupFname'];
    $SignUpLastName = $_POST['singup_Lname'];
    $SignUpUsername = $_POST['singup_Username'];
    $SignUpEmail = $_POST['singup_Email'];
    $SignUpPassword = $_POST['singup_password'];
    $SignUpConfirmPassword = $_POST['singup_ConfirmPassowrd'];

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

    $sql = "INSERT INTO users(author,first_name,last_name,email,password,username)
            VALUES ('$Confirm_SFname', '$Confirm_SFname' , '$Confirm_SLname','$SignUpEmail', '$Confirm_SignUpConfirmPassword', '$Confirm_SUname')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['Confirm_Send'] = "Registrado Com Sucesso";
        unset($_SESSION['SFname'],$_SESSION['SLname'], $_SESSION['SUname'], $_SESSION['SignUpPassword'], $_SESSION['SignUpConfirmPassword'] );
        header("Location: signup.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
