<?php 
require('connect.php');
if(isset($_SESSION['Lvl_acess']) && $_SESSION['Lvl_acess'] === "Admin"){
    



if(isset($_GET['id'])){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - ValoCRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

</head>

<body>
<?php
   require_once('navbar.php');

   ?>

    <?php 

                    if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `users` WHERE `id` = '$id'";

                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();



?>

    <section class="form__section">
        <div class="container form__section-container">
            <h2>Edit User</h2>
                        

            <?php
                if (isset($_SESSION['Fname_erro']) || isset($_SESSION['Lname_erro']) || isset($_SESSION['Uname_erro']) || isset($_SESSION['Password_erro']) || isset($_SESSION['Confirm_CPassword_erro'])) {

                ?>
                    <div class="alert__message error">
                        <p>
                            Não enviado
                        </p>
                    </div>
                <?php

                } else if (isset($_SESSION['Confirm_Send'])) {

                ?>

                    <div class="alert__message sucess">
                        <p>
                            Enviado com sucesso
                        </p>
                    </div>
                <?php
                unset($_SESSION['Confirm_Send']);
                }
                ?>
                
                
                
                
                <form action="sendform.php" class="form__sing" enctype="multipart/form-data" method="POST">
                
                <input type="hidden" name="id" value="<?php echo $id?>">

                <h5><?php if (!empty($_SESSION['Fname_erro'])) {
                        echo $_SESSION['Fname_erro'];
                        unset($_SESSION['Fname_erro']);
                    } ?></h5>
                
                <input type="text" name="EditFirstName" id="" placeholder="First_Name" value="<?php echo $row['first_name'];?>">
                <h5><?php if (!empty($_SESSION['Lname_erro'])) {
                        echo $_SESSION['Lname_erro'];
                        unset($_SESSION['Lname_erro']);
                    } ?></h5>
                <input type="text" name="EditLastName" id="" placeholder="LastName" value="<?php echo $row['last_name'];?>">
                <h5><?php if (!empty($_SESSION['Uname_erro'])) {
                        echo $_SESSION['Uname_erro'];
                        unset($_SESSION['Uname_erro']);
                    } ?></h5>
                <input type="text" name="EditUserName" id="" placeholder="Username" value="<?php echo $row['username']?>">
                
                <input type="email" name="EditEmail" placeholder="Email" value="<?php echo $row['email'] ?>">
                <h5><?php if (!empty($_SESSION['Password_erro'])) {
                        echo $_SESSION['Password_erro'];
                        unset($_SESSION['Password_erro']);
                    } ?></h5>
                <input type="text" name="EditPassword" placeholder="Password" value="<?php echo $row['password'] ?>">
                <select name="EditAuthor">
                    <option value="Author">Author</option>
                    <option value="Admin">Admin</option>
                </select>
                <div class="form__control">
                    <label for="avatar">Edit Avatar</label>
                    <input type="file" id="avatar" name="arquivo" value="<?php if(isset($row['avatar;'])){
                        echo $row['avatar'];
                    } ?>">
                </div>

                <button class="btn" name="btn_EditUser" value="Edit">Edit User</button>

            </form>
        </div>

    </section>

    <?php 
                    }

                    else{

                        header("Location: manage-users.php");
                        exit;

                    }
    ?>

    <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="" class="category__button">Art</a>
            <a href="" class="category__button">Wild Life</a>
            <a href="" class="category__button">Travel</a>
            <a href="" class="category__button">Sciene & Technology</a>
            <a href="" class="category__button">Food</a>
            <a href="" class="category__button">Music</a>
        </div>
    </section>

    <?php require('footer.php');?>

</body>

</html>

<?php } else{

header("Location: manage-users.php");
exit;
   
}
}else{
    header("Location: manage-users.php");
    exit;
}
?>