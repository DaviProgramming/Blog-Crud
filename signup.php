<?php

require_once('connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - ValoCRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

</head>

<body>


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


                <input type="text" placeholder="Email" name="singup_Email">

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
                <button type="submit" class="btn" name="btn_signUp" value="envio">Sign Up</button>
                <small>Already Have an account? <a href="signin.html">Sign in</a></small>


            </form>
        </div>

    </section>

</body>

</html>