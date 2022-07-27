<?php 
require_once('connect.php');

$sql = "SELECT * FROM users";

$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users - ValoCRUD</title>
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
                        <a href="manage-users.php" class="active"><i class="uil uil-users-alt"></i>
                            <h5>Manage User</h5>
                        </a>

                    </li>

                    <li>
                        <a href="add-category.php"><i class="uil uil-list-ul"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>

                    <li>
                        <a href="manage-categorys.php" class=""><i class="uil uil-list-ui-alt"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>

                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr><th>ID</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if($result->num_rows >0){
                            while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td>
                               <?php echo $row['id'];?>
                            </td>
                            <td><?php echo $row['first_name'];  ?></td>
                            <td><a href="edit-user.php?id=<?php echo $row['id'];?>" class="btn sm">Edit</a></td>
                            <td><a href="delete-user.php?id=<?php echo $row['id'];?>" class="btn sm delete">Delete</a></td>
                            <td><?php  echo $row['author'];?></td>
                        </tr>

                        <?php 
                                }}
                        ?>
                        


                    </tbody>
                </table>
            </main>
        </div>
    
        <?php require_once('footer.php') ?>

    <script src="./main.js"></script>

</body>

</html>