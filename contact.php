<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - ValoCRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

</head>

<body>

    <?php require('navbar.php'); ?>

    <section class="empty__page">
        <h1>How can i Help?</h1>
        <form action="" class="form__control">
            <div class="form_sign">
                <input type="text" name="contact_title" id="" placeholder="Name">
                <input type="Email" name="contact_email" placeholder="Email">
            </div>
            <input type="text" placeholder="Title">
           
            <textarea name="body_title" placeholder="Body" rows="10"></textarea>
            <button class="btn sm">Submit</button>
        </form>
        </div>
    </section>

   
    <?php require('footer.php') ?>;

    <script src="./main.js"></script>
</body>

</html>