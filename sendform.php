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
    
    if(isset($_FILES['arquivo']['name'])){
        $SignUpThumb = $_FILES['arquivo']['name'];
    }
    

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
        $_SESSION['Lname_erro'] = "*Preencha o nome com no mínimo 2 caracteres";

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

    if ($SignUpAd == 0) {
        $Confirm_SignUpAd = "Author";
    } else if ($SignUpAd == 1) {
        $Confirm_SignUpAd = "Admin";
    }

    

    
    

    
    

    $sql = "INSERT INTO users(first_name,last_name,email,password,username,author,avatar)
    VALUES ( '$Confirm_SFname' , '$Confirm_SLname','$SignUpEmail', '$Confirm_SignUpConfirmPassword', '$Confirm_SUname', '$Confirm_SignUpAd', '$SignUpThumb')";

    

    if (mysqli_query($conn, $sql)) {
        $_SESSION['Confirm_Send'] = "Registrado Com Sucesso";
        $ultimo_id = mysqli_insert_id($conn);
        $_UP['pasta'] = 'D:\Projetos Programação\Back-end\PhP-Blog\images\Perfil_images\Avatar_id_' .  $ultimo_id . '/';
        mkdir($_UP['pasta'],0777);
        $nome_final = $SignUpThumb;
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final);
        unset($_SESSION['SFname'], $_SESSION['SLname'], $_SESSION['SUname'], $_SESSION['SignUpPassword'], $_SESSION['SignUpConfirmPassword']);
        header("Location: signup.php");
        exit;
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}










//Validação Form edit-users--------------------------------------------




if (isset($_POST['btn_EditUser'])) {

    $id = $_GET['id'];

    $EditFirstName = $_POST['EditFirstName'];
    $EditLastName = $_POST['EditLastName'];
    $EditUserName = $_POST['EditUserName'];
    $EditEmail = $_POST['EditEmail'];
    $EditPassword = $_POST['EditPassword'];
    $SignUpConfirmPassword = $_POST['singup_ConfirmPassowrd'];
    $EditAuthor = $_POST['EditAuthor'];

    if(isset($_FILES['arquivo']['name'])){
        $EditUpThumb = $_FILES['arquivo']['name'];
        $_SESSION['avatar'] = $EditUpThumb;
    }


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

    if ($EditAuthor == 0) {
        $Confirm_SignUpAd = "Author";
    } else if ($EditAuthor == 1) {
        $Confirm_SignUpAd = "Admin";
    }


    $sql = "UPDATE `users` SET `first_name` = '$Confirm_SFname', `last_name` = '$Confirm_SLname', `email` = '$EditEmail', `password` = '$Confirm_SignUpConfirmPassword', `author` = '$EditAuthor', `username` = '$Confirm_SUname', `avatar` = '$EditUpThumb'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['Confirm_Send'] = "Editado Com Sucesso";
        $ultimo_id = mysqli_insert_id($conn);
        $_UP['pasta'] = 'D:\Projetos Programação\Back-end\PhP-Blog\images\Perfil_images\Avatar_id_' .  $ultimo_id . '/';
        mkdir($_UP['pasta'],0777);
        $nome_final = $EditUpThumb;
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final);
        unset($_SESSION['SFname'], $_SESSION['SLname'], $_SESSION['SUname'], $_SESSION['SignUpPassword'], $_SESSION['SignUpConfirmPassword'], $_SESSION['avatar']);
        header("Location: manage-users.php");
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

    if ($SignUpAd == 0) {
        $Confirm_SignUpAd = "Author";
    } else if ($SignUpAd == 1) {
        $Confirm_SignUpAd = "Admin";
    }

    $sql = "INSERT INTO users(first_name,last_name,email,password,username,author)
            VALUES ( '$Confirm_SFname' , '$Confirm_SLname','$SignUpEmail', '$Confirm_SignUpConfirmPassword', '$Confirm_SUname', '$Confirm_SignUpAd')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['Confirm_Send'] = "Registrado Com Sucesso";
        unset($_SESSION['SFname'], $_SESSION['SLname'], $_SESSION['SUname'], $_SESSION['SignUpPassword'], $_SESSION['SignUpConfirmPassword']);
        header("Location: add-user.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}





if (isset($_POST['btn_Add_Category'])) {
    $Category_name = $_POST['add_category_name'];
    $Description_Category = $_POST['category_description'];

    $_SESSION['Category_name'] = $Category_name;
    $_SESSION['Description_Category'] = $Description_Category;

    echo $Category_name;
    echo $Description_Category;

    if (strlen($Category_name) <= 2) {
        $_SESSION['Category_erro'] = "*Preencha o nome da Categoria com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: add-category.php");
        exit;
    } else if (!strlen($Category_name) <= 2) {
        $Confirm_Cname = $Category_name;
    }

    //Verificação Description

    if (strlen($Description_Category) <= 2) {
        $_SESSION['CategoryDescription_erro'] = "*Preencha a descrição com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: add-category.php");
        exit;
    } else if (!strlen($Description_Category) <= 2) {
        $Confirm_Description_Category = $Description_Category;
        $time = date('Y-m-d');
    }

    $sql = "INSERT INTO category(description,name)
            VALUES ( '$Confirm_Description_Category' , '$Confirm_Cname')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['Confirm_Send'] = "Registrado Com Sucesso";
        unset($_SESSION['Category_name'], $_SESSION['Description_Category']);
        header("Location: add-category.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}




//----------------Edit category----------------------------------------------



if (isset($_POST['btn_update_category'])) {
    $id = $_POST['id_new'];
    $Category_name = $_POST['edit_category_name'];
    $Description_Category = $_POST['edit_category_description'];

    $_SESSION['Category_name'] = $Category_name;
    $_SESSION['Description_Category'] = $Description_Category;

    echo $Category_name;
    echo $Description_Category;

    if (strlen($Category_name) <= 2) {
        $_SESSION['Category_erro'] = "*Preencha o nome da Categoria com no mínimo 2 caracteres e sem espaços em Branco";
    } else if (!strlen($Category_name) <= 2) {
        $Confirm_Cname = $Category_name;
    }

    //Verificação Description

    if (strlen($Description_Category) <= 2) {
        $_SESSION['CategoryDescription_erro'] = "*Preencha a descrição com no mínimo 2 caracteres e sem espaços em Branco";
    } else if (!strlen($Description_Category) <= 2) {
        $Confirm_Description_Category = $Description_Category;
        $time = date('Y-m-d');
    }

    $sql = "UPDATE `category` SET `description` = '$Confirm_Description_Category', `name` = '$Confirm_Cname' WHERE id = '$id' ";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['Confirm_Send'] = "Registrado Com Sucesso";
        unset($_SESSION['Category_name'], $_SESSION['Description_Category']);
        header("Location: manage-categorys.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}








//Add - post --------------------------------------------------------






if (isset($_POST['btn_add_post'])) {
    $title = $_POST['name_post'];
    $category = $_POST['Choice_category'];
    $body_text = $_POST['Body_text'];
    $featured = $_POST['featured'];
    if(isset($_FILES['arquivo']['name'])){
        $thumb = $_FILES['arquivo']['name'];
        $_SESSION['avatar'] = $EditUpThumb;
    }

    echo $featured;

    $_SESSION['title'] = $title;
    $_SESSION['category'] = $category;
    $_SESSION['Body_Text'] = $body_text;



    if (strlen($title) <= 2) {
        $_SESSION['title_erro'] = "*Preencha o nome da Categoria com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: add-post.php");
        exit;
    } else if (!strlen($title) <= 2) {
        $Confirm_title = $title;
    }

    //Verificação Description

    if (strlen($body_text) <= 2) {
        $_SESSION['body_text_erro'] = "*Preencha a descrição com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: add-post.php");
        exit;
    } else if (!strlen($body_text) <= 2) {
        $Confirm_body_text = $body_text;
        $time = date('Y-m-d');
    }

    $sql = "INSERT INTO posts(title,category,textbody,thumb) VALUES ('$Confirm_title', '$category',  ' $Confirm_body_text', '$thumb')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['Confirm_Send'] = "Registrado Com Sucesso";
        $ultimo_id = $id;
        $_UP['pasta'] = 'D:\Projetos Programação\Back-end\PhP-Blog\images\Post_images\Post_id_' .  $ultimo_id . '/';
        mkdir($_UP['pasta'],0777);
        $nome_final = $thumb;
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final);
        unset($_SESSION['Category_name'], $_SESSION['Description_Category']);
        header("Location: add-post.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



//-------------------------------edit post -----------------------------------------------//


if (isset($_POST['btn_Edit_post'])) {
    $id = $_GET['id'];
    $title = $_POST['name_post'];
    $category = $_POST['Choice_category'];
    $body_text = $_POST['Body_text'];
    $featured = $_POST['featured'];
    if(isset($_FILES['arquivo']['name'])){
        $thumb = $_FILES['arquivo']['name'];
        $_SESSION['avatar'] = $EditUpThumb;
    }

    echo $featured;

    $_SESSION['title'] = $title;
    $_SESSION['category'] = $category;
    $_SESSION['Body_Text'] = $body_text;



    if (strlen($title) <= 2) {
        $_SESSION['title_erro'] = "*Preencha o nome da Categoria com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: add-post.php");
        exit;
    } else if (!strlen($title) <= 2) {
        $Confirm_title = $title;
    }

    //Verificação Description

    if (strlen($body_text) <= 2) {
        $_SESSION['body_text_erro'] = "*Preencha a descrição com no mínimo 2 caracteres e sem espaços em Branco";

        header("Location: add-post.php");
        exit;
    } else if (!strlen($body_text) <= 2) {
        $Confirm_body_text = $body_text;
        $time = date('Y-m-d');
    }

    
    $sql = "UPDATE `posts` SET `title` = '$Confirm_title', `category` = '$category', `textbody` = '$Confirm_body_text', `thumb` = '$thumb'";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['Confirm_Send'] = "Registrado Com Sucesso";
        $ultimo_id = $id;
        $_UP['pasta'] = 'D:\Projetos Programação\Back-end\PhP-Blog\images\Post_images\Post_id_' .  $ultimo_id . '/';
       
            mkdir($_UP['pasta'],0777);
        $nome_final = $thumb;
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final);
        unset($_SESSION['Category_name'], $_SESSION['Description_Category']);
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


//LOGIN -------------------------------------------------------

if(isset($_POST['btn_Signin'])){

    $login = $_POST['login'];
    $senha = $_POST['password'];

    echo $login;

    $sql = "SELECT * FROM users WHERE `username` = '$login' AND `password` = '$senha'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    $names = $result->fetch_assoc();

    if($row == 1){
        unset($_SESSION['disconnect']);
        $_SESSION['usuario'] = $login;
        $_SESSION['connect'] = 1;
        $_SESSION['Lvl_acess'] = $names['author'];
        $_SESSION['id_login'] = $names['id'];
        $_SESSION['avatar'] = $names['avatar'];
        echo $_SESSION['Lvl_acess'] ;
        echo $names['avatar'];
        echo $names['id'];
        header('Location: index.php');
        exit();
    }
    else{
        $_SESSION['erro'] = "Usuario ou senha invalidos";
        header('Location: signin.php');
        exit();

    }
   




}

?>