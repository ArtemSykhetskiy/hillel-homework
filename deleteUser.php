<?php

require_once __DIR__. '/classes/DBConnect.php';
$db = new \classes\DBConnect();

$users = $db->getAllUsers();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usersToDelete = array();

    foreach($_POST['delete_row'] as $selected){
        $usersToDelete[] = $selected;
    }

    $db->deleteUser($usersToDelete);
    header("Location:index.php");
}
?>

<link href="style.css" rel="stylesheet"/>
<table class="iksweb">
    <tbody>
<?php if(!empty($users)):?>
<form method="post">
<?php foreach ($users as $user):?>
    <tr>
        <td> <?= $user['name']?></td>
        <td><input type='checkbox' name='delete_row[]' value="<?= $user['id']?>"></td>
    </tr>
   <br>
<?php endforeach;?>

    </tbody>
</table>
<input type='submit' value='Delete checked users'>
</form>
<?php else:?>
    <p>No users</p>
<?php endif;?>


<hr>
<a href="index.php">Main | </a>
<a href="addUser.php">Add User | </a>
<a href="showAllUsers.php">Show all users</a>
<a href="deleteUser.php">Delete user</a>

<?php  $db = null; ?>