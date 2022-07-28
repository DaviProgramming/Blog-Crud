<?php session_start(); ?>
<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category - ValoCRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

</head>
<body>
    
    <?php 
    require('navbar.php');
    ?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Category</h2>
    <?php if(isset($_SESSION['Category_erro']) || isset($_SESSION['CategoryDescription_erro'])){ ?>
    <div class="alert__message error">
        <p>Não foi possivel enviar o cadastro</p>
    </div>
    <?php 
    }
    ?>

<?php if(isset($_SESSION['Confirm_Send'])){ ?>
    <div class="alert__message sucess">
        <p>Enviado com sucesso</p>
    </div>
    <?php 
    unset($_SESSION['Confirm_Send']);
    }
    
    ?>

    <form action="sendform.php" class="form__sing" method="POST">
        <?php if(isset($_SESSION['Category_erro'])){
            echo $_SESSION['Category_erro'];
            unset($_SESSION['Category_erro']);
            }?>
        <input type="text" placeholder="Name of Category" name="add_category_name" id="">
        <?php if(isset($_SESSION['CategoryDescription_erro'] )){
            echo $_SESSION['CategoryDescription_erro'] ;
            unset($_SESSION['CategoryDescription_erro'] );
            }?>
        <textarea name="category_description"  rows="10" placeholder="Description"></textarea>
        <button type="submit" class="btn" name="btn_Add_Category">Add Category</button>
        <small>Don't Have an account? <a href="signup.php">Sign up</a></small>
    </form>
</div>

</section>

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

<?php require('footer.php'); ?>

</body>

</html>