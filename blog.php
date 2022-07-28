<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - ValoCRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

</head>

<body>

<?php require('navbar.php'); ?>

    <section class="search__bar">
        <form action="" class="container search__bar-container">
            <div>
                <i class="uil uil-search"></i>
                <input type="search" name="search" placeholder="search">
            </div>
            <button type="submit" class="btn">Search</button>
        </form>
    </section>

    <section class="posts">
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
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
                    <img src="./images/blog2.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
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
                    <img src="./images/blog2.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
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
                    <img src="./images/blog2.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
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

    <?php require('footer.php'); ?>
    
<script src="./main.js"></script>
</body>

</html>