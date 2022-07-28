<?php

require('connect.php');

if(isset($_SESSION['connect']) && isset($_SESSION['Lvl_acess'])){


if(isset($_GET['id'])){

$id = $_GET['id'];

//------------tabela posts-------------------------//

$sql = "SELECT * FROM `posts` WHERE `id` = '$id'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

//------------tabela posts-------------------------//

//------------tabela category---------------------//
$sql_category = "SELECT `name` FROM `category`";

$result_category = $conn->query($sql_category);

//------------tabela category---------------------//



?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post - ValoCRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

</head>

<body>

    <?php require('navbar.php') ?>

    <section class="form__section">
        <div class="container form__section-container">
            <h2>Add Post</h2>
            

            

            <?php if(isset($_SESSION['title_erro'])){
                echo '<h5>' . $_SESSION['title_erro'] . '</h5>';
                unset($_SESSION['title_erro']);
            } ?>

            <form action="sendform.php" class="form__sing" method="POST" enctype="multipart/form-data">
                
                <input type="text" placeholder="Title" name="name_post" id="" value="<?php if (isset($row['title'])) {
                                                                                            echo $row['title'];

                                                                                        } ?>">

                <select name="Choice_category" id="">

                    <?php if ($result_category->num_rows > 0) {
                        while ($row_category = $result_category->fetch_assoc()) {
                    ?>
                            <option value="<?php echo $row_category['name'] ?> "> <?php echo $row_category['name']; ?> </option>
                    <?php
                        }
                    } ?>

                </select>
                <?php if(isset($_SESSION['body_text_erro'])){
                echo '<h5>' . $_SESSION['body_text_erro'] . '</h5>';
                unset($_SESSION['body_text_erro']);
            } ?>
                <textarea placeholder="Body" rows="10" name="Body_text"><?php 
                if(isset($row['textbody'])){
                    echo $row['textbody'];
                }
                 ?>
                </textarea>
                <div class="form__control">
                    <input type="checkbox" name="featured" id="is_featured" checked>
                    <label for="is_featured">Featured</label>
                </div>

                <div class="form__control">
                    <label for="thumbnail"> Add Thumbnail</label>
                    <input type="file" name="arquivo">
                </div>

                <button type="submit" class="btn" name="btn_Edit_post">Edit Post</button>
                <small>Don't Have an account? <a href="signup.php">Sign up</a></small>
            </form>
        </div>

    </section>

    <?php require('footer.php'); ?>

</body>

</html>

<?php } 
}?>