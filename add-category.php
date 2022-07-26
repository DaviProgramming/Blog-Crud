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

<footer>
    <div class="footer__socials">
        <a href="https://www.instagram.com/asdavidoliveira/" target="_blank" rel="noopener noreferrer"
            class=""><i class="uil uil-instagram"></i></a>
        <a href="http://" target="_blank" rel="noopener noreferrer" class=""><i class="uil uil-github"></i></a>
        <a href="http://" target="_blank" rel="noopener noreferrer" class=""><i class="uil uil-linkedin"></i></a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Art</a></li>
                <li><a href="">Wild Life</a></li>
                <li><a href="">Travel</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Science & Technology</a></li>
                <li><a href="">Food</a></li>

            </ul>
        </article>

        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Online Support</a></li>
                <li><a href="">Call Numbers</a></li>
                <li><a href="">Emails</a></li>
                <li><a href="">Social Suport</a></li>
                <li><a href="">Location</a></li>
               

            </ul>
        </article>

        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="">Safety</a></li>
                <li><a href="">Repair</a></li>
                <li><a href="">Recent</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Categories</a></li>
            </ul>
        </article>

        <article>
            <h4>PermaLink</h4>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </article>
        
    </div>
    
    
    <div class="footer__copyright">
        <small>COPYRIGHT BY DAVID OLIVEIRA@</small>
    </div>
</footer>

</body>

</html>