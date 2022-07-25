<?php

require_once('connect.php');

?>


<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ValoCRUD</title>
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
                <?php  if($_SESSION['connect'] == 0
                ){?>
                <li><a href="signin.php">Sign in</a></li>
                <?php } 
                
                else{
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

    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./images/blog1.jpg" alt="">
            </div>
            <div class="post__info">
                <a href="category-posts.php" class="category__button">Wild Life</a>
                <h2 class="post__title"><a href="post.php">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Deserunt fugiat error excepturi asperiores recusandae quidem harum repudiandae. Voluptatum sequi
                        eum, unde porro autem corporis, pariatur voluptate perferendis vel quaerat iusto.</a></h2>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rerum cupiditate fugit labore harum
                    esse eius expedita neque beatae maxime minus quos perferendis amet earum illum saepe non, eum atque!
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./images/avatar2.jpg" alt="">
                    </div>
                    <div class="post__author-info">
                        <h5>By: Jane Doe</h5>
                        <small>June, 10, 2022</small>
                    </div>
                </div>
            </div>
        </div>

        
    </section>

    <section class="posts">
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__tile">
                        <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo numquam
                            deleniti sed aliquam a mollitia libero veniam repellat ab nulla? Quis reiciendis ab
                            excepturi dolor at temporibus! Minus, deserunt amet.</a>
                    </h3>

                    <p class="post__body">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptate, distinctio
                        consectetur sint aliquam et praesentium expedita quas, eaque veritatis eius? Natus illo, qui cum
                        a alias assumenda unde molestiae.
                    </p>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg" alt="">
                        </div>

                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13,2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog7.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__tile">
                        <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo numquam
                            deleniti sed aliquam a mollitia libero veniam repellat ab nulla? Quis reiciendis ab
                            excepturi dolor at temporibus! Minus, deserunt amet.</a>
                    </h3>

                    <p class="post__body">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptate, distinctio
                        consectetur sint aliquam et praesentium expedita quas, eaque veritatis eius? Natus illo, qui cum
                        a alias assumenda unde molestiae.
                    </p>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg" alt="">
                        </div>

                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13,2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog12.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__tile">
                        <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo numquam
                            deleniti sed aliquam a mollitia libero veniam repellat ab nulla? Quis reiciendis ab
                            excepturi dolor at temporibus! Minus, deserunt amet.</a>
                    </h3>

                    <p class="post__body">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptate, distinctio
                        consectetur sint aliquam et praesentium expedita quas, eaque veritatis eius? Natus illo, qui cum
                        a alias assumenda unde molestiae.
                    </p>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg" alt="">
                        </div>

                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13,2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog5.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__tile">
                        <a href="post.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo numquam
                            deleniti sed aliquam a mollitia libero veniam repellat ab nulla? Quis reiciendis ab
                            excepturi dolor at temporibus! Minus, deserunt amet.</a>
                    </h3>

                    <p class="post__body">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptate, distinctio
                        consectetur sint aliquam et praesentium expedita quas, eaque veritatis eius? Natus illo, qui cum
                        a alias assumenda unde molestiae.
                    </p>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg" alt="">
                        </div>

                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13,2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
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
    
<script src="./main.js"></script>
</body>

</php>