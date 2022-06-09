<?php

require_once __DIR__. '/classes/DBConnect.php';
$db = new \classes\DBConnect();

$id_user = $_GET['id'];
$user = $db->getUserById($id_user);
?>

<p>Name = <?= $user['name'];?></p>
<p>Surname = <?= $user['surname'];?></p>
<p>Email = <?= $user['email'];?></p>
<p>Age = <?= $user['age'];?></p>


<hr>
<a href="index.php">Main | </a>
<a href="addUser.php"> Add User | </a>
<a href="showAllUsers.php"> Show all users</a>
<a href="deleteUser.php"> Delete user</a>

<?php  $db = null; ?>