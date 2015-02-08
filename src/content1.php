<html>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: reginaimhoff
 * Date: 2/8/15
 * Time: 2:30 PM
 */

$username = $_POST['username'];

if(($username === null) or (empty($username))){
    ?>

    A username must be entered. Click <a href = "login.php">here</a> to return to the login screen.

<?php
}else{
    ?>
    Hello <?php echo $username ?> you have visited this page [n] times before. Click here to logout.

    <?php
}

?>

</body>
</html>