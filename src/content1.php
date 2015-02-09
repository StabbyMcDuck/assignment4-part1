<html>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: reginaimhoff
 * Date: 2/8/15
 * Time: 2:30 PM
 */


// must call session_start to setup $_SESSION
session_start();
if(isset($_POST['username'])){
    $username = $_POST['username'];
}else{
    $username = null;
}

if((!isset($_SESSION['count'])) and (($username === null) or (empty($username)))){

    ?>

    A username must be entered. Click <a href = "login.php">here</a> to return to the login screen.

<?php
}else{
    // see http://php.net/manual/en/session.examples.basic.php
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    } else {
        $_SESSION['count']++;
    }

    ?>
    Hello
    <?php echo $username ?>
    you have visited this page
    <?php echo $_SESSION['count'] ?>
    times before. Click
    <a href = "login.php">
        here
    </a>
    to logout.<br>

    <a href="content2.php">Content 2</a><br>
    <?php
}

?>

</body>
</html>