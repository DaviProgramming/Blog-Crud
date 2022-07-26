<!DOCTYPE php>
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
    
    <nav>
        <div class="container nav__container">
            <a href="index.php" class="nav__logo">ValoCRUD</a>
            <ul class="nav__items">
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contato</a></li>
                <li><a href="signin.php">Sign in</a></li>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Post</h2>
    
    <div class="alert__message sucess">
        <p>This is an error message</p>
    </div>

    <form action="" class="form__sing">
        <input type="text" placeholder="Title" name="name_post" id="">
        
        <select name="" id="">
            <option value="1">Travel</option>
            <option value="1">Art</option>
            <option value="1">Food</option>
            <option value="1">qualquer</option>
            <option value="1">qualquer</option>
            <option value="1">qualquer</option>
        </select>
        <textarea placeholder="Body" rows="10"></textarea>
        <div class="form__control">
            <input type="checkbox" name="" id="is_featured" checked>
            <label for="is_featured" >Featured</label>
        </div>

        <div class="form__control">
            <label for="thumbnail"> Add Thumbnail</label>
            <input type="file" name="" id="thumbnail">
        </div>

        <button type="submit" class="btn">Add Post</button>
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