<?php
    require_once __DIR__. '/classes/DBConnect.php';
    $db = new \classes\DBConnect();

    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit'] == 1){
        $name = trim($_POST['name']);
        $surname = trim($_POST['surname']);
        $age = (int)trim($_POST['age']);
        $email = trim($_POST['email']);

        $db->addUser($name, $surname, $age, $email);
        header('Location:index.php');
    }
?>
<form method="POST">
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="surname" placeholder="Surname"><br>
    <input type="text" name="age" placeholder="Age"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <button type="submit" name="submit" value="1">Send</button>
</form>

<hr>
<a href="index.php">Main | </a>
<a href="addUser.php">Add User | </a>
<a href="showAllUsers.php">Show all users</a>
<a href="deleteUser.php">Delete user</a>

<?php  $db = null; ?>
