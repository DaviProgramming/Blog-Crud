<?php  ;
include('connect.php');?>

<nav>
        <div class="container nav__container">
            <a href="index.php" class="nav__logo">ValoCRUD</a>
            <ul class="nav__items">
                
                <li><a href="blog.php">Blog</a></li>
              
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contato</a></li>
                <?php  if(isset($_SESSION['disconnect'])
                ){?>
                <li><a href="signin.php">Sign in</a></li>
                <?php } 
                
                else if(isset($_SESSION['connect'])
                ){
                ?>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/Perfil_images/Avatar_id_<?php echo $_SESSION['id_login']; ?>/<?php echo $_SESSION['avatar'];?>" alt="">
                        
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