<?php

require_once('connect.php');

?>
<!DOCTYPE php>
<php lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User - ValoCRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

</head>

<body>

    <nav>
        <div class="container nav__container">
            <a href="index.php" class="nav__logo">ValoCRUD</a>
            <ul class="nav__items">
                
                <?php if (
                    $_SESSION['connect'] == 0
                ) { ?>
                    <li><a href="signin.php">Sign in</a></li>
                <?php } else {
                ?>
                    <li class="nav__profile">
                        <div class="avatar">
                            <img src="./images/avatar1.jpg" alt="">
                        </div>
                        <ul>
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php
                }
                ?>
            </ul>
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>


    <section class="form__section">
        <div class="container form__section-container">
            <h2>Sign Up</h2>
            <form action="sendform.php" class="form__sing" method="POST">
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
                <h5><?php if (!empty($_SESSION['Fname_erro'])) {
                        echo $_SESSION['Fname_erro'];
                        unset($_SESSION['Fname_erro']);
                    } ?></h5>
                <input type="text" placeholder="First Name" name="singupFname" value="<?php
                                                                                        if (isset($_SESSION['SFname'])) {
                                                                                            echo $_SESSION['SFname'];
                                                                                            unset($_SESSION['SFname']);
                                                                                        }
                                                                                        ?>">
                <h5><?php if (!empty($_SESSION['Lname_erro'])) {
                        echo $_SESSION['Lname_erro'];
                        unset($_SESSION['Lname_erro']);
                    } ?></h5>
                <input type="text" placeholder="Last Name " name="singup_Lname" value="<?php if (isset($_SESSION['SLname'])) {
                                                                                            echo $_SESSION['SLname'];
                                                                                            unset($_SESSION['SLname']);
                                                                                        } ?>">

                <h5><?php if (!empty($_SESSION['Uname_erro'])) {
                        echo $_SESSION['Uname_erro'];
                        unset($_SESSION['Uname_erro']);
                    } ?></h5>
                <input type="text" placeholder="Username" name="singup_Username" value="<?php if (isset($_SESSION['SUname'])) {
                                                                                            echo $_SESSION['SUname'];
                                                                                            unset($_SESSION['SUname']);
                                                                                        }
                                                                                        ?>">


                <input type="text" placeholder="Email" name="singup_Email" required>

                <h5><?php if (!empty($_SESSION['Password_erro'])) {
                        echo $_SESSION['Password_erro'];
                        unset($_SESSION['Password_erro']);
                    } ?></h5>
                <input type="text" placeholder="Create Password" name="singup_password" value="<?php if (isset($_SESSION['SignUpPassword'])) {
                                                                                                    echo $_SESSION['SignUpPassword'];
                                                                                                    unset($_SESSION['SignUpPassword']);
                                                                                                }
                                                                                                ?>">

                <h5><?php if (!empty($_SESSION['Confirm_CPassword_erro'])) {
                        echo $_SESSION['Confirm_CPassword_erro'];
                        unset($_SESSION['Confirm_CPassword_erro']);
                    } ?></h5>
                <input type="text" placeholder="Confirm Passowrd" name="singup_ConfirmPassowrd" value="<?php if (isset($_SESSION['SignUpConfirmPassword'])) {
                                                                                                            echo $_SESSION['SignUpConfirmPassword'];
                                                                                                            unset($_SESSION['SignUpConfirmPassword']);
                                                                                                        }
                                                                                                        ?>">
                <div class="form__control">
                    <label for="avatar" class="avatar"></label>
                    <input type="file" id="avatar">
                </div>
                <select name="choice" id="choice">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <button type="submit" class="btn" name="btn_Add-user" value="envio">Sign Up</button>
                <small>Already Have an account? <a href="signin.php">Sign in</a></small>


            </form>
        </div>

    </section>

</body>

</php>