<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ValoCRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

</head>

<body>

    <?php require_once('navbar.php'); ?>

    <section class="dashboard">
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left"></i></button>
            <aside>
                <ul>
                    <li>
                        <a href="add-post.html"><i class="uil uil-postcard"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>

                    <li>
                        <a href="dashboard.html" class="active"><i class="uil uil-edit"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li>

                    <li>
                        <a href="signup.php"><i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>
                        </a>

                    </li>

                    <li>
                        <a href="manage-users.php"><i class="uil uil-users-alt"></i>
                            <h5>Manage User</h5>
                        </a>

                    </li>

                    <li>
                        <a href="add-category.html"><i class="uil uil-list-ul"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>

                    <li>
                        <a href="manage-categorys.html" ><i class="uil uil-list-ui-alt"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>

                </ul>
            </aside>
            <main>
                <h2>Dashboard</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Travel
                            </td>
                            <td>Art</td>
                            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm delete">Delete</a></td>
                        </tr>
                        <tr>
                            <td>
                                Travel
                            </td>
                            <td>Art</td>
                            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm delete">Delete</a></td>
                        </tr>
                        <tr>
                            <td>
                                Travel
                            </td>
                            <td>Art</td>
                            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm delete">Delete</a></td>
                        </tr>
                        <tr>
                            <td>
                                Travel
                            </td>
                            <td>Art</td>
                            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm delete">Delete</a></td>
                        </tr>


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