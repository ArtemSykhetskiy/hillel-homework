<?php
    require_once __DIR__. '/classes/DBConnect.php';
    $db = new \classes\DBConnect();
    $isTable = $db->tableExists('user');

    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['newTable'] == 1){
        $db->createTable('user');
        header('Location:index.php');
    }
?>
<?php if($isTable === false):?>
<form method="POST">
    <button type="submit" value="1" name="newTable">Create table 'Users'</button>
</form>
<?php else:?>
<p>Table 'Users' is already exists</p>
<?php endif;?>

<hr>
<a href="index.php">Main | </a>
<a href="addUser.php">Add User | </a>
<a href="showAllUsers.php">Show all users</a>
<a href="deleteUser.php">Delete user</a>

<?php  $db = null; ?>