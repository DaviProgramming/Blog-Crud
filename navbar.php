<nav>
        <div class="container nav__container">
            <a href="index.php" class="nav__logo">ValoCRUD</a>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contato</a></li>
                <?php  if($_SESSION['connect'] == 0
                ){?>
                <li><a href="signin.html">Sign in</a></li>
                <?php } 
                
                else{
                ?>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
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