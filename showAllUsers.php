<?php

require_once __DIR__. '/classes/DBConnect.php';
$db = new \classes\DBConnect();

$users = $db->getAllUsers();
?>
<?php if(!empty($users)):?>
    <?php foreach ($users as $user):?>
        <a href="user.php?id=<?= $user['id']?>">ID = <?= $user['id']?> </a><br>
    <?php endforeach;?>
<?php else:?>
    <p>No users</p>
<?php endif;?>

<hr>
<a href="index.php">Main | </a>
<a href="addUser.php">Add User | </a>
<a href="showAllUsers.php">Show all users</a>
<a href="deleteUser.php">Delete user</a>

<?php  $db = null; ?>