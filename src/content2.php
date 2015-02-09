<?php
/**
 * Created by PhpStorm.
 * User: reginaimhoff
 * Date: 2/8/15
 * Time: 2:30 PM
 */
session_start();


if(!isset($_SESSION['count'])){
    header( 'Location: login.php' ) ;
}else{

?>
<html>
<body>
    <a href="content1.php">Content 1</a>
</body>
</html>
<?php
}

?>