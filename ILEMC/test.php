<html>

<?php
session_start();
if(isset($_SESSION['iflogin']) && $_SESSION['iflogin'])
{
    echo "当前登录用户是: ".$_SESSION['userid'];
}
?>
</html>
