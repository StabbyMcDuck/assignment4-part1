<?php
/**
 * User: Regina Imhoff
 * Date: 2/8/15
 * Time: 2:09 PM
 */

session_start();
session_destroy();

?>

<html>
    <form action = "content1.php" method = "POST">
        <label>
            Username
                <input type = "text" name = "username"><br>
        </label>
        <input type = "submit" value = "Login">
    </form>

</html>