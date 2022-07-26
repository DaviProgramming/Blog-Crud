<?php 




$sql = "SELECT `category` FROM `posts` LIMIT 5";

$result_category = $conn->query($sql);

?>

<footer>
        <div class="footer__socials">
            <a href="https://www.instagram.com/asdavidoliveira/" target="_blank" rel="noopener noreferrer" class=""><i class="uil uil-instagram"></i></a>
            <a href="http://" target="_blank" rel="noopener noreferrer" class=""><i class="uil uil-github"></i></a>
            <a href="http://" target="_blank" rel="noopener noreferrer" class=""><i class="uil uil-linkedin"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    
                <?php if ($result_category->num_rows > 0) {
                        while ($row = $result_category->fetch_assoc()) {
                    ?>
                            <li><?php echo $row['category']; ?></li>
                    <?php
                        }
                    } ?>

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