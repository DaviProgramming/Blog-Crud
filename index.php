<?php

require_once('connect.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ValoCRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

</head>

<body >

    <?php require('navbar.php');?>

    <section class="featured" >
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

    <section class="posts index">
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

    <?php require('footer.php');?>
    
<script src="./main.js"></script>
</body>

</html>