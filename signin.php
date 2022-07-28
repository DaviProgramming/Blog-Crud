<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - ValoCRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

</head>
<body>
    

    <?php require('navbar.php');?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign in</h2>
    
        <?php
            if (isset($_SESSION['erro'])) {
            ?>
                <div class="alert__message error">
                    <p>Algo deu errado</p>
                </div>
            <?php
            unset($_SESSION['erro']);
            }
            ?>

            <?php
            if (isset($_SESSION['Confirm_Send'])) {
            ?>
                <div class="alert__message sucess">
                    <p>Enviado com sucesso</p>
                </div>
                <?php unset($_SESSION['Confirm_Send']) ?>
            <?php
            }
            
            ?>

    <form action="sendform.php" class="form__sing" enctype="multipart/form-data" method="POST">
        <input type="text" placeholder="Login" name="login" id="">
        <input type="text" placeholder="Password" name="password" id="">
        <button type="submit" class="btn" name="btn_Signin">Sign in</button>
        <small>Don't Have an account? <a href="signup.php">Sign up</a></small>
    </form>
</div>

</section>

<?php require('footer.php');?>

</body>

</html>