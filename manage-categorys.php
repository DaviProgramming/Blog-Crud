<?php 
require_once('connect.php');

$sql = "SELECT * FROM posts";

$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categorys - ValoCRUD</title>
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

    <section class="dashboard">
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left"></i></button>
            <aside>
                <ul>
                    <li>
                        <a href="add-post.php"><i class="uil uil-postcard"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>

                    <li>
                        <a href="dashboard.php"><i class="uil uil-edit"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li>

                    <li>
                        <a href="add-user.php"><i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>
                        </a>

                    </li>

                    <li>
                        <a href="manage-users.php"><i class="uil uil-users-alt"></i>
                            <h5>Manage User</h5>
                        </a>

                    </li>

                    <li>
                        <a href="add-category.php"><i class="uil uil-list-ul"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>

                    <li>
                        <a href="manage-categorys.php" class="active"><i class="uil uil-list-ui-alt"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>

                </ul>
            </aside>
            <main>
                <h2>Manage Categories</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        if($result->num_rows >0){
                            while($row = $result->fetch_assoc()){
                        ?>
                        <tr?>
                            <td>
                                <?php echo $row['category']; ?>
                            </td>
                            <td><a href="edit-category.php?id=<?php echo $row['id'] ?>" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php?id=<?php echo $row['id']?>" class="btn sm delete">Delete</a></td>
                            </tr>
                        <?php }
                        } ?>


                    </tbody>
                </table>
            </main>
        </div>
    </section>

    <footer>
        <div class="footer__socials">
            <a href="https://www.instagram.com/asdavidoliveira/" target="_blank" rel="noopener noreferrer" class=""><i
                    class="uil uil-instagram"></i></a>
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

</html>