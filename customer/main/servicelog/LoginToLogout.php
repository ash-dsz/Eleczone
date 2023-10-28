<?php
if(isset($_SESSION['loggedin'])&&($_SESSION['loggedin']=="true")){
?>

<a href="logout.php">Logout</a>

<?php
} else{
    ?>
    <a class="dropdown-item" href="test2.php">login</a>

<?php
}
?>